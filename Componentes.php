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
    </style>
</head>
<body>

    <section id="componentes">
    <h2>Componentes do Aprendizado por Reforço</h2>
    <p>O aprendizado por reforço é composto por elementos fundamentais que interagem entre si para permitir que o agente aprenda com a experiência.</p>

    <h3> Agente</h3>
    <p>É quem aprende e toma decisões. Pode ser um robô, um programa ou um jogador virtual. O agente interage com o ambiente para atingir um objetivo.</p>

    <h3> Ambiente</h3>
    <p>É onde o agente atua. O ambiente fornece informações (estados) e devolve recompensas com base nas ações do agente.</p>

    <h3> Estado</h3>
    <p>É uma representação da situação atual do ambiente. Por exemplo, a posição de um robô ou a pontuação em um jogo.</p>

    <h3> Ação</h3>
    <p>É a escolha feita pelo agente com base no estado atual. Exemplo: mover-se para a esquerda, acelerar, ou saltar.</p>

    <h3> Recompensa</h3>
    <p>É o valor que o ambiente envia ao agente após uma ação. Indica se a ação foi boa (+) ou ruim (–).</p>

    <h3> Política</h3>
    <p>É a estratégia do agente para escolher ações. Ela pode ser aprendida com o tempo, buscando maximizar as recompensas.</p>

    <h3> Função de Valor</h3>
    <p>É uma previsão de quão bom é um estado ou uma ação para obter recompensas no futuro. Ajuda o agente a tomar melhores decisões.</p>

    <h3> Modelo (opcional)</h3>
    <p>Alguns agentes usam um modelo do ambiente para prever resultados de ações antes de tomá-las, o que permite planejar melhor.</p>
</section>

    <footer class="footer">
        <p>&copy; 2025 Aprendizado por Reforço - Todos os direitos reservados</p>
    </footer>

</body>
</html>