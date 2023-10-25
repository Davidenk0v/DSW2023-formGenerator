<?php
require_once 'Element.php';
require_once 'Form.php';
require_once 'Document.php';
require_once 'Field.php';
require_once 'MultipleField.php';
require_once 'SimpleField.php';
require_once 'Paragraph.php';

$form1 = new Form("Formulario", "validate.php", Method::GET);

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
$multiple = new MultipleField("Campo 5: ", "radio", 'Seleccione las optiones: ', 'Despliegue de aplicaciones', $options);
$multiple2 = new MultipleField("Campo 6: ", "select", 'Seleccione las optiones: ', 'Despliegue de aplicaciones', $options);
//Los añado al formulario
$form1->add($simpleField);
$form1->add($simpleField2);
$form1->add($simpleField3);
$form1->add($simpleField4);
$form1->add($multiple);
$form1->add($multiple2);
$multiple->addOption('Diseño de interfaces web', 'DOR');
$parrafo = new Paragraph('Hola mundo');
//Muestro el formulario
$document = new Document('Prueba documento');
$document->add($parrafo);
$document->add($form1);
$document->render();
