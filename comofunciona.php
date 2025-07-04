<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>oque é?</title>
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
            margin-top: 10px;
        }

        nav a {
            display: inline-block;
            color: white;
            padding: 10px 20px;
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
        <h1>como funciona?</h1>
        <nav>
            <a href="oque.php">O que é?</a>
            <a href="comofunciona.php">Como Funciona?</a>
            <a href="componentes.php">Componentes</a>
            <a href="exemplo.php">Exemplo</a>
            <a href="#onde-usado">Onde é Usado?</a>
        </nav>
    </header>

    <div class="container">
        <section id="o-que">
            <h2>O que é Aprendizado por Reforço?</h2>
            <p>O <strong>Aprendizado por Reforço</strong> (Reinforcement Learning) é uma técnica de aprendizado de máquina onde um agente aprende a agir de forma eficaz por meio de tentativa e erro. Ele interage com um ambiente e, a cada ação, recebe uma <strong>recompensa</strong> (positiva ou negativa), que o ajuda a entender quais decisões são melhores ao longo do tempo.</p>
            <p>O aprendizado é guiado por um objetivo: <strong>maximizar as recompensas acumuladas</strong>. Isso permite que o agente aprenda estratégias de forma autônoma, adaptando-se a diferentes situações e ambientes.</p>
            <div class="image-container">
                <img src="tayna1.jpg" alt="Exemplo de aprendizado por reforço" />
            </div>
        </section>

        <section id="como-funciona">
            <h2>Como Funciona?</h2>
            <p>O processo funciona em ciclos repetidos onde o agente interage com o ambiente. A cada passo, ele aprende com suas experiências e melhora suas escolhas. Veja o ciclo:</p>
            <ol>
                <li><strong>Observa o Estado Atual:</strong> O agente percebe a situação em que está.</li>
                <li><strong>Escolhe uma Ação:</strong> Decide o que fazer com base no estado.</li>
                <li><strong>Executa a Ação:</strong> Altera o ambiente com sua decisão.</li>
                <li><strong>Recebe uma Recompensa:</strong> Recebe feedback do ambiente (positivo ou negativo).</li>
                <li><strong>Aprende com a Experiência:</strong> Atualiza sua estratégia para agir melhor no futuro.</li>
            </ol>
            <p>Esse ciclo contínuo é o que permite o aprendizado por reforço. Quanto mais o agente interage, mais ele entende como obter bons resultados.</p>
            <p>Esse método é poderoso porque o agente não precisa saber antecipadamente o que fazer — ele <strong>descobre sozinho</strong> com base nas consequências das suas ações.</p>
        </section>

        <section>
            <h2>Exemplo Prático</h2>
            <p>Imagine um agente em um labirinto: ele começa sem saber o caminho, mas a cada tentativa ele aprende quais direções o aproximam da saída (recompensa positiva) e quais o levam a becos sem saída (recompensa negativa).</p>
            <ul>
                <li><strong>Jogos:</strong> Inteligências artificiais que aprendem a vencer jogos como xadrez, Go e Atari.</li>
                <li><strong>Robótica:</strong> Robôs que aprendem a caminhar, pegar objetos ou evitar obstáculos.</li>
                <li><strong>Carros Autônomos:</strong> Aprendem a dirigir com segurança em diferentes cenários.</li>
            </ul>
        </section>

        <div class="image-container">
            <iframe width="640" height="360" src="https://www.youtube.com/embed/5u8yNEN5arQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <section id="onde-usado">
            <h2>Onde é Usado?</h2>
            <ul>
                <li><strong>Jogos e IA:</strong> Como o AlphaGo, que derrotou campeões humanos.</li>
                <li><strong>Robótica:</strong> Em robôs que aprendem novas tarefas sozinhos.</li>
                <li><strong>Indústria:</strong> Otimização de processos e controle de sistemas complexos.</li>
                <li><strong>Recomendações:</strong> Aprendizado de preferências em plataformas de música, filmes e compras.</li>
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
