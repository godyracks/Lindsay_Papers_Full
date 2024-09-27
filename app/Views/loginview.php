<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>
<style>
    /* Container styles */
    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: calc(100vh - 200px); /* Center vertically */
   background-color:  #c8c8c8;;
        padding: 30px;
      
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
        margin: 0 auto;
        text-align: center; /* Center text within the container */
        position: relative; /* Position relative for absolute children */
    }

    /* Particle background */
    #particles-js {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 0; /* Send to back */
    pointer-events: none; /* Allow clicks to pass through */
    }

    /* Heading style */
    .login-header {
        margin-bottom: 20px;
        font-size: 24px;
        font-weight: bold;
        color: #333; /* Dark text color */
        z-index: 1; /* Bring to front */
    }

    /* Message style */
    .login-message {
        margin-bottom: 30px;
        font-size: 16px;
        color: #555; /* Slightly lighter text color */
        z-index: 1; /* Bring to front */
    }

    /* Button styles */
    .google-signin-btn {
        display: flex;
        align-items: center;
        text-decoration: none;
        background-color: rgba(255, 172, 12, 0.9);/* Google yellow */
        color: white;
        padding: 15px 30px; /* Adjusted padding */
        border-radius: 5px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        transition: background-color 0.3s, box-shadow 0.3s;
        font-size: 16px; /* Increased font size */
        z-index: 2002; /* Bring to front */
    }

    .google-signin-btn:hover {
        background-color: #d9d9d9; /* Google blue on hover */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }

    .google-signin-btn img {
        height: 24px; /* Slightly larger icon */
        width: 24px; /* Slightly larger icon */
        margin-right: 10px;
    }
</style>

<div class="login-container">
    <div id="particles-js"></div> <!-- Moved particle container here -->

    <div>
        <h1 class="login-header">Share Your Experience!</h1>
        <p class="login-message">To drop a review, please continue with your Google account.</p>
        <a href="<?= base_url('/google-login') ?>" class="google-signin-btn">
            <img src="<?= base_url('/public/images/icons/google_ic.png') ?>" alt="Google Icon">
            Continue with Google
        </a>
    </div>
</div>

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
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 5,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 6,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
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
                    "opacity": 8,
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
