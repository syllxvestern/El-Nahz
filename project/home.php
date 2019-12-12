<!DOCTYPE html>
<html>
<head>
  <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
  <link rel='stylesheet' type='text/css' href='fontawesome-free-5.11.2-web/css/all.css'>
  <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js'
    integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n'
    crossorigin='anonymous'></script>
  <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'
    integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo'
    crossorigin='anonymous'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'
    integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6'
    crossorigin='anonymous'></script>
  <style>
    html,
    body {
      margin: 0;
      padding: 0;
      height: 100%;
    }

    html {
      box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
      box-sizing: inherit;
    }

    body {
      background: #f5f5f5;
      color: #333;
      font-family: arial, helvetica, sans-serif;
      font-size: 20px;
    }

    #head1 {
      margin-top: 2rem;
    }

    #ngisor {
      position: relative;
      /* height: 100%; */
      margin-top: 10px;
    }

    h1 {
      font-size: 32px;
      text-align: center;
    }

    p {
      font-size: 20px;
      line-height: 1.5;
      margin: 40px auto 0;
      max-width: 640px;
    }

    pre {
      background: #eee;
      border: 1px solid #ccc;
      font-size: 16px;
      padding: 20px;
    }

    form {
      margin: 10px auto 0;
    }

    label {
      display: block;
      font-size: 12px;
      font-weight: bold;
      margin-bottom: 0px;
    }

    input {
      border: 2px solid #333;
      border-radius: 5px;
      color: #333;
      font-size: 12px;
      margin: 0 0 0px;
      padding: .5px 1px;
      width: 100%;

    }

    button {
      background: #fff;
      border: 2px solid #333;
      border-radius: 5px;
      color: #333;
      font-size: 12px;
      font-weight: bold;
      /* padding: 1rem; */
    }

    button:hover {
      background: #333;
      border: 2px solid #333;
      color: #fff;
    }

    .main {
      background: #fff;
      border: 5px solid #ccc;
      border-radius: 10px;
      margin: 40px auto;
      padding: 40px;
      width: 80%;
      max-width: 700px;
    }


    .col-5 {
      background-color: white;
    }

    body {
      background-color: rgb(194, 194, 194);
    }

    .align-self-center {
      margin: auto;
      margin-top: 100px;
    }

    .input {
      height: 40px;
      margin-bottom: 10px;
      width: 390px;
    }

    .input.button {
      width: 415px;
    }

    .container.input {
      margin-left: 10px;
      width: 415px;
    }

    /* .input{
            background-color: gray;
            border-color: black;
        } */
    .container.form {
      margin-top: 50px;
      margin-bottom: 25px;
    }

    .icon {
      padding: 10px;
      position: absolute;
      color: gray;
      min-width: 400px;
      text-align: right;
    }

    .input-icons {
      border-color: black;
      border-spacing: 1px;
      height: 40px;
      margin-right: 20px;
      width: 25px;
    }

    .input-group {
      width: 440px;
    }

    .link:hover {
      text-decoration: none;
    }

    footer.page-footer {
      bottom: 0;
      color: #fff
    }

    footer.page-footer .container-fluid {
      width: auto
    }

    footer.page-footer .footer-copyright {
      overflow: hidden;
      color: rgba(255, 255, 255, 0.6);
      background-color: rgba(0, 0, 0, 0.2)
    }

    footer {
      position: absolute;
      bottom: 0;
      width: 100%;

    }

    footer.page-footer a {
      color: #fff
    }

    @media not all and (min-resolution:.001dpcm) {
      @supports (-webkit-appearance: none) and (stroke-color:transparent) {

        .number-input.def-number-input.safari_only button:before,
        .number-input.def-number-input.safari_only button:after {
          margin-top: -.3rem;
        }

      }
    }
  </style>
</head>
<body>
  <nav class='mb-1 navbar navbar-expand-lg navbar-dark bg-primary info-color'>
    <a class='navbar-brand mr-0 mr-md-2' href='home.html' aria-label='Bootstrap'>
      <img src='m.png' class='rounded-circle z-depth-0' height='50'>
    </a>
    <div class='navbar-nav-scroll'>
      <ul class='navbar-nav bd-navbar-nav flex-row'>
        <li class='nav-item'>
          <a class='nav-link active' href=#>Kode Voucher</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href=#>Promo</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link ' href=#>About us</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href=#>Pro</a>
        </li>
      </ul>
    </div>
    <ul class='navbar-nav ml-auto nav-flex-icons'>
      <li class='nav-item avatar dropdown'>
        <a class='nav-link p-0 nav-link dropdown-toggle' data-toggle='dropdown' id='navbarDropdownMenuLink-333'
          aria-haspopup='true' aria-expanded='false' href='#'>
          <?php
          include "login.php";
          while($row = mysqli_fetch_array(mysqli_query($connect, "select username from user where username='$user'"))){
            echo $row['username'];
          echo "<img src='data:image/jpeg;base64,".base64_encode( $row['avatar'] )."' class='rounded-circle z-depth-0' alt='avatar image' height='35'>";
  }
          ?>
        </a>
        <div class='dropdown-menu dropdown-menu-right dropdown-default' aria-labelledby='navbarDropdownMenuLink-333'>
          <a class='dropdown-item' href='#'>Profil</a>
          <a class='dropdown-item' href='#'>Logout</a>
        </div>
      </li>

    </ul>
  </nav>
  <div class='container' id='head1'>
    <div class=row>
<?php
include 'koneksi.php';
$result = mysqli_query($connect, 'select * from game');
while($row=mysqli_fetch_array($result)){
?>
  
<div class=col-md-2>
<div class='accordion' id='accordionExample'>
  <div class='card'>
    <div class='card-header' id='heading1'>
      <h2 class='mb-0'>
        <button class='btn btn-link collapsed' type='button' data-toggle='collapse' data-target='#collapse1'
          aria-expanded='false' aria-controls='collapse1'>
          <img src='data:image/jpeg;base64,<?php echo base64_encode( $row['gambar'] )?>' style='height: 50px;'/>
        </button>
      </h2>
    </div>
    <div id='collapse1' class='collapse show' aria-labelledby='heading1' data-parent='#accordionExample'>
      <div class='card-body'>
        <form method='post' action='#'>
          <label for='currency-field'>Enter Amount</label>
          <input type='text' name='currency-field' id='currency-field' pattern='^\$\d{1,3}(,\d{3})*(\.\d+)?$'
            value='' data-type='currency' placeholder='$1,000,000.00'>
          <button type='submit'>Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
      
    <?php
}
  ?>
  </div>
      </div>
</body>
<br>
<!-- Footer -->
<footer class='page-footer font-small bg-primary darken-3r' id='ngisor'>

  <!-- Footer Elements -->
  <div class='container'>

    <!-- Grid row-->
    <div class='row footer'>

      <!-- Grid column -->
      <div class='col text-center py-4'>
        <div class='mb-1'>

          <!-- Facebook -->
          <a class='fb-ic' href='https://Facebook.com/'>
            <i class='fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x'></i>
          </a>
          <!-- Twitter -->
          <a class='tw-ic' href='https://Twitter.com/'>
            <i class='fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x'></i>
          </a>
          <!-- Google +-->
          <a class='gplus-ic' href='https://Google.com/'>
            <i class='fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x'></i>
          </a>
          <!--Linkedin -->
          <a class='li-ic' href='https://Linkedin.com/'>
            <i class='fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x'></i>
          </a>
          <!--Instagram-->
          <a class='ins-ic' href='https://Instagram.com/'>
            <i class='fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x'></i>
          </a>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class='footer-copyright text-center py-3'> © 2018 Copyright:
    <a href='https://Google.com/'>Ale Ale</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</html>