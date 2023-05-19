<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width initial-scale:1.0">
  <title>490 Practice</title>
  <link href="/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <header>
    <h1>cPlant</h1>
  </header>
  
  <section id="main">
    <button onclick="history.back()">Go Back</button> <!--Takes users back to previous page -->
    <h2 class="subhead">Cookies</h2>

    <!-- Meal -->
    <section id="mi_meal">
      <img src="/images/cookies.jpg" alt="cookies" class="mi_img">
      <p><strong>DESCRIPTION</strong>: <br><br> Cookies are a sweet treat that everyone can enjoy. Click to view alternatives for the non-vegan ingredients.</p>
      
      <!-- Meal Ingredients -->
      <div class="mi_vegan">1 teaspoon Vanilla Extract</div>
      <div class="mi_vegan">1/2 cup Unsweetend Applesauce</div>
      <div class="mi_vegan">2 cups Flour</div>
      <div class="mi_vegan">1 teaspoon Baking Soda</div>
      <div class="mi_vegan">1/2 teaspoon Sea Salt</div>
      <button onclick="window.location.href='/pages/alternatives.php';" class="mi_notvegan">8 tablespoon Butter</button>
      <button onclick="window.location.href='/pages/alternatives.php';" class="mi_notvegan">1/2 cup Cane Sugar</button>
      <button onclick="window.location.href='/pages/alternatives.php';" class="mi_notvegan">1/4 cup Light Brown Sugar</button>
      <button onclick="window.location.href='/pages/alternatives.php';" class="mi_notvegan">1 cup Chocolate Chips</button>
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