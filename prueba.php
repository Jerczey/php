 <?php

$obj = new foro3_2();

class foro3_2{

public function __construct() {

echo '<b> ********************** Inserts *********************</b><br>';

// numeros

$numeros=array(); // array para crear un array($numero);

$numero = 2;

$longi = 36;

for ($i=0; $i< $longi ; $i++){

array_push($numeros, $numero);

$numero = $numero +2 ;

//echo ' [ '; echo $i; echo ' ] = '; echo $numeros[$i]. '<br>';

}

//print_r($numeros);

array_push($numeros, 'Ganimedes');

for ($i=0; $i< sizeof($numeros) ; $i++){

echo ' [ '; echo $i; echo ' ] = '; echo $numeros[$i]. '<br>';

}

var_dump($numeros); 

 

}

}

?>


