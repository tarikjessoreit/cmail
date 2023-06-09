<?php require_once('config.php') ?>
<?php require_once('functions.php') ?>
<?php

if (isset($_POST['regbtn'])) {
  $user_join_date = date("Y-m-d H:i:s");
  $user_firstname = $_POST['fname'];
  $user_lastname = $_POST['lname'];
  $user_email = $_POST['emailaddress'];

  $user_password = $_POST['userpassword'];
  $user_cpassword = $_POST['usercpassword'];

  $user_status = 'active';

  if ($user_password === $user_cpassword) {
    $sql = "INSERT INTO $TBL_USERS(user_join_date, user_firstname, user_lastname, user_email, user_password, user_status) VALUES ('$user_join_date', '$user_firstname', '$user_lastname', '$user_email', '$user_password', '$user_status')";
    
    if ($conn->query($sql) === true) {
      $succ = "Registration successfull";
    } else {
      $err = "Registration Failed: ". $conn->error;
    }
  } else {
    $err = "Password is not match. Please try again";
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

  <!-- Section: Design Block -->
  <section class="">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <h1 class="my-5 display-3 fw-bold ls-tight">
              The best offer <br />
              <span class="text-primary">for your business</span>
            </h1>
            <p style="color: hsl(217, 10%, 50.8%)">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Eveniet, itaque accusantium odio, soluta, corrupti aliquam
              quibusdam tempora at cupiditate quis eum maiores libero
              veritatis? Dicta facilis sint aliquid ipsum atque?
            </p>
          </div>

          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-5 px-md-5">

                <?php if (isset($succ)) { ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>Success: </strong>
                    <?php echo $succ; ?>
                  </div>
                <?php } ?>


                <?php if (isset($err)) { ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>Error: </strong>
                    <?php echo $err; ?>
                  </div>
                <?php } ?>

                <!-- registration form -->
                <form method="post" action="">
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" name="fname" id="userfirstname" class="form-control" />
                        <label class="form-label" for="userfirstname">First name</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" name="lname" id="userlastname" class="form-control" />
                        <label class="form-label" for="userlastname">Last name</label>
                      </div>
                    </div>
                  </div>

                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" name="emailaddress" id="emailaddress" class="form-control form-control-lg"
                      placeholder="Enter a valid email address" required />
                    <label class="form-label" for="emailaddress">Email address</label>
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-3">
                    <input type="password" name="userpassword" id="userpassword" class="form-control form-control-lg"
                      placeholder="Enter password" required />
                    <label class="form-label" for="userpassword">Password</label>
                  </div>

                  <!-- Confirm Password input -->
                  <div class="form-outline mb-3">
                    <input type="password" name="usercpassword" id="usercpassword" class="form-control form-control-lg"
                      placeholder="Enter password" required />
                    <label class="form-label" for="usercpassword">Confirm Password</label>
                  </div>

                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="agreecheck" required />
                    <label class="form-check-label" for="agreecheck">
                      Subscribe to our newsletter
                    </label>
                  </div>

                  <!-- Submit button -->
                  <button type="submit" name="regbtn" class="btn btn-primary btn-block mb-4">
                    Sign up
                  </button>

                  <!-- Register buttons -->
                  <div class="text-center">
                    <p>Already have account? <a href="./">Login</p>
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-github"></i>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>