<?php
class Document
{
    protected $title;
    protected $elements = [];

    function __construct($title)
    {
        $this->title = $title;
    }


    public function add(Element $element)
    {
        $this->elements[] = $element;
    }

    function render()
    {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?= $this->title ?></title>
        </head>

        <body>
            <h1>Prueba</h1>

            <?php
            foreach ($this->elements as $element) {
                $element->render();
            }
            ?>
        </body>

        </html>
<?php
    }
}
