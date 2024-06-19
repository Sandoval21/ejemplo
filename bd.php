
<?php
    $age =35;
    $name = "Jhon";
    is_string($name);
    define('Logo_url','Sin título.jpeg ');

    $output="Hola mi nombre es $name" ;

    $outputAge = match(true)
    {
        $age<10 => "eres un niño ,$name",
        $age<18 => "eres un adolescente ,$name",
        $age<30 => "eres un Adulto  ,$name", 
        default => "ya estas mas muerto, $name",
    };

    $bestLanguajes = ["php","javascript"];
    $bestLanguajes[]="python";
    $bestLanguajes[]="ruby";
?>
<img src="<?= Logo_url ?>" alt="Php LOGO" width="200";

<h1>
    
    <?= $outputAge  ?>
    <h2>"el mejor lenguaje es " <?= $bestLanguajes[0] ?></h2>
    
</h1>

<ul>
    <?php foreach($bestLanguajes as $key  => $languaje):?>

       <li>
        <?= $key +1 . "" .  $languaje ?>
       </li> 
    
    <?php endforeach;?>
</ul> 





<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }
</style>