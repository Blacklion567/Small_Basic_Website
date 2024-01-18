<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

  $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
  $stmt->bind_param("ss", $username, $password);

  if ($stmt->execute()) {
    header("Location: logIn.php");
    exit();
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign-Up</title>
</head>

<body>
  <style>
    body {
      animation: coloringgradient 15s ease infinite;
      height: 100vh;
      color: #fff;
      overflow: hidden;
      min-width: 0;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      background: linear-gradient(305deg, #663624, #10c2ea, #de22e8, #ffd734);
      background-size: 800% 800%;
      -webkit-animation: AnimationName 0s ease infinite;
      -moz-animation: AnimationName 0s ease infinite;
      -o-animation: AnimationName 0s ease infinite;
      animation: AnimationName 0s ease infinite;
    }

    @-webkit-keyframes AnimationName {
      0% {
        background-position: 0% 43%
      }

      50% {
        background-position: 100% 58%
      }

      100% {
        background-position: 0% 43%
      }
    }

    @-moz-keyframes AnimationName {
      0% {
        background-position: 0% 43%
      }

      50% {
        background-position: 100% 58%
      }

      100% {
        background-position: 0% 43%
      }
    }

    @-o-keyframes AnimationName {
      0% {
        background-position: 0% 43%
      }

      50% {
        background-position: 100% 58%
      }

      100% {
        background-position: 0% 43%
      }
    }

    @keyframes AnimationName {
      0% {
        background-position: 0% 43%
      }

      50% {
        background-position: 100% 58%
      }

      100% {
        background-position: 0% 43%
      }
    }

    .navbar {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;

    }

    .container {
      border: black 10px double;
      background-clip: content-box;
    }

    .card {
      width: 300px;
      padding: 5rem 3rem;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-shadow: 0 4px 5rem rgb(255, 255, 255);
      margin: auto;
      background-color: rgba(0, 0, 0, 0.247);
    }

    .card-body {
      padding: 20px;
    }

    .form-group {
      margin-bottom: 25px;
    }

    input[type="text"],
    input[type="password"] {
      width: 90%;
      padding: 10px;
      font-size: 16px;
      border-radius: 4px;
      border: 1px solid #ccc;
      margin-top: 8px;
    }

    label {
      display: block;
      font-weight: bold;
    }

    button:hover {
      background-color: #2ab300;
      transform: scale(1.05);
    }

    button[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #57b53f;
      color: white;
      border-radius: 4px;
      border: 0;
      cursor: pointer;
    }

    .card-header {
      position: absolute;
      font-size: 20rem;
      color: #000;
      z-index: -1;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-family: Oswald sans-serif;
      text-shadow: 10px 10px #F0F0F0;
    }
  </style>


  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100"
    id="sectionsNav">
    <div class="container">
      <div class="card">
        <div class="card-header">
          <h2>SignUp</h2>
        </div>
        <div class="card-body">
          <form method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF"]); ?>" id="loginForm">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Sign In</button>
          </form>
        </div>
      </div>
    </div>
  </nav>
</body>

</html>
