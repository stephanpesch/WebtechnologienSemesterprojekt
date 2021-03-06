<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
        <form action="gast_formular.php" method="POST">
            <div class="row g-3">
                <div class="col-12">
                    <label for="anrede" class="form-label">Anrede</label>
                    <select id="anrede" name="anrede" class="form-select <?=$_POST["anrede"] == "invalid" ? : "is-invalid"?>" required>
                        <option value="invalid" selected>Auswählen...</option>
                        <option value="herr">Herr</option>
                        <option value="frau">Frau</option>
                        <option value="keine">keine Anrede</option>
                    </select>
                </div>

                <div class="col-sm-6">
                    <label for="firstName" class="form-label">Vorname</label>
                    <input type="text" id="firstName" name="firstName" class="form-control is-invalid">
                </div>

                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Nachname</label>
                    <input type="text" id="lastName" name="lastName" class="form-control">
                </div>

                <div class="col-12">
                    <label for="email" class="form-label">E-Mail</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="street" class="form-label">Straße</label>
                    <input type="text" id="street" name="street" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="houseNumber" class="form-label">Hausnummer</label>
                    <input type="text" id="houseNumber" name="houseNumber" class="form-control">
                </div>

                <div class="col-md-2">
                    <label for="zipCode">Postleitzahl</label>
                    <input type="text" id="zipCode" name="zipCode" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="location">Ort</label>
                    <input type="text" id="location" name="location" class="form-control">
                </div>
                <button type="submit" value="login" class="btn btn-primary">Absenden</button>
            </div>
        </form>
    </main>

    <?php
        var_dump($_POST);
        if (isset($_POST["login"])) {
            var_dump($_POST);
            echo "<br>";
            echo $_POST["anrede"];
            echo "<br>";
            echo $_POST["firstName"];
            echo "<br>";
            echo $_POST["lastName"];
            echo "<br>";
            echo $_POST["email"];
            echo "<br>";
            echo $_POST["street"];
            echo "<br>";
            echo $_POST["houseNumber"];
            echo "<br>";
            echo $_POST["zipCode"];
            echo "<br>";
            echo $_POST["location"];
        }
    ?>

    <!--Bottom Navbar-->
    <?php
    include("./components/navbar_bottom.php");
    ?>
    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>