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
    <h2>Admin - Add Adventure</h2>
    <hr>
    <form method="post" action="admin-confirm.php">
      <fieldset>
        <legend>Your Trip Details</legend>
        
        <div class="form-control">
          <label for="heading">Heading:</label>
          <input type="text" name="heading" id="heading" required>
        </div>

        <div class="form-control">
          <label for="tripdate">Trip Date:</label>
          <input type="date" id="tripdate" name="tripdate" required>
        </div>

        <div class="form-control">
        <label for="duration">Duration:</label>
        <input type="text" id="duration" name="duration" required>
        </div>

        <div class="form-control">
          <label for="summary">Summary:</label>
          <textarea name="summary" id="summary" cols="30" rows="10" required></textarea>
        </div>
      </fieldset>
        <input class="buttons" type="submit" value="Submit" name="submit">
    </form>
    <footer>
      <small>
        &copy;2022 Project One <br />
        Developed By <a href="#home">Mahfuzur Rahman</a></small
      >
    </footer>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
