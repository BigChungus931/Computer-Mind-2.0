<?php
include "include/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <link href="<?php echo BASE_URL ?>img/favicon.png" rel="icon">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>Bootstrap/bootstrap.css" />
    <script src="<?php echo BASE_URL ?>js/load.js"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>css/style.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL ?>css/form.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>
    <?php
    include "include/navbar.php";
    include "include/sidebar.php";
    ?>
    <div class="main-content">
        <section class="about-section mb-5">
            <h1 class="section-title">About Us</h1>
        </section>
        <div class="container">
            <p class="about-text">
                Welcome to Computer Mind, your trusted partner in computer repair and IT solutions. With over a decade of experience, we are dedicated to providing top-notch services to our clients. Our team of skilled technicians is committed to delivering efficient and reliable solutions for all your computer needs. Whether you're facing hardware issues, software problems, or need assistance with network setup, we have you covered. At Computer Mind, we pride ourselves on our customer-centric approach, ensuring that every client receives personalized attention and exceptional service. Your satisfaction is our priority, and we strive to exceed your expectations with every interaction.
            </p>
        </div>
    </div>
</body>

</html>
<script src="<?php echo BASE_URL ?>js/script.js"></script>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>