<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
      </div>
      <div class="back">
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form method="post" action="loginaction.php" onsubmit="return fun()">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" id="email" name="email" placeholder="Enter your email">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Enter your password">
              </div>
              <div class="text"><a href="forgetpassword.php" style="color: black;">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" name="submit" value="Submit">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip" style="color: black;">Sign up now</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Sign Up</div>
        <form method="post" action="registrationaction.php" onsubmit="return fun1()">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" id="name1" name="name" placeholder="Enter your name">
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" id="email1" name="email" placeholder="Enter your email">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" id="password1" name="password" placeholder="Enter your password">
              </div>
              <div class="button input-box">
                <input type="submit" name="submit" value="Submit">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip" style="color: black;">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
  <script type="text/javascript">
    function fun()
    {
      var email= document.getElementById("email").value;
      var password= document.getElementById("password").value;
      if (email=="") 
      {
        alert('Email cannot blank');
        return false;
      }
      if (password=="") 
      {
        alert('Password cannot blank');
        return false;
      }
    }
    function fun1()
    {
      var name1= document.getElementById("name1").value;
      var email1= document.getElementById("email1").value;
      var password1= document.getElementById("password1").value;
      if (name1=="") 
      {
      alert('Name cannot blank');
      return false;
      }
      if (email1=="") 
      {
        alert('Email cannot blank');
        return false;
      }
      if (password1=="") 
      {
        alert('Password cannot blank');
        return false;
      }
      if (password1.length<=8) 
      {
        alert('Password must be 8 digit');
        return false;
      }
    }
    
  </script>
</body>
</html>