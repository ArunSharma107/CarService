<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>

    <!-- custom css file -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/frontstyle.css'); ?>">
    <!-- bootstrap 5 css file -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap.min.css'); ?>">
    <!-- fontawesome css file -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/fontawesome.min.css'); ?>"> 
</head>

<body>

<!-- CI function to renderSection form -->
<?= $this->renderSection('form')?>


<!-- bootstrap 5 bundle with popper -->
<script src="<?= base_url('public/assets/js/bootstrap.bundle.min.js'); ?> "></script>
<!-- jQurty file -->
<script src="<?= base_url('public/assets/js/jquery.min.js'); ?>"></script>
<!-- google recaptcha -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- using codeigniter renderSection function to write custom scripts  -->
<?=  $this->renderSection('scripts') ?>


</body>
</html>
