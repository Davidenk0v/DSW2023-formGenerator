<?php
require_once 'Form.php';
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
    //Creo los objetos de los fields
    $field = new Field("Campo 1:", "text");
    $field2 = new Field("Campo 2: ", "number");
    $field3 = new Field("Campo 3: ", "color");
    //Los añado al formulario
    $form1->add($field);
    $form1->add($field2);
    $form1->add($field3);
    //Muestro el formulario
    $form1->render();
    ?>
</body>

</html>