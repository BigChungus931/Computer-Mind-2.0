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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
  </head>
  <style>
    .acc-header {
      background: linear-gradient(
        to right,
        rgb(136, 207, 255),
        rgb(83, 186, 255)
      );
      color: black;
    }

    .acc-header:hover {
      background-color: rgb(44, 44, 211);
    }
  </style>
  <body>
    <?php
    include "include/navbar.php";
    include "include/sidebar.php";
    ?>
    <div class="main-content">
      <div class="background-web">
        <div>
          <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#myCarousel"
                data-bs-slide-to="0"
                class="active"
              ></button>
              <button
                type="button"
                data-bs-target="#myCarousel"
                data-bs-slide-to="1"
              ></button>
              <button
                type="button"
                data-bs-target="#myCarousel"
                data-bs-slide-to="2"
              ></button>
              <button
                type="button"
                data-bs-target="#myCarousel"
                data-bs-slide-to="3"
              ></button>
            </div>

            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="5000">
                <img
                  class="d-block w-100"
                  style="height: 800px; object-fit: cover"
                  src="img/web.jpg"
                  alt="web design"
                />
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <img
                  class="d-block w-100"
                  style="height: 800px; object-fit: cover"
                  src="img/Web design/web1.jpg"
                  alt="web design"
                />
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <img
                  class="d-block w-100"
                  style="height: 800px; object-fit: cover"
                  src="img/Web design/web2.jpg"
                  alt="web design"
                />
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <img
                  class="d-block w-100"
                  style="height: 800px; object-fit: cover"
                  src="img/Web design/web3.jpg"
                  alt="web design"
                />
              </div>
            </div>

            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#myCarousel"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#myCarousel"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
        </div>
      </div>

      <section class="about-section">
        <h1 class="section-title">Web design</h1>
        <p class="section-par">
          Web design is the art and science of crafting engaging and
          user-friendly online experiences. It’s a multi-faceted process that
          combines visual design principles with technical skills. At its core,
          web design utilizes **HTML (HyperText Markup Language)** to structure
          the content of a webpage – defining headings, paragraphs, images, and
          links. However, HTML alone wouldn't create a visually appealing site.
          That’s where **CSS (Cascading Style Sheets)** comes in. CSS is used to
          control the presentation of the HTML elements, dictating things like
          colors, fonts, layout, and responsiveness across different devices.
          Ultimately, a successful web design leverages both HTML for content
          and CSS for style, working together to deliver a polished and
          effective online presence.
        </p>
      </section>
      <section class="video-section">
        <button
          type="button"
          class="btn btn-lg"
          style="background-color: rgb(83, 186, 255)"
          data-bs-toggle="modal"
          data-bs-target="#exampleModal"
        >
          Click to watch video
        </button>
      </section>
      <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog" style="max-width: 100%; width: 600px">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Watch video</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>

            <div class="modal-body">
              <iframe
                class="yt"
                width="730"
                height="415"
                src="https://www.youtube.com/embed/OEV8gMkCHXQ?si=WxOWjBD6gRK33nzG"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen
              ></iframe>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal"
              >
                Close
              </button>
            </div>
          </div>
        </div>
      </div>

      <section class="acc-section">
        <div class="acc">
          <div class="acc-item">
            <button class="acc-header">
              HTML fundamentals and document structure
            </button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">HTML5 semantic elements</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Forms and input elements</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">CSS basics and selectors</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Box model and layout</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Typography and color theory</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">CSS Grid and Flexbox</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">
              Responsive design and media queries
            </button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">CSS animations and transitions</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">JavaScript integration</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Cross-browser compatibility</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Web accessibility principles</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Performance optimization</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Version control with Git</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Deployment and hosting</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">User experience (UX) principles</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Modern CSS frameworks</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Browser developer tools</button>
            <div class="acc-content"><p></p></div>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
<script src="js/script.js"></script>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
