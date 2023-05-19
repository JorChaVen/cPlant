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

    <!-- Sign In Section -->
    <form class="acc_pg">
      <h2>Sign In</h2>
      <label for="email">Email: </label>
      <input type="email" id="email" name="email" placeholder="email..." required><br><br>
      <label for="password">Password: </label>
      <input type="password" id="password" name="password" placeholder="password..." required><br><br><br>
      <input type="submit" value="Sign In">
    </form>
    <br>
    
    <!-- Create an Account Section -->
    <form class="acc_create acc_pg">
      <h2>Create an Account</h2>
      <label for="first_name">First Name: </label>
      <input type="text" id="first_name" name="first_name" placeholder="first name..." required><br><br>
      <label for="last_name">Last Name: </label>
      <input type="text" id="last_name" name="last_name" placeholder="last name..." required><br><br>
       <label for="email">Email: </label>
      <input type="email" id="email" name="email" placeholder="email..." required><br><br>
      <label for="password">Password: </label>
      <input type="password" id="password" name="password" placeholder="password..." required><br><br><br>
      <input type="submit" value="Create Account">
    </form>
   

  </section>

  <!-- Bottom Navigation Bar -->

  <nav>
    
    <a href="#" class="nav_btn ani_btn">Search</a>
    <a href="/index.html" class="nav_btn ani_btn mid_btn">Home</a>
    <a href="/pages/account.php" class="nav_btn ani_btn">Account</a>
  </nav>
    
</body>

</html>