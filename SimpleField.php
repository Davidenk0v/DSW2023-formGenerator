<?php
class SimpleField extends Field
{
    public function render()
    {
        if ($this->type == 'checkbox') {
            if ($this->default == 'true') {
                $value = 'checked';
            } else {
                $value = '';
            }
        } else {
            $value = "value='$this->default'";
        }
        echo "<p><label for='$this->id'>$this->text<input type='$this->type' id='$this->id' name='$this->name' value='$this->default'></input></label></p>";
    }
}
