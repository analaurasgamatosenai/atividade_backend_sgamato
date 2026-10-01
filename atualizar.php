<?php
    inclide "config/conexao.php";
    $id = intval($_POST["id"]);
    $cliente = $_POST["cliente"];
    $equipamento = $_POST["equipamento"];
    $problema = $_POST["problema"];
    $data_entrega = $POST["data_entrega"];
    $status = $_POST["status"];

    $sql = "UPDADTE ordens_servico
            SET cliente= ?
                equipamento=?
                problema=?
                data_entrada=?
                status=?
            WHERE id=?";
    $stmt = $conexao-> prepare($sql)
    $stmt-> bind_param //vai passar os parâmetros de como preencher (string, inteiro etc)
    (
        "sssssi",
        $cliente,
        $equipamento,
        $problema,
        $data_entrega,
        $status,
        $id;
    );

    if($stmt->execute()){
    header("location:index.php");
    exit;
    } else{
        echo "Erro ao atualizar.";
    }
    
?>