<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendizado por Reforço</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
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

        .container, section {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            flex: 1;
        }

        section {
            margin-bottom: 40px;
        }

        h2 {
            color: rgb(76, 175, 170);
        }

        p {
            line-height: 1.6;
            margin-bottom: 2px;
        }

        .image-container {
            text-align: center;
            margin: 20px 0;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            width: 100%;
            position: relative;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
        }

        .btn:hover {
            background-color: #45a049;
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
    </style>
</head>
<body>

    <section id="como-funciona">
        <h2>Como Funciona o Aprendizado por Reforço?</h2>
        <p>O <strong>Aprendizado por Reforço</strong> funciona por meio da interação entre um <strong>agente</strong> (quem toma as decisões) e um <strong>ambiente</strong> (onde as decisões têm efeito). Esse processo é baseado em <strong>tentativa e erro</strong>, com o agente aprendendo ao longo do tempo qual ação gera os melhores resultados.</p>
        
        <h3>Etapas do Processo:</h3>
        <ul>
            <li><strong>Observação do Estado:</strong> O agente analisa o estado atual do ambiente. Por exemplo, um robô identifica sua posição ou um personagem em um jogo vê o que está ao redor.</li>
            <li><strong>Escolha de uma Ação:</strong> Com base no que observou, o agente escolhe uma ação — como andar, virar, clicar ou mover uma peça.</li>
            <li><strong>Resposta do Ambiente:</strong> O ambiente muda após a ação. Como resposta, o agente recebe uma <strong>recompensa</strong> (se foi uma boa ação) ou uma <strong>penalidade</strong> (se foi ruim).</li>
            <li><strong>Atualização da Estratégia:</strong> O agente usa esse feedback para aprender. Ele atualiza sua <strong>política</strong> (estratégia de ação) tentando escolher ações melhores no futuro.</li>
        </ul>

        <h3>Objetivo:</h3>
        <p>O objetivo do agente é <strong>maximizar a soma das recompensas ao longo do tempo</strong>, ou seja, aprender a fazer escolhas cada vez mais eficazes.</p>
    </section>

    <div class="video-container">
        <iframe width="560" height="315" 
            src="https://www.youtube.com/embed/0cjB_KzYD78" 
            title="Vídeo Aprendizado por Reforço" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>

    <footer class="footer">
        <p>&copy; 2025 Aprendizado por Reforço - Todos os direitos reservados</p>
    </footer>

</body>
</html>
