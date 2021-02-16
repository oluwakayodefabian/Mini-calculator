<?php

class Addition 
{
    private $num1;
    private $num2;
    private $num3;
    private $operator2;

    public function __construct($num1, $num2, $num3, $operator2) 
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->num3 = $num3;
        $this->operator2 = $operator2;
    }
    public function add() 
    {
        $result = null;
        switch ($this->operator2) {
            case '/':
                $result = $this->num1 + ($this->num2 / $this->num3);
                break;
            case '*':
                $result = $this->num1 + ($this->num2 * $this->num3);
                break;
            case '+':
                $result = $this->num1 + $this->num2 + $this->num3;
                break;
            case '-':
                $result = $this->num1 + $this->num2 - $this->num3;
                break;
            
            default:
                $result = $this->num1 + $this->num2 + $this->num3;
                break;
        }
        return $result;
    }
}