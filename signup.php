<?php
include "action/database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Computer Mind Login</title>
  <link href="main/img/favicon.png" rel="icon">
  <link rel="stylesheet" href="Bootstrap/bootstrap.css" />
  <!-- Material Design Bootstrap CSS -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"
    rel="stylesheet" />

  <!-- Font Awesome -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    rel="stylesheet" />

  <style>
    .gradient-custom-2 {
      background: #fccb90;
      background: -webkit-linear-gradient(to right,
          #ee7724,
          #d8363a,
          #dd3675,
          #b44593);
      background: linear-gradient(to right,
          #ee7724,
          #d8363a,
          #dd3675,
          #b44593);
    }

    .gradient-custom-1 {
      background: rgba(42, 42, 42, 1);
    }

    @media (min-width: 768px) {
      .gradient-form {
        height: 100vh !important;
      }
    }

    @media (min-width: 769px) {
      .gradient-custom-2 {
        border-top-right-radius: 0.3rem;
        border-bottom-right-radius: 0.3rem;
      }
    }

    .gradient-form {
      background: #eee;
    }

    .btn.gradient-custom-2 {
      background: linear-gradient(to right,
          #ee7724,
          #d8363a,
          #dd3675,
          #b44593) !important;
      border: none;
      color: white;
      padding: 20px;
      text-transform: capitalize;
      transition: 2s !important;
    }

    .btn.gradient-custom-2:hover {
      transition: 2s !important;
    }

    .form-control {
      color: white !important;
    }

    .form-label {
      color: white !important;
    }

    .text-muted {
      color: whitesmoke !important;
    }

    .countries option {
      color: black !important;
    }
  </style>
</head>

<body>
  <section class="h-100 gradient-form" style="background-color: #eee">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-white">
            <div class="row g-0">
              <div class="col-lg-6 gradient-custom-1">
                <div class="card-body p-md-5 mx-md-4">
                  <div class="text-center mb-5">
                    <img src="main/img/Computer-logo-dark.png" alt="" width="285px" />
                  </div>

                  <form action="" method="post">
                    <p>Please make an account</p>

                    <div class="form-outline mb-4" data-mdb-input-init>
                      <input type="text" id="fnameid" class="form-control" name="fname" placeholder="Enter Firstname" required>
                      <label for="fnameid" class="form-label">Firstname</label>
                    </div>

                    <div class="form-outline mb-4" data-mdb-input-init>
                      <input type="text" id="lnameid" class="form-control" name="lname" placeholder="Enter Lastname" required>
                      <label for="lnameid" class="form-label">Lastname</label>
                    </div>
                    <div class="form-outline mb-4" data-mdb-input-init>
                      <input type="email" id="email" class="form-control" name="email" placeholder="Enter Email" required>
                      <label for="email" class="form-label">Email</label>
                    </div>
                    <div class="form-outline mb-4" data-mdb-input-init>
                      <input type="number" id="age" class="form-control" min="12" max="140" name="age" placeholder="Enter Age" required>
                      <label for="age" class="form-label">Age</label>
                    </div>
                    <div class="form-outline mb-4" data-mdb-input-init>
                      <?php
                      include "include/countries.php";
                      ?>
                    </div>
                    <div class="form-outline mb-4" data-mdb-input-init>
                      <input type="password" id="pwd" class="form-control" name="pwd" placeholder="Enter Password" required>
                      <label for="pwd" class="form-label">Password</label>
                    </div>

                    <div class="form-outline mb-4" data-mdb-input-init>
                      <input type="password" id="cpwd" class="form-control" name="cpwd" placeholder="Confirm Password" required>
                      <label for="cpwd" class="form-label"> Confirm Password</label>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <button
                        class="btn btn-primary btn-block mb-3 gradient-custom-2 fa-lg"
                        type="submit"
                        name="signup">
                        Signup
                      </button>
                    </div>
                    <div
                      class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">already have an account?</p>
                      <a
                        type="button"
                        data-mdb-button-init
                        data-mdb-ripple-init
                        class="btn btn-outline-danger"
                        href="login.php">
                        Login
                      </a>
                    </div>
                  </form>
                </div>
              </div>
              <div
                class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <img src="main/img/guy.png" alt="Guy" width="350px" style="margin-left:1.7em;" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>