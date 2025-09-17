<?php include 'cabecera.inc.php'; ?>

<h2>Contenido de la variable $_SERVER</h2>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Clave</th>
        <th>Valor</th>
    </tr>
    <?php
    foreach ($_SERVER as $clave => $valor) {
        if (is_array($valor)) {
            $valor = implode(", ", $valor);
        }
        echo "<tr>";
        echo "<td>" . htmlspecialchars($clave) . "</td>";
        echo "<td>" . htmlspecialchars($valor) . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<?php include 'footer.inc.php'; ?>
