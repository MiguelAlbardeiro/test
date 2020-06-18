<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino</title>
    <link rel="stylesheet" href="stylesheet/treino.css">
    <script src = "treino.js"></script>
</head>
<body >

    <header>
     <h1>Formulario para email </h1>
    </header>
    <section>
        <form method="post" name="contact_form" action="inscricao.php">
            Your Name:
            <input type="text" name="name">
            Email Address:
            <input type="text" name="email">
            Message:
            <textarea name="message"></textarea>
            <input type="submit" value="Submit">
        </form>
    </section>
    <footer>
        <p>&copy; CursoemVideo</p>
    </footer>
    <script src="treino.js"></script>
</body>
</html>