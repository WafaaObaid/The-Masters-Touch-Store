<!DOCTYPE html>
<html>

<head>
   <title>
      Contact Us
   </title>
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Emilys Candy&effect=neon">
</head>

<body class="heart">
   <header>
      <nav>
         <ul class="navbar">
            <li><a href="src/pages/Homepage.php">HomePage</a></li>
            <li><a href="src/pages/signup.php">Sign Up</a> </li>
            <li><a href="src/pages/ContactUs.php">Contact Us</a></li>
         </ul>
      </nav>
      <h1><i> The Master's Touch</i></h1>
   </header>
   <div class="love">
      <p><i>We’d love to hear from you! If you have any questions about our beautiful art pieces, need help choosing the
            perfect painting,<br>
            or want to share your feedback, don’t hesitate to get in touch. Your satisfaction means the world to us<br>
            , and we’re here to make your art shopping experience easy and enjoyable!</i></p>
   </div>


   <form class="form" action="src/pages/Homepage.php" method="get">
      <fieldset>
         <legend>Personal Information</legend>
         <div>
            <lable>Name</lable>
            <input type="text" required placeholder="Name">
         </div>
         <br>
         <div>
            <label>Email</label>
            <input type="email" required placeholder="Email">
         </div>
         <br>
         <div>
            <label>Subject</label>
            <input type="text" required placeholder="Subject">
         </div>
         <br>

         <label>Message</label>
         <div>
            <textarea name="massage" id="" cols="30" rows="10" placeholder="Write your message here"></textarea>
         </div>
         <br>
         <input type="submit" value="Save" class="button">
         <input type="reset" value="Reset" class="button">
      </fieldset>
   </form>


   <br>
   <div class="map">
      <iframe
         src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3401.3658691433097!2d34.442917274594386!3d31.514109774216866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z2KfZhNis2KfZhdi52Kkg2KfZhNin2LPZhNin2YXZitip!5e0!3m2!1sar!2s!4v1747410492663!5m2!1sar!2s"
         width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
         referrerpolicy="no-referrer-when-downgrade" style="border:0;"></iframe>
   </div>

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

</body>

</html>