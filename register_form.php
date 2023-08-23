<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h3> Register Now </h3>
            <input type="text" name="name" required placeholder="enter your name">
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="password" name="confirm password" required placeholder="confirm your password">
            <select name="user_type">
              <option value="user"> User </option>
              <option value="admin"> Admin </option>    
</select>
<input type="submit" name="submit" value="register now" class="form-btn">
<p> Already Have an Account? <a href="login_form.php"> Login Now </a> </p>
</form>

</div>



</body>
</html>
