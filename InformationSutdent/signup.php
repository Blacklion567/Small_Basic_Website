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
  <title>Sign-Up | Final Project</title>
</head>

<body>
  <style>
  body {
    background: rgb(4, 1, 8);
    background: linear-gradient(9deg, rgba(4, 1, 8, 0.8491771708683473) 0%, rgba(2, 3, 2, 0.9752275910364145) 28%, rgba(106, 100, 30, 0.865983893557423) 97%);
    font-family: 'Poppins', sans-serif;
    color: #fff;
    overflow: hidden;
  }

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .card {
    width: 300px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin: auto;
    padding: 20px;
    background: linear-gradient(15deg, #25ff11, #92e7af, #df2de6, #fa0fe6);
    background-size: 400% 400%;
    animation: animationSliding 10s ease infinite;
    transition: all ease-in-out 0.5s;
  }

  .card:hover {
    filter: drop-shadow(0 15px 2px #ffffff);
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
    background-color: #ccc;
    transform: scale(1.05);
  }

  button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #3f51b5;
    color: white;
    border-radius: 4px;
    border: 0;
    cursor: pointer;
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
