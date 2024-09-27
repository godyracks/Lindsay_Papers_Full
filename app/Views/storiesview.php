<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>
<!-- Particles Background -->
<div id="particles-js"></div>

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
        <textarea class="textarea" name="review" rows="6" placeholder="Type to Share Your Review..." required></textarea>
        
        <!-- Submit Button -->
        <button type="submit" class="submit-btn">Submit</button>
    </form>
</div>

<style>
 

    #particles-js {
        position: fixed; /* Fixed to cover the entire viewport */
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 0; /* Send to back */
        pointer-events: none; /* Allow clicks to pass through */
    }

    .form-container {
        position: relative; /* Position relative for absolute children */
        max-width: 500px;
        margin: 20px auto; /* Margin to allow space for scrolling */
        padding: 20px;
        background: #E1EBEE; /* Added background for better visibility */
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        text-align: center;
        z-index: 1; /* Bring to front */
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
        color: #6E6E6E;
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
        border-radius: 18px;
    }

    .submit-btn {
        background: #00A8CC;
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
    @media (max-width: 768px) {
        .form-container {
        position: relative; /* Position relative for absolute children */
        max-width: 320px;
        margin: 20px auto; /* Margin to allow space for scrolling */
        padding: 20px;
        background: #E1EBEE; /* Added background for better visibility */
        border-radius: 18px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        text-align: center;
        z-index: 1; /* Bring to front */
    }

    .user-info {
        margin-bottom: 60px;
    }
    .user-info h2{
       font-size: 20px;
       padding-bottom: 10px;
    }
    .user-info p{
        font-size: 12px;
        padding-bottom: 20px;
    }


    .profile-image {
        border-radius: 50%;
        width: 100px;
        height: 100px;
        border: 3px solid #007bff;
        margin-bottom: 10px;
    }

    h1 {
        font-size: 18px;
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
        color: #6E6E6E;
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
        border-radius: 18px;
    }

    .submit-btn {
        background: #00A8CC;
        color: #fff;
        border: none;
        border-radius: 28px;
        height: 50px;
        width: 120px;
        padding: 15px 30px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s;
         margin-top: 30px;
    }

    .submit-btn:hover {
        background: #0056b3;
    }
    }
</style>

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 100,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#00A8CC" // Blue color for particles
            },
            "shape": {
                "type": "circle", // Use circle shape for round particles
                "stroke": {
                    "width": 0,
                    "color": "#00A8CC"
                }
            },
            "opacity": {
                "value": 0.1,
                "random": true,
                "anim": {
                    "enable": true,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 10,
                "random": true,
                "anim": {
                    "enable": true,
                    "speed": 20,
                    "size_min": 5,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": false, // Disable linking lines
            },
            "move": {
                "enable": true,
                "speed": 3,
                "direction": "none",
                "random": true,
                "straight": false,
                "out_mode": "out",
                "bounce": false
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 2,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 1
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
</script>

<?= $this->endSection() ?>
