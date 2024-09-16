<!-- hero start -->
<div class="hero" style="background-image: url('<?= base_url('public/images/lines.png') ?>');
    width: 100%;
    background-size: cover; /* Makes the image cover the entire area */
    background-position: center; /* Ensures the image is centered */
    background-repeat: no-repeat; /* Prevents the image from repeating */
    height: 70vh;">
    

    <!-- Single Slide HTML -->
    <div class="slide active">
        <div class="hero-content">
            <img class="hero-image" id="slide-image" src="" alt="Hero Image">
            <div class="text-content">
                <!-- Follow Us Section -->
                <div class="follow-us">
                    <div class="social-icons">
                        <a href="https://facebook.com" target="_blank"><img src="<?= base_url('public/images/icons/fb.png') ?>"/></a>
                        <a href="https://instagram.com" target="_blank"><img src="<?= base_url('public/images/icons/ig.png') ?>"/></a>
                        <a href="https://x.com" target="_blank"><img src="<?= base_url('public/images/icons/x.png') ?>"/></a>
                    </div>
                    <div class="follow-line"></div>
                    <div class="follow-text">Follow Us</div>
                </div>

                <h1 id="slide-title"></h1>
                <p id="slide-description"></p>
                <div class="buttons">
                    <button class="btn" id="btn-quote">Get Quote</button>
                    <button class="btn btn-play" id="btn-play">
                        <i class="fas fa-play-circle"></i> Watch Video
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="arrows">
        <div id="prev"><img src="<?= base_url('public/images/icons/back.png') ?>"  alt="back_arrow"/></div>
        <div id="next"><img src="<?= base_url('public/images/icons/foward.png') ?>"  alt="foward_arrow"/></div>
       
    </div>
</div>
<!-- hero end -->