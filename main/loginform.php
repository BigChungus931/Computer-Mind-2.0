<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Computer Mind Login</title>
    <link rel="stylesheet" href="Bootstrap/bootstrap.css" />
    <!-- Material Design Bootstrap CSS -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      rel="stylesheet"
    />

    <style>
      .gradient-custom-2 {
        background: #fccb90;
        background: -webkit-linear-gradient(
          to right,
          #ee7724,
          #d8363a,
          #dd3675,
          #b44593
        );
        background: linear-gradient(
          to right,
          #ee7724,
          #d8363a,
          #dd3675,
          #b44593
        );
      }

      .gradient-custom-1 {
        background: rgb(66, 66, 66);
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
        background: linear-gradient(
          to right,
          #ee7724,
          #d8363a,
          #dd3675,
          #b44593
        ) !important;
        border: none;
        color: white;
        padding: 20px;
        text-transform: capitalize;
        transition: 2s !important;
      }

      .btn.gradient-custom-2:hover {
        background: black !important;
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
                    <div class="text-center">
                      <img src="/img/darkthemelogo2.png" alt="" width="285px" />
                      <h4 class="mt-2 mb-5 pb-1">
                        We are the Computer Mind team
                      </h4>
                    </div>

                    <form action="">
                      <p>Please login to your account</p>
                      <div class="form-outline mb-4" data-mdb-input-init>
                        <input
                          type="email"
                          id="form2Example11"
                          class="form-control"
                          placeholder="Enter email address"
                        />
                        <label for="form2Example11" class="form-label"
                          >Email</label
                        >
                      </div>

                      <div class="form-outline mb-4" data-mdb-input-init>
                        <input
                          type="password"
                          id="form2Example22"
                          class="form-control"
                          placeholder="Enter Your password"
                        />
                        <label for="form2Example22" class="form-label"
                          >Password</label
                        >
                      </div>

                      <div class="text-center pt-1 mb-5 pb-1">
                        <button
                          class="btn btn-primary btn-block mb-3 gradient-custom-2 fa-lg"
                          type="button"
                        >
                          Login
                        </button>
                        <a class="text-muted" href="">Forgot password?</a>
                      </div>
                      <div
                        class="d-flex align-items-center justify-content-center pb-4"
                      >
                        <p class="mb-0 me-2">Don't have an account?</p>
                        <button
                          type="button"
                          data-mdb-button-init
                          data-mdb-ripple-init
                          class="btn btn-outline-danger"
                        >
                          Create new
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <div
                  class="col-lg-6 d-flex align-items-center gradient-custom-2"
                >
                  <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <p class="small mb-0">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                      Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                      natoque penatibus et magnis dis parturient montes,
                      nascetur ridiculus mus. Donec quam felis, ultricies nec,
                      pellentesque eu, pretium quis, sem.
                    </p>
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
