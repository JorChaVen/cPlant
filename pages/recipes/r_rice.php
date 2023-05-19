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
    <h2 class="subhead">Fried Rice</h2>

    <!-- Meal -->
    <section id="mi_meal">
      <img src="/images/rice.jpg" alt="rice" class="mi_img">
      <p><strong>DESCRIPTION</strong>: <br><br> Rice is a simple, but enjoyable meal for anyone and everyone! Click to view alternatives for the non-vegan ingredients.</p>
      
      <!-- Meal Ingredients -->
      <div class="mi_vegan">1/3 cup Low Sodium Soy Sauce</div>
      <div class="mi_vegan">1 teaspoon Agave</div>
      <div class="mi_vegan">1/2 teaspoon Toasted Sesame Oil</div>
      <div class="mi_vegan">1/4 teaspoon Red Pepper Flakes</div>
      <div class="mi_vegan">1 1/2 cups Frozen Veggies</div>
      <div class="mi_vegan">4 cups Cooked Rice</div>
      <div class="mi_vegan">3 Green Onions</div>
      <button onclick="window.location.href='/pages/alternatives.php';" class="mi_notvegan">3 tablespoon Butter</button>

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