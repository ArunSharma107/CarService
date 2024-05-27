<!-- bootstrap 5 bundle with popper -->
<script src="<?= base_url('public/assets/js/bootstrap.bundle.min.js'); ?> "></script>
<!-- jQurty file -->
<script src="<?= base_url('public/assets/js/jquery.min.js'); ?>"></script>
<!-- swiper file -->
<script src="<?= base_url('public/assets/js/swiper-bundle.min.js'); ?>"></script>
<!-- custom javascript file -->
<script src="<?= base_url('public/assets/js/frontView.js'); ?> "></script>
<!-- google recaptcha -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- using codeigniter renderSection function to write custom scripts  -->
<?=  $this->renderSection('scripts') ?>


</body>
</html>