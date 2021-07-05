<?php
class Inputs
{
    public $name;
    public $value;
    public $type='text';
    public $extra;

    public function __construct($name,$value, $extra='')
    {
        $this->name=$name;
        $this->value=$value;
        $this->extra=$extra;
    }

    public function Print($print=false)
    {
        $txt= <<<txt
        <input type="{$this->type}" name="{$this->name}" value="{$this->value}" placeholder="{$this->name}" $this->extra >
        txt;

        if($print) echo $txt;
        else return $txt;
    }

    function __toString()
    {
        return $this->Print();
    }
}
?>