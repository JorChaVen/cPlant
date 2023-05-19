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
    <h2 class="subhead">Buffalo Mac and Cheese</h2>

    <!-- Meal -->
    <section id="mi_meal">
      <img src="/images/mac.jpg" alt="buffalo mac and cheese" class="mi_img">
      <p><strong>DESCRIPTION</strong>: <br><br> Now who doesn't love a nice bowl of Mac and Cheese! Click to view alternatives for the non-vegan ingredients.</p>
      
      <!-- Meal Ingredients -->
      <div class="mi_vegan">2 1/2 cups Macaroni Noodles, uncooked</div>
      <div class="mi_vegan">1 15oz Can Butter Beans, drained</div>
      <div class="mi_vegan">1/2 cup Vegetable Stock</div>
      <div class="mi_vegan">1/3 cups Nutritional Yeast</div>
      <div class="mi_vegan">2 tablespoon Lemon Juice</div>
      <div class="mi_vegan">1 1/2 Cracked Black Pepper</div>
      <div class="mi_vegan">1 tsp Salt</div>
      <div class="mi_vegan">1/2 teaspoon Onion Powder</div>
      <div class="mi_vegan">1/2 teaspoon Ground Mustard</div>
      <div class="mi_vegan">1/4 teaspoon Paprika</div>
      <div class="mi_vegan">1/2 cup Buffalo Sauce</div>
      <button onclick="window.location.href='/pages/alternatives.php';" class="mi_notvegan">2 cups Milk</button>
      <button onclick="window.location.href='/pages/alternatives.php';" class="mi_notvegan">1/4 cup Butter</button>
      <button onclick="window.location.href='/pages/alternatives.php';" class="mi_notvegan">1/2 cup Parmesan Cheese</button>
      <button onclick="window.location.href='/pages/alternatives.php';" class="mi_notvegan">2 cups Shredded Cheddar Cheese</button>
      <button onclick="window.location.href='/pages/alternatives.php';" class="mi_notvegan">4 oz Cream Cheese</button>
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