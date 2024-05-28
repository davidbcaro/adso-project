<?php
$edad = readline("Ingresa tu edad: ");
if ($edad < 0) {
    echo "Ingresa una edad válida";
}
else if ($edad < 18) {
    echo "Eres menor de edad";
}
else {
    echo "Eres mayor de edad";
}
?>
