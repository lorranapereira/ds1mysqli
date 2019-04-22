<?php 

class MedicacaoDAO {
    private function CriaConexao()
    { 
        $conexao = mysqli_connect("localhost","root","","TESTE");
        return $conexao;
    }
    public function inserir($medicacao)
    {                
        $conn = $this->CriaConexao();
        $temp_nome_med = $medicacao->getNome_medicacao();
        $temp_nome_fabri = $medicacao->getNome_fabricante();
        $temp_controle = $medicacao->getControle();
        $temp_quant = $medicacao->getQuantidade();
        $temp_preco = $medicacao->getPreco();

        /*$sql = "INSERT INTO Medicacao (nome_medicacao,codigo,nome_fabricante,controle,quantidade,preco) VALUES ($temp_nome_med,$temp_nome_codigo,$temp_nome_fabri,$temp_controle,$temp_quant,$temp_preco)";


        echo $sql;
        */
        /*if (!mysqli_query($conn,$sql)){
            echo "ERROR";
        } else {
            echo "OK";
        }
        */

        $sql = "INSERT INTO Medicacao (nome_medicacao,nome_fabricante,controle,quantidade,preco) VALUES (?,?,?,?,?)";


        if ($stmt = mysqli_prepare($conn, $sql)) {

            /* bind parameters for markers */
            mysqli_stmt_bind_param($stmt, "sssid", $temp_nome_med,$temp_nome_fabri, $temp_controle, $temp_quant, $temp_preco);
            mysqli_stmt_execute($stmt);
        
        }
        mysqli_close($conn);
    }
    public function deletar($cod){
        $conn = $this->CriaConexao();
        $sql = "DELETE FROM Medicacao WHERE codigo = ?";

        if ($stmt = mysqli_prepare($conn, $sql)) {

            /* bind parameters for markers */
            mysqli_stmt_bind_param($stmt, "i", $cod);
            mysqli_stmt_execute($stmt);
        
        }
        mysqli_close($conn);
    }
    public function alterar($med){
        print_r($med);
        $conn = $this->CriaConexao();
        $temp_nome_med = $med->getNome_medicacao();
        $temp_nome_codigo = $med->getCodigo();
        $temp_nome_fabri = $med->getNome_fabricante();
        $temp_controle = $med->getControle();
        $temp_quant = $med->getQuantidade();
        $temp_preco = $med->getPreco();
        $sql = "UPDATE Medicacao SET nome_medicacao = ?, nome_fabricante = ?, controle = ?,quantidade = ?, preco = ? WHERE codigo = ?";
        echo $sql;
        if ($stmt = mysqli_prepare($conn, $sql)) {

            /* bind parameters for markers */
            mysqli_stmt_bind_param($stmt, "sssidi", $temp_nome_med,$temp_nome_fabri, $temp_controle, $temp_quant, $temp_preco,$temp_nome_codigo);
            mysqli_stmt_execute($stmt);
        
        }

        mysqli_close($conn);
    }
    public function buscar($cod){
        $conn = $this->CriaConexao();
        $sql = "SELECT nome_medicacao,codigo,nome_fabricante,controle,quantidade,preco FROM Medicacao WHERE codigo = ?";
        if ($stmt = mysqli_prepare($conn, $sql)) {

            /* bind parameters for markers */
            mysqli_stmt_bind_param($stmt, "i", $cod);
            mysqli_stmt_execute($stmt);

            mysqli_stmt_bind_result($stmt, $nome, $codigo,$nome_fab, $control, $quant, $preco);
            echo "entrou";

        /* fetch values */
        while (mysqli_stmt_fetch($stmt)) {
             printf ("teste : %s (%d)  (%s) (%s) (%d) (%f)\n", $nome, $codigo, $nome_fab,$control,$quant,$preco);
         }
        
        }


      /*  $resultado = mysqli_query($conn,$sql);
        while($linha = mysqli_fetch_array($resultado)){
            print_r($linha);
        }*/


        mysqli_close($conn);
    }
}
?>