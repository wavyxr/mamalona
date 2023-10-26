<?php
// Verificar si la solicitud es POST

echo "deperdido";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["pregunta_1"]) && isset($_POST["pregunta_2"]) && isset($_POST["pregunta_3"]) && isset($_POST["pregunta_4"]) && isset($_POST["pregunta_5"] )&& isset($_POST["nombre"])) {
        $respuestas_usuarios=[
            1=>$_POST["pregunta_1"],
            2=>$_POST["pregunta_2"],
            3=>$_POST["pregunta_3"],
            4=>$_POST["pregunta_4"],
            5=>$_POST["pregunta_5"],
        ];
        
        $tipoDePiel=[
            "Seca"=>1,
            "Mixta"=>2,
            "Grasa"=>3
            
        ];
        
        $c_piel_seca=0;
        $c_piel_mixta=0;
        $c_piel_grasa=0;
        
        foreach ($respuestas_usuarios as $numero_pregunta => $respuesta) {
            switch ($respuesta) {
                case 1:
                    $c_piel_seca++;    
                    break;
                case 2:
                    $c_piel_mixta++;        
                    break;
                case 3:
                    $c_piel_grasa++;
                    break;
                
                default:
                    # code...
                    break;
            }

        }

        $resultado=[
            "Grasa"=> $c_piel_grasa,
            "Mixta"=>$c_piel_mixta,
            "Seca"=>$c_piel_seca
        ];
        $tipo_piel_usuario=array_search(max($resultado),$resultado);

        echo "tu tipo de piel fue: $tipo_piel_usuario ";



        echo max($resultado);
        
    }   
}
include("registros.php");
?>
