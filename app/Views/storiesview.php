<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>
<div class="form-container">
    <!-- Display user profile image and name -->
    <div class="user-info">
        <img src="<?= esc($profile_image) ?>" alt="Profile Image" class="profile-image">
        <h2>Hello, <?= esc($username) ?>!</h2>
        <p>Share your Story with Lindsay Papers</p>
    </div>

    <h1>Share Your Experience</h1>
    <form action="<?= base_url('/submit-story') ?>" method="post">
        <!-- Star Rating -->
        <div class="stars">
            <input type="radio" id="star5" name="stars" value="5">
            <label for="star5" title="5 stars"><i class="fas fa-star"></i></label>
            
            <input type="radio" id="star4" name="stars" value="4">
            <label for="star4" title="4 stars"><i class="fas fa-star"></i></label>
            
            <input type="radio" id="star3" name="stars" value="3">
            <label for="star3" title="3 stars"><i class="fas fa-star"></i></label>
            
            <input type="radio" id="star2" name="stars" value="2">
            <label for="star2" title="2 stars"><i class="fas fa-star"></i></label>
            
            <input type="radio" id="star1" name="stars" value="1">
            <label for="star1" title="1 star"><i class="fas fa-star"></i></label>
        </div>

        <!-- Review Text Area -->
        <textarea class="textarea" name="review" rows="6" placeholder="Write your story or review here..." required></textarea>
        
        <!-- Submit Button -->
        <button type="submit" class="submit-btn">Submit</button>
    </form>
</div>

<style>
    body {
        background: #f4f6f8;
        font-family: 'Roboto', sans-serif;
        color: #333;
    }

    .form-container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .user-info {
        margin-bottom: 30px;
    }

    .profile-image {
        border-radius: 50%;
        width: 100px;
        height: 100px;
        border: 3px solid #007bff;
        margin-bottom: 10px;
    }

    h1 {
        font-size: 24px;
        margin-bottom: 15px;
        color: #007bff;
    }

    .stars {
        margin-bottom: 20px;
    }

    .stars input {
        display: none;
    }

    .stars label {
        color: #ddd;
        font-size: 24px;
        cursor: pointer;
    }

    .stars input:checked ~ label {
        color: #f39c12;
    }

    .stars label:hover,
    .stars label:hover ~ label {
        color: #f39c12;
    }

    .textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        resize: none;
        font-size: 16px;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .textarea:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        outline: none;
    }

    .submit-btn {
        background: #007bff;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .submit-btn:hover {
        background: #0056b3;
    }
</style>

<?= $this->endSection() ?>
