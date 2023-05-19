<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width initial-scale:1.0">
  <title>490 Practice</title>
  <link href="../style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <header>
    <h1>cPlant</h1>
  </header>
  
  <section id="main">
    <button onclick="history.back()">Go Back</button> <!--Takes users back to previous page -->
    <h2 class="subhead">Meal 1</h2>

    <!-- Meal -->
    <section id="mi_meal">
      <img src="../images/cheeseburger.jpg" alt="cheeseburger" class="mi_img">
      <p><strong>DESCIPTION OF MEAL</strong> - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      
      <!-- Meal Ingredients -->
      <div class="mi_vegan">this is vegan</div>
      <div class="mi_vegan">this is vegan</div>
      <div class="mi_vegan">this is vegan</div>
      <button onclick="window.location.href='../pages/alternatives.php';" class="mi_notvegan">this is not vegan</button>
      <button onclick="window.location.href='../pages/alternatives.php';" class="mi_notvegan">this is not vegan</button>
      <button onclick="window.location.href='../pages/alternatives.php';" class="mi_notvegan">this is not vegan</button>
    </section>
  </section>

  <!-- Bottom Navigation Bar -->

  <nav>
    
    <a href="#" class="nav_btn ani_btn">Search</a>
    <a href="/index.html" class="nav_btn ani_btn mid_btn">Home</a>
    <a href="/pages/account.php" class="nav_btn ani_btn">Account</a>
  </nav>
    
</body>

</html>