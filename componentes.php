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
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            color: rgb(76, 175, 170);
            margin-top: 20px;
        }

        .componente {
            margin-bottom: 30px;
        }

        p {
            line-height: 1.6;
            margin-bottom: 10px;
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
    </style>
</head>
<body>

    <header>
        <nav>
            <a href="oque.php">O que é?</a>
            <a href="comofunciona.php">Como Funciona?</a>
            <a href="componentes.php">Componentes</a>
            <a href="exemplo.php">Exemplo</a>
            <a href="#onde-usado">Onde é Usado?</a>
        </nav>
    </header>

    <div class="container">
        <h2>Componentes do Aprendizado por Reforço</h2>

        <div class="componente">
            <p><strong>1. Agente:</strong> O agente é quem aprende e toma decisões. Ele é como o “cérebro” do sistema. É o responsável por analisar a situação atual do ambiente e decidir qual ação deve ser tomada. A cada interação com o ambiente, o agente coleta informações, avalia os resultados de suas ações e ajusta seu comportamento com o objetivo de maximizar as recompensas ao longo do tempo. Em um jogo, por exemplo, o agente pode ser o personagem controlado por uma inteligência artificial.</p>
        </div>

        <div class="componente">
            <p><strong>2. Ambiente:</strong> O ambiente é tudo o que está ao redor do agente e com o qual ele interage. É onde as ações são realizadas e onde as consequências dessas ações ocorrem. O ambiente fornece ao agente informações sobre o estado atual e também retorna recompensas ou punições com base no comportamento do agente. Exemplos de ambientes incluem jogos digitais, simuladores físicos ou até o mundo real (como uma sala onde um robô se movimenta).

</p>
        </div>

        <div class="componente">
            <p><strong>3. Estado:</strong> O estado é uma representação da condição atual do ambiente em um determinado momento. Ele descreve o que está acontecendo e ajuda o agente a entender a situação antes de agir. Por exemplo, no caso de um carro autônomo, o estado pode incluir sua velocidade atual, a distância para obstáculos e a presença de sinais de trânsito. O estado é essencial para que o agente possa tomar decisões informadas e eficazes.

</p>
        </div>

        <div class="componente">
            <p><strong>4. Ação:</strong>A ação é a resposta do agente ao estado atual do ambiente. Com base no que ele observa, o agente escolhe uma ação para executar. As ações podem ser simples, como "andar para frente" ou "virar à direita", ou mais complexas, como "planejar uma rota até o destino". Cada ação escolhida pode alterar o estado do ambiente e gerar uma nova recompensa, positiva ou negativa</p>
        </div>

        <div class="componente">
            <p><strong>5. Recompensa:</strong>A recompensa é o retorno que o agente recebe após realizar uma ação. Ela pode ser positiva (como um ponto ganho em um jogo) ou negativa (como uma penalidade por bater em um obstáculo). O objetivo principal do agente é aprender a agir de forma que maximize as recompensas acumuladas. Por isso, a recompensa é um elemento central no processo de aprendizado por reforço, pois ela orienta o agente sobre o que é desejável e o que deve ser evitado.

</p>
        </div>

        <div class="componente">
            <p><strong>6. Política (Policy):</strong>A política é a estratégia que o agente usa para decidir suas ações com base nos estados que ele observa. É como um "plano de ação" que determina o comportamento do agente. Ela pode ser simples, como uma tabela de regras, ou mais complexa, como uma rede neural treinada para prever a melhor ação a ser tomada. Ao longo do tempo, o agente ajusta sua política para melhorar seu desempenho.

</p>
        </div>

        <div class="componente">
            <p><strong>7. Função de Valor:</strong>A política é a estratégia que o agente usa para decidir suas ações com base nos estados que ele observa. É como um "plano de ação" que determina o comportamento do agente. Ela pode ser simples, como uma tabela de regras, ou mais complexa, como uma rede neural treinada para prever a melhor ação a ser tomada. Ao longo do tempo, o agente ajusta sua política para melhorar seu desempenho.

    </p>
        </div>

        <div class="componente">
    <p>Esses componentes — agente, ambiente, estado, ação, recompensa, política e função de valor — trabalham em conjunto para formar a base do aprendizado por reforço. Juntos, eles permitem que um agente aprenda com suas próprias experiências, melhore suas decisões ao longo do tempo e se adapte a diferentes situações por tentativa e erro.</p>
    
    <div class="video-container" style="text-align: center; margin: 30px 0;">
        <iframe width="560" height="315" 
            src="https://www.youtube.com/embed/Xo86VFpoYYs"
            title="Exemplo de Aprendizado por Reforço"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>
</div>

        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2025 Aprendizado por Reforço - Todos os direitos reservados</p>
    </footer>

</body>
</html>
