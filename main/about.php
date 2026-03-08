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
                            <img class="d-block w-100" style="height: 800px; object-fit: cover" src="img/coder.PNG" alt="About Us" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="about-section mb-5">
            <h1 class="section-title">About Us</h1>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-4">Our Mission</h2>
                    <p>
                        At Computer Mind, our mission is to empower individuals with the knowledge and skills needed to thrive in the digital age. We are committed to providing high-quality, accessible, and engaging educational content that helps learners of all levels achieve their goals in technology and programming.
                    </p>
                    <img src="img/mission.png" alt="Our Mission" class="img-fluid mt-3" />
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4">Our Vision</h2>
                    <p>
                        Our vision is to create a world where everyone has the opportunity to learn and succeed in the field of technology. We strive to be a leading platform for online education, fostering a community of learners who are passionate about coding and innovation.
                    </p>
                    <img src="img/vision.png" alt="Our Vision" class="img-fluid mt-3 img-format" />
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <h2 class="mb-4 mt-5">Our Team</h2>
                    <p>
                        Our team is composed of passionate educators, experienced developers, and dedicated support staff who work tirelessly to create the best learning experience for our users. We are committed to helping you achieve your goals and succeed in your coding journey.
                    </p>
                    <img src="img/group.JPEG" alt="Our Team" class="img-fluid mt-3 img-format" />
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4 mt-5">Our Story</h2>
                    <p>
                        Our story began with a simple idea: to make coding education accessible to everyone. We started as a small group of friends who were passionate about programming and wanted to share our knowledge with others. Over time, we grew into a thriving community of learners and educators, and we are excited to continue our journey together.
                    </p>
                    <img src="img/story.png" alt="Our Story" class="img-fluid img-format" style="margin-top: -8px;" />
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="<?php echo BASE_URL ?>js/script.js"></script>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>