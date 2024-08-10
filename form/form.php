<?php
session_start();

function calculo_pontuacao($questoes) {
    $soma = 0;
    foreach ($questoes as $questao) {
        $soma += $_POST[$questao];
    }
    return round(($soma * 10) / count($questoes));
}
function nivel_subescala($subescala){
    switch (true) {
        case $subescala >= 40:
            $msg = 'Disposição elevada';
            break;
        case $subescala >= 30:
            $msg = 'Disposição positiva';
            break;
        case $subescala >= 20:
            $msg = 'Disposição ambivalente';
            break;
        default:
            $msg = 'Disposição baixa/Oposição';
            break;
    }
    return $msg;
}

if(isset($_POST['submit'])){
    $_SESSION['procura_da_verdade'] = calculo_pontuacao(['q13', 'q19', 'q24', 'q30']);
    $_SESSION['procura_da_verdade_msg'] = nivel_subescala($_SESSION['procura_da_verdade']);
    
    $_SESSION['mente_aberta'] = calculo_pontuacao(['q02', 'q07', 'q20', 'q25']);
    $_SESSION['mente_aberta_msg'] = nivel_subescala($_SESSION['mente_aberta']);
    
    $_SESSION['mente_analitica'] = calculo_pontuacao(['q04', 'q14', 'q26', 'q31']);
    $_SESSION['mente_analitica_msg'] = nivel_subescala($_SESSION['mente_analitica']);
    
    $_SESSION['sistematicidade'] = calculo_pontuacao(['q03', 'q05', 'q08', 'q15', 'q21', 'q27', 'q32']);
    $_SESSION['sistematicidade_msg'] = nivel_subescala($_SESSION['sistematicidade']);
    
    $_SESSION['autoconfianca_no_raciocinio'] = calculo_pontuacao(['q01', 'q09', 'q16', 'q22', 'q33']);
    $_SESSION['autoconfianca_no_raciocinio_msg'] = nivel_subescala($_SESSION['autoconfianca_no_raciocinio']);
    
    $_SESSION['curiosidade_intelectual'] = calculo_pontuacao(['q06', 'q10', 'q12', 'q17', 'q23', 'q28', 'q34']);
    $_SESSION['curiosidade_intelectual_msg'] = nivel_subescala($_SESSION['curiosidade_intelectual']);
    
    $_SESSION['maturidade_cognitiva'] = calculo_pontuacao(['q11', 'q18', 'q29', 'q35']);
    $_SESSION['maturidade_cognitiva_msg'] = nivel_subescala($_SESSION['maturidade_cognitiva']);
    
    
    $_SESSION['edpc'] = $_SESSION['procura_da_verdade'] + $_SESSION['mente_aberta'] + $_SESSION['mente_analitica'] + $_SESSION['sistematicidade'] + $_SESSION['autoconfianca_no_raciocinio'] + $_SESSION['curiosidade_intelectual'] + $_SESSION['maturidade_cognitiva'];

    switch (true) {
        case $_SESSION['edpc'] >= 280:
            $_SESSION['edpc_msg'] = 'Disposição elevada para o PC';
            break;
        case $_SESSION['edpc'] >= 210:
            $_SESSION['edpc_msg'] = 'Disposição positiva para o PC';
            break;
        case $_SESSION['edpc'] >= 140:
            $_SESSION['edpc_msg'] = 'Disposição ambivalente para o PC';
            break;
        default:
            $_SESSION['edpc_msg'] = 'Disposição baixa/Oposição para o PC';
            break;
    }
    header('Location: result.php');
}

?>