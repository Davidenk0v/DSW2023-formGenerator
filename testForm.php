<?php
require_once 'Form.php';
require_once 'SimpleField.php';
$form1 = new Form("Formulario", "validate.php", Method::GET);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>

<body>
    <h1>Pruebas con formularios</h1>
    <?php
    //Creo los objetos de los SimpleFields
    $simpleField = new SimpleField("Campo 1:", "text", 'Introduzca su nombre:');
    $simpleField2 = new SimpleField("Campo 2: ", "number", 'Introduzca su edad');
    $simpleField3 = new SimpleField("Campo 3: ", "color", 'Elige un color', '#0000FF');
    $simpleField4 = new SimpleField("Campo 3: ", "checkbox", 'Quieres subscribirte?:');
    //Los añado al formulario
    $form1->add($simpleField);
    $form1->add($simpleField2);
    $form1->add($simpleField3);
    $form1->add($simpleField4);
    //Muestro el formulario
    $form1->render();
    ?>
</body>

</html>