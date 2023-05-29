<?php


namespace App\classes;


class Calculator
{
    public $firstNumber,$secondNumber,$result,$option;

    public function __construct($xyz)
    {
        $this->firstNumber = $xyz['first_number'];
        $this->secondNumber = $xyz['second_number'];
        $this->option= $xyz['option'];
    }
    public function calculate(){
//        $this->result=$this->firstNumber - $this->secondNumber;
        switch ($this->option)
        {
            case '+': $this->result = $this->firstNumber + $this->secondNumber;
            break;
            case '-': $this->result = $this->firstNumber - $this->secondNumber;
            break;
            case '*': $this->result = $this->firstNumber * $this->secondNumber;
            break;
            case '/': $this->result = $this->firstNumber / $this->secondNumber;
            break;
            case '%': $this->result = $this->firstNumber % $this->secondNumber;
            break;
        }
        header('Location: route.php?page=calculator&message='.$this->result.'&first-number='.$this->firstNumber.'&second-number='.$this->secondNumber);
    }
}