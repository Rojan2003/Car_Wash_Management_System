<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Wash Management System</title>
  <link rel="stylesheet" href="../assets/dist/css/login_style.css">
</head>
<body>
  <div class="container">
    <div class="curved-shape"></div>
    <div class="curved-shape2"></div>

    <!-- Login Form -->
    <div class="form-box Login">
      <h2 class="animation" style="--D:0; --S:21">Login</h2>
      <form action="#">
        <div class="input-box animation" style="--D:1; --S:22">
          <input type="text" required>
          <label>Username</label>
          <box-icon type="solid" name="user" color="gray"></box-icon>
        </div>

        <div class="input-box animation" style="--D:2; --S:23">
          <input type="password" required>
          <label>Password</label>
          <box-icon name="lock-alt" type="solid" color="gray"></box-icon>
        </div>

        <div class="input-box animation" style="--D:3; --S:24">
          <button class="btn" type="submit">Login</button>
        </div>

        <div class="regi-link animation" style="--D:4; --S:25">
          <p>Don't have an account? <br> <a href="#" class="SignUpLink">Sign Up</a></p>
        </div>
      </form>
    </div>

    <div class="info-content Login">
      <h2 class="animation" style="--D:0; --S:20">WELCOME BACK!</h2>
      <p class="animation" style="--D:1; --S:21">We are happy to have you with us again. If you need anything, we are here to help.</p>
    </div>

    <!-- Register Form -->
    <div class="form-box Register">
      <h2 class="animation" style="--li:17; --S:0">Register</h2>
      <form action="#">
        <div class="input-box animation" style="--li:18; --S:1">
          <input type="text" required>
          <label>Username</label>
          <box-icon type="solid" name="user" color="gray"></box-icon>
        </div>

        <div class="input-box animation" style="--li:19; --S:2">
          <input type="email" required>
          <label>Email</label>
          <box-icon name="envelope" type="solid" color="gray"></box-icon>
        </div>

        <div class="input-box animation" style="--li:19; --S:3">
          <input type="password" required>
          <label>Password</label>
          <box-icon name="lock-alt" type="solid" color="gray"></box-icon>
        </div>

        <div class="input-box animation" style="--li:20; --S:4">
          <button class="btn" type="submit">Register</button>
        </div>

        <div class="regi-link animation" style="--li:21; --S:5">
          <p>Already have an account? <br> <a href="#" class="SignInLink">Sign In</a></p>
        </div>
      </form>
    </div>

    <div class="info-content Register">
      <h2 class="animation" style="--li:17; --S:0">WELCOME!</h2>
      <p class="animation" style="--li:18; --S:1">We’re delighted to have you here. If you need any assistance, feel free to reach out.</p>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="../assets/js/login_script.js"></script>
</body>
</html>
