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
    <title>Impressum</title>
</head>

<body>
    
    <!--Top Navbar-->
    <?php
    include("./components/navbar_top.php");
    ?>
    <main class="container">
        <h1>Impressum</h1>
        <p>
            Musterfirma GmbH<br>
            Musterstraße 1<br>
            1230 Wien<br>
            Österreich
        </p>
        <h2>Geschäftsführung</h2>
        <p>
            Stephan Pesch
        </p>
        <h2>Kontakt</h2>
        <p>
            <b>E-Mail:</b> <a href="mailto:kontakt@musterfirma.at">kontakt@musterfirma.at</a><br>
            <b>Tel.:</b> +43 1 2345678
        </p>
    </main>
    <!--Bottom Navbar-->
    <?php
    include("./components/navbar_bottom.php");
    ?>

    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>