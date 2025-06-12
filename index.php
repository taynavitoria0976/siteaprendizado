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
            padding: 0;
        }

        header {
            background-color:rgb(76, 163, 175);
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
        }

        nav a {
            float: left;
            display: block;
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
            margin: 0 auto;
            padding: 20px;
        }
        section {
            margin-bottom: 40px;
        }
        h2 {
            color: #4CAF50;
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
        <a href="#o-que-e">O que é?</a>
        <a href="#como-funciona">Como Funciona?</a>
        <a href="#componentes">Componentes</a>
        <a href="#exemplo">Exemplo</a>
        <a href="#onde-usado">Onde é Usado?</a> 
        </nav>
    </header>

    <div class="container">
        <section>
            <h2>O que é Aprendizado por Reforço?</h2>
            <p>O aprendizado por reforço (RL - Reinforcement Learning) é um tipo de aprendizado de máquina onde um agente aprende a tomar decisões através de tentativas e erros. O objetivo é maximizar as recompensas que o agente recebe por suas ações.</p>
        </section>

        <section>
            <h2>Como Funciona?</h2>
            <p>No aprendizado por reforço, o agente interage com um ambiente. Para cada ação que o agente realiza, ele recebe uma recompensa (positiva ou negativa) e o estado do ambiente é atualizado. Com base nisso, o agente ajusta sua estratégia para maximizar a recompensa ao longo do tempo.</p>
            <div class="image-container">
                <img src="https://via.placeholder.com/600x300?text=Exemplo+de+Aprendizado+por+Refor%C3%A7o" alt="Exemplo de aprendizado por reforço">
            </div>
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
        </section>

        <section>
            <h2>Onde é Usado?</h2>
            <p>O aprendizado por reforço tem várias aplicações práticas, incluindo:</p>
            <ul>
                <li>Jogos e inteligência artificial (como no AlphaGo e outros jogos populares).</li>
                <li>Robôs autônomos e controle de sistemas complexos.</li>
                <li>Otimização de processos industriais e logísticos.</li>
                <li>Recomendação de conteúdos (como em sistemas de recomendação).</li>
            </ul>
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