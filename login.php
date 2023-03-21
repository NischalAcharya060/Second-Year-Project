<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Project Management System</title>
</head>
<body>
<div class="container">
      <div class="box">
        <h2>Login</h2>
        <form action="login.php" method="post">
          <div class="input_box">
            <label>Username</label>
            <input type="text" class="name" required />
          </div>
		  <div class="input_box">
            <label>Password</label>
            <input type="password" class="password" required />

            <div class="password_checkbox">
              <input type="checkbox" id="show_password" />
              <label for="show_password">Show Password</label>
            </div>
          </div>

          <div class="forgot_password"><a href="#">Forgot Password?</a></div>
          <button class="login_button" type="submit">Login</button>
          <div class="signup_link">
            <a href="register.html">Don't have an account?</a>
          </div>
        </form>
      </div>
    </div>
    <script>
      const passwordInput = document.querySelector(".password");
      const showPasswordCheckbox = document.querySelector("#show_password");

      showPasswordCheckbox.addEventListener("change", function () {
        if (this.checked) {
          passwordInput.type = "text";
        } else {
          passwordInput.type = "password";
        }
      });
    </script>
</body>
</html>