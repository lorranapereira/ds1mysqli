<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="main2.php" method="post" >
        <label for="">medicaçao</label>
        <input type="text" name="medicacao">
        <?php
        if ($_GET["cod"] == "Alterar") {
            echo "<label for=''>codigo</label>";
            echo "<input type='int' name='codigo'>";

        }
        ?>
        <label for="">fabricaçao</label>
        <input name="fabricante" type="text">
        <label for="">controle</label>
        <input name="controle" type="text">
        <label for="">quantidade</label>
        <input name="quantidade" type="text">
        <label for="">preco</label>
        <input name="preco" type="text">
        <button type="submit" >enviar</button>
    </form>
</body>
</html>