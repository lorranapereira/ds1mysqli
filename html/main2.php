<?php
require_once("DAO.php");
require_once("class.php");

$dmed = new MedicacaoDAO();
echo $_GET["cod"];
if ($_GET["cod"] == "Alterar") {
    $med = new Medicacao($_POST["medicacao"],$_POST["fabricante"],$_POST["controle"],intval($_POST["quantidade"]),floatval($_POST["preco"]));
    $med->setCodigo($_POST["codigo"]);
    print_r($med);
    $dmed->alterar($med);
}
if ($_GET["cod"] == "Inserir" ) {
    $med = new Medicacao($_POST["medicacao"],$_POST["fabricante"],$_POST["controle"],intval($_POST["quantidade"]),floatval($_POST["preco"]));
    print_r($med);
    $dmed->inserir($med);
}
if (isset($_POST["codigo"])) {
    $dmed->buscar(intval($_POST["codigo"]));

}
?>
