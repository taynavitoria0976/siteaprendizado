<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>componente</title>
    <style>
body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
=======
    <title>Aprendizado por Reforço: Fundamentos e Aplicações</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Roboto:wght@300;400;500&display=swap">
    <style>
        * {
>>>>>>> 8f1919843e01e88288c4c1625762a802ea202fee
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        
        :root {
            --primary: #1a2b40;
            --secondary: #3498db;
            --accent: #e74c3c;
            --light: #ecf0f1;
            --dark: #0d1520;
            --success: #2ecc71;
            --warning: #f39c12;
            --transition: all 0.3s ease;
        }
        
        body {
            background: linear-gradient(135deg, var(--dark), var(--primary));
            color: var(--light);
            min-height: 100vh;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
            line-height: 1.6;
        }
        
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 10% 20%, rgba(52, 152, 219, 0.1) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(46, 204, 113, 0.1) 0%, transparent 20%),
                radial-gradient(circle at 50% 30%, rgba(231, 76, 60, 0.1) 0%, transparent 30%);
            z-index: -1;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        header {
            text-align: center;
            padding: 40px 0 30px;
            position: relative;
        }
<<<<<<< HEAD

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
=======
        
        .logo {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .logo-icon {
            font-size: 3.5rem;
            color: var(--secondary);
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            padding: 20px;
            animation: pulse 3s infinite;
            box-shadow: 0 0 30px rgba(52, 152, 219, 0.3);
        }
        
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(52, 152, 219, 0.5); }
            70% { box-shadow: 0 0 0 25px rgba(52, 152, 219, 0); }
            100% { box-shadow: 0 0 0 0 rgba(52, 152, 219, 0); }
        }
        
        h1, h2, h3, h4 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }
        
        h1 {
            font-size: 3.5rem;
            margin-bottom: 10px;
            background: linear-gradient(90deg, var(--secondary), var(--success));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 0 2px 15px rgba(0, 0, 0, 0.3);
            letter-spacing: 1px;
        }
        
        .subtitle {
            font-size: 1.4rem;
            color: rgba(236, 240, 241, 0.9);
            max-width: 800px;
            margin: 0 auto 30px;
            line-height: 1.7;
            font-weight: 300;
        }
        
        .tabs {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin: 40px 0;
        }
        
        .tab {
            padding: 15px 30px;
            background: rgba(255, 255, 255, 0.08);
            border: 2px solid transparent;
            border-radius: 50px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
>>>>>>> 8f1919843e01e88288c4c1625762a802ea202fee
            font-size: 1.1rem;
        }
        
        .tab:hover, .tab.active {
            background: var(--secondary);
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }
        
        .tab i {
            font-size: 1.3rem;
        }
<<<<<<< HEAD

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
=======
        
        .content-section {
            display: none;
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .content-section.active {
            display: block;
        }
        
        .fundamentals-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-top: 20px;
        }
        
        @media (max-width: 900px) {
            .fundamentals-container {
                grid-template-columns: 1fr;
            }
        }
        
        .content-box {
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.4);
            transition: var(--transition);
            border: 1px solid rgba(255, 255, 255, 0.12);
            position: relative;
            overflow: hidden;
        }
        
        .content-box::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--secondary), var(--success));
        }
        
        .content-box:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
            border-color: var(--secondary);
        }
        
        .content-box h2 {
            display: flex;
            align-items: center;
            gap: 15px;
            color: var(--secondary);
            margin-bottom: 25px;
            font-size: 2rem;
            border-bottom: 2px solid var(--secondary);
            padding-bottom: 15px;
        }
        
        .content-box h2 i {
            background: rgba(52, 152, 219, 0.2);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
        }
        
        .content-box p {
            margin-bottom: 20px;
            color: rgba(236, 240, 241, 0.95);
            font-size: 1.1rem;
            line-height: 1.8;
        }
        
        .content-box ul {
            padding-left: 25px;
            margin-bottom: 25px;
        }
        
        .content-box li {
            margin-bottom: 12px;
            line-height: 1.7;
            position: relative;
            padding-left: 25px;
            font-size: 1.1rem;
        }
        
        .content-box li::before {
            content: "•";
            color: var(--secondary);
            font-size: 1.5rem;
            position: absolute;
            left: 0;
            top: -5px;
        }
        
        .key-concept {
            background: rgba(52, 152, 219, 0.15);
            border-left: 4px solid var(--secondary);
            padding: 20px;
            border-radius: 0 10px 10px 0;
            margin: 25px 0;
        }
        
        .concept-title {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--secondary);
            margin-bottom: 10px;
            font-weight: 600;
>>>>>>> 8f1919843e01e88288c4c1625762a802ea202fee
        }
        
        .examples-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }
        
        .example-card {
            background: rgba(255, 255, 255, 0.06);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.12);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }
        
        .example-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--success), var(--warning));
        }
        
        .example-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
        }
        
        .example-card h3 {
            display: flex;
            align-items: center;
            gap: 15px;
            color: var(--success);
            margin-bottom: 20px;
            font-size: 1.6rem;
        }
        
        .example-card h3 i {
            background: rgba(46, 204, 113, 0.2);
            border-radius: 50%;
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }
        
        .example-card img {
            width: 100%;
            border-radius: 10px;
            margin: 15px 0;
            background: var(--dark);
            min-height: 200px;
            object-fit: cover;
        }
        
        .placeholder-img {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, var(--dark), #223350);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 15px 0;
            color: var(--secondary);
            font-size: 4rem;
        }
        
        .footer {
            text-align: center;
            padding: 40px 0 20px;
            margin-top: 60px;
            color: rgba(236, 240, 241, 0.7);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .footer p {
            margin-bottom: 10px;
            font-size: 1.1rem;
        }
        
        .diagram {
            width: 100%;
            max-width: 800px;
            margin: 30px auto;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            padding: 25px;
        }
        
        .process-steps {
            display: flex;
            justify-content: space-between;
            position: relative;
            margin-top: 40px;
        }
        
        .process-steps::before {
            content: "";
            position: absolute;
            top: 40px;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--secondary);
            z-index: 1;
        }
        
        .step {
            position: relative;
            z-index: 2;
            text-align: center;
            width: 20%;
        }
        
        .step-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(145deg, var(--primary), #223350);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            color: var(--secondary);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border: 3px solid var(--secondary);
        }
        
        .step h4 {
            color: var(--light);
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        
        .step p {
            color: rgba(236, 240, 241, 0.8);
            font-size: 0.95rem;
        }
        
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }
            
            .subtitle {
                font-size: 1.1rem;
            }
            
            .tab {
                padding: 12px 20px;
                font-size: 1rem;
            }
            
            .process-steps {
                flex-direction: column;
                align-items: center;
                gap: 40px;
            }
            
            .process-steps::before {
                display: none;
            }
            
            .step {
                width: 100%;
            }
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
<<<<<<< HEAD

    <header>
        <nav>
        <a href="oque.php">O que é?</a>
        <a href="comofunciona.php">Como Funciona?</a>
        <a href="componentes.php">Componentes</a>
        <a href="exemplo.php">Exemplo</a>
        <a href="#onde-usado">Onde é Usado?</a>
        </nav>
    </header>

=======
>>>>>>> 8f1919843e01e88288c4c1625762a802ea202fee
    <div class="container">
        <header>
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-brain"></i>
                </div>
                <h1>Aprendizado por Reforço</h1>
                <p class="subtitle">
                    A abordagem de machine learning onde agentes aprendem a tomar decisões através de interações com o ambiente
                </p>
            </div>
        </header>

        <div class="tabs">
            <div class="tab active" data-tab="fundamentals">
                <i class="fas fa-cube"></i> Fundamentos
            </div>
            <div class="tab" data-tab="applications">
                <i class="fas fa-laptop-code"></i> Aplicações
            </div>
            <div class="tab" data-tab="process">
                <i class="fas fa-cogs"></i> Processo
            </div>
        </div>

        <!-- Fundamentos Section -->
        <div class="content-section active" id="fundamentals-content">
            <div class="fundamentals-container">
                <div class="content-box">
                    <h2><i class="fas fa-robot"></i> O que é Aprendizado por Reforço?</h2>
                    <p>
                        O Aprendizado por Reforço (RL) é um tipo de machine learning onde um agente aprende a tomar decisões 
                        executando ações em um ambiente e recebendo recompensas como feedback. Diferente de outros paradigmas 
                        de aprendizado, o RL não requer um conjunto de dados pré-classificado - o agente aprende através de 
                        tentativa e erro.
                    </p>
                    
                    <div class="key-concept">
                        <div class="concept-title">
                            <i class="fas fa-lightbulb"></i>
                            <h3>Princípio Fundamental</h3>
                        </div>
                        <p>
                            O agente busca maximizar a recompensa cumulativa ao longo do tempo, desenvolvendo uma política 
                            ótima que mapeia estados para ações. Essa abordagem é inspirada na psicologia comportamental e 
                            na forma como humanos e animais aprendem através de reforço positivo e negativo.
                        </p>
                    </div>
                    
                    <h3>Elementos Essenciais</h3>
                    <ul>
                        <li><strong>Agente</strong>: Entidade que toma decisões e aprende</li>
                        <li><strong>Ambiente</strong>: Contexto onde o agente opera e interage</li>
                        <li><strong>Ações</strong>: Operações que o agente pode executar</li>
                        <li><strong>Estados</strong>: Representação da situação atual do ambiente</li>
                        <li><strong>Recompensas</strong>: Feedback imediato após cada ação</li>
                        <li><strong>Política</strong>: Estratégia que define o comportamento do agente</li>
                    </ul>
                </div>
                
                <div class="content-box">
                    <h2><i class="fas fa-puzzle-piece"></i> Componentes Chave</h2>
                    
                    <h3>Função de Recompensa</h3>
                    <p>
                        Define o objetivo do agente. Uma boa função de recompensa é crucial - recompensas muito esparsas 
                        podem dificultar o aprendizado, enquanto recompensas mal projetadas podem levar a comportamentos 
                        indesejados.
                    </p>
                    
                    <h3>Processo de Decisão Markoviano (MDP)</h3>
                    <p>
                        O framework matemático que formaliza problemas de RL. Um MDP é definido por:
                    </p>
                    <ul>
                        <li>Conjunto de estados (S)</li>
                        <li>Conjunto de ações (A)</li>
                        <li>Função de transição (P(s'|s,a))</li>
                        <li>Função de recompensa (R(s,a,s'))</li>
                        <li>Fator de desconto (γ) - valor entre 0 e 1</li>
                    </ul>
                    
                    <div class="key-concept">
                        <div class="concept-title">
                            <i class="fas fa-bolt"></i>
                            <h3>Exploração vs. Exploração</h3>
                        </div>
                        <p>
                            O dilema fundamental em RL: o agente deve balancear entre explorar novas ações (para descobrir 
                            recompensas desconhecidas) e explorar ações conhecidas (para maximizar recompensas atuais). 
                            Estratégias como ε-greedy e Upper Confidence Bound (UCB) ajudam a gerenciar esse trade-off.
                        </p>
                    </div>
                    
                    <h3>Algoritmos Principais</h3>
                    <ul>
                        <li>Q-Learning (aprendizado livre de modelo)</li>
                        <li>SARSA (aprendizado on-policy)</li>
                        <li>Deep Q-Networks (DQN - combina RL com deep learning)</li>
                        <li>Policy Gradients (otimiza diretamente a política)</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Aplicações Section -->
        <div class="content-section" id="applications-content">
            <div class="examples-container">
                <div class="example-card">
                    <h3><i class="fas fa-gamepad"></i> Jogos</h3>
                    <div class="placeholder-img">
                        <i class="fas fa-chess"></i>
                    </div>
                    <p>
                        O RL revolucionou o desenvolvimento de agentes para jogos complexos. Exemplos notáveis incluem:
                    </p>
                    <ul>
                        <li>AlphaGo e AlphaZero (DeepMind) que derrotaram campeões mundiais de Go</li>
                        <li>Agentes que dominaram jogos da Atari usando apenas pixels como entrada</li>
                        <li>Bots para Dota 2 e StarCraft II que jogam em nível profissional</li>
                    </ul>
                    <p>
                        Esses sistemas aprendem estratégias complexas através de milhões de partidas simuladas.
                    </p>
                </div>
                
                <div class="example-card">
                    <h3><i class="fas fa-robot"></i> Robótica</h3>
                    <div class="placeholder-img">
                        <i class="fas fa-robot"></i>
                    </div>
                    <p>
                        O RL permite que robôs aprendam tarefas complexas de forma autônoma:
                    </p>
                    <ul>
                        <li>Controle de locomoção (caminhar, correr, pular)</li>
                        <li>Manipulação de objetos com destreza</li>
                        <li>Montagem industrial e manuseio de materiais</li>
                        <li>Navegação autônoma em ambientes complexos</li>
                    </ul>
                    <p>
                        Empresas como Boston Dynamics utilizam RL para criar comportamentos robóticos avançados.
                    </p>
                </div>
                
                <div class="example-card">
                    <h3><i class="fas fa-car"></i> Veículos Autônomos</h3>
                    <div class="placeholder-img">
                        <i class="fas fa-car"></i>
                    </div>
                    <p>
                        Sistemas de direção autônoma utilizam RL para:
                    </p>
                    <ul>
                        <li>Tomada de decisão em tempo real</li>
                        <li>Planejamento de trajetória</li>
                        <li>Comportamento defensivo e preventivo</li>
                        <li>Interação com outros veículos e pedestres</li>
                    </ul>
                    <p>
                        Empresas como Waymo e Tesla usam RL em seus sistemas de direção autônoma, aprendendo com 
                        bilhões de quilômetros de dados de direção simulados e reais.
                    </p>
                </div>
                
                <div class="example-card">
                    <h3><i class="fas fa-heartbeat"></i> Saúde</h3>
                    <div class="placeholder-img">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <p>
                        Aplicações médicas inovadoras com RL:
                    </p>
                    <ul>
                        <li>Protocolos personalizados de tratamento para doenças crônicas</li>
                        <li>Dosagem ótima de medicamentos</li>
                        <li>Diagnóstico assistido por IA</li>
                        <li>Controle de próteses robóticas</li>
                        <li>Otimização de recursos em hospitais</li>
                    </ul>
                    <p>
                        Sistemas de RL podem aprender com dados de pacientes para recomendar tratamentos mais eficazes.
                    </p>
                </div>
                
                <div class="example-card">
                    <h3><i class="fas fa-chart-line"></i> Finanças</h3>
                    <div class="placeholder-img">
                        <i class="fas fa-coins"></i>
                    </div>
                    <p>
                        O RL está transformando o setor financeiro:
                    </p>
                    <ul>
                        <li>Algoritmos de trading que aprendem estratégias de mercado</li>
                        <li>Gestão automatizada de portfólios</li>
                        <li>Detecção de fraudes em tempo real</li>
                        <li>Sistemas de recomendação de produtos financeiros</li>
                        <li>Otimização de estratégias de marketing</li>
                    </ul>
                    <p>
                        Empresas como JPMorgan e Goldman Sachs investem pesadamente em soluções baseadas em RL.
                    </p>
                </div>
                
                <div class="example-card">
                    <h3><i class="fas fa-wind"></i> Gerenciamento de Recursos</h3>
                    <div class="placeholder-img">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <p>
                        Aplicações sustentáveis de RL:
                    </p>
                    <ul>
                        <li>Otimização do uso de energia em data centers (Google reduziu 40% do consumo)</li>
                        <li>Controle de redes elétricas inteligentes</li>
                        <li>Gerenciamento de recursos hídricos</li>
                        <li>Agricultura de precisão</li>
                        <li>Logística e cadeias de suprimento</li>
                    </ul>
                    <p>
                        Esses sistemas ajudam a reduzir desperdícios e melhorar a eficiência de recursos naturais.
                    </p>
                </div>
            </div>
        </div>

        <!-- Processo Section -->
        <div class="content-section" id="process-content">
            <div class="content-box">
                <h2><i class="fas fa-cogs"></i> O Processo de Aprendizado</h2>
                <p>
                    O ciclo fundamental do Aprendizado por Reforço envolve uma sequência interativa entre o agente e seu ambiente. 
                    Este processo se repete continuamente até que o agente atinja um nível satisfatório de desempenho ou complete 
                    sua tarefa.
                </p>
                
                <div class="diagram">
                    <h3 style="text-align: center; color: var(--success); margin-bottom: 30px;">
                        <i class="fas fa-sync-alt"></i> Ciclo de Interação em RL
                    </h3>
                    <div class="process-steps">
                        <div class="step">
                            <div class="step-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h4>Observação</h4>
                            <p>O agente percebe o estado atual do ambiente</p>
                        </div>
                        
                        <div class="step">
                            <div class="step-icon">
                                <i class="fas fa-brain"></i>
                            </div>
                            <h4>Decisão</h4>
                            <p>O agente escolhe uma ação baseada em sua política</p>
                        </div>
                        
                        <div class="step">
                            <div class="step-icon">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <h4>Ação</h4>
                            <p>O agente executa a ação no ambiente</p>
                        </div>
                        
                        <div class="step">
                            <div class="step-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>Recompensa</h4>
                            <p>O ambiente fornece feedback imediato</p>
                        </div>
                        
                        <div class="step">
                            <div class="step-icon">
                                <i class="fas fa-sync"></i>
                            </div>
                            <h4>Atualização</h4>
                            <p>O agente ajusta sua política com base na experiência</p>
                        </div>
                    </div>
                </div>
                
                <div class="key-concept">
                    <div class="concept-title">
                        <i class="fas fa-graduation-cap"></i>
                        <h3>Fases do Aprendizado</h3>
                    </div>
                    <p>
                        O processo de aprendizado em RL geralmente passa por três fases distintas:
                    </p>
                    <ul>
                        <li>
                            <strong>Fase Inicial (Exploração Aleatória)</strong>: O agente testa ações aleatoriamente para 
                            mapear o ambiente. O desempenho é baixo e inconsistente.
                        </li>
                        <li>
                            <strong>Fase Intermediária (Exploração Dirigida)</strong>: O agente começa a identificar padrões 
                            e correlacionar ações com recompensas. O desempenho melhora gradualmente.
                        </li>
                        <li>
                            <strong>Fase Avançada (Exploração)</strong>: O agente executa ações ótimas consistentemente, 
                            com exploração mínima para refinamento. O desempenho atinge níveis máximos.
                        </li>
                    </ul>
                </div>
                
                <h3>Desafios no Processo de Aprendizado</h3>
                <ul>
                    <li>
                        <strong>Problemas de Escala</strong>: Ambientes complexos com muitos estados e ações exigem 
                        grande poder computacional
                    </li>
                    <li>
                        <strong>Recompensas Esparsas</strong>: Quando o feedback positivo é raro, o aprendizado se torna lento
                    </li>
                    <li>
                        <strong>Transferência de Conhecimento</strong>: Dificuldade em aplicar aprendizado de uma tarefa para outra
                    </li>
                    <li>
                        <strong>Segurança</strong>: Garantir que o agente não aprenda comportamentos perigosos durante a exploração
                    </li>
                    <li>
                        <strong>Estabilidade</strong>: Manter consistência no aprendizado com redes neurais profundas
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer">
            <p>© 2023 Aprendizado por Reforço | Recursos Educacionais</p>
            <p>Fundamentos e Aplicações Práticas de Reinforcement Learning</p>
        </div>
    </div>

    <script>
        // Tab switching functionality
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                
                // Add active class to clicked tab
                this.classList.add('active');
                
                // Get the tab name
                const tabName = this.getAttribute('data-tab');
                
                // Hide all content sections
                document.querySelectorAll('.content-section').forEach(section => {
                    section.classList.remove('active');
                });
                
                // Show the corresponding content section
                document.getElementById(`${tabName}-content`).classList.add('active');
            });
        });
        
        // Add smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
