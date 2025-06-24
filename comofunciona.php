<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Aprendizado por Reforço</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: rgb(76, 163, 175);
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
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
        .container {
            width: 80%;
            margin-right: 2px;
            margin: 0 auto;
            padding: 20px;
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
            padding: 0,1px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
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
    </style>
</head>
<body>

    <header>
        <nav>
            <a href="oque.php">O que é?</a>
            <a href="#componentes">Componentes</a>
            <a href="exemplo.php">Exemplo</a>
            <a href="#onde-usado">Onde é Usado?</a> 
        </nav>
    </header>

    <div class="container">

        <section id="o-que-e">
            <h2>O que é Aprendizado por Reforço?</h2>
            <p>
                O <strong>Aprendizado por Reforço</strong> (do inglês <i>Reinforcement Learning</i>, RL) é um tipo de aprendizado de máquina em que um agente aprende a tomar decisões de maneira autônoma, interagindo com um ambiente e recebendo feedback em forma de recompensas ou punições.
            </p>
            <p>
                O objetivo principal do aprendizado por reforço é fazer com que o agente maximize suas recompensas acumuladas ao longo do tempo, o que é feito por meio de uma sequência de interações. O aprendizado ocorre de maneira interativa: à medida que o agente executa ações e observa seus efeitos, ele ajusta sua estratégia para melhorar o desempenho e obter melhores resultados.    
            </p>
            <p>
                O objetivo do agente é maximizar a soma das recompensas ao longo do tempo. Isso é feito através de um processo iterativo de tentativa e erro, onde o agente ajusta sua estratégia (chamada de <strong>política</strong>) com base nas recompensas recebidas após cada ação realizada.
            </p>
            <div class="image-container">
                <img src="tayna1.jpg" alt="Exemplo de aprendizado por reforço" />
            </div>
        </section>

        <section>
            <h2>Como Funciona o Aprendizado por Reforço?</h2>

            <p>O Aprendizado por Reforço é um método onde um agente aprende a tomar decisões sozinho através da interação com um ambiente. Ele recebe recompensas ou punições dependendo das ações que executa, e assim vai melhorando suas decisões ao longo do tempo.</p>

            <ol>
                <li><strong>Observa o Estado Atual:</strong> O agente percebe a situação do ambiente em que está.</li>
                <li><strong>Escolhe uma Ação:</strong> Com base no estado, o agente decide o que fazer.</li>
                <li><strong>Executa a Ação:</strong> O agente faz a ação, que altera o ambiente.</li>
                <li><strong>Recebe uma Recompensa:</strong> O agente recebe um feedback sobre a ação, que pode ser positivo ou negativo.</li>
                <li><strong>Atualiza sua Estratégia:</strong> Com base no feedback, o agente ajusta seu modo de agir para melhorar no futuro.</li>
            </ol>

            <p>Esse ciclo se repete muitas vezes, e o agente aprende a escolher as melhores ações para maximizar sua recompensa total.</p>

            <p>Esse tipo de aprendizado é muito útil porque o agente não precisa ser programado para cada situação — ele descobre sozinho o que funciona melhor.</p>

            <p>Aplicações comuns incluem robótica, jogos, carros autônomos e sistemas de recomendação.</p>
        </section>

        <section>
            <h2>Componentes Principais</h2>
            <ul>
                <li><strong>Agente:</strong> O "tomador de decisão", ou sistema que aprende com suas interações com o ambiente.</li>
                <li><strong>Ambiente:</strong> O mundo com o qual o agente interage. O ambiente pode ser qualquer coisa, desde um jogo até sistemas mais complexos como o controle de um robô.</li>
                <li><strong>Ações:</strong> As escolhas que o agente pode fazer. Cada ação afeta o estado do ambiente.</li>
                <li><strong>Recompensas:</strong> Feedback recebido após a ação. O objetivo do agente é maximizar o valor das recompensas acumuladas.</li>
                <li><strong>Política:</strong> A estratégia que o agente usa para decidir suas ações. Ela pode ser aprendida ao longo do tempo.</li>
                <li><strong>Função de Valor:</strong> Mede a "qualidade" de um estado para o agente, ajudando-o a determinar a probabilidade de uma recompensa futura ao tomar uma ação em um determinado estado.</li>
            </ul>
        </section>

        <section>
            <h2>Exemplo Prático</h2>
            <p>Imagine um agente jogando um jogo de labirinto. O agente precisa encontrar a saída. A cada movimento, ele recebe uma recompensa negativa por se afastar da saída e uma recompensa positiva por se aproximar. Ao longo do tempo, ele aprende a encontrar o caminho mais eficiente para a saída.</p>
            <ul>
                <li>Jogos (Ex: Xadrez e Go): Agentes aprendem a jogar sem ajuda externa, apenas jogando contra si mesmos e melhorando com o tempo, como o AlphaZero.</li>
                <li>Jogos de Vídeo (Ex: Atari Games): Agentes treinados para jogar jogos simples, como Space Invaders, aprendem a maximizar a pontuação observando os resultados.</li>
                <li>Robôs (Ex: Andar ou Pegar Objetos): Robôs aprendem a realizar tarefas, como andar ou pegar objetos, recebendo recompensas ou punições baseadas no sucesso ou falha das ações.</li>
            </ul>
        </section>

        <iframe width="640" height="360" src="https://www.youtube.com/embed/5u8yNEN5arQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <section>
    <h2>Como Funciona?</h2>

    <p>O Aprendizado por Reforço é um método onde um agente aprende a tomar decisões sozinho através da interação com um ambiente. Ele recebe recompensas ou punições dependendo das ações que executa, e assim vai melhorando suas decisões ao longo do tempo.</p>

    <ol>
        <li><strong>Observa o Estado Atual:</strong> O agente percebe a situação do ambiente em que está.</li>
        <li><strong>Escolhe uma Ação:</strong> Com base no estado, o agente decide o que fazer.</li>
        <li><strong>Executa a Ação:</strong> O agente faz a ação, que altera o ambiente.</li>
        <li><strong>Recebe uma Recompensa:</strong> O agente recebe um feedback sobre a ação, que pode ser positivo ou negativo.</li>
        <li><strong>Atualiza sua Estratégia:</strong> Com base no feedback, o agente ajusta seu modo de agir para melhorar no futuro.</li>
    </ol>

    <p>Esse ciclo se repete muitas vezes, e o agente aprende a escolher as melhores ações para maximizar sua recompensa total.</p>

    <p>Esse tipo de aprendizado é muito útil porque o agente não precisa ser programado para cada situação — ele descobre sozinho o que funciona melhor.</p>

    <p>Aplicações comuns incluem robótica, jogos, carros autônomos e sistemas de recomendação.</p>
</section>


        <div class="image-container">
            <a href="https://www.example.com" class="btn" target="_blank">Saiba Mais</a>
        </div>

    </div>

    <footer class="footer">
        <p>&copy; 2025 Aprendizado por Reforço - Todos os direitos reservados</p>
    </footer>

</body>
</html>
