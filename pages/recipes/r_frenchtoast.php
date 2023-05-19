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
    <h2 class="subhead">French Toast Sticks</h2>

    <!-- Meal -->
    <section id="mi_meal">
      <img src="/images/frenchtoast.jpg" alt="french toast" class="mi_img">
      <p><strong>DESCRIPTION</strong>: <br><br> French Toast Sticks are a solid option to start your day right! Click to view alternatives for the non-vegan ingredients.</p>
      
      <!-- Meal Ingredients -->
      <div class="mi_vegan">1/4 cup Ground Flaxseed</div>
      <div class="mi_vegan">2 teaspoon of Cinnamon</div>
      <div class="mi_vegan">1/4 cup Nutmeg</div>
      <div class="mi_vegan">1 tablespoon Vanilla</div>
      <button onclick="window.location.href='/pages/alternatives.php';" class="mi_notvegan">1 loaf Bread</button>
      <button onclick="window.location.href='/pages/alternatives.php';" class="mi_notvegan">1 block Silken Tofu</button>
      <button onclick="window.location.href='/pages/alternatives.php';" class="mi_notvegan">2 cups Milk</button>
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