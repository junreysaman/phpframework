<?php include $this->resolve('partials/authentication/_header.php') ?>

<div class="auth-main v1">
      <div class="auth-wrapper">
        <div class="auth-form">
          <div class="card my-5">
            <div class="card-body">
              <div class="text-center">
                <img
                  src="/assets/images/authentication/img-auth-register.png"
                  alt="images"
                  class="img-fluid mb-3"
                />
                <h4 class="f-w-500 mb-1">Register with your email</h4>
                <p class="mb-3">
                  Already have an Account?
                  <a href="/login" class="link-primary"
                    >Log in</a
                  >
                </p>
              </div>
              <form action="/register" method="post">
                <?php include $this->resolve('partials/_csrf.php'); ?>
              <div class="row">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="First Name"
                      name="first_name"
                    />
                    <?php if (isset($errors['first_name'])): ?>
                        <div class="text-danger">
                            <?php 
                            if (is_array($errors['first_name'])) {
                                echo escape(is_array($errors['first_name'][0]) ? $errors['first_name'][0][0] : $errors['first_name'][0]);
                            } else {
                                echo escape($errors['first_name']);
                            }
                            ?>
                        </div>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Last Name"
                      name="last_name"
                    />
                    <?php if (isset($errors['last_name'])): ?>
                        <div class="text-danger">
                            <?php 
                            if (is_array($errors['last_name'])) {
                                echo escape(is_array($errors['last_name'][0]) ? $errors['last_name'][0][0] : $errors['last_name'][0]);
                            } else {
                                echo escape($errors['last_name']);
                            }
                            ?>
                        </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Username"
                  name="username"
                />
                <?php if (isset($errors['username'])): ?>
                        <div class="text-danger">
                            <?php 
                            if (is_array($errors['username'])) {
                                echo escape(is_array($errors['username'][0]) ? $errors['username'][0][0] : $errors['username'][0]);
                            } else {
                                echo escape($errors['username']);
                            }
                            ?>
                        </div>
                    <?php endif; ?>
              </div>
              <div class="mb-3">
                <input
                  type="email"
                  class="form-control"
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
              <div class="mb-3">
                <input
                  type="password"
                  class="form-control"
                  placeholder="Confirm Password"
                  name="confirm_password"
                />
                <?php if (isset($errors['confirm_password'])): ?>
                        <div class="text-danger">
                            <?php 
                            if (is_array($errors['confirm_password'])) {
                                echo escape(is_array($errors['confirm_password'][0]) ? $errors['confirm_password'][0][0] : $errors['confirm_password'][0]);
                            } else {
                                echo escape($errors['confirm_password']);
                            }
                            ?>
                        </div>
                    <?php endif; ?>
              </div>
              <div class="d-flex mt-1 justify-content-between">
                <div class="form-check">
                  <input
                    class="form-check-input input-primary"
                    type="checkbox"
                    id="customCheckc1"
                    checked=""
                  />
                  <label class="form-check-label text-muted" for="customCheckc1"
                    >I agree to all the Terms & Condition</label
                  >
                </div>
              </div>
              <div class="d-grid mt-4">
                <button type="submit" class="btn btn-primary">
                  Create Account
                </button>
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
    <!-- [ Main Content ] end -->

    <?php include $this->resolve('partials/authentication/_footer.php') ?>