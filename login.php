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
  <link href="css/style.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
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

    /* Fixed floating label styles */
    .form-outline {
      position: relative;
      margin-bottom: 1.5rem;
    }
    
    .form-outline .form-control {
      padding: 15px 10px 5px 10px;
      background: transparent;
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 4px;
      color: white !important;
    }
    
    .form-outline .form-control:focus {
      outline: none;
      border-color: #ee7724;
      box-shadow: 0 0 0 0.2rem rgba(238, 119, 36, 0.25);
    }
    
    .form-outline .form-label {
      position: absolute;
      top: 15px;
      left: 10px;
      transition: all 0.2s ease;
      pointer-events: none;
      font-size: 16px;
      color: rgba(255, 255, 255, 0.7) !important;
    }
    
    .form-outline .form-control:focus ~ .form-label,
    .form-outline .form-control:not(:placeholder-shown) ~ .form-label {
      top: -10px;
      left: 10px;
      font-size: 12px;
      background: rgba(42, 42, 42, 1);
      padding: 0 5px;
      color: #ee7724 !important;
    }

    .text-muted {
      color: whitesmoke !important;
    }
     .mtt{
      margin-top:28px !important;
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
                    <p class="">Please login to your account</p>
                    
                    <div class="form-outline mtt">
                      <input
                        type="email"
                        name="email"
                        id="form2Example11"
                        class="form-control"
                        placeholder=" "
                        required />
                      <label for="form2Example11" class="form-label">Email</label>
                    </div>

                    <div class="form-outline mb-4 mtt">
                      <input
                        type="password"
                        name="pwd"
                        id="form2Example22"
                        class="form-control"
                        placeholder=" "
                        required />
                      <label for="form2Example22" class="form-label">Password</label>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <button
                        class="btn btn-primary btn-block mb-3 gradient-custom-2 fa-lg"
                        type="submit"
                        name="login">
                        Login
                      </button>
                    </div>
                    <div
                      class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?</p>
                      <a
                        type="button"
                        data-mdb-button-init
                        data-mdb-ripple-init
                        class="btn btn-outline-danger"
                        href="signup.php">
                        Signup
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
<?php
include "include/bootstrap_js.php";
?>