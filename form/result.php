<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Resultados</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

</head>
<body>
    <div class="container">
        <h1>Seus Resultados</h1>
        <p><b>Pontuação:</b> A pontuação máxima na escala total é 350 pontos.<br>A pontuação máxima em cada subescala é 50 pontos.<br>A pontuação em cada dimensão ou subescala varia entre 10 e 50.<br>A pontuação final na EDPC é calculada através da soma das pontuações em cada subescala, variando entre 70 e 350. Quanto mais elevada a pontuação, maior a disposição para o pensamento crítico.</p>
        <p>Ao final, confira gráficos baseados em seus resultados.</p>
        <br><hr>
        <h2 class="left">EDPC: <?php echo $_SESSION['edpc'] . ' pontos'; ?></h2>
        <h3 class="left"><?php echo $_SESSION['edpc_msg']; ?></h3>
        <p>A EDPC, composta por 35 itens, pretende avaliar sete disposições do pensamento crítico: procura da verdade; mente aberta; mente analítica; sistematicidade; autoconfiança no raciocínio; curiosidade intelectual e maturidade cognitiva</p>
        <br><hr>
        <h2 class="left">Procura da verdade: <?php echo $_SESSION['procura_da_verdade'] . ' pontos'; ?></h2>
        <h3 class="left"><?php echo $_SESSION['procura_da_verdade_msg']; ?></h3>
        <p><b>Procura da verdade</b> - procurar o melhor conhecimento num determinado contexto; ser corajoso para fazer perguntas, honesto e objetivo, mesmo que os resultados não estejam de acordo com os seus interesses próprios ou opiniões preconcebidas. Os que procuram a verdade permanecem receptivos a considerar seriamente factos, razões ou perspectivas adicionais, mesmo que isso implique a mudança de opinião sobre alguma questão. Aqueles que procuram a verdade avaliam novas informações e evidências.</p>
        <br>
        <br><hr>
        <h2 class="left">Mente aberta: <?php echo $_SESSION['mente_aberta'] . ' pontos'; ?></h2>
        <h3 class="left"><?php echo $_SESSION['mente_aberta_msg']; ?></h3>
        <p><b>Mente aberta</b> - tolerar pontos de vista divergentes e estar aberto à possibilidade do seu próprio enviesamento. Valorizar a tolerância e compreensão das crenças e estilos de vida das outras pessoas.</p>       
        <br>
        <br><hr>
        <h2 class="left">Mente analítica: <?php echo $_SESSION['mente_analitica'] . ' pontos'; ?></h2>
        <h3 class="left"><?php echo $_SESSION['mente_analitica_msg']; ?></h3>
        <p><b>Mente analítica</b> - priorizar o uso do raciocínio e de evidências para resolver problemas, antecipando potenciais dificuldades conceituais ou práticas e, consequentemente, estar atento à necessidade de intervir. As pessoas com esta característica tendem a querer antecipar as consequências de eventos e ideias e a usar a razão, em vez de outra estratégia para resolver problemas sérios, assim como quebra-cabeças divertidos.</p>
        <br><hr>
        <h2 class="left">Sistematicidade: <?php echo $_SESSION['sistematicidade'] . ' pontos'; ?></h2>
        <h3 class="left"><?php echo $_SESSION['sistematicidade_msg']; ?></h3>
        <p><b>Sistematicidade (ser sistemático)</b> - ser organizado, focado e cuidadoso no seu questionamento e na procura de abordagens para a resolução de problemas e tomada de decisão. Refere-se à disposição para a organização, a concentração e para se focar de maneira ordenada numa questão, de modo que nenhuma forma específica de organização seja privilegiada. Refere-se à avaliação, foco e diligência, bem como à persistência nos problemas próximos a todos os níveis de complexidade.</p>
        <br><hr>
        <h2 class="left">Autoconfianca no raciocinio: <?php echo $_SESSION['autoconfianca_no_raciocinio'] . ' pontos'; ?></h2>
        <h3 class="left"><?php echo $_SESSION['autoconfianca_no_raciocinio_msg']; ?></h3>
        <p><b>Autoconfiança no raciocínio</b> - a autoconfiança refere-se ao nível de confiança nos próprios processos de raciocínio. As pessoas com esta característica confiam nas suas capacidades de raciocínio e nos juízos que fazem. Também acreditam que os outros confiam nos seus juízos.</p>
        <br><hr>
        <h2 class="left">Curiosidade intelectual: <?php echo $_SESSION['curiosidade_intelectual'] . ' pontos'; ?></h2>
        <h3 class="left"><?php echo $_SESSION['curiosidade_intelectual_msg']; ?></h3>
        <p><b>Curiosidade intelectual</b> - refere-se à disposição de ser curioso ou impaciente para adquirir conhecimentos e aprender novas explicações, mesmo quando a aplicação do conhecimento não é imediatamente evidente.</p>
        <br><hr>
        <h2 class="left">Maturidade cognitiva: <?php echo $_SESSION['maturidade_cognitiva'] . ' pontos'; ?></h2>
        <h3 class="left"><?php echo $_SESSION['maturidade_cognitiva_msg']; ?></h3>
        <p><b>Maturidade cognitiva</b> - é a vontade de fazer julgamentos reflexivos, dando preferência àqueles que permitem responder a problemas, fazer perguntas e tomar decisões, enfatizando que alguns problemas são mal estruturados e algumas situações têm mais de uma opção viável. É a disposição para ser ponderado na tomada de decisões. A pessoa criticamente madura pode ser caracterizada como alguém que aborda os problemas, a investigação e a tomada de decisão com a sensação de que alguns problemas são necessariamente mal formulados, algumas situações admitem mais de uma opção plausível e, muitas vezes, os julgamentos devem ser feitos com base em padrões, contextos e evidências que impedem a certeza. Esta disposição ou atitude tem determinadas implicações para responder a problemas mal estruturados e para tomar decisões complexas envolvendo vários interessados, como tomadas de decisão éticas e orientadas por políticas, particularmente em ambientes pressionados pelo tempo.</p>
        <br><hr><br>
        <nav class="buttons">
            <a class="button-default" onclick="bar();">Barra</a>
            <a class="button-default" onclick="radar();">Radar</a>
            <a class="button-default" onclick="pie();">Pizza</a>
            <a class="button-default" onclick="polar();">Área Polar</a>
        </nav>
        <canvas id="chart"></canvas>
        <br><hr><br>
        <div class="buttons">
            <a href="../index.php" class="button-default">Ir para o início</a>
            <a href="./questions.php" class="start">Refazer teste</a>
        </div>
    </div>
    
    <footer>
        <a href="http://lattes.cnpq.br/1683355695375761" target="_blank">Desenvolvido por Clara Ribeiro - 2024</a>
    </footer>
    <script>
    var labels_name = ["Procura da verdade", "Mente aberta", "Mente analítica", "Sistematicidade", "Autoconfianca no raciocinio", "Curiosidade intelectual", "Maturidade cognitiva"];
    var data_points = [<?php echo $_SESSION['procura_da_verdade'] . ',' . $_SESSION['mente_aberta'] . ',' . $_SESSION['mente_analitica'] . ',' . $_SESSION['sistematicidade'] . ',' . $_SESSION['autoconfianca_no_raciocinio'] . ',' . $_SESSION['curiosidade_intelectual'] . ',' . $_SESSION['maturidade_cognitiva']; ?>];
    var bar_colors = ["violet","purple","blue","green","yellow","orange","red"]

    var currentChart = null;

    function destroyChart() {
        if (currentChart) {
            currentChart.destroy();
        }
    }

    function bar(){
        destroyChart();
        currentChart = new Chart("chart", {
            type: "bar",
            data: {
                labels: labels_name,
                datasets: [{
                    backgroundColor: bar_colors,
                    data: data_points
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                legend: {display: false},
                title: {
                    display: false
                }
            }
        });
    }

    function pie(){
        destroyChart();
        currentChart = new Chart("chart", {
            type: "pie",
            data: {
                labels: labels_name,
                datasets: [{
                    backgroundColor: bar_colors,
                    data: data_points
                }]
            },
            options: {
                title: {
                    display: false
                }
            }
        });
    }

    function radar(){
        destroyChart();
        currentChart = new Chart('chart', {
            type: 'radar',
            data: {
                labels: labels_name,
                datasets: [{
                    backgroundColor: "rgba(0,0,0,0.3)",
                    data: data_points
                }]
            },
            options: {
                scale: {
                ticks: {
                    beginAtZero: true
                }
            },
                legend: {
                    display: false
                }
            }
        });
    }    

    function polar(){
        destroyChart();
        currentChart = new Chart('chart', {
            type: 'polarArea',
            data: {
                labels: labels_name,
                datasets: [{
                    label: 'Seu resultado',
                    backgroundColor: bar_colors,
                    data: data_points
                }]
            }
        });
    }
    
    bar();

    </script>
</body>
</html>