<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Postest 4</title>
</head>
<body>
    <section>
        <header>
            <h1 class="logo">My Portofolio</h1>
            <input type="checkbox" id="check">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Me</a></li>
                <li><a href="#">Portofolio</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <label for="check" class="bar"></label>
            <img src="light.png" id="icon">
        </header>
        <main>
            <div class="output">
                <h1>Pengirim                    : <?php echo $_POST['name'] ?></h1><br>
                <h1>E-mail                      : <?php echo $_POST['mail'] ?></h1><br>
                <h1>Nomor Telpon                : <?php echo $_POST['telpon'] ?></h1><br>
                <h1>Nama Project                : <?php echo $_POST['project'] ?></h1><br>
                <h1>Contoh Project Website      : <?php echo $_POST['link'] ?></h1><br>
                <h1>Pesan Pengirim              : <?php echo $_POST['message'] ?></h1>
            </div>
        </main>
        <div class="footer">
            Designed by Syamsir
        </div>
    </section>
<script type="text/javascript" src="scripts.js"></script>
</body>
</html>