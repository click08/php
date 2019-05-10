<!--<?php
 
 //codigo php
 echo "hola mundo!";

?>

<?php
$miNumeroPequeno = 12;
$miNumeroGrande = 356;
$miTotal = $miNumeroPequeno + $miNumeroGrande;
echo $miTotal;
?>

<?php
function roll () {
    return mt_rand(1,6);
}
 
echo roll();
?>

<?php
$male = array(
    "William",
    "Henry",
    "Filbert",
    "John",
    "Pat",
);
 
$last = array(
    "Smith",
    "Jones",
    "Winkler",
    "Cooper",
    "Cline",
);


shuffle($male);
shuffle($last);
for ($i = 0; $i <= 3; $i++) {
    echo $male[$i] . ' ' . $last[$i];
}

//$male = explode('\n', file_get_contents('names.female.txt'));
//$last = explode('\n', file_get_contents('names.last.txt'));


?>-->

<!--<?php

$suits = array (
    "Picas", "Corazones", "Tréboles", "Diamantes"
);
 
$faces = array (
    "Dos", "Tres", "Cuatro", "Cinco", "Seis", "Siete", "Ocho",
    "Nueve", "Diez", "J", "Q", "K", "As"
);

$deck = array();
 
foreach ($suits as $suit) {
    foreach ($faces as $face) {
        $deck[] = array ("face"=>$face, "suit"=>$suit);
    }
}

shuffle($deck);
 
$card = array_shift($deck);
 
echo $card['face'] . ' of ' . $card['suit'];

?>-->

<!--<?php

$words = array (
    "gigantes",
    "triángulo",
    "partícula",
    "pajarera",
    "mínimo",
    "inundación"
);


$letters = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o',
'p','q','r','s','t','u','v','w','x','y','z');
$right = array_fill_keys($letters, '.');
$wrong = array();

if (stristr($word, $guess)) {
    $show = '';
    $right[$guess] = $guess;
    $wordletters = str_split($word);
    foreach ($wordletters as $letter) {
        $show .= $right[$letter];
    }
   
} else {
    $show = '';
    $wrong[$guess] = $guess;
    if (count($wrong) == 6) {
        $show = $word;
    } else {
        foreach ($wordletters as $letter) {
            $show .= $right[$letter];
        }
    }
}

?>-->



<?php 
	if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){
		if ($_POST["operador"] == "suma") {
			print ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "resta") {
			print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "multiplicacion") {
			print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "division") {
			print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		}
	} else {
		print("Ingresa alg&uacute;n valor");
		print ('<br /><a href="calculadora.php">Volver</a>');
	}
?>



