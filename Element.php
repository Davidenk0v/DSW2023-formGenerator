<?php
include_once 'Renderizable.php';

abstract class Element implements Renderizable
{
    abstract function render();
}
