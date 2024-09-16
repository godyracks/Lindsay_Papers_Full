<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>
<?= $this->include('partials/_fees') ?>
<?= $this->include('partials/_banner') ?>
<?= $this->include('partials/_reviews') ?>
<?= $this->include('partials/_get-quote') ?>
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

<?= $this->endSection() ?>