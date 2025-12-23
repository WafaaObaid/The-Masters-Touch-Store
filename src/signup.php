<!DOCTYPE html>
<html>
    <head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Emilys Candy&effect=neon">
    </head>
   
    <body class="body">
         <header>
         <h1 ><i> The Master's Touch</i></h1>
         <div class="welcome">
         <p><em>Welcome To Our Store, Sign Up to receive our latest updates and offers
         </em></p>
         </div>
    </header>
        <form class="forming" id="signupForm" action="login.php" method="post">
            <fieldset>
                <legend>Personal Information</legend>
            <div>
           <label>Username</label>
           <input type="text" name= "name" required placeholder="Name">
           </div>
            <br>
            <div>
           <label>Email</label>
           <input type="email" name="email" id="email" placeholder="email">
           </div>
           <br>
           <div>
           <label>Password</label>
           <input type="password" name="password" id="password" required placeholder="password">
           </div>
           <br>
           <div>
           <label>Confirm Password</label>
            <input type="password" id="confirmPassword" required placeholder="Confirm your password">
            </div>
              <br>
            <label>Gender</label>
            <div>
            <input id="m"  type="radio" name="gender" value="Male">
             <label for="m">Male</label>
               </div>
             
               <div>
            <input id="f" type="radio" name="gender" value="Female">
            <label for="f">Female</label>
            </div>

            <div>
                <input id="ch" type="checkbox" name="terms" required>
                <label for="ch">I agree with Terms</label>
            </div>
                <br>
            <input type="submit" value="Save" name="Save" class="button">
            <input type="reset" value="Reset" class="button">

             <div class="create-account">
            <p>Have an account?</p>
            <a href="haveAcc.php" class="account-btn">Go back to your Account</a>
           </fieldset>

              
        </div>
        </form>
             
       
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
               <script src="script2.js"></script>
    </body>
      
</html>

