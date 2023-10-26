<?php
    include("conexion.php");

    if (isset($_POST["pregunta_1"]) && isset($_POST["pregunta_2"]) && isset($_POST["pregunta_3"]) && isset($_POST["pregunta_4"]) && isset($_POST["pregunta_5"])) {
        date_default_timezone_set('America/Mexico_City');
        $fechareg = date("m/d/y H:i:s"); 

        $nombre = $_POST["nombre"];

        

        if ($tipo_piel_usuario == "Grasa") {
            $consulta = "INSERT INTO formulario(nombre, Piel_grasa, fecha_reg) VALUES ('$nombre','1', '$fechareg')";
        } elseif ($tipo_piel_usuario == "Mixta") {
            $consulta = "INSERT INTO formulario(nombre, Piel_mixta, fecha_reg) VALUES ('$nombre','1', '$fechareg')";
        } elseif ($tipo_piel_usuario == "Seca") {
            $consulta = "INSERT INTO formulario(nombre,Piel_seca, fecha_reg) VALUES ('$nombre','1', '$fechareg')";
        } else {
            echo "ups algo ocurrió";
        }

        $conex_res = mysqli_query($conexion, $consulta);

        if ($conex_res) {
            echo "<h3>¡Se mandó correctamente!</h3>";
        } else {
            echo "<h3>¡ERROR!</h3>";
        }
    }
?>
