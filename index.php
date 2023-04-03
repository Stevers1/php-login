<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />
    <title>Login Page</title>
  </head>
  <body>
    <nav class="navbar">
      <div class="links_container">
        <h2 class="navbar__title">Esteban Serrano</h2>
        <p class="p__navbar">HOME</p>
        <p class="p__navbar">PRODUCTS</p>
        <p class="p__navbar">CURRENT SALES</p>
        <p class="p__navbar">MEMBER+</p>
      </div>
      <div class="login_status">
        <p class="p__navbar">SIGN UP</p>
        <div class="login__btn">
          <p class="p__navbar">LOG IN</p>
        </div>
      </div>
    </nav>






    
    <main>
      <form class="sign-up" method="./includes/signup,inc.php">
        <div class="sign_text">
          <h2 class="sign__title">SIGN UP</h2>
          <p>Don't have an account yet? Sign up here</p>
        </div>
        <input class="inpt" name="uid" type="text" placeholder="username" />
        <input class="inpt" type="password" name="pwd" placeholder="Password" />
        <input class="inpt" type="password" name="pwdrepeat" placeholder="Repeat Password" />
        <input class="inpt" name="email" type="email" placeholder="Email" />
        <input class="sign_sub" name="submit" type="submit" value="Sign up" />
      </form>

      <form class="log-in">
        <div class="sign_text">
          <h2 class="sign__title">LOGIN</h2>
          <p>Already have an account? Log in now</p>
        </div>
        <input class="inpt" type="text" name="uid" placeholder="username" />
        <input class="inpt" name="pwd" type="password" placeholder="Password" />

        <input class="sign_sub" name="submit"  type="submit" value="LOGIN" />
      </form>
    </main>
  </body>
</html>
