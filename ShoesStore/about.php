<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - The Shoe Spot </title>
</head>

<body>
  <style>
  * {
    margin: 0;
    padding: 0;
  }

  body {

    background: linear-gradient(45deg, #d4d4d4, #777777, #353535, #020202);
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

  header {
    background-color: #111;
    color: white;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    padding: 2rem;
  }

  nav {
    display: flex;
    gap: 10rem;
  }

  a {
    text-decoration: none;
    font-weight: bold;
    font-size: 16px;
    color: #fff;
  }


  .about-us-container {
    display: flex;
    justify-content: center;
    align-items: center;
  }


  .image-container img {
    object-fit: contain;
    width: 800px;
    height: 800px;
    background: linear-gradient(45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradientAnimation 10s ease infinite;
    border-radius: 50%;
    margin-right: 5rem;
  }


  .info-container {
    width: 40rem;
    word-wrap: break-word;
    text-wrap: wrap;
    display: flex;
    flex-direction: column;
    gap: 2rem;
  }

  .info-container h1 {
    font-weight: 900;
    color: #ffffff;
    font-family: Impact, 'Arial Narrow Bold', sans-serif;
    font-size: 2rem;
    position: absolute;
    top: 20rem;
    left: 20rem;
  }

  .info-container h2 {
    font-size: 5rem;
    background: #000000;
    background: linear-gradient(to right, #ffffff 12%, #484de7 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-size: 400% 400%;
    animation: gradientAnimation 10s ease infinite;
  }

  .info-container p {
    font-size: 1.5rem;
    background: linear-gradient(to right, #ffffff 5%, #ffffff 35%, #000 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-size: 400% 400%;
    animation: gradientAnimation 15s infinite linear;
  }
  </style>
  </style>
  <header>
    <h1>The Shoe Spot Store</h1>
    <nav>
      <a href="./index.php">Home</a>
      <a href="./about.php">About Me</a>
      <a href="./contact.php">Contact</a>
    </nav>
  </header>

  <div class="about-us-container">
    <div class="image-container">
      <img src="./img/Sanchez.png" alt="Sanchez">
    </div>

    <div class="info-container">
      <h1>About Me: </h1>
      <h2>Marjovim S. Sanchez</h2>
      <p>In the world of small business ownership, the journey from passion to prosperity is both challenging and
        rewarding. By
        combining a genuine love for shoes with strategic planning, financial acumen, and a customer-centric approach, I
        not
        only overcame the struggles but also transformed a dream into a thriving reality. The lessons learned and the
        successes
        achieved along the way have not only shaped the business but have also left an indelible mark on the journey of
        a small
        shoe store owner.</p>
    </div>





</body>

</html>
