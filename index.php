

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "e-reg");
 
// Check connection
if ($link === false) {
  die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_POST['save'])) {
  if (isset($_POST['fmes']) || isset($_POST['lmes']) || isset($_POST['emes']) || isset($_POST['eemes']) || isset($_POST['ames']) || isset($_POST['mmes'])) {
// Escape user inputs for security

    $name = mysqli_real_escape_string($link, $_POST['fmes']);
    $pwd = mysqli_real_escape_string($link, $_POST['lmes']);
    $kww = mysqli_real_escape_string($link, $_POST['emes']);
    $sww = mysqli_real_escape_string($link, $_POST['eemes']);
    $pww = mysqli_real_escape_string($link, $_POST['ames']);
    $mww = mysqli_real_escape_string($link, $_POST['mmes']);
 
// attempt insert query execution
    $sql = "INSERT INTO comments (firstname, lastname, email, estatename, apartment, mmessage) values('$name', '$pwd', '$kww', '$sww', '$pww', '$mww')";
    if (mysqli_query($link, $sql)) {
      echo "";
    } else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
  }
}
 
// close connection
mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Estate</title>
  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="assets/plugins/introjs/introjs.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
<section class="index__banner " data-step="7" data-intro="Get Started!" >

<nav class="container">
    <div class="admin__banner--btn">
        <span>
          <a href="index.php">
            <img src="assets/img/Estate management icon.svg" class="admin--icon" height="32px" alt="">
          </a>
        </span>
        <ul class="admin__nav">
          <li><a href="#about">About Us</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <span>
              <a href="login.php">
               <button type="button" class="btn btn-primary btn-admin-home text-align--center">Admin Login</button>
             </a>
           </span>
        </ul>
      </div>
  <div class="admin__content-position text-align--center">
    <div class="admin--text-big d-flex justify-content-center">

      Having Problems Managing Your Property?
    </div>
    <div class="admin--text-small d-flex justify-content-center">
      Connect with your Estate Manager.
    </div>
    <div class="d-flex justify-content-center">
      <a href="#contact">
        <button type="button" class="btn btn-primary btn-admin-text">Contact us now</button>
      </a>
    </div>
  </div>
</nav>
</section>
<section class="cards">
    <h3 class="cards--title text-align--center">Services</h3>
    <div class="container cards__container">
      <div class="row cards__row">
        <div class="col-12 col-sm col-md-4 cards__cards">
          <div class="cards__cards--image">
            <img src="assets/img/two-hands-graving-dollar-bills.svg" height="56px" width="56px" alt="">
          </div>
          <h3 class="cards__cards--title">Collect Bills</h3>
          <p>Lorem ipsum dolor sit amet, non est, elit justo <br> 
            magna phasellus maecenas nunc pharetra. <br> Lorem ipsum dolor sit amet, non est, elit justo <br>
            magna phasellus maecenas nunc pharetra.</p>
        </div>
        <div class="col-12 col-sm col-md-4 cards__cards">
          <div class="cards__cards--image">
            <img src="assets/img/mark.svg" height="56px" width="40px" alt="">
          </div>
          <h3 class="cards__cards--title">Respond to Queries </h3>
          <p>Lorem ipsum dolor sit amet, non est, elit justo <br> 
            magna phasellus maecenas nunc pharetra. <br> Lorem ipsum dolor sit amet, non est, elit justo <br>
            magna phasellus maecenas nunc pharetra.</p>
        </div>
        <div class="col-12 col-sm col-md-4 cards__cards">
          <div class="cards__cards--image">
            <img src="assets/img/group.svg" height="56px" width="56px" alt="">
          </div>
          <h3 class="cards__cards--title">Identify Defaulters</h3>
          <p>Lorem ipsum dolor sit amet, non est, elit justo <br> 
            magna phasellus maecenas nunc pharetra. <br> Lorem ipsum dolor sit amet, non est, elit justo <br>
            magna phasellus maecenas nunc pharetra.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="bills">
    <h3 class="bills--title text-align--center" data-step="1" data-intro="Payment method!">How To Pay Bills</h3>
    <div class="container ">
      <div class="row cards__row">
        <div class="col align-self-center text-align--center">
          <div class="cards__cards--image-pay">
            <a href="https://bit.ly/2KnaS7A" target="_blank">
              <img src="assets/img/Rectangle 3.svg" height="56px" width="56px" alt="">
            </a>
          </div>
          <h3 class="bills__cards--title">
            <a href="https://bit.ly/2KnaS7A" target="_blank" class="btn--upload">Paystack</a>
          </h3>
          <p data-step="2" data-intro="You can use this one time method!">Pay using paystack</p>
        </div>
      </div>
      <div class="row cards__row bill__card-position text-align--center">
        <div class="col text-align--right">
          <div class="cards__cards--image-pay">
            <img src="assets/img/bank.svg" height="56px" width="56px" alt="">
          </div>
          <button type="button" class="btn btn--upload" data-toggle="modal" data-target="#exampleModal3">
            <h3 data-step="3" data-intro="Or Enter any bank and send to Account Info!" class="bills__cards--title">Bank Deposit</h3>
          </button>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">
                    <strong>Payment details</strong>
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body text-align--left">
                  <strong>
                    Bank Details
                  </strong>
                  <br> Bank Name: Exccess Bank
                  <br> Acct Name: E.M Solutions
                  <br> Acct Number: 0011223344
                  <br><br>
                 <strong>Steps to Take After Successful Payment</strong>  <br>
Step 1: Take a snapshot of the telle/ E-receipt <br>
Step 2: Upload & Send it to payments@emsolutions.com <br>
Step 3: And wait for confirmation
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <p>Go into any Excess bank
            <br> and deposit to EM Solution’s
          </p>
        </div>
        <div class="col">
        </div>
        <div class="col text-align--left">
          <div class="cards__cards--image-pay">
            <img src="assets/img/money-transfer icon.svg" height="56px" width="56px" alt="">
          </div>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn--upload" data-toggle="modal" data-target="#exampleModal1">
            <h3 data-step="4" data-intro="Easily done with your transfer code!" class="bills__cards--title">Mobile Transfers</h3>
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">
                    <strong>Payment details</strong>
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <strong>
                    Bank Details
                  </strong>
                  <br> Bank Name: Exccess Bank
                  <br> Acct Name: E.M Solutions
                  <br> Acct Number: 0011223344
                  <br><br>
                 <strong>Steps to Take After Successful Payment</strong>  <br>
Step 1: Take a snapshot of the telle/ E-receipt <br>
Step 2: Upload & Send it to payments@emsolutions.com <br>
Step 3: And wait for confirmation
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          <p>Transfer bills using mobile
            <br> phones.
          </p>
        </div>
      </div>
      <div class="row cards__row bill__card-position-2">
        <div class="col align-self-center text-align--center">
          <div class="cards__cards--image-pay">
            <img src="assets/img/upload.svg" height="56px" width="56px" alt="">
          </div>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn--upload" data-toggle="modal" data-target="#exampleModal">
            <h3 data-step="5" data-intro="Upload teller wait for confirmation!" class="bills__cards--title">Upload files</h3>
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">
                    <strong>Payment details</strong>
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <strong>Steps to Take After Successful Payment</strong>  <br>
Step 1: Take a snapshot of the telle/ E-receipt <br>
Step 2: Upload & Send it to payments@emsolutions.com <br>
Step 3: And wait for confirmation
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          <p>Send the proof of payment</p>
        </div>
      </div>
    </div>
  </section>


  <section class="form ">
  <form method="post" action="index.php">
    <h3 data-step="6" data-intro="Lay your complain to us!" class="cards--title text-align--center">Message us</h3>
    <p class="text-align--center form--p-text">Please note that you can only use this section if you are a registered customer/tenant.</p>
    <div class="container form__container">
      <div class="row">
        <div class="col-12 col-sm-3 col-md-6">
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="First Name" name="fmes" required>
          </div>
        </div>
        <div class="col-12 col-sm-3 col-md-6">
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last Name" name="lmes" required>
          </div>
        </div>
        <div class="col-12 col-sm-3 col-md-12 ">
          <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="emes" required>

          </div>
        </div>

        <div class="col-12 col-sm-3 col-md-12">
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Estate name" name="eemes" required>
        </div>
        <div class="col-12 col-sm-3 col-md-12">
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Apartment/House No" name="ames" required>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12">
          <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Complains/queries/suggestion" name="mmes" required></textarea>
            <button type="submit" class="btn btn-primary d-flex justify-content-center" name="save" data-toggle="modal" data-target="#exampleModal2">
          Send Message
        </button>
        </form>
          </div>
        </div>
        <!-- Button trigger modal -->
        <!-- Modal -->
        <!-- <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thank You!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Message sent successfully! You'll be attended to shortly.
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>
  <section id="about" class="about__banner">
  <h3 class="about--title text-align--center">About us</h3>
  <p class=" about__text text-align--center">
    Lorem ipsum dolor sit amet, non est, <br>
 elit justo magna phasellus maecenas nunc pharest, <br>
eleifend tincidunt rhoncus, <br>
lacus fusce rutrum, neque non morbi, ut lacus suscipit ullamcorper vestibulum faucibus. <br>
Nam gravida molestie. <br>
Aliquam felis, tincidunt hendrerit accumsan lorem in laoreet consequat, <br>
nonummy vitae suscipit <br>
  </p>
</section>
<div>
      <!-- <a class="btn btn-large btn-success" href="javascript:void(0);" onclick="javascript:introJs().start();">Show me how</a> -->
  </div>
<section id="contact" class="contact__us">
  <div class="contact__details">
      <h3 class="contact__us--title text-align--center">Contact Us</h3>
      <div class="contact__text text-align--center">
        <p class="contact__title">Address</p>
        <p class="contact--details">24, montegomery Rd, Surulere-Lagos</p>
        <p class="contact__title">Email Address</p>
        <p class="contact--details">info@em.solutions.com</p>
        <p class="contact__title">Phone Number</p>
        <p class="contact--details">08011223344</p>
      </div>
  </div>
  <span class="contact__img-position"><img src="assets/img/undraw.svg" alt=""></span>
  <span class="contact__img-position1"><img src="assets/img/address.svg" alt=""></span>
  
</section>

  <footer class="d-flex justify-content-center align-items-center">
    <div class="container__contact">
      <ul>
        <li>
          <a class="nav-footer" href="about-us.php">About Us</a>
        </li>
        <li>
          <a class="nav-footer" href="#">Contact Us</a>
        </li>
        <li>
          <a class="nav-footer" href="#">FAQ's</a>
        </li>
        <li>
          <a class="nav-footer" href="#">Terms of Use</a>
        </li>
        <li>
          <a class="nav-footer" href="#">
            <img src="assets/img/facebook-logo-button.png" alt="">
          </a>
          <a class="nav-footer" href="#">
            <img src="assets/img/twitter.png" alt="">
          </a>
          <a class="nav-footer" href="#">
            <img src="assets/img/instagram-logo.png" alt="">
          </a>
        </li>
      </ul>
    </div>
  </footer>
  <!-- <div class="row">
      <div class="col-12 col-sm-3 col-md-12">
          <a href="index.php">
              <img src="assets/img/home icon.svg"  height="32px" alt="">
            </a>
            <p>
                Design and developed by: Hitunes &bull; 2018
               </p>
      </div>
        
    </div> -->






  <script src="assets/plugins/jquery.min.js"></script>
  <script src="assets/plugins/popper.min.js"></script>
  <script src="assets/plugins/introjs/intro.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script>
    introJs().start();
  </script>
</body>

</html>