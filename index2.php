<?php

use bdd\models\character;
use bdd\models\game;
use Illuminate\Database\Capsule\Manager as DB;

require_once __DIR__ . '/vendor/autoload.php';

$db = new DB();
$db->addConnection(parse_ini_file('src/conf/conf.ini'));
$db->setAsGlobal();
$db->bootEloquent();
ini_set('memory_limit', '-1');
$s="\n<br>";

//Q1
// echo "Noms et decks des personnages du jeu 12342 \n<br>\n<br>";
// foreach (Game::where('id', '=', '12342')->get() as $game) {
//     echo $game->name . $s;
//     foreach ($game->characters as $ch) {
//         echo '--- '.$ch->id . '. ' . $ch->name . ' : '.$ch->deck . $s ;
//     }
//     echo $s;
// }

//Q2
echo "Personnages des jeux dont le nom (du jeu) débute par Mario : \n<br>\n<br>";
foreach (Game::where('name', 'like', 'Mario%')->get() as $game) {
    echo $game->name . $s;
    foreach ($game->characters as $ch) {
        echo '--- '.$ch->id . '. ' . $ch->name . ' : '.$ch->deck . $s ;
    }
    echo $s;
}


//Q3
/*
echo "Jeux developpes par une compagnie dont le nom contient Sony<br>";
foreach (Game::select('id')->get() as $game) {
    echo $game->name . $s;
    foreach ($game->developers as $dev) {
        if($dev->name == "Sony")
        echo '--- '.$dev->id . ' : ' . $dev->name  . $s ;
    }
    echo $s;
}
MARCHE PAS
*/
