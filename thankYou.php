<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project One - Developed By Mahfuzur Rahman</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body>
    <!-- Top Header -->
    <header id="mainHeader">
      <ul>
        <li>
          <img id="hamburger" src="images/hamburger.png" alt="Hamburger" />
        </li>
        <li>Welcome To Our Website</li>
        <li><img src="images/paddle-white.png" alt="Paddle" /></li>
      </ul>
    </header>

    <!-- Main Content -->
    <aside id="leftMenu">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="book.php">Book Trip</a></li>
        <li><a href="admin-add.php">Admin Login</a></li>
      </ul>
    </aside>
    <div id="container">
    <p class="thanksResponse">Thank you for getting in touch! We appreciate you contacting us. One of our colleagues will get back to you as soon as possible! Have a great day!</p>
  <div class="thankYou">
    <p>Thank you: <?php echo $_GET["email"]?></p>

    <p>We will contact you about the: <br>
      <?php echo $_GET["location"]?> trip on the: <?php echo $_GET["date"]?>
    </p>
  </div>
        
</div>
    <footer>
      <small>
        &copy;2022 Project Two <br />
        Developed By <a href="#home">Mahfuzur Rahman</a></small
      >
    </footer>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
