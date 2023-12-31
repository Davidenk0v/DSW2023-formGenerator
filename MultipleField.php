<?php
require_once 'Form.php';
class MultipleField extends Field
{
    protected $options = [];

    public function __construct($name, $type, $text, $default = '', $options = [])
    {
        parent::__construct($name, $type, $text, $default);
        $this->options = $options;
    }

    public function addOption(string $text, string $value)
    {
        $this->options[$text] = $value;
    }
    public function render()
    {
        if ($this->type == 'select') $this->renderSelect();
        else $this->renderRadio();
    }

    private function renderSelect()
    {
        echo "<label for='$this->id'>$this->text</label>";
        echo "<select id='$this->id' name='$this->name' value='$this->default'>";
        foreach ($this->options as $text => $value) {
            $selected = ($text == $this->default) ? 'selected' : '';
            echo "<option value='$value' $selected>$text</option>";
        }
        echo "</select>";
    }

    private function renderRadio()
    {
        echo "<p>$this->text:</p>";
        foreach ($this->options as $text => $value) {
            $checked = ($text == $this->default) ? 'checked' : '';
            $id = str_replace(" ", "-", $text);
            echo "<p><input type='radio' id='$id' name='$this->name' value='$value' $checked /><label for='$id'>$text</label></p>";
        }
    }
}
