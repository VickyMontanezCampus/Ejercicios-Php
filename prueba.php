<!-- NOTAS DE CURSO PHP -->
<!-- 1. Tener instalada la extensión de vscode "Php Extension Pack" para que visual asimile el lenguaje de php -->
<!-- PHP como HTML tiene un principio y un final por eso se utiliza etiqueta para abrir y cerrar -->
<?php
/* se puede imprimir en el documento con print o echo */
echo "Hola Mundo";
/* PHP permite leer codigo de HTML */
echo "<h2>Esta es una etiqueta HTML en PHP</h2>";

echo "<h2>Esta es una etiqueta HTML en PHP pero no acepta ESTILOS</h2>";

/* La direfencia entre print y echo es */
print "Print solome puede mostrar 1 cosa";
echo "<p>   </p>";
echo "Echo me puede mostrar más de 1, ", "cosa 2, ", "cosa 3, ", "cosa 4, ", " y cosa 5.";

/*------ VARIABLES ------*/

echo "<h2>En PHP podemos armar variables</h2>";

$NOMBRE = "Vickysita";
$numero = 3784844.899999;
$bool = true;
$array = [1, 2, "A","B",["SOY UN SEGUNDO ARRAY",12333]];

echo "la variable tipo string es: ", $NOMBRE;
echo "<p>   </p>";
echo "una variable tipo numero es : $numero";
echo "<p>   </p>";
echo "una variable tipo bool es : $bool";
echo "<p>   </p>";
echo "Permite crear variables tipo ARRAY o NO PERMITE TIPO OBJETO y NO PERMITE MOSTRARLAS FACILMENTE";

?>
