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

            $googleId = $userInfo['id'];
            $email = $userInfo['email'];
            $username = $userInfo['name'];
            $profileImage = $userInfo['picture'];

            // Check if user already exists
            $userModel = new UserModel();
            $existingUser = $userModel->where('google_id', $googleId)->orWhere('email', $email)->first();

            $session = session();
            if ($existingUser) {
                // User exists, log them in
                $session->set('isLoggedIn', true);
                $session->set('userData', $existingUser);
                $session->set('user_id', $existingUser['id']); // Ensure user_id is set
                $session->set('google_id', $existingUser['google_id']); // Store google_id in session
                $session->set('profile_image', $existingUser['profile_image']); // Set profile image
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
            }

            // Redirect to profile after successful login
            return redirect()->to('/stories');
        }

        return redirect()->to('/');
    }
}