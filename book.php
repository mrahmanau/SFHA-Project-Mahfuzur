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
      <div id="formContainer">
        <h2>Just Some Quick Details</h2>
        
        <form method="_GET" action="thankYou.php">

          <fieldset>
            <legend>Your Information</legend>

            <div class="form-control">
              <label for="email">Email:</label>
              <input type="email" name="email" id="email">
            </div>



            <div class="form-control">
              <label for="location">Location:</label>
              <select name="location" id="country">
                <option value="Select">Select</option>
                <option value="Canada">Canada</option>
                <option value="Australia">Australia</option>
              </select>
            </div>

            <div class="form-control">
              <label for="date">Date:</label>
              <input type="date" id="date" name="date">
            </div>

          </fieldset>  

          <button class="buttons" type="submit" value="Submit">Submit</button>

        </form>
      </div>
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
