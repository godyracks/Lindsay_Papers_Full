<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>
<div class="form-container">
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
<?= $this->endSection() ?>