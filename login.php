<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Login</title>
</head>
<body>
    <!--Top Navbar-->
    <?php
    include("./components/navbar_top.php");
    ?>
    
    <main class="container">
        <h1>Login</h1>
        <form action="login.php" method="POST" class="col-8">
            <label for="userName" class="col-6">User name:</label>
            <input type="text" id="userName" name="userName" class="col-6">
            <label for="password" class="col-6">Password:</label>
            <input type="password" id="password" name="password" class="col-6">
            <input type="submit" value="Login" class="col-12">
        </form>
    </main>
    <!--Bottom Navbar-->
    <?php
    include("./components/navbar_bottom.php");
    ?>
</body>
</html>