<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>oque é aprendizado por reforço</title>
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
        <h1>oque é aprendizado por reforço?</h1>
        <nav>
        <a href="oque.php">O que é?</a>
        <a href="comofunciona.php">Como Funciona?</a>
        <a href="componentes.php">Componentes</a>
        <a href="exemplo.php">Exemplo</a>
        </nav>
    </header>
    <div class="container>

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

        <div class="image-container">
            <a href="https://www.example.com" class="btn" target="_blank">Saiba Mais</a>
        </div>

    </div>

    <footer class="footer">
        <p>&copy; 2025 Aprendizado por Reforço - Todos os direitos reservados</p>
    </footer>

</body>
</html>
