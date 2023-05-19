<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width initial-scale:1.0">
  <title>490 Practice</title>
  <link href="../../style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <header>
    <h1>cPlant</h1>
  </header>
  
  <section id="main">
    <button onclick="history.back()">Go Back</button> <!--Takes users back to previous page -->
    <h2 class="subhead">Dairy Free Cheese Pizza</h2>

    <!-- Meal -->
    <section id="mi_meal">
      <img src="/images/pizza.jpg" alt="cheese pizza" class="mi_img">
      <p><strong>DESCRIPTION</strong>: <br><br> Pizza is perfect choice for a friday night get-together with family or friends. Click to view alternatives for the non-vegan ingredients.</p>
      
      <!-- Meal Ingredients -->
      <div class="mi_vegan">3 cups Flour</div>
      <div class="mi_vegan">2 1/4 teaspoon Active Dry Yeast</div>
      <div class="mi_vegan">1 teaspoon Garlic Powder</div>
      <div class="mi_vegan">1 teaspoon Italian Seasoning</div>
      <div class="mi_vegan">1/2 teaspoon Salt</div>
      <div class="mi_vegan">1 1/2 cup Warm Water</div>
      <div class="mi_vegan">2 tbsp Olive Oil</div>
      <div class="mi_vegan">1 cup Marinara Sauce</div>
      <button onclick="window.location.href='/pages/alternatives.php';" class="mi_notvegan">1 tablespoon Sugar</button>
      <button onclick="window.location.href='/pages/alternatives.php';" class="mi_notvegan">1 cup Cheese</button>
      <button onclick="window.location.href='/pages/alternatives.php';" class="mi_notvegan">1/4 cup Parmesan</button>
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