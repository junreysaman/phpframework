<?php include $this->resolve('partials/authentication/_header.php') ?>


<div class="auth-main v1">
      <div class="auth-wrapper">
        <div class="auth-form">
          <div class="card my-5">
            <div class="card-body">
              <div class="text-center">
                <img
                  src="/assets/images/authentication/img-auth-login.png"
                  alt="images"
                  class="img-fluid mb-3"
                />
                <h4 class="f-w-500 mb-1">Login with your email</h4>
                <p class="mb-3">
                  Don't have an Account?
                  <a href="/register" class="link-primary ms-1"
                    >Create Account</a
                  >
                </p>
              </div>
              <form action="/login" method="post">
                <?php include $this->resolve('partials/_csrf.php'); ?>
                <div class="mb-3">
                <input
                  type="email"
                  class="form-control"
                  id="floatingInput"
                  placeholder="Email Address"
                  name="email"
                />
                <?php if (isset($errors['email'])): ?>
                        <div class="text-danger">
                            <?php 
                            if (is_array($errors['email'])) {
                                echo escape(is_array($errors['email'][0]) ? $errors['email'][0][0] : $errors['email'][0]);
                            } else {
                                echo escape($errors['email']);
                            }
                            ?>
                        </div>
                    <?php endif; ?>

              </div>
              <div class="mb-3">
                <input
                  type="password"
                  class="form-control"
                  id="floatingInput1"
                  placeholder="Password"
                  name="password"
                />
                <?php if (isset($errors['password'])): ?>
                        <div class="text-danger">
                            <?php 
                            if (is_array($errors['password'])) {
                                echo escape(is_array($errors['password'][0]) ? $errors['password'][0][0] : $errors['password'][0]);
                            } else {
                                echo escape($errors['password']);
                            }
                            ?>
                        </div>
                    <?php endif; ?>
              </div>
              <div
                class="d-flex mt-1 justify-content-between align-items-center"
              >
                <div class="form-check">
                  <input
                    class="form-check-input input-primary"
                    type="checkbox"
                    id="customCheckc1"
                    checked=""
                  />
                  <label class="form-check-label text-muted" for="customCheckc1"
                    >Remember me?</label
                  >
                </div>
                <a href="../pages/forgot-password-v1.html"
                  ><h6 class="f-w-400 mb-0">Forgot Password?</h6></a
                >
              </div>
              <div class="d-grid mt-4">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
              </form>
              
            </div>
          </div>
        </div>
        <div class="auth-sidefooter">
          <img
            src="../assets/images/logo-dark.svg"
            class="img-brand img-fluid"
            alt="images"
          />
          <hr class="mb-3 mt-4" />
          <div class="row">
            <div class="col my-1">
              <p class="m-0">
                Made with ♥ by Team
                <a
                  href="https://themeforest.net/user/phoenixcoded"
                  target="_blank"
                  >Phoenixcoded</a
                >
              </p>
            </div>
            <div class="col-auto my-1">
              <ul class="list-inline footer-link mb-0">
                <li class="list-inline-item">
                  <a href="../index.html">Home</a>
                </li>
                <li class="list-inline-item">
                  <a
                    href="https://pcoded.gitbook.io/light-able/"
                    target="_blank"
                    >Documentation</a
                  >
                </li>
                <li class="list-inline-item">
                  <a href="https://phoenixcoded.support-hub.io/" target="_blank"
                    >Support</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include $this->resolve('partials/authentication/_footer.php') ?>


