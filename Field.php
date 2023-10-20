<?php

class Field
{
    private $name;
    private $type;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function render()
    {
        echo "<p><label>$this->name<input type='$this->type' name='$this->name'></input></label></p>";
    }
}
