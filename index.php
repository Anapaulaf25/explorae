<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Exploraê 🌍</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="container">
    <!-- LOGO -->
    <img src="imagens/logo-explorae.png" alt="Logo Exploraê" style="width: 220px; margin-bottom: 10px;">

    <!-- FRASE ABAIXO DO TÍTULO -->
    <p class="subtitulo">
      Descubra destinos perfeitos pra você, do seu jeitinho! Preencha abaixo e a mágica acontece:
    </p>

    <!-- FORMULÁRIO -->
    <form action="recomendacao.php" method="POST">
      <label for="nome">Seu nome:</label>
      <input type="text" id="nome" name="nome" placeholder="Ex: Maria Aventureira" required>

      <label for="idade">Sua idade:</label>
      <input type="number" id="idade" name="idade" placeholder="Ex: 25" required>

      <label for="orcamento">Seu orçamento (R$):</label>
      <input type="number" id="orcamento" name="orcamento" placeholder="Ex: 2000" required>

      <label for="clima">Clima que você curte:</label>
      <select id="clima" name="clima" required>
        <option value="">Selecione</option>
        <option value="Quente">☀️ Quente</option>
        <option value="Frio">❄️ Frio</option>
        <option value="Moderado">🌤️ Moderado</option>
      </select>

      <label for="tipo_viagem">Tipo de viagem dos sonhos:</label>
      <select id="tipo_viagem" name="tipo_viagem" required>
        <option value="">Selecione</option>
        <option value="Aventura">🏞️ Aventura</option>
        <option value="Cultural">🏛️ Cultural</option>
        <option value="Romântica">💖 Romântica</option>
        <option value="Praia">🏖️ Praia</option>
        <option value="Ecoturismo">🌿 Ecoturismo</option>
      </select>

      <label for="duracao">Quantos dias disponíveis?</label>
      <input type="number" id="duracao" name="duracao" placeholder="Ex: 5" required>

      <button type="submit">Buscar destinos</button>
    </form>
  </div>

</body>
</html>
