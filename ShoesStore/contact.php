<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Contact Us - The Shoe Spot</title>
  <link rel="stylesheet" href="./contact.css">
</head>

<body>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: #d3d3d3;
      background-size: 400% 400%;
      animation: gradientAnimation 10s ease infinite;
      height: 100vh;
      background: linear-gradient(45deg, #000fff, #b9f2a2, #fef2a2, #095a55);
      background-size: 400% 400%;
      animation: gradientAnimation 10s ease infinite;
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

    section {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      position: relative;
      min-width: 1100px;
      min-height: 550px;
      display: flex;
      z-index: 1000;

    }

    header {
      padding: 1.5rem;
      background-color: #111;
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-evenly;
    }

    nav {
      display: flex;
      gap: 10rem;

    }

    nav a {
      text-decoration: none;
      font-weight: bold;
      font-size: 16px;
      color: #fff;
    }


    .container .contactInfo {
      position: absolute;
      top: 40px;
      width: 350px;
      height: calc(100% - 80px);
      background: #fff38e;
      z-index: 1;
      padding: 40px;
      display: flex;
      justify-content: center;
      flex-direction: column;
      justify-content: space-between;
      box-shadow: 0 20px 25px rgba(0, 0, 0, 0.15);
      border-radius: 22px;
    }

    .container .contactInfo h2 {
      color: #000000;
      font-size: 24px;
      font-weight: 500;
    }

    .container .contactInfo ul.info {
      position: relative;
      margin: 20px 0;
    }

    .container .contactInfo ul.info li {
      position: relative;
      list-style: none;
      display: flex;
      margin: 20px 0;
      cursor: pointer;
      align-items: flex-start;
    }

    .container .contactInfo ul.info li span:nth-child(1) {
      width: 30px;
      min-width: 30px;
    }

    .container .contactInfo ul.info li span a {
      color: #000000;
      text-decoration: none;
      width: 30px;
      min-width: 30px;

    }

    .container .contactInfo ul.info li span:nth-child(1) img {
      max-width: 100%;
      filter: invert(1);
    }

    .container .contactInfo ul.info li span:nth-child(2) {
      color: #000000;
      margin-left: 10px;
      font-weight: 300;
    }

    .container .contactInfo ul.sci {
      position: relative;
      display: flex;
    }

    .container .contactInfo ul.sci li {
      list-style: none;
      margin-right: 15px;
    }

    .container .contactInfo ul.sci li a {
      text-decoration: none;
    }

    .container .contactInfo ul.sci li a img {
      filter: invert(1);
    }

    .container .contactForm {
      position: absolute;
      padding: 70px 50px;
      padding-left: 250px;
      margin-left: 150px;
      width: calc(100% - 150px);
      height: 100%;
      background: #fff;
      box-shadow: 0 50px 50px rgba(0, 0, 0, 0.25);
      border-radius: 22px;
    }

    .container .contactForm h2 {
      color: #0f3959;
      font-size: 24px;
      font-weight: 500;
    }

    .container .contactForm .formBox {
      position: relative;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      padding-top: 30px;
    }

    .container .contactForm .formBox .inputBox {
      position: relative;
      margin-bottom: 35px;
    }

    .container .contactForm .formBox .inputBox.w50 {
      width: 47%;
    }

    .container .contactForm .formBox .inputBox.w100 {
      width: 100%;
    }

    .container .contactForm .formBox .inputBox input,
    .container .contactForm .formBox .inputBox textarea {
      width: 100%;
      resize: none;
      padding: 5px 0;
      font-size: 18px;
      font-weight: 300;
      color: #333;
      border: none;
      outline: none;
      border-bottom: 1px solid #777;
    }

    .container .contactForm .formBox .inputBox textarea {
      height: 120px;
    }

    .container .contactForm .formBox .inputBox span {
      position: absolute;
      left: 0;
      padding: 5px 0;
      pointer-events: none;
      font-size: 18px;
      font-weight: 300;
      transition: 0.3s;
    }

    .container .contactForm .formBox .inputBox input:focus~span,
    .container .contactForm .formBox .inputBox input:valid~span,
    .container .contactForm .formBox .inputBox textarea:focus~span,
    .container .contactForm .formBox .inputBox textarea:valid~span {
      transform: translateY(-20px);
      font-size: 12px;
      font-weight: 400;
      letter-spacing: 1px;
      color: #095a55;
      font-weight: 500;
    }

    .container .contactForm .formBox .inputBox input[type="submit"] {
      position: relative;
      cursor: pointer;
      background: #095a55;
      border-radius: 20px;
      color: #fff;
      border: none;
      max-width: 150px;
      padding: 12px;

    }

    .container .contactForm .formBox .inputBox input[type="submit"]:hover {
      background: #0d9480;
    }

    @media (max-width: 1200px) {
      .container {
        width: 90%;
        min-width: auto;
        margin: 20px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
      }

      .container .contactInfo {
        top: 0;
        height: 550px;
        position: relative;
        box-shadow: none;
        border-radius: 0px;
      }

      .container .contactForm {
        position: relative;
        width: calc(100% - 350px);
        padding-left: 0;
        margin-left: 0;
        padding: 40px;
        height: 550px;
        box-shadow: none;
        border-radius: 0px;
      }
    }

    @media (max-width: 991px) {
      section {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #fff38e;
      }

      section::before {
        display: none;
      }

      .container {
        display: flex;
        flex-direction: column-reverse;
      }

      .container .contactForm {
        width: 100%;
        height: auto;
        border-radius: 0px;
      }

      .container .contactInfo {
        width: 100%;
        height: auto;
        flex-direction: row;
        border-radius: 0px;
      }

      .container .contactInfo ul.sci {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
      }
    }

    @media (max-width: 600px) {
      .container .contactForm {
        padding: 25px;
      }

      .container .contactInfo {
        padding: 25px;
        flex-direction: column;
        align-items: flex-start;
      }

      .container .contactInfo ul.sci {
        margin-top: 40px;
      }

      .container .contactForm .formBox .inputBox.w50 {
        width: 100%;
      }
    }
  </style>

  <header>
    <h1>The Shoe Spot</h1>
    <nav>
      <a href="./index.php">Home</a>
      <a href="./about.php">About Me</a>
      <a href="./contact.php">Contact</a>
    </nav>
  </header>



  <section>
    <div class="container">
      <div class="contactInfo">
        <div>
          <h2>Contact Info</h2>
          <ul class="info">
            <li>
              <span></span>
              <span>Perrelos Street<br>
                Carcar City<br>
                11472</span>
              </span>
            </li>
            <li>
              <span><a href="Email: Sanchez@gmail.com">Sanchez@gmail.com</a></span>
            </li>
            <li>
              <span>09270864403</span>
            </li>

          </ul>
        </div>
      </div>
      <div class="contactForm">
        <h2>Send a Message</h2>
        <div class="formBox">
          <div class="inputBox w50">
            <input type="text" name="" required>
            <span>First Name</span>
          </div>
          <div class="inputBox w50">
            <input type="text" required>
            <span>Last Name</span>
          </div>
          <div class="inputBox w50">
            <input type="email" required>
            <span>Email Address</span>
          </div>
          <div class="inputBox w50">
            <input type="text" required>
            <span>Mobile Number</span>
          </div>
          <div class="inputBox w100">
            <textarea required></textarea>
            <span>Write your message here...</span>
          </div>
          <div class="inputBox w100">
            <input type="submit" value="Send">
          </div>
        </div>
      </div>



  </section>
</body>

</html>
