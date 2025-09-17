<?php



$nombre = "Nico";
$apellido = "Castro";


$diaNumero = date("d");
$mesNumero = date("n");  
$anio = date("Y");
$diaSemanaNumero = date("w"); 


switch ($diaSemanaNumero) {
    case 0: $diaSemana = "Domingo"; break;
    case 1: $diaSemana = "Lunes"; break;
    case 2: $diaSemana = "Martes"; break;
    case 3: $diaSemana = "Miércoles"; break;
    case 4: $diaSemana = "Jueves"; break;
    case 5: $diaSemana = "Viernes"; break;
    case 6: $diaSemana = "Sábado"; break;
    default: $diaSemana = "";
}


switch ($mesNumero) {
    case 1: $mes = "enero"; break;                                                                                                                  
    case 2: $mes = "febrero"; break;
    case 3: $mes = "marzo"; break;
    case 4: $mes = "abril"; break;
    case 5: $mes = "mayo"; break;
    case 6: $mes = "junio"; break;
    case 7: $mes = "julio"; break;
    case 8: $mes = "agosto"; break;
    case 9: $mes = "septiembre"; break;
    case 10: $mes = "octubre"; break;
    case 11: $mes = "noviembre"; break;
    case 12: $mes = "diciembre"; break;
    default: $mes = "";
}

?>


    <p><?php echo $nombre . " " . $apellido; ?></p>
    <p><?php echo $diaSemana . ", " . intval($diaNumero) . " de " . $mes . " de " . $anio; ?></p>
</footer>
