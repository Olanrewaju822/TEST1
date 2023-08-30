<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>

    <!-- custom css file link -->
    <link rel="stylesheet" href="index.css">

</head>
<body>
    <div class="form-container">

        <form action="" method="post">
            <h3> Register Now </h3>
            <input type="text" name="name" required placeholder="Enter your name">
            <input type="email" name="email" required placeholder="Enter your email">
            <input type="password" name="password" required placeholder="Enter your password">
            <input type="password" name="cpassword" required placeholder="Confirm your password">
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
