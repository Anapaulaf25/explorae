<?php
include 'conexao.php';

// Captura os dados do formulário
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$orcamento = $_POST['orcamento'];
$clima = $_POST['clima'];
$tipo_viagem = $_POST['tipo_viagem'];
$duracao = $_POST['duracao'];

// Salva os dados do usuário (opcional)
$sqlUsuario = "INSERT INTO usuarios (nome, idade, orcamento, clima, tipo_viagem, duracao)
               VALUES ('$nome', '$idade', '$orcamento', '$clima', '$tipo_viagem', '$duracao')";
$conn->query($sqlUsuario);

// Busca os destinos compatíveis
$sql = "SELECT * FROM destinos 
        WHERE clima = '$clima' 
        AND tipo_viagem = '$tipo_viagem' 
        AND preco_medio <= $orcamento 
        AND duracao_sugerida <= $duracao";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Recomendações de Destino – Exploraê</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="container">
    <!-- LOGO -->
    <img src="imagens/logo-explorae.png" alt="Logo Exploraê" style="width: 200px; margin-bottom: 10px;">

    <!-- TÍTULO E BOAS-VINDAS -->
    <h1>Exploraê te saúda, <?php echo $nome; ?>! 🧳</h1>
<h2>✨ Preparamos destinos que têm tudo a ver com o seu estilo! Bora ver? 👇</h2>


    <?php if ($result->num_rows > 0): ?>
      <div class="card-container">
        <?php while ($destino = $result->fetch_assoc()): ?>
          <div class="card">
            <img src="<?php echo $destino['imagem_url']; ?>" alt="<?php echo $destino['nome']; ?>">
            <div class="card-info">
              <h3><?php echo $destino['nome']; ?></h3>
              <p><?php echo $destino['descricao']; ?></p>
              <p>🌤️ <strong>Clima:</strong> <?php echo $destino['clima']; ?></p>
              <p>🧭 <strong>Tipo:</strong> <?php echo $destino['tipo_viagem']; ?></p>
              <p>💰 <strong>Preço médio:</strong> R$ <?php echo number_format($destino['preco_medio'], 2, ',', '.'); ?></p>
              <p>🕒 <strong>Duração sugerida:</strong> <?php echo $destino['duracao_sugerida']; ?> dias</p>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
    <p>😕 Ihhh, parece que não achamos o match perfeito dessa vez...<br>
💡 Tente ajustar o orçamento, clima ou o tipo de viagem e explore novas possibilidades!</p>
    <?php endif; ?>

    <!-- BOTÃO DE NOVA BUSCA -->
    <a href="index.php"><button>🔄 Nova busca</button></a>
  </div>

</body>
</html>

<?php $conn->close(); ?>
