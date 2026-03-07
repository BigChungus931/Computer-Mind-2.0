<?php
include "include/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Computer Mind</title>
    <link href="img/favicon.png" rel="icon">
    <script src="js/load.js"></script>
    <link rel="stylesheet" href="Bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/vscode.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="css/course_content.css" />

    <!-- Highlight.js for VSCode style syntax highlighting -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/vs2015.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/javascript.min.js"></script>
    <script>
        hljs.highlightAll();
    </script>
</head>

<body>
    <?php
    include "include/navbar.php";
    include "include/sidebar.php";
    ?>
    <div class="main-content">
        <div class="background-js">
            <div>
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="5000">
                            <img class="d-block w-100" style="height: 800px; object-fit: cover" src="img/terms.png" alt="Terms & Conditions" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="about-section mb-5">
            <h1 class="section-title">Terms & Conditions</h1>
        </section>
        <div class="container">

            <p class="terms-text">
                Welcome to Computer Mind. By accessing or using our website, you agree to comply with and be bound by the following terms and conditions. Please read these terms carefully before using our services. If you do not agree to these terms, please do not use our website.
            </p>
            <div class="terms-card">
                <h2>1. Use of Website</h2>
                <p class="terms-text">
                    You may use our website for lawful purposes only. You are prohibited from using our website in any way that may damage, disable, overburden, or impair the website or interfere with any other party's use and enjoyment of the website.
                </p>
            </div>

            <div class="terms-card">
                <h2>2. Intellectual Property</h2>
                <p class="terms-text">
                    All content on this website, including but not limited to text, graphics, logos, images, and software, is the property of Computer Mind and is protected by international copyright laws. You may not reproduce, distribute, modify, or create derivative works from any content on this website without our prior written consent.
                </p>
            </div>
            <div class="terms-card">
                <h2>3. Disclaimer of Warranties</h2>
                <p class="terms-text">
                    This website is provided on an "as is" and "as available" basis. Computer Mind makes no representations or warranties of any kind, express or implied, regarding the operation of this website or the information, content, materials, or products included on this website. You expressly agree that your use of this website is at your sole risk.
                </p>
            </div>
            <div class="terms-card">
                <h2>4. Limitation of Liability</h2>
                <p class="terms-text">
                    Computer Mind shall not be liable for any damages of any kind arising from the use of this website, including but not limited to direct, indirect, incidental, punitive, and consequential damages.
                </p>
            </div>
            <div class="terms-card">
                <h2>5. Changes to Terms</h2>
                <p class="terms-text">
                    Computer Mind reserves the right to modify these terms and conditions at any time. Your continued use of the website after any such changes constitutes your acceptance of the new terms.
                </p>
            </div>
        </div>
    </div>
</body>

</html>
<script src="<?php echo BASE_URL ?>js/script.js"></script>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>