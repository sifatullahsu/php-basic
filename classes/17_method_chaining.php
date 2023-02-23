<?php


// Video 17: Mathod Chaining 
// Method should be return $this; Otherwise it'll generate an error.
class thomas
{

    public $value_1 = 0;
    public $value_2 = 0;
    public $result;

    public function thomasWife($x, $y)
    {
        $this->value_1 = $x;
        $this->value_2 = $y;
        return $this;
    }
    public function thomasSon()
    {
        $this->result = $this->value_1 + $this->value_2;
        return $this->result;
    }
}
