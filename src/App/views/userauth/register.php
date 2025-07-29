<?php include $this->resolve('partials/authentication/_header.php') ?>

<!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="bg-primary-dark">
          <div class="row g-0 bg-primary-dark-op">
            <!-- Meta Info Section -->
            <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
              <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                  <a class="link-fx fw-semibold fs-2 text-white" href="index.html">
                    <?php echo $project ?>
                  </a>
                  <p class="text-white-75 me-xl-8 mt-2">
                    <?php echo $desc ?>
                </div>
              </div>
              <div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center fs-sm">
                <p class="fw-medium text-white-50 mb-0">
                  <strong><?php echo $project ?></strong> &copy; <span data-toggle="year-copy"><?php echo $year ?></span>
                </p>
                <ul class="list list-inline mb-0 py-2">
                  <li class="list-inline-item">
                    <a class="text-white-75 fw-medium" href="javascript:void(0)">Legal</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-white-75 fw-medium" href="javascript:void(0)">Contact</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-white-75 fw-medium" href="javascript:void(0)">Terms</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- END Meta Info Section -->

            <!-- Main Section -->
            <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-body-extra-light">
              <div class="p-3 w-100 d-lg-none text-center">
                <a class="link-fx fw-semibold fs-3 text-dark" href="index.html">
                  OneUI
                </a>
              </div>
              <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                  <!-- Header -->
                  <div class="text-center mb-5">
                    <p class="mb-3">
                      <i class="fa fa-2x fa-circle-notch text-primary-light"></i>
                    </p>
                    <h1 class="fw-bold mb-2">
                      Create Account
                    </h1>
                    <p class="fw-medium text-muted">
                      Get your access today in one easy step
                    </p>
                  </div>
                  <!-- END Header -->

                  <!-- Sign Up Form -->
                  <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                  <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                  <div class="row g-0 justify-content-center">
                    <div class="col-sm-8 col-xl-4">
                      <form action="/register" method="POST" class="">
                        <div class="mb-4">
                          <input type="text" value="<?= $oldFormData['signup-username'] ?? '' ?>" class="form-control form-control-lg form-control-alt py-3" id="signup-username" name="signup-username" placeholder="Username">
                          <?php if (array_key_exists('signup-username', $errors)): ?>
                            <div class="text-danger">
                              <?php echo $errors['signup-username'][0]; ?>
                            </div>
                          <?php endif; ?>
                        </div>
                        <div class="mb-4">
                          <input type="text" value="<?= $oldFormData['signup-email'] ?? '' ?>" class="form-control form-control-lg form-control-alt py-3" id="signup-email" name="signup-email" placeholder="Email">
                          <?php if (array_key_exists('signup-email', $errors)): ?>
                            <div class="text-danger">
                              <?php echo $errors['signup-email'][0]; ?>
                            </div>
                          <?php endif; ?>
                        </div>
                        <!-- gender select -->
                        <div class="mb-4">
                          <select value="<?= $oldFormData['signup-gender'] ?? '' ?>" class="form-select form-select-lg form-control-alt py-3" id="signup-gender" name="signup-gender">
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                          </select>
                          <?php if (array_key_exists('signup-gender', $errors)): ?>
                            <div class="text-danger">
                              <?php echo $errors['signup-gender'][0]; ?>
                            </div>
                          <?php endif; ?>
                        </div>
                        <div class="mb-4">
                          <input type="password" class="form-control form-control-lg form-control-alt py-3" id="signup-password" name="signup-password" placeholder="Password">
                          <?php if (array_key_exists('signup-password', $errors)): ?>
                            <div class="text-danger">
                              <?php echo $errors['signup-password'][0]; ?>
                            </div>
                          <?php endif; ?>
                        </div>
                        <div class="mb-4">
                          <input type="password" class="form-control form-control-lg form-control-alt py-3" id="signup-password-confirm" name="signup-password-confirm" placeholder="Confirm Password">
                          <?php if (array_key_exists('signup-password-confirm', $errors)): ?>
                            <div class="text-danger">
                              <?php echo $errors['signup-password-confirm'][0]; ?>
                            </div>
                          <?php endif; ?>
                        </div>
                        <div class="mb-4">
                          <div class="d-md-flex align-items-md-center justify-content-md-between">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="<?php echo $oldFormData['signup-terms'] ?? '' ?>" id="signup-terms" name="signup-terms">
                              <label class="form-check-label" for="signup-terms">I agree to Terms &amp; Conditions</label>
                              <?php if (array_key_exists('signup-terms', $errors)): ?>
                                <div class="text-danger">
                                  <?php echo $errors['signup-terms'][0]; ?>
                                </div>
                              <?php endif; ?>
                            </div>
                            <div class="py-2">
                              <a class="fs-sm fw-medium" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#one-signup-terms">View Terms</a>
                            </div>
                          </div>
                        </div>
                        <div class="text-center">
                          <button type="submit" class="btn btn-lg btn-alt-success">
                            <i class="fa fa-fw fa-plus me-1 opacity-50"></i> Sign Up
                          </button>
                          <p class="fs-sm text-muted mb-0 mt-2">
                          Already have an account?
                    <a class="d-inline-block align-middle" href="/login">Sign In</a>
                  </p>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- END Sign Up Form -->
                </div>
              </div>
              <div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start">
                <p class="fw-medium text-black-50 py-2 mb-0">
                  <strong>OneUI 5.9</strong> &copy; <span data-toggle="year-copy"></span>
                </p>
                <ul class="list list-inline py-2 mb-0">
                  <li class="list-inline-item">
                    <a class="text-muted fw-medium" href="javascript:void(0)">Legal</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-muted fw-medium" href="javascript:void(0)">Contact</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-muted fw-medium" href="javascript:void(0)">Terms</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- END Main Section -->
          </div>

          <!-- Terms Modal -->
          <div class="modal fade" id="one-signup-terms" tabindex="-1" role="dialog" aria-labelledby="one-signup-terms" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
              <div class="modal-content">
                <div class="block block-rounded block-transparent mb-0">
                  <div class="block-header block-header-default">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <div class="block-content">
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                  </div>
                  <div class="block-content block-content-full text-end bg-body">
                    <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">I Agree</button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- END Terms Modal -->
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <?php include $this->resolve('partials/authentication/_footer.php') ?>