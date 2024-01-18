<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $username, $hashed_password);
    $stmt->fetch();

    if (password_verify($password, $hashed_password)) {
      session_start();
      $_SESSION["user_id"] = $id;
      header("Location: home.html");
      exit();
    } else {
      echo "Invalid password";
    }
  } else {
    echo "User not found";
  }

  $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Style/login.css">
  <title>Log-In</title>

</head>

<body>
  <style>
  * {
    margin: 0;
    padding: 0;
  }

  body {
    background: linear-gradient(45deg, #d33030, #dd2950, #f31270, #c408ca);
    background-size: 400% 400%;
    animation: animationSliding 10s ease infinite;
    font-family: 'Poppins', sans-serif;

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

  @keyframes animationSliding {
    0% {
      background-position: 0% 50%;
    }

    50% {
      background-position: 100% 50%;
    }

    100% {
      background-position: 0% 50%;
    }
  }

  .container {
    position: relative;
    min-height: 100vh;
    max-width: 100% !important;
    overflow: hidden;
    display: grid;
    place-items: center;
    text-align: center;
  }

  a {
    text-decoration: none;
  }

  .login {
    width: 350px;
    padding: 30px;
    height: fit-content;
    background-color: #ca83cc;
    border: 1px solid #fff;
    border-radius: 15px;
    z-index: 10;
    backdrop-filter: blur(25px);
    box-shadow: 10px 10px 40px rgba(0, 0, 0, 0.2),
      -10px -10px 40px rgba(0, 0, 0, 0.2);
  }

  @media (max-width:400px) {
    .login {
      width: 90%;
    }
  }

  .login h1 {
    font-size: 5rem;
    -webkit-text-stroke: 1px #fff;
    margin-bottom: 40px;
    margin-top: 0;
    text-align: center;
  }

  .login form {
    width: 100%;
    height: 100%;
    outline: none;
    border: none;
  }

  .login form .input-box {
    width: 100%;
    position: relative;
    margin-bottom: 30px;
    display: flex;
  }

  .login form .input-box input {
    width: 100%;
    border: none;
    padding: 1rem 2.7rem 1rem 1rem;
    border-radius: 10px;
    color: #fff;
    background-color: rgba(196, 196, 196, 0.452);
    border: 1px solid rgba(255, 255, 255, 0.4);
  }

  .login form .input-box input::placeholder {
    color: #000000;
    font-size: 0.8rem;
    transition: 0.5s ease;
  }

  .login form .input-box input:focus::placeholder {
    opacity: 0;
  }

  .login form .input-box input:focus {
    outline: none;
  }

  .login form .input-box i {
    position: absolute;
    top: 50%;
    right: 15px;
    transform: translateY(-50%);
    color: #000000;
    font-size: 1.2rem;
  }

  .login form .rembar {
    margin-bottom: 30px;
    width: 100%;
  }

  .login form .rembar input {
    appearance: none;
  }


  .login form button {
    width: 100%;
    border: none;
    padding: 1rem 1rem 1rem 2.7rem;
    border-radius: 10px;
    color: #000000;
    margin-bottom: 30px;
    background-color: #ffffffb9;
    border: 1px solid rgba(255, 255, 255, 0.4);
    transition: 0.5s ease;
    cursor: pointer;
    font-weight: 600;
  }

  .login form button:hover {
    background-color: #ffffff;
  }
  </style>

  <body>
    <div class="container">
      <div class="login">
        <h1>Log In</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF"]); ?>" id="loginForm">
          <div class="input-box">
            <input type="text" placeholder="USERNAME" name="username" id="username" />
            <i class="fa fa-envelope"></i>
          </div>

          <div class="input-box">
            <input type="password" placeholder="PASSWORD" name="password" id="password" />
            <i class="fa fa-lock"></i>
          </div>

          <div class="rembar">
            <input id="rembar" type="checkbox">
          </div>

          <button type="submit">LOGIN</button>

        </form>
      </div>

    </div>

  </body>

</html>
