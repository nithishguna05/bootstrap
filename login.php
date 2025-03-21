<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>keralatourism</title>
  <!-- CSS -->
  <link rel="stylesheet" href="login.css">
  <!-- Boxicons CSS -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <section class="container forms">
    <div class="form login">
      <div class="form-content">
        <header>Login</header>
        <form action="success.php" method="post">
          <div class="field input-field">
            <input type="email" placeholder="Email" class="input">
          </div>
          <div class="field input-field">
            <input type="password" placeholder="Password" class="password">
            <i class='bx bx-hide eye-icon'></i>
          </div>
          <div class="form-link">
            <a href="#" class="forgot-pass">Forgot password?</a>
          </div>
          <div class="field button-field">
            <button>Login</button>
          </div>
        </form>
        <div class="form-link">
          <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
        </div>
      </div>
      <div class="line"></div>
      <div class="media-options">
        <a href="#" class="field facebook">
          <i class='bx bxl-facebook facebook-icon'></i>
          <span>Login with Facebook</span>
        </a>
      </div>
      <div class="media-options">
        <a href="#" class="field google">
          <img src="images/google.png" alt="" class="google-img">
          <span>Login with Google</span>
        </a>
      </div>
    </div>
    <!-- Signup Form -->
    <div class="form signup">
      <div class="form-content">
        <header>Signup</header>
        <form action="#">
          <div class="field input-field">
            <input type="email" placeholder="Email" class="input">
          </div>
          <div class="field input-field">
            <input type="password" placeholder="Create password" class="password">
          </div>
          <div class="field input-field">
            <input type="password" placeholder="Confirm password" class="password">
            <i class='bx bx-hide eye-icon'></i>
          </div>
          <div class="field button-field">
            <button>Signup</button>
          </div>
        </form>
        <div class="form-link">
          <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
        </div>
      </div>
      <div class="line"></div>
      <div class="media-options">
        <a href="#" class="field facebook">
          <i class='bx bxl-facebook facebook-icon'></i>
          <span>Login with Facebook</span>
        </a>
      </div>
      <div class="media-options">
        <a href="#" class="field google">
          <img src="images/google.png" alt="Google" class="google-img">
          <span>Login with Google</span>
        </a>
      </div>
    </div>
  </section>
  <!-- JavaScript -->
  <script>

const forms = document.querySelector(".forms"),
  pwShowHide = document.querySelectorAll(".eye-icon"),
  links = document.querySelectorAll(".link");
// Add click event listener to each eye icon for toggling password visibility
pwShowHide.forEach(eyeIcon => {
  eyeIcon.addEventListener("click", () => {
    let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
    pwFields.forEach(password => {
      if (password.type === "password") { // If password is hidden
        password.type = "text"; // Show password
        eyeIcon.classList.replace("bx-hide", "bx-show"); // Change icon to show state
        return;
      }
      password.type = "password"; // Hide password
      eyeIcon.classList.replace("bx-show", "bx-hide");
    });
});
});
// Add click event listener to each link to toggle between forms
links.forEach(link => {
link.addEventListener("click", e => {
  e.preventDefault(); // Prevent default link behavior
  forms.classList.toggle("show-signup");
});
});

  </script>
</body>
</html>