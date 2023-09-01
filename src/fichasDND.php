 <?php

    include_once __DIR__ . "/../vendor/autoload.php";
    use App\model\Criatura;
    
    echo "<h2 class='dnd'>Fichas de personagens de Dungeons & Dragons: </h2>";
    $lad1 = new Criatura("Nahemah Allighieri", "Tiefling de Dispater", "Criminoso", "Ladino Arcano", 20, "Intersexo");
    $lad1->mostrarFichaDnD();
    $ptr1 = new Criatura("Felícia Wintermare", "Meio-Lobo", "Forasteira", "Patrulheira Vigilante e Paladina dos Corvos", 19, "Feminino");
    $ptr1->mostrarFichaDnD();
    $bard1 = new Criatura("Luthien Lullaby", "Elfo Drow", "Artista", "Barda Feiticeira", 312, "Feminino");
    $bard1->mostrarFichaDnD();
    $barb1 = new Criatura("Tanglar Dunhall", "Meio Orc", "Herói do Povo", "Bárbaro do Arauto da Tempestade", 20, "Masculino");
    $barb1->mostrarFichaDnD();
?>

