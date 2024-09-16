<section class="services-intro">
        <h2>Lindsay Papers Services</h2>
        <p>At Lindsay Papers, we prioritize each student's unique needs, offering affordable options to buy essays online. With years of successful operation and thousands of completed projects globally, we are committed to delivering on time, every time.</p>
        <p>We take pride in our flawless track record for meeting deadlines!</p>
    </section>
    
     <section class="services-page">
        <div class="services-section">
        <!-- Upper Part -->
        <div class="upper-part">
          <div class="left-image">
            <img src="<?= base_url('public/images/seriousman.png')?>" alt="Person Studying" />
            <div class="image-caption">
              <p><span class="bold-text">5,000+</span><br> Students helped beat deadlines</p>
            </div>
          </div>
      
          <div class="upper-services">
            <div class="service-item">
               
                    <div class="icon-container">
                    <span class="service-icon"><img src="<?= base_url('public/./images/icons/research.png') ?>" /></span>
                </div>
              <h3>Research Assistance</h3>
              <p>Whether you're struggling to find credible sources or need help organizing your findings...</p>
            </div>
            <div class="service-item">
                <div class="icon-container">
                <span class="service-icon"><img src="<?= base_url('public/images/icons/writing.png') ?>" /></span>
            </div>
              <h3>Academic Writing Support</h3>
              <p>Get assistance with writing, editing, and structuring your academic work...</p>
            </div>
            <div class="service-item">
            
                    <div class="icon-container">
                    <span class="service-icon"><img src="<?= base_url('public/images/icons/exam.png') ?>" /></span>
                </div>
              <h3>Proctored Exam</h3>
              <p>Ensure your online proctored exams are conducted smoothly with expert guidance...</p>
            </div>
            <div class="service-item">
              
                    <div class="icon-container">
                    <span class="service-icon"><img src="<?= base_url('public/images/icons/thesis.png') ?>" /></span>
                </div>
              <h3>Thesis Writing</h3>
              <p>Need help organizing your thesis findings? Get assistance with structure and research...</p>
            </div>
          </div>
        </div>
      
        <!-- Lower Part -->
        <div class="lower-part">
          <div class="service-item">
         
                <div class="icon-container">
                <span class="service-icon"><img src="<?= base_url('public/./images/icons/research.png')?>" /></span>
            </div>
            <h3>Dissertation Writing</h3>
            <p>Struggling with your dissertation? Get expert help organizing your work...</p>
          </div>
          <div class="service-item">
         
                <div class="icon-container">
                <span class="service-icon"><img src="<?= base_url('public/./images/icons/writing.png') ?>" /></span>
            </div>
            <h3>Article Writing</h3>
            <p>Expert assistance with writing and editing academic and research articles...</p>
          </div>
          <div class="service-item">
         
                <div class="icon-container">
                <span class="service-icon"><img src="<?= base_url('public/images/icons/project.png')?>" /></span>
            </div>
            <h3>Project Writing</h3>
            <p>Get help planning and writing detailed academic projects...</p>
          </div>
          <div class="service-item">
         
                <div class="icon-container">
                <span class="service-icon"><img src="<?= base_url('public/images/icons/quiz.png') ?>" /></span>
            </div>
            <h3>Quiz Assignments</h3>
            <p>Guidance on preparing and solving academic quizzes...</p>
          </div>
          <div class="service-item">
           
                <div class="icon-container">
                <span class="service-icon"><img src="<?= base_url('public/images/icons/content.png') ?>" /></span>
            </div>
            <h3>Content Writing</h3>
            <p>Assistance with crafting quality content for various academic needs...</p>
          </div>
        </div>
        </div>
      </section>
      <script>
         document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.navbar');
    const sticky = navbar.offsetTop;

    function checkSticky() {
        if (window.scrollY > sticky) {
            navbar.classList.add('sticky');
        } else {
            navbar.classList.remove('sticky');
        }
    }

    window.addEventListener('scroll', checkSticky);
});
      </script>