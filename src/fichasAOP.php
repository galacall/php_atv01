<?php
    include_once __DIR__ . "/../vendor/autoload.php";
    use App\model\Agente;

    echo "<h2 class='aop'>Fichas de personagens de Ordem Paranormal: </h2>";
    $oct1 = new Agente("Alice Gutierrez", "Religiosa", "Ocultista Conduíte", 21, "Feminino");
    $oct1->mostrarFichaAOP();
    $comb1 = new Agente("Lucas Catarino de Oliveira", "Vítima", "Combatente Arqueiro", 24, "Masculino");
    $comb1->mostrarFichaAOP();
?>