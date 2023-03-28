<?php require_once('config.php') ?>
<?php require_once('functions.php') ?>
<?php 
  if(isset($_SESSION['logstatus']) && $_SESSION['logstatus']==true){
    header('location: mail/');
  }
?>
<?php

if (isset($_POST['loginbtn'])) {
  $email = $_POST['emailaddress'];
  $password = $_POST['userpassword'];

  $result = $conn->query("SELECT * FROM $TBL_USERS WHERE user_email = '$email' AND `user_password` = '$password'");
  // var_dump($result);
  if ($result->num_rows > 0) {
    $userdata = $result->fetch_assoc();
    // set sessions
    $_SESSION['usermail'] = $userdata['user_email'];
    $_SESSION['userfname'] = $userdata['user_firstname'];
    $_SESSION['logstatus'] = true;

    header('location: mail/');

  } else {
    $err = "Wrong Username or Password";
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>

  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="mail/assets/login-feature.webp" class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

          <?php if (isset($err)) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <strong>Error: </strong>
              <?php echo $err; ?>
            </div>
          <?php } ?>

          <!-- login form -->
          <form method="post" action="">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3">Sign in with</p>
              <div class="btnn">
                <button type="button" class="bg-primary">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="bg-primary">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="bg-primary">
                  <i class="fab fa-linkedin-in"></i>
                </button>
              </div>
            </div>

            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0">Or</p>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" name="emailaddress" id="emailaddress" class="form-control form-control-lg"
                placeholder="Enter a valid email address" />
              <label class="form-label" for="emailaddress">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" name="userpassword" id="userpassword" class="form-control form-control-lg"
                placeholder="Enter password" required />
              <label class="form-label" for="userpassword">Password</label>
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="agreecheck" />
                <label class="form-check-label" for="agreecheck">
                  Remember me
                </label>
              </div>
              <a href="#!" class="text-body">Forgot password?</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" name="loginbtn" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php"
                  class="link-danger">Register</a></p>
            </div>

          </form>
        </div>
      </div>
    </div>
    <div
      class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
      <!-- Copyright -->
      <div class="text-white mb-3 mb-md-0">
        Copyright © 2023. All rights reserved.
      </div>
      <!-- Copyright -->

      <!-- Right -->
      <div>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="#!" class="text-white">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
      <!-- Right -->
    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>