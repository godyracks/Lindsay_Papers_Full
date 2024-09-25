<!-- Reviews -->
<div class="reviews" id="stories">
    <div class="reviews-header">
        <h2>Our Customer Stories</h2>
    </div>

    <div class="reviews-container">
        <div class="left-section">
            <p>You too can share your story and your experience about our services</p>
            <button class="share-btn">Share Now</button>
            <div class="review-arrows">
                <div class="arrow left-arrow">
                    <img src="<?= base_url('public/images/icons/back.png')?>" alt="back_arrow"/>
                </div>
                <div class="arrow right-arrow">
                    <img src="<?= base_url('public/images/icons/foward.png')?>" alt="foward_arrow"/>
                </div>
            </div>
        </div>

        <div class="right-section">
            <div class="carousel">
                <div class="carousel-track">
                    <?php foreach ($testimonials as $testimonial): ?>
                        <div class="review-card">
                            <img src="<?= $testimonial['profile_image'] ?? base_url('public/images/default-profile.png') ?>" alt="Reviewer Image">
                            <h3><?= esc($testimonial['username']) ?></h3>
                            <p class="ratings"><?= str_repeat('★', $testimonial['stars']) . str_repeat('☆', 5 - $testimonial['stars']) ?></p>
                            <p><?= esc($testimonial['review']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="carousel-dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div>
</div>
<!-- Reviews End -->
