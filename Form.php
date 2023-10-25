<?php
require_once 'Field.php';
require_once 'SimpleField.php';
enum Method: string
{
    case GET = "get";
    case POST = "post";
}
class Form extends Element
{
    //ATRIBUTOS
    private string $action;
    private String $method;
    private string $title;
    private $fields;



    //METODOS

    public function __construct($title, $action, $method)
    {
        $this->title = $title;
        $this->action = $action;
        $this->setMethod($method);
        $this->fields = [];
    }

    private function setMethod(Method $method)
    {
        $this->method =  $method->value;
    }

    //Metodo que añade los campos al formulario
    public function add(Field $field)
    {
        $this->fields[] = $field;
    }

    //METODO QUE MUESTRA EL FORMULARIO
    public function render()
    {
        echo "<form action='$this->action' method='$this->method'>\n";
        echo "<h2>$this->title</h2>";
        echo "\t\tEsto es la prueba de un formulario\n";
        foreach ($this->fields as $value) {
            $value->render();
        }
        echo "<input type='submit' value='Enviar'>";
        echo "\t</form>\n";
    }
}
