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
<!-- Video Modal -->
<div id="videoModal" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <video id="videoPlayer" controls>
            <source src="path-to-your-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>
<script>
    document.getElementById('btn-play').onclick = function() {
    // Show the modal
    document.getElementById('videoModal').style.display = 'block';
    
    // Play the video
    var video = document.getElementById('videoPlayer');
    video.play();
};

// Close the modal when clicking on the close button
document.querySelector('.vid-close-btn').onclick = function() {
    closeModal();
};

// Close the modal when clicking outside of the modal content
window.onclick = function(event) {
    if (event.target === document.getElementById('videoModal')) {
        closeModal();
    }
};

function closeModal() {
    // Hide the modal
    document.getElementById('videoModal').style.display = 'none';
    
    // Pause the video
    var video = document.getElementById('videoPlayer');
    video.pause();
    video.currentTime = 0; // Reset video to the start
}

</script>
<!-- hero end -->