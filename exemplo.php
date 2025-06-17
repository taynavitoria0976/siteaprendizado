<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aprendizado por Reforço</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      color: #333;
      margin: 0;
      padding: 0 0 60px 0; /* espaço pro footer */
      min-height: 100vh;
      position: relative;
    }

    header {
      background-color: rgb(76, 163, 175);
      color: white;
      text-align: center;
      padding: 20px 0;
    }

    nav {
      overflow: hidden;
      text-align: center;
    }

    nav a {
      float: left;
      display: inline-block;
      color: white;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
      font-size: 1.1rem;
    }

    nav a:hover {
      background-color: #ddd;
      color: black;
    }

    h2 {
      color: rgb(76, 175, 170);
    }

    p {
      line-height: 1.6;
      padding: 0 20px;
    }

    .video-container {
      text-align: center;
      margin: 20px 0;
    }

    .footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px 0;
      width: 100%;
      position: absolute;
      bottom: 0;
      left: 0;
      z-index: -1; /* Coloca atrás do conteúdo */
    }
  </style>
</head>
<body>

  <h2>Exemplo Prático: Robô Aprendendo a Andar</h2>
  <p>
    Imagine um robô que precisa aprender a andar. No início, ele dá passos aleatórios e frequentemente cai. 
    A cada vez que ele consegue ficar em pé por mais tempo ou andar em linha reta, ele recebe uma recompensa.
    Com o tempo, o robô aprende, por tentativa e erro, quais movimentos são mais eficientes para manter o equilíbrio e continuar andando.
  </p>

  <h2>Exemplo Prático: Jogo de Vídeo Game</h2>
  <p>
    Em jogos como Pac-Man ou Space Invaders, um agente controlado por computador pode aprender a jogar sozinho.
    Ele começa fazendo movimentos aleatórios, mas aos poucos entende que comer os fantasmas ou evitar ser atingido traz recompensas.
    O agente aprende quais ações levam à pontuação mais alta e, com isso, desenvolve estratégias cada vez mais eficazes.
  </p>

  <h2>Exemplo em Vídeo</h2>
  <p>Veja um vídeo explicando visualmente como o aprendizado por reforço funciona em um ambiente simulado:</p>
  <div class="video-container">
    <iframe width="640" height="360" src="https://www.youtube.com/embed/ZNxQbr0leeQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <footer class="footer">
    <p>&copy; 2025 Aprendizado por Reforço - Todos os direitos reservados</p>
  </footer>

</body>
</html>
