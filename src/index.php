<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Emilys Candy&effect=neon">
    <title>Login Page</title>

</head>

<body>
    <header>
        <h1><i> The Master's Touch</i></h1>
    </header>
    <div class="form-container">
        <h2>Welcome Back! </h2>

        <form action="/pages/haveAccLogic.php" method="post">
            <fieldset>
                <legend>Personal Information</legend>

                <input type="email" name="email" placeholder="email">
                <br>
                <input type="password" name="password" placeholder="password">
                <br>

                <div style="margin: 15px 0;">

                </div>

                <input type="submit" value="login" name="login">
        </form>
        <div class="create-account">
            <p>Don't have an account?</p>
            <a href="/pages/signup.php" class="create-btn">Create Account</a>
        </div>
        </fieldset>
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