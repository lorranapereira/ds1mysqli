<?php
require_once("DAO.php");
$dmed = new MedicacaoDAO();
echo $_POST["option"];
if ($_POST["option"] == "Alterar") {
    header("location: index.php?cod=".$_POST["option"]);
}
if ($_POST["option"] == "Inserir") {
    header("location: index.php");

}
if ($_POST["option"] == "Buscar") {
    header("location: cod.php?cod=Buscar");

}
?>
