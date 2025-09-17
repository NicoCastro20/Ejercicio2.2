<?php include 'cabecera.inc.php'; ?>

<h2>Números del 1 al 30</h2>
<ul>
    <?php
    // Mostrar números del 1 al 30
    for ($i = 1; $i <= 30; $i++) {
        echo "<li>$i</li>";
    }
    ?>
</ul>

<h2>Factorial de 5</h2>
<p>
    <?php
    $numero = 5;
    $resultado = 1;
    $cadena = "";

    // Calcular factorial con bucle for
    for ($i = $numero; $i >= 1; $i--) {
        $resultado *= $i;
        $cadena .= $i;
        if ($i > 1) {
            $cadena .= " x ";
        }
    }

    echo "$numero! = $cadena = $resultado";
    ?>
</p>

<?php include 'footer.inc.php'; ?>