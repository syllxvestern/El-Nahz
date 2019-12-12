<?php
    include "koneksi.php";
    session_start();
    $email = $_SESSION['email'];
    $gameid = $_POST['gameid'];
    $notelp = $_POST['notelp'];
    $nominal = $_POST['nominal'];
    $metode = $_POST['metode'];
    $idgame = $_POST['idgame'];
    $rs = mysqli_query($connect, "select iduser from user where email='$email'");
    while($row = mysqli_fetch_assoc($rs)){
        $iduser = $row['iduser'];
    }
    $result = mysqli_query($connect, "insert into transaksi(iduser, idgame, value, gameid, metodepembayaran, notelp) values('$iduser', '$idgame', '$nominal', '$gameid', '$metode', '$notelp')");
    if($result){
        
    }
    else{
        echo mysqli_error($connect);
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Hmm Shop</title>
<link rel="shortcut icon" type="image/png" href="m.png"/>
  <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
  <link rel='stylesheet' type='text/css' href='css/mdb-plugins-gathered.min.js'>
  <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
  <link rel='stylesheet' type='text/css' href='mdb/css/mdb.css'>
  <link rel='stylesheet' type='text/css' href='compiled-4.10.1.min.css'>
  <link rel='stylesheet' type='text/css' href='fontawesome-free-5.11.2-web/css/all.css'>
  <script type=text/javascript src="compiled-4.10.1.min.js"></script>
  <script type=text/javascript src="js/mdb-plugins-gathered.min.js"></script>
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
    p {
    font-size: 12px;
    line-height: 1.5;
    margin: 5px auto 0;
    max-width: 640px;
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
    <a class='navbar-brand mr-0 mr-md-2' href='home.php' aria-label='Bootstrap'>
    <i class="fa fa-gamepad" aria-hidden="true"></i>

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
          <a class='nav-link ' href=about.php>About us</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href=#>Pro</a>
        </li>
      </ul>
    </div>
    <ul class='navbar-nav ml-auto nav-flex-icons'>
      <li class='nav-item avatar dropdown'>
      <div class="text-center">

      <?php
      if(isset($_SESSION['email'])){
        echo "<a href=logout.php class='btn btn-default my-3'>Logout</a>";
      }
      else{
        
        ?>
        <a href="" class="btn btn-default my-3" data-toggle="modal" data-target="#modalLRForm">
        LogIn/Register</a><?php
      }
      ?>
  
</div>
</li>

    </ul>
  </nav>
  <div class='container' id='head1'>
    <h3 class="h7-responsive product-name">Transaksi Berhasil</h3>
      <?php
        // while($row = mysqli_fetch_assoc(mysqli_query($connect, "select * from game where idgame=$idgame"))){
        //     ?>
        //         <img src='data:image/jpeg;base64,<?php echo base64_encode( $row['gambar'] )?>' width="300px">
        //         <table>
        //             <tr>
        //                 <td>Nama Game</td>
        //                 <td>: <?php echo $row['namagame'] ?></td>
        //             </tr>
                
        //     <?php
        // }
        
      ?>
      <tr>
        <td>Nominal<td>
        <td>: <?php echo $notelp ?></td>
      </tr>
      <tr>
        <td>Metode Pembayaran<td>
        <td>: <?php echo $metode ?></td>
      </tr>
      <tr>
        <td>No Telp<td>
        <td>: <?php echo $notelp ?></td>
      </tr>
      </table>
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
  <div class='footer-copyright text-center py-3'> © 2019 Copyright:
    <a href='https://Google.com/'>Ale Ale</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>