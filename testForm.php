<?php
require_once 'Form.php';
require_once 'SimpleField.php';
require_once 'MultipleField.php';
$form1 = new Form("Formulario", "validate.php", Method::GET);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        html {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>

<body>
    <h1>Pruebas con formularios</h1>
    <?php
    $options = [
        "Desarrollo en entorno servidor" => "DSW",
        "Desarrollo en entorno cliente" => "DEW",
        "Despliegue de aplicaciones" => "DPL"
    ];
    //Creo los objetos de los SimpleFields
    $simpleField = new SimpleField("Campo 1:", "text", 'Introduzca su nombre: ');
    $simpleField2 = new SimpleField("Campo 2: ", "number", 'Introduzca su edad: ');
    $simpleField3 = new SimpleField("Campo 3: ", "color", 'Elige un color: ', '#FFFFFF');
    $simpleField4 = new SimpleField("Campo 4: ", "checkbox", 'Quieres subscribirte? ');
    $multiple = new MultipleField("Campo 5: ", "radio", 'Seleccione las optiones: ', 'Despligue de aplicaciones', $options);
    $multiple2 = new MultipleField("Campo 6: ", "select", 'Seleccione las optiones: ', 'Despligue de aplicaciones', $options);
    //Los añado al formulario
    $form1->add($simpleField);
    $form1->add($simpleField2);
    $form1->add($simpleField3);
    $form1->add($simpleField4);
    $form1->add($multiple);
    $form1->add($multiple2);
    $multiple->addOption('Diseño de interfaces web', 'DOR');
    //Muestro el formulario
    $form1->render();
    ?>
</body>

</html>