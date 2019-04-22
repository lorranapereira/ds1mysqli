<?php
require_once("class.php");
require_once("DAO.php");
echo "POST é".$_POST["medicacao"];
$med = new Medicacao($_POST["medicacao"],$_POST["codigo"],$_POST["fabricante"],$_POST["controle"],$_POST["quantidade"],$_POST["preco"]);
$dmed = new MedicacaoDAO();
$dmed->inserir($med);
$conexao = mysqli_connect("localhost","root","","TESTE");

$query = "SELECT nome_medicacao,codigo,nome_fabricante,controle,quantidade,preco FROM Medicacao";

$resultado = mysqli_query($conexao,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="5">
    <tr>
        <td>nome da medicacao</td>
        <td>codigo</td>
        <td>nome do fabricante</td>
        <td>controle</td>
        <td>Quantidade</td>
        <td>Preço</td>
    </tr>


<?php


while($linha = mysqli_fetch_array($resultado)){
    echo "<tr><td>".$linha['nome_medicacao']."</td><td>".$linha['codigo']."</td><td>".$linha['nome_fabricante']."</td><td>".$linha['controle']."</td><td>".$linha['quantidade']."</td><td>".$linha['preco']."</tr>";
}

mysqli_close();

?>
   </table>
</body>
</html>
