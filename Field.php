<?php

abstract class Field
{
    protected $name;
    protected $type;
    protected $text;
    protected $id;
    protected $default;

    public function __construct($name, $type, $text, $default = '')
    {
        $this->name = $name;
        $this->type = $type;
        $this->text = $text;
        $this->id = 'id_' . $name;
        $this->default = $default;
    }

    abstract public function render();
}
