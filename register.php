<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Project Management System</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
<div class="container">
      <div class="box">
        <h2>Sign Up</h2>
        <form action="register.php" method="POST">
          <div class="input_box">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required />
          </div>

          <div class="input_box">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />
          </div>

		  <div class="input_box">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required />
            <div class="password_checkbox">
              <input type="checkbox" id="show_password" />
              <label for="show_password">Show Password</label>
            </div>
          </div>

          <button class="signup_button" type="submit">Create Account</button>

          <div class="login_link">
            Already have an account? <a href="login.php">Log in</a>
          </div>
        </form>
      </div>
    </div>
    <script>
      const passwordField = document.getElementById("password");
      const showPasswordField = document.getElementById("show_password");

      showPasswordField.addEventListener("change", () => {
        if (showPasswordField.checked) {
          passwordField.type = "text";
        } else {
          passwordField.type = "password";
        }
      });
    </script>
</body>
</html>