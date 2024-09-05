<?php
echo "triángulo rectángulo: <br>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
"<br><br>";

$j = 0;
echo "Números impares:<br>";
while ($j < 20) {
    $j++;
    if ($j % 2 == 0) {
        continue;
    }
    echo "$j ";
}
echo "<br><br>";

$contador = 10;
echo"contador do-while: <br>";
do {
    If($contador != 5){
        echo"$contador ";
    }
    $contador--;
    
} while ($contador >= 1);

echo"<br><br>";