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
    <title>Gästeregistrierung</title>
</head>

<body>
    <!--Top Navbar-->
    <?php
    include("./components/navbar_top.php");
    ?>
    <main class="container">
        <h1>Gästeregistrierung</h1>
        <form action="register.php" method="POST">

            <div>
                <div>
                    <h2>Name</h2>
                    <select id="anrede" name="anrede" required>
                        <option>Anrede</option>
                        <option value="keine">keine Anrede</option>
                        <option value="Herr">Herr</option>
                        <option value="Frau">Frau</option>
                    </select>
                </div>
                <div>
                    <input type="text" id="firstName" name="firstName" placeholder="Vorname" required>
                </div>
                <div>
                    <input type="text" id="lastName" name="lastName" placeholder="Nachname" required>
                </div>
            </div>

            <div>
                <h2>E-Mail</h2>
                <input type="email" id="email" name="email" placeholder="E-Mail">
            </div>

            <div>
                <h2>Adresse</h2>
                <div>
                    <input type="text" id="street" name="street" placeholder="Straße" required>
                </div>
                <div>
                    <input type="text" id="houseNumber" name="houseNumber" placeholder="Hausnummer" required>
                </div>
                <div>
                    <input type="number" id="zipCode" name="zipCode" minlength="4" maxlength="5" size="5"
                        placeholder="PLZ" required>

                    <input type="text" id="location" name="location" placeholder="Ort" required>
                </div>
            </div>
            <input type="submit" value="Absenden">
        </form>
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