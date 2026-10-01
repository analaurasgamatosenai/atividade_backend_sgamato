<?php
    include "config/conexao.php";

    $id = intval($_GET["id"]);

    $sql = "SELECT * FROM ordens_servico WHERE
            id = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id)
    &stmt->execute();

    $resultado = $stmt->get_result();
    $ordem =$resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Ordem</title>
    <link rel="stylesheet" href="estilo/estilo.css">
<body>
    <div class="containe">
        <h1>Editar Ordem de Serviço</h1>

        <form action="atualizar.php" method="POST">

            <input type="hidden" 
            name="id" value="<?php echo $ordem["id"];?>">

            <label>Cliente</label>
            <input type="text" 
            name="cliente" 
            value="<?php echo htmlspecialchar($ordem["Cliente"]);?>" required>

            <label>Equipamento</label>
            <input type="text" 
            nome="equipamento" 
            value="<?php echo htmlspecialchars ($ordem["equipamento"]);?>required">

            <label>Problema</label>
            <textarea name="problema" required>
                <?php echo htmlspecialchars ($ordem["problema"]);?>
            </textarea>

            <label>Data de Entrada</label>
            <input type="date"
            name="data_entrada"
            value="<?php echo $oredem["data_entrada"];?>">

            <label>Status</label>
            <select name="status">
                <option value="Recebido">Recebido</option>
                <option value="Em Análise">Em Análise</option>
                <option value="Em Manutenção">Em Manutenção</option>
                <option value="Concluído">Concluído</option>
            </select>
            <button type="submit">Atualizar</button>
        </form>
    </div>
</body>
</html>