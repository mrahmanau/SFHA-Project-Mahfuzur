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
      <main id="main">
        <!-- <div id="home">
          <h1>
            Come Experience <br />
            Canada
          </h1>
        </div> -->
    <h2>Admin - Confirm</h2>
    <hr>
        <p class="adminConfirmText">

        <?php
          // Database connection
          // $dbPassword = "uGsv#E-6APm5eh@";
          // $dbUserName = "phpPluralSight";
          // $dbServer = "localhost";
          // $dbName = "phppluralsight";
          // $connection = new mysqli('localhost', 'root', '631667@Alom', 'sfha-admin-page');

          $connection = mysqli_connect('localhost', 'root', '631667@Alom', 'sfha-admin-page');

          // if($connection->connect_error) {
          //   die('Connection Failed : '.$connection->connect_error);
          // } else {
          //   echo "connection successfull";
          // }

                  
          if(isset($_POST['submit'])) {

          $heading = $_POST['heading'];
          $tripDate = $_POST['tripdate'];
          $duration = $_POST['duration'];
          $summary = $_POST['summary'];
          
          $query = "insert into registration(heading, tripdate, duration, summary) values('$heading', '$tripDate', '$duration', '$summary')";

          $run = mysqli_query($connection, $query) or die(mysqli_error());

          // $connection->query($query);
          }

        ?>
          Data has added successfully to DB.
        </p>

        <p class="adminConfirmLink">
          <a href="all-adventures.php">View All Adventures</a>
        </p>
        </main>
        </div>
    <footer>
      <small>
        &copy;2022 Project One <br />
        Developed By <a href="#home">Mahfuzur Rahman</a></small
      >
    </footer>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
