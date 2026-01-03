<?php
session_start();

if (isset($_SESSION["authUser"]) != true) {
  header("Location: /pages/signup.php");
  exit();
}

$name = $_SESSION["authUser"]["name"];
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Master's Touch</title>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Emilys Candy&effect=neon">
</head>

<body>

  <!-- ===== MENU ICON ===== -->
  <header class="top-header">
    <span class="menu-icon" onclick="toggleMenu()">☰</span>
    <div id="cart-icon" onclick="toggleCart()">🛒 <span id="cart-count">0</span></div>
  </header>

  <!-- ===== SIDE MENU ===== -->
  <div id="sideMenu" class="side-menu">
    <span class="close-btn" onclick="toggleMenu()">✖</span>
    <a href="/pages/Homepage.php">Home</a>
    <a href="/pages/signup.php">Sign Up</a>
    <a href="/pages/ContactUs.php">Contact Us</a>
    <a href="/index.php">Logout</a>

    <hr>

    <button onclick="toggleDarkMode()">🌙 Dark Mode</button>
    <button onclick="toggleLanguage()">🌐 Arabic / English</button>
  </div>

  <!-- ===== WELCOME ===== -->
  <main>
    <section>
      <h1><i> The Master's Touch</i></h1>
      <h3>Wlecome <?php echo $name ?> to our store, Here you will find your happiness!</h3>

      <section class="intro">
        <div class="intro-text">
          <p class="intro-paragraph">
            At <strong>The Master's Touch</strong>, we believe that art has the power to transform spaces and souls.
            Our gallery offers a handpicked collection of original paintings and artistic prints,<br>
            crafted by talented local and international artists.
            Whether you're an art collector or simply looking for that perfect piece to complete your space,
            you’ll find inspiration in every brushstroke.
          </p>
        </div>



        <!-- ===== SELECT PAINT ===== -->

        <div class="intro-select">
          <label for="paint">Select Your Favourite</label>

          <select name="paint" id="paint">
            <optgroup label="Famous paintings">
              <option value="#starrynight">Starry Night</option>
              <option value="#GirlwithaPearlEarring">Girl with a Pearl Earring</option>
              <option value="#cafenight">Cafe Night</option>
            </optgroup>
            <optgroup label="Nature life">
              <option value="#beachwithroses">Beach With Roses</option>
              <option value="#Sunflowers">Sunflowers</option>
              <option value="#classic">Classic</option>
              <option value="#teaparty">Tea party</option>
              <option value="#life">Life</option>
              <option value="#girlsinnature">Girls In Natural</option>
              <option value="#motherandson">Mother&Son</option>
            </optgroup>
            <optgroup label="Animals">
              <option value="#whiteswan">White Swan</option>
              <option value="#whitehorse">White Horse</option>
              <option value="#blackhorse">Black Horse</option>
              <option value="#Kitty">Kitty</option>
              <option value="#deer">Deer</option>
              <option value="#bunny">Bunny</option>
              <option value="#dog">Dog</option>
            </optgroup>
            <optgroup label="Mother Land">
              <option value="#Palestinian">Palestinian</option>
              <option value="#woman">Palestinian Woman</option>
              <option value="#hands">Peace hands</option>
              <option value="#Jerusalem">Jerusalem
              </option>
            </optgroup>
          </select>
        </div>

      </section>

      <!-- ===== SHOW PAINTS ===== -->
      <section class="gallery">
        <h3>Find your soulmate board, The lastest updates</h3>

        <h4><i>Famous paintings</i></h4>
        <div class="images">

          <div id="starrynight" class="starrynight">
            <img src="/images/thestarrynight.png" alt="Starry Night" width="200px">
            <p> <i>Starry Night <del>850$</del> 750$</i></p>
            <button class="buy-button" data-id="starrynight" data-name="Starry Night" data-price="750">Buy</button>
          </div>

          <div id="cafenight" class="cafenight">
            <img src="/images/Cafe.png" alt="" width="200px">
            <p> <i>Cafe Night 750$</i></p>
            <button class="buy-button" data-id="cafenight" data-name="Cafe Night" data-price="750">Buy</button>
          </div>

          <div id="GirlwithaPearlEarring" class="GirlwithaPearlEarring">
            <img src="/images/girl.png" alt="Girl with a Pearl Earring" width="200">
            <p> <i>Girl with a Pearl Earring 700$</i></p>
            <button class="buy-button" data-id="GirlwithaPearlEarring" data-name="Girl with a Pearl Earring"
              data-price="700">Buy</button>
          </div>
        </div>
      </section>

      <section>
        <h4><i>Nature life</i></h4>
        <div class="images">


          <div id="motherandson" class="motherandson">
            <img src="/images/TheCollector.png" alt="Mother&Son" width="200">
            <p> <i>Mother&Son 150$</i></p>
            <button class="buy-button" data-id="motherandson" data-name="Mother&Son" data-price="150">Buy</button>

          </div>

          <div id="beachwithroses" class="beachwithroses">
            <img src="/images/see.png" alt="Beach with Roses" width="200">
            <p> <i>Beach with Roses <del>200$</del> 150$ </i></p>
            <button class="buy-button" data-id="beachwithroses" data-name="Beach with Roses"
              data-price="150">Buy</button>
          </div>

          <div id="Sunflowers" class="Sunflowers">
            <img src="/images/Sunflowers.png" alt="Sunflowers" width="200">
            <p> <i>Sunflowers 155$</i></p>
            <button class="buy-button" data-id="Sunflowers" data-name="Sunflowers" data-price="155">Buy</button>
          </div>

          <div id="classic" class="classic">
            <img src="/images/classic.png" alt="Classic" width="200">
            <p> <i>Classic 280$</i></p>
            <button class="buy-button" data-id="classic" data-name="Classic" data-price="280">Buy</button>
          </div>

          <div id="teaparty" class="teaparty">
            <img src="/images/TheTeaParty.png" alt="Tea party" width="200">
            <p> <i>Tea party<br>275$</i></p>
            <button class="buy-button" data-id="teaparty" data-name="Tea party" data-price="275">Buy</button>

          </div>

          <div id="life" class="life">
            <img src="/images/nature1.png" alt="" width="200">
            <p> <i>Life<br>350$</i></p>
            <button class="buy-button" data-id="life" data-name="Life" data-price="350">Buy</button>
          </div>

          <div id="girlsinnature" class="girlsinnature">
            <img src="/images/nature2.png" alt="" width="200">
            <p> <i>Girls In Natural<br>400$</i></p>
            <button class="buy-button" data-id="girlsinnature" data-name="Girls In Natural"
              data-price="400">Buy</button>

          </div>
        </div>

      </section>

      <section>
        <h4><i>Animals</i></h4>
        <div class="images">

          <div id="whiteswan" class="whiteswan">
            <img src="/images/swan.png" alt="White Swan" width="200">
            <p> <i>White Swan 150$</i></p>
            <button class="buy-button" data-id="whiteswan" data-name="White Swan" data-price="150">Buy</button>

          </div>

          <div id="whitehorse" class="whitehorse">
            <img src="/images/whitehorse.png" alt="" width="200">
            <p> <i>White Horse 500$</i></p>
            <button class="buy-button" data-id="whitehorse" data-name="White Horse" data-price="500">Buy</button>

          </div>

          <div id="blackhorse" class="blackhorse">
            <img src="/images/blackhorse.png" alt="" width="200">
            <p> <i>Black Horse 650$</i></p>
            <button class="buy-button" data-id="blackhorse" data-name="Black Horse" data-price="650">Buy</button>
          </div>

          <div id="Kitty" class="Kitty">
            <img src="/images/cat.png" alt="" width="200">
            <p> <i>Kitty 475$</i></p>
            <button class="buy-button" data-id="Kitty" data-name="Kitty" data-price="475">Buy</button>
          </div>

          <div id="deer" class="deer">
            <img src="/images/Deer.png" alt="" width="200">
            <p> <i>Deer 335$</i></p>
            <button class="buy-button" data-id="deer" data-name="Deer" data-price="335">Buy</button>
          </div>

          <div id="bunny" class="bunny">
            <img src="/images/bunny.png" alt="" width="200">
            <p> <i>Bunny 450$</i></p>
            <button class="buy-button" data-id="bunny" data-name="Bunny" data-price="450">Buy</button>
          </div>

          <div id="dog" class="dog">
            <img src="/images/dog.png" alt="" width="200">
            <p> <i>Dog 400$</i></p>
            <button class="buy-button" data-id="dog" data-name="Dog" data-price="400">Buy</button>
          </div>

        </div>
      </section>

      <section>
        <h4><i>Mother Land</i></h4>
        <div class="images">

          <div id="Palestinian" class="Palestinian">
            <img src="/images/p1.png" alt="" width="200">
            <p> <i> Palestinian 500$</i></p>
            <button class="buy-button" data-id="Palestinian" data-name="Palestinian" data-price="500">Buy</button>
          </div>

          <div id="woman" class="woman">
            <img src="/images/p2.png" alt="" width="200">
            <p> <i> Palestinian Woman 650$</i></p>
            <button class="buy-button" data-id="woman" data-name=" Palestinian Woman" data-price="650">Buy</button>
          </div>

          <div id="hands" class="hands">
            <img src="/images/hand.png" alt="" width="200">
            <p> <i>Peace hands 450$</i></p>
            <button class="buy-button" data-id="hands" data-name="Peace hands" data-price="450">Buy</button>
          </div>

          <div id="Jerusalem" class="Jerusalem">
            <img src="/images/p3.png" alt="" width="200">
            <p> <i>Jerusalem 850$</i></p>
            <button class="buy-button" data-id="Jerusalem" data-name="Jerusalem" data-price="850">Buy</button>
          </div>

        </div>
      </section>

      <!-- ===== PAYMENT ===== -->
      <div id="cart-overlay" class="cart-overlay" onclick="toggleCart()"></div>
      <div id="cart-modal" class="cart-modal">
        <h2>Shopping Cart</h2>
        <ul id="cart-items"></ul>
        <p id="cart-total"></p>

        <h3>Payment Information</h3>
        <form id="payment-form">
          <label>Cardholder Name</label>
          <input type="text" placeholder="Name on Card" required>
          <label>Card Number</label>
          <input type="text" placeholder="xxxx-xxxx-xxxx-xxxx" required>
          <label>Payment Method</label>
          <div class="payment-methods">
            <img src="/images/visa.png" alt="Visa" class="payment-icon">
            <img src="/images/PayPal.png" alt="PayPal" class="payment-icon">
            <img src="/images/bank.jpg" alt="Bank Of Palestine" class="payment-icon">
          </div>
          <button type="submit">Pay</button>
        </form>
        <button onclick="toggleCart()">Close</button>
      </div>

      <!-- ===== TEXT BOX ===== -->
      <section class="art">
        <div class="discover">
          <h2>Discover the Beauty of Fine Art</h2>
          <p>
            Our curated selection includes landscapes, abstract art, calligraphy, and portraits, <br>
            each with a story to tell. Every piece is created with passion and precision, <br>
            ensuring uniqueness and emotional value.
          </p>
          <h2>Why Choose The Master's Touch?</h2>
          <p>
            We offer not only exceptional artwork, but also personalized recommendations,
            secure worldwide shipping, and a deep respect for artistic expression.<br>
            Transform your home, office, or gallery space with authentic art that speaks to your soul.
          </p>
          <h2>Let Art Redefine Your Space</h2>
          <p>Whether you’re decorating a home, transforming an office, or curating a gallery,
            The Master’s Touch helps you create an atmosphere that reflects your personality and values.
            Let your walls speak with character, beauty, and emotion—through art that moves, inspires, and endures.
            Step into a world where art isn’t just seen—it’s felt.</p>
        </div>


      </section>

  </main>


  <!-- ===== FOOTER ===== -->
  <footer>
    <fieldset>
      <legend>Contact Us</legend>
      <p>Our Location: Al-Nasser Street, Gaza, Palestine</p>
      <p>Phone: +972599309695</p>
      Contact Us:
      <a href="mailto: wafaawessam2006@gmail.com"> Email</a>
      <a href="https://www.linkedin.com/in/wafaa-obaid-91139a34a/">Linkedin</a>
      <a href="https://github.com/WafaaObaid">Github</a>

      </p>
      <p>&copy; 2025 The Master's Touch. All rights reserved.</p>
      <p><a href="#">Privacy Policy</a></p>
    </fieldset>
  </footer>
  <!-- ===== SCRIPT FILE ===== -->
  <script src="/js/script.js"></script>
</body>


</head>

</html>