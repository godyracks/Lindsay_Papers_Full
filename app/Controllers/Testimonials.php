<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TestimonialsModel;

class Testimonials extends Controller
{
    public function index()
    {
        $session = session();
        
        // Log the session data for debugging
        log_message('info', 'Session Data: ' . print_r($session->get(), true));

        // Extract session variables explicitly
        $isLoggedIn = $session->get('isLoggedIn');
        $google_id = $session->get('google_id');
        $username = $session->get('username');

        // Log individual session variables
        log_message('info', "isLoggedIn: {$isLoggedIn}, google_id: {$google_id}, username: {$username}");

        // Check if user is logged in by verifying 'isLoggedIn', 'google_id', and 'username'
        if ($isLoggedIn && $google_id && $username) {
            // User is logged in, render the testimonials view
            log_message('info', 'User is logged in. Displaying testimonials view.');
            return view('storiesview');
        } else {
            // Log exactly what went wrong
            log_message('error', 'User is not logged in. Missing one or more of isLoggedIn, google_id, or username.');
            
            // User is not logged in, redirect to /auth
            return redirect()->to('/auth');
        }
    }

    public function submitTestimonial()
    {
        $session = session();

        // Extract session variables explicitly
        $isLoggedIn = $session->get('isLoggedIn');
        $google_id = $session->get('google_id');
        $username = $session->get('username');

        // Log session data for debugging
        log_message('info', 'Submit Testimonial - Session Data: ' . print_r($session->get(), true));

        // Check if user is logged in
        if (!$isLoggedIn || !$google_id || !$username) {
            log_message('error', 'User is not logged in or missing session data.');
            return redirect()->to('/auth'); // Redirect to login if not logged in
        }

        $model = new TestimonialsModel();

        // Prepare data for insertion
        $data = [
            'user_id' => $google_id,
            'username' => $username,
            'stars' => $this->request->getPost('stars'),
            'review' => $this->request->getPost('review'),
        ];

        // Log the data being inserted
        log_message('info', 'Testimonial Data: ' . print_r($data, true));

        // Insert data into the database
        if ($model->insert($data)) {
            log_message('info', 'Testimonial successfully inserted.');
            return redirect()->to('/stories')->with('success', 'Your review has been submitted successfully.');
        } else {
            // Log any database errors
            $errors = $model->errors();
            log_message('error', 'Insert Error: ' . print_r($errors, true));
            return redirect()->back()->with('error', 'Unable to submit your review. Please try again.');
        }
    }
}
