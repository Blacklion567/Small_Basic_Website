<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">
  <title>The Shoe Spot</title>
</head>

<body>
  <style>
    html {
      font-family: 'Lato', sans-serif;
      scroll-behavior: smooth;
    }

    * {
      margin: 0;
      padding: 0;
    }

    header {
      position: fixed;
      z-index: 1;
      width: 100%;
      background-color: #111;
      padding: 1.5rem;
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-evenly;

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

    nav a {
      text-decoration: none;
      font-weight: bold;
      font-size: 16px;
      color: #fff;
    }

    #nav {
      background-color: gray;
      padding-top: 5rem;
    }

    .navTop {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .search {
      display: flex;
      align-items: center;
      background-color: gray;
      padding: 10px 20px;
      border-radius: 10px;
    }

    .searchInput {
      border: none;
      background-color: transparent;
    }

    .searchInput::placeholder {
      color: lightgray;
    }

    .limitedOffer {
      font-size: 1.25rem;
      border-bottom: 2px solid #e4ae01;
      cursor: pointer;
    }

    .searchIcon:hover {
      cursor: pointer;
    }

    .navBottom {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .menuItem {
      margin-right: 3.125em;
      margin-top: 2.5em;
      cursor: pointer;
      color: lightgray;
      font-weight: 400;
    }

    .menuItem:hover {
      color: rgb(0, 205, 0);
    }

    .menuItem:hover:nth-child(2) {
      color: rgb(150, 44, 255);
    }

    .menuItem:hover:nth-child(3) {
      color: rgb(0, 174, 174);
    }

    .menuItem:hover:nth-child(4) {
      color: rgb(83, 143, 255);
    }

    .menuItem:hover:nth-child(5) {
      color: rgb(255, 93, 95);
    }

    span {
      cursor: pointer;
    }

    .contactUs {
      color: #000;
    }

    .slider {
      background-color: #111;
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0 85%);
      background-size: 100vw;
      overflow: hidden;
    }

    .sliderWrapper {
      display: flex;
      width: 500vw;
      transition: all 1.5s ease-in-out;
    }

    .sliderItem {
      width: 100vw;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .sliderBgCircle {
      width: 750px;
      height: 750px;
      border-radius: 50%;
      position: absolute;
      background-color: rgba(0, 205, 0, 0.65);
    }

    .sliderImage {
      z-index: 1;
    }

    .sliderTitle {
      position: absolute;
      top: 10%;
      right: 10%;
      font-size: 3.75rem;
      font-weight: 900;
      text-align: right;
      color: white;
      z-index: 1;
    }

    .sliderPrice {
      position: absolute;
      top: 10%;
      left: 5%;
      font-size: 3.75rem;
      font-weight: 300;
      text-align: right;
      color: white;
      border: 1px solid gray;
      z-index: 1;
    }

    .buyButton {
      position: absolute;
      top: 50%;
      right: 10%;
      font-size: 1.875rem;
      font-weight: 900;
      text-align: right;
      color: white;
      border: 1px solid gray;
      background-color: black;
      z-index: 1;
      cursor: pointer;
    }

    .buyButton:hover {
      background-color: white;
      color: black;
    }

    .sliderItem:nth-child(2) .sliderBgCircle {
      background-color: rgba(102, 51, 153, 0.65);
    }

    .sliderItem:nth-child(3) .sliderBgCircle {
      background-color: rgba(0, 128, 128, 0.65);
    }

    .sliderItem:nth-child(4) .sliderBgCircle {
      background-color: rgba(100, 149, 237, 0.65);
    }

    .sliderItem:nth-child(5) .sliderBgCircle {
      background-color: rgba(211, 103, 105, 0.65);
    }

    .sliderItem:nth-child(1) .sliderPrice {
      background-color: #111;
      color: rgba(0, 205, 0);
      padding: 5px;
    }

    .sliderItem:nth-child(2) .sliderPrice {
      background-color: #111;
      color: rgb(150, 44, 255);
      padding: 5px;
    }

    .sliderItem:nth-child(3) .sliderPrice {
      background-color: #111;
      color: rgb(0, 174, 174);
      padding: 5px;
    }

    .sliderItem:nth-child(4) .sliderPrice {
      background-color: #111;
      color: rgb(83, 143, 255);
      padding: 5px;
    }

    .sliderItem:nth-child(5) .sliderPrice {
      background-color: #111;
      color: rgb(255, 93, 95);
      padding: 5px;
    }

    .features {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 50px;
    }

    .feature {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .featureIcon {
      width: 50px;
      height: 50px;
    }

    .featureTitle {
      font-size: 1.25rem;
      font-weight: 600;
      margin: 20px;
    }

    .featureDescription {
      color: gray;
      width: 50%;
      height: 100px;
    }

    .product {
      height: 100vh;
      background: linear-gradient(45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
      background-size: 400% 400%;
      position: relative;
      animation: gradientAnimation 10s ease infinite;
      clip-path: polygon(0 15%, 100% 0, 100% 100%, 0 100%);
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


    .payment {
      width: 500px;
      height: 300px;
      background-color: rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(5px);
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      margin: auto;
      padding: 10px 50px;
      display: none;
      flex-direction: column;
      -webkit-box-shadow: 0px 0px 13px 2px rgba(0, 0, 0, 0.3);
      border-radius: 10px;
    }

    label {
      font-size: 0.875rem;
      font-weight: 300;
    }

    .payInput {
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-bottom: 1px solid gray;
      border-radius: 10px;
      -webkit-box-shadow: 0px 0px 13px 2px rgba(0, 0, 0, 0.3);
    }

    .payInput::placeholder {
      color: lightgray;
    }

    .cardIcons {
      display: flex;
    }

    .cardIcon {
      margin-right: 10px;
    }

    .cardInfo {
      display: flex;
      justify-content: space-between;
    }

    .small {
      width: 25%;
    }

    .payButton {
      position: absolute;
      height: 40px;
      bottom: -40px;
      width: 100%;
      left: 0;
      -webkit-box-shadow: 0px 0px 13px 2px rgba(0, 0, 0, 0.3);
      background-color: rgba(0, 205, 0, 0.95);
      color: white;
      cursor: pointer;
    }

    .payTitle {
      font-size: 1.25rem;
      color: rgb(122, 122, 122);
    }

    .close {
      position: absolute;
      width: 20px;
      height: 20px;
      background-color: rgb(0, 0, 0);
      color: white;
      top: 10px;
      right: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      padding: 2px;
    }

    .productImage {
      width: 50%;
      position: absolute;
      right: 0;
    }

    .productDetails {
      position: absolute;
      margin: 2rem;
      gap: 4rem;
      top: 10%;
      left: 0;
      width: 40%;
      padding: 50px;
    }

    .productTitle {
      font-size: 4.688rem;
      font-weight: 900;
    }

    .productDescription {
      font-style: 24px;
      color: #fff;
      font-weight: 500;
      font-size: 1.5rem;
    }

    .colors,
    .sizes {
      display: flex;
      margin-bottom: 20px;
    }

    .color {
      width: 32px;
      height: 32px;
      border-radius: 5px;
      background-color: black;
      margin-right: 10px;
      cursor: pointer;
    }

    .color:last-child {
      background-color: darkblue;
    }

    .size {
      padding: 5px 20px;
      border: 1px solid black;
      margin-right: 10px;
      cursor: pointer;
      font-size: 1.25rem;
    }

    .productButton {
      float: right;
      padding: 10px 20px;
      background-color: black;
      color: white;
      font-weight: 600;
      cursor: pointer;
    }

    .productButton:hover {
      background-color: white;
      color: black;
    }


    .gallery {
      padding: 50px;
      justify-content: center;
      align-items: center;
      display: flex;
    }

    .galleryItem {
      flex: 1;
      padding: 15px;
    }

    .galleryImage {
      width: 100%;
    }

    footer {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #d3d3d3;
      background: linear-gradient(0deg, #000 24%, #b9a2a2 48%, #b9a2a2 64%, #ffffff 98%);
    }

    .footerLeft {
      padding: 5rem;
      display: inline-flex;
      justify-content: center;
      align-items: center;
      gap: 10rem;
    }

    .footerMenuTitle {
      color: #000;
      font-size: 2rem;
    }

    .footerMenuList {
      padding: 0;
      list-style: none;
    }

    .footerListItem a {
      margin-bottom: 10px;
      color: #fff;
      cursor: pointer;
    }

    .footerListItem a:hover {
      color: #23a6d5;
    }

    .footerInput {
      padding: 5px;
    }

    .footerButton {
      padding: 5px;
      background-color: black;
      color: white;
      cursor: pointer;
    }



    .footerIcons {
      display: flex;
    }

    .footerIcon {
      padding: 0.8rem;
      border-radius: 50%;
      background-color: #0084ff;
      width: 20px;
      height: 20px;
      margin-right: 10px;
      cursor: pointer;
    }

    .copyright {
      font-weight: 300;
      font-size: 0.875rem;
    }

    .footerOwner {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
      border-radius: 118px;
      background: linear-gradient(145deg, #d8d8d8, #ffffff);
      box-shadow: 13px 13px 26px #afafaf,
        -13px -13px 26px #ffffff;

    }

    .footerOwnerSanchez {
      background: linear-gradient(45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
      background-size: 400% 400%;
      position: relative;
      animation: gradientAnimation 10s ease infinite;
      border-radius: 75%;
      height: 20rem;
    }

    .footerInfo {
      display: flex;
      flex-direction: column;
      padding: 2rem;
      gap: 1.5rem;
      border: none;
      background-color: transparent;
      border-radius: 4rem;
    }

    .facebookColor:hover {
      color: #0084ff;
    }


    @media screen and (max-width: 480px) {
      nav {
        padding: 20px;
      }

      .search {
        display: none;
      }

      .navBottom {
        flex-wrap: wrap;
      }

      .menuItem {
        margin: 20px;
        font-weight: 700;
        font-size: 1.25rem;
      }

      .slider {
        clip-path: none;
      }

      .sliderImage {
        width: 90%;
      }

      .sliderBgCircle {
        width: 100%;
        height: 100%;
      }

      .sliderTitle {
        display: none;
      }

      .sliderPrice {
        top: unset;
        bottom: -50;
        left: 0;
        background-color: lightgrey;
        font-size: 2.25rem;
      }

      .buyButton {
        right: 0;
        top: 0;
      }

      .features {
        flex-direction: column;
      }

      .product {
        clip-path: none;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .productImage {
        width: 80%;
      }

      .productDetails {
        width: 100%;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        position: relative;
        top: 0;
      }

      .productTitle {
        font-size: 3.125rem;
        margin: 0;
      }

      .gallery {
        display: none;
      }

      .newSeason {
        flex-direction: column;
      }

      .nsItem:nth-child(2) {
        padding: 50px;
      }

      footer {
        flex-direction: column;
        align-items: center;
      }

      .footerLeft {
        padding: 20px;
        width: 90%;
      }

      .footerRight {
        padding: 20px;
        width: 90%;
        align-items: center;
        background-color: whitesmoke;
      }

      .payment {
        width: 90%;
        padding: 20px;
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


  <div id="nav">
    <div class="navBottom">
      <h3 class="menuItem">AIR FORCE</h3>
      <h3 class="menuItem">JORDAN</h3>
      <h3 class="menuItem">BLAZER</h3>
      <h3 class="menuItem">CRATER</h3>
      <h3 class="menuItem">HIPPIE</h3>
    </div>
  </div>


  <div class="slider">
    <div class="sliderWrapper">
      <div class="sliderItem">
        <img src="./img/air.png" alt="SanchezShoesNike Air Force" class="sliderImage">
        <div class="sliderBgCircle"></div>
        <h1 class="sliderTitle">AIR FORCE <br> NEW <br> SEASON</h1>
        <h2 class="sliderPrice">₱11,940</h2>
        <a href="#product"><button class="buyButton">BUY NOW</button></a>

      </div>
      <div class="sliderItem">
        <img src="./img/jordan.png" alt="SanchezShoesNike Jordan" class="sliderImage">
        <div class="sliderBgCircle"></div>
        <h1 class="sliderTitle">AIR FORCE <br> NEW <br> SEASON</h1>
        <h2 class="sliderPrice">₱8,940</h2>
        <a href="#product"><button class="buyButton">BUY NOW</button></a>

      </div>
      <div class="sliderItem">
        <img src="./img/blazer.png" alt="SanchezShoesNike Blazer" class="sliderImage">
        <div class="sliderBgCircle"></div>
        <h1 class="sliderTitle">AIR FORCE <br> NEW <br> SEASON</h1>
        <h2 class="sliderPrice">₱7,740</h2>
        <a href="#product"><button class="buyButton">BUY NOW</button></a>

      </div>
      <div class="sliderItem">
        <img src="./img/crater.png" alt="SanchezShoesNike Crater" class="sliderImage">
        <div class="sliderBgCircle"></div>
        <h1 class="sliderTitle">AIR FORCE <br> NEW <br> SEASON</h1>
        <h2 class="sliderPrice">₱6,540</h2>
        <a href="#product"><button class="buyButton">BUY NOW</button></a>

      </div>
      <div class="sliderItem">
        <img src="./img/hippie.png" alt="SanchezShoesNike Hippie" class="sliderImage">
        <div class="sliderBgCircle"></div>
        <h1 class="sliderTitle">AIR FORCE <br> NEW <br> SEASON</h1>
        <h2 class="sliderPrice">₱5,940</h2>
        <a href="#product"><button class="buyButton">BUY NOW</button></a>
      </div>
    </div>
  </div>




  <div class="product" id="product">
    <img src="./img/air.png" alt="SanchezShoes" class="productImage">
    <div class="productDetails">
      <h1 class="productTitle">AIR FORCE</h1>
      <h2 class="productPrice">₱11,940</h2>
      <p class="productDescription">Choose these shoes for their versatile style, comfortable fit, durable quality, and
        the unique ability to customize the
        look with interchangeable colors!</p>

      <div class="colors">
        <div class="color"></div>
        <div class="color"></div>
      </div>
      <div class="sizes">
        <div class="size">42</div>
        <div class="size">43</div>
        <div class="size">44</div>
      </div>
      <button class="productButton">BUY NOW</button>
    </div>

    <div class="payment">
      <h1 class="payTitle">Personal Information</h1>
      <label>Name & Surname</label>
      <input type="text" class="payInput" placeholder="SanchezShoes">
      <label>Phone</label>
      <input type="text" class="payInput" placeholder="09270864403">
      <label>Address</label>
      <input type="text" class="payInput" placeholder="Perrelos, Carcar City, Cebu">
      <button class="payButton">Checkout</button>
      <span class="close">X</span>
    </div>
  </div>

  <div class="features">
    <div class="feature">
      <img class="featureIcon" src="./img/gift.png" alt="SanchezShoes">
      <span class="featureTitle">GIFT CARDS</span>
      <span class="featureDescription">Buy gift cards and use coupon codes easily.</span>
    </div>
    <div class="feature">
      <img src="./img/shipping.png" alt="SanchezShoes" class="featureIcon">
      <span class="featureTitle">FREE SHIPPING</span>
      <span class="featureDescription">Free shipping on all orders.</span>
    </div>
    <div class="feature">
      <img class="featureIcon" src="./img/return.png" alt="SanchezShoes">
      <span class="featureTitle">30 DAYS RETURN</span>
      <span class="featureDescription">No question return and easy refund in 14 days.</span>
    </div>
    <div class="feature">
      <img class="featureIcon" src="./img/contact.png" alt="SanchezShoes">
      <a class="featureTitle" href="./contact.php"><span class="contactUs">CONTACT US</span></a>
      <span class="featureDescription">Keep in touch via email and support system.</span>
    </div>
  </div>

  <div class="gallery">
    <div class="galleryItem">
      <h1 class="galleyTitle">Be Yourself</h1>
      <img
        src="https://images.pexels.com/photos/7856965/pexels-photo-7856965.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
        alt="SanchezShoes" class="galleryImage">
    </div>
    <div class="galleryItem">

      <img
        src="https://images.pexels.com/photos/9295809/pexels-photo-9295809.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
        alt="SanchezShoes" class="galleryImage">
      <h1 class="galleryTitle">This is the First Day of Your New Life</h1>
    </div>
    <div class="galleryItem">
      <h1 class="galleryTitle">Just Do it</h1>

      <img
        src="https://images.pexels.com/photos/1040427/pexels-photo-1040427.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
        alt="SanchezShoes" class="galleryImage">
    </div>
  </div>
  <footer>
    <div class="footerLeft">
      <div class="footerMenu">
        <h1 class="footerMenuTitle"></a>About Us</h1>
        <ul class="footerMenuList">
          <li class="footerListItem"><a href="./index.php">Company</a></li>
          <li class="footerListItem"><a href="./contact.php">Contact</a></li>
          <li class="footerListItem"><a href="#product">Buy Now</a></li>
        </ul>
      </div>
      <div class="footerRightMenu">
        <h1 class="footerMenuTitle">Follow Us</h1>
        <div class="footerIcons">
          <img src="./img/facebook.png" alt="SanchezShoes" class="footerIcon">
          <a href="https://www.facebook.com/vimzeee" class="facebookColor">Facebook</a>
        </div>
      </div>
      <div class="footerOwner">
        <a href="https://www.facebook.com/vimzeee"><img src="./img/Sanchez.png" alt="SanchezShoesSanchez"
            class="footerOwnerSanchez"></a>
        <div class="footerInfo">
          <h1>Name: Marjovim S. Sanchez</h1>
          <p>Number: 09270864403</p>
          <p>Location: Perrelos, Carcar City, Cebu</p>
        </div>
      </div>
    </div>
  </footer>


  <script src="script.js"></script>
</body>

</html>
