<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Toko Baju</title>
</head>
<body>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
	<section>
        <div class="img_box">
            <img src="assets/Image/zayn.jpg">
        </div>
        <div class="content_box">
            <div class="form_box">
                <h2>Login</h2>
                <form action="proses-login.php" method="POST">
                    <div class="input_box">
                        <span>Username</span>
                        <input type="text" name="username" placeholder="username" required>
                    </div>
                    <div class="input_box">
                        <span>Password</span>
                        <input type="password" name="password" placeholder="password" required>
                    </div>
                    <div class="remember">
                        <label><input type="checkbox" name=""> Remember Me </label>
                    </div>
                    <div class="input_box">
                        <input type="submit" value="Sign in" name="login">
                    </div>
                    <div class="input_box">
                        <p>Don' have an account? <a href="#"> Sign up</a></p>
                    </div>
                </form>
                <h3>Follow Us In Social Media</h3>
                <ul class="social">
                    <li><img src="assets/Image/fb2.png"></li>
                    <li><img src="assets/Image/ig2.png"></li>
                    <li><img src="assets/Image/wa2.png"></li>
                </ul>
            </div>
        </div>
    </section>
</body>
</html>