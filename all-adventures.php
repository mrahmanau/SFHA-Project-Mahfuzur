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
        <div id="home">
          <h1>
            Come Experience <br />
            Canada
          </h1>
        </div>

        <h1>Upcoming Adventures</h1>
        <hr />

        <!-- Sections -->
        <!-- Section 1 -->
        <section>
          <h3>Centennial Park</h3>

          <p>Location : City Center</p>
          <p>Activities : Parks and Leisure</p>

          <p class="summary">Summary</p>
          <p>
            Centennial Park features a mix of lush forest and open recreational
            spaces. Gravel and paved trails are popular with hikers and cyclists
            as well as parents with strollers. Summertime offers swimming, an
            accessible splash park, picnic and playground facilities. Winter
            visitors enjoy skating, snowshoeing, tobogganing and skiing along
            Eastern Canada’s longest lit cross-country ski trail.
          </p>
        </section>

        <!-- Section 2 -->
        <section>
          <h3>RCMP Memorial</h3>

          <p>Location : Riverfront Park off Assomption</p>
          <p>Activities : Parks and Leisure</p>

          <p class="summary">Summary</p>
          <p>
            The RCMP monument was created by Newfoundland-based artist Morgan
            MacDonald. He brought some family members to his foundry in Logy
            Bay, N.L., to discuss the project and to have them work with clay.
            The monument features the three men wearing different uniforms —
            Larche in the red serge, Gevaudan in the working patrol uniform, and
            Ross in the uniform of a dog master.
          </p>
        </section>
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
