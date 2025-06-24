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
        <nav>
        <a href="oque.php">O que é?</a>
        <a href="comofunciona.php">Como Funciona?</a>
        <a href="componentes.php">Componentes</a>
        <a href="exemplo.php">Exemplo</a>
        </nav>
    </header>

    <h2>Exemplo Prático: Robô Aprendendo a Andar</h2>
<p>
Imagine um robô que precisa aprender a andar. No início, ele dá passos aleatórios e frequentemente cai. 
A cada vez que ele consegue ficar em pé por mais tempo ou andar em linha reta, ele recebe uma recompensa.
Com o tempo, o robô aprende, por tentativa e erro, quais movimentos são mais eficientes para manter o equilíbrio e continuar andando.
Esse processo de aprendizado, sem intervenção direta, é uma aplicação clássica de Aprendizado por Reforço.
</p>

<h2>Exemplo Prático: Jogo de Vídeo Game</h2>
<p>
Em jogos como Pac-Man ou Space Invaders, um agente controlado por computador pode aprender a jogar sozinho.
Ele começa fazendo movimentos aleatórios, mas aos poucos entende que comer os fantasmas ou evitar ser atingido traz recompensas.
O agente aprende quais ações levam à pontuação mais alta e, com isso, desenvolve estratégias cada vez mais eficazes.
</p>

<h2>Exemplo em Vídeo</h2>
<p>Veja um vídeo explicando visualmente como o aprendizado por reforço funciona em um ambiente simulado:</p>
<div class="video-container" style="text-align: center; margin: 20px 0;">
    <iframe width="560" height="315" 
        src="https://www.youtube.com/embed/Xo86VFpoYYs" 
        title="Exemplo de Aprendizado por Reforço"
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
.