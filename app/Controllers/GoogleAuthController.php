<?php
namespace App\Controllers;

use App\Libraries\GoogleApi;
use App\Models\UserModel;
use CodeIgniter\Controller;

class GoogleAuthController extends Controller
{
    protected $googleApi;

    public function __construct()
    {
        $this->googleApi = new GoogleApi();
    }

    public function login()
    {
        return redirect()->to($this->googleApi->getLoginUrl());
    }

    public function callback()
    {
        $code = $this->request->getGet('code');

        if ($code) {
            $token = $this->googleApi->authenticate($code);
            $userInfo = $this->googleApi->getUserInfo();

            // Log the userInfo to check if it contains the expected data
            log_message('info', 'Google User Info: ' . print_r($userInfo, true));

            $googleId = $userInfo['id'] ?? null;
            $email = $userInfo['email'] ?? null;
            $username = $userInfo['name'] ?? null;  // Check if 'name' is available
            $profileImage = $userInfo['picture'] ?? null;

            // Log the variables for debugging
            log_message('info', "GoogleID: {$googleId}, Email: {$email}, Username: {$username}, ProfileImage: {$profileImage}");

            // Check if we have all required data
            if (!$googleId || !$email || !$username) {
                log_message('error', 'Missing Google user data.');
                return redirect()->to('/auth')->with('error', 'Unable to log in with Google. Missing user data.');
            }

            // Check if user already exists
            $userModel = new UserModel();
            $existingUser = $userModel->where('google_id', $googleId)->orWhere('email', $email)->first();

            $session = session();
            if ($existingUser) {
                // Log user found
                log_message('info', 'User exists. Logging in.');
                
                // User exists, log them in
                $session->set('isLoggedIn', true);
                $session->set('userData', $existingUser);
                $session->set('user_id', $existingUser['id']); // Ensure user_id is set
                $session->set('google_id', $existingUser['google_id']); // Store google_id in session
                $session->set('profile_image', $existingUser['profile_image']); // Set profile image
                $session->set('username', $existingUser['username']); // Set username in session

            } else {
                // User does not exist, create a new user
                $userData = [
                    'username' => $username,
                    'email' => $email,
                    'google_id' => $googleId,
                    'profile_image' => $profileImage,
                    'is_email_verified' => true // Assuming Google authenticated users are verified
                ];
                $userModel->save($userData);

                // Log the new user in
                $newUser = $userModel->where('google_id', $googleId)->first();
                $session->set('isLoggedIn', true);
                $session->set('userData', $newUser);
                $session->set('user_id', $newUser['id']); // Ensure user_id is set
                $session->set('google_id', $newUser['google_id']); // Store google_id in session
                $session->set('profile_image', $newUser['profile_image']); // Set profile image
                $session->set('username', $newUser['username']); // Set username in session
            }

            // Redirect to profile after successful login
            return redirect()->to('/stories');
        }

        return redirect()->to('/');
    }
}
