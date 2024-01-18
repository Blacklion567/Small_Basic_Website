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
      header("Location: index.php");
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
  <title>Log-In | The Shoe Spot</title>

</head>

<body>
  <style>
  * {
    margin: 0;
    padding: 0;
  }

  body {
    background: linear-gradient(45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradientAnimation 20s ease-in-out infinite;

  }

  @keyframes gradientAnimation {
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
  }

  a {
    text-decoration: none;
  }

  .login {
    position: relative;
    width: 350px;
    padding: 30px;
    height: fit-content;
    background-color: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.5);
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
    font-size: 1.8rem;
    color: #fff;
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
    background-color: rgba(255, 255, 255, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.4);
  }

  .login form .input-box input::placeholder {
    color: #fff;
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
    color: #fff;
    font-size: 1.2rem;
  }

  .login form .rembar {
    margin-bottom: 30px;
    width: 100%;
  }

  .login form .rembar input {
    appearance: none;
  }

  .login form .rembar label {
    color: #fff;
    position: relative;
    width: 100%;
    padding-left: 35px;
    font-size: 0.9rem;
  }

  .login form .rembar label::before {
    content: "";
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.2);
  }

  .login form .rembar label::after {
    content: "";
    position: absolute;
    left: 4px;
    top: 50%;
    transform: translateY(-50%);
    width: 14px;
    height: 14px;
    border-radius: 50%;
    background-color: #fff;
    transition: 0.5 ease;
    opacity: 0;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
  }

  .login form .rembar input:checked+label::after {
    opacity: 1;
  }

  .login form button {
    width: 100%;
    border: none;
    padding: 1rem 1rem 1rem 2.7rem;
    border-radius: 10px;
    color: #fff;
    margin-bottom: 30px;
    background-color: #161623;
    border: 1px solid rgba(255, 255, 255, 0.4);
    transition: 0.5s ease;
    cursor: pointer;
    font-weight: 600;
  }

  .login form button:hover {
    background-color: #111;
  }
  </style>

  <body>
    <div class="container">
      <div class="login">
        <h1>Log In</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="loginForm">
          <div class="input-box">
            <input type="text" placeholder="username" name="username" id="username" />
            <i class="fa fa-envelope"></i>
          </div>

          <div class="input-box">
            <input type="password" placeholder="password" name="password" id="password" />
            <i class="fa fa-lock"></i>
          </div>

          <div class="rembar">
            <input id="rembar" type="checkbox">
            <label for="rembar">remember me</label>
          </div>

          <button type="submit">LOGIN</button>

        </form>
      </div>

    </div>

  </body>

</html>



<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <!-- CSS only -->

  <title>Animated Card</title>
</head>


<form action="">


  </div>

  </body>

</html>
