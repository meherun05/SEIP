<?php


namespace App\classes;


class Series
{
    public $firstNumber,$secondNumber,$result;

    public function __construct($xyz)
    {
        $this->firstNumber=$xyz['first_number'];
        $this->secondNumber=$xyz['second_number'];
    }

    public function getSeriesResult(){
        if ($this->firstNumber < $this->secondNumber){
            for ($this->firstNumber;$this->firstNumber <= $this->secondNumber;$this->firstNumber++)
            {
                $this->result .= $this->firstNumber.',';
            }
        }elseif ($this->firstNumber>$this->secondNumber)
        {
            for ($this->secondNumber; $this->secondNumber<=$this->firstNumber;$this->secondNumber++)
            {
                $this->result .=$this->secondNumber. ',';
            }
        } else{
            $this->result=$this->firstNumber;
        }


//        for ($this->firstNumber; $this->firstNumber>=$this->secondNumber;$this->firstNumber--)
//        {
//            $this->result .= $this->firstNumber.' ';
//        }
// header('Location: route.php?page=series&result='.$this->result);
        return rtrim($this->result, ',');
    }

    public function getOddEvenResult(){
        for ($this->firstNumber;$this->firstNumber<=$this->secondNumber;$this->firstNumber++)
        {
            if ($this->firstNumber % 2==1)
            {
                $this->result .=$this->firstNumber;
            }
            if ($this->firstNumber % 2==0)
            {
                $this->result .=$this->firstNumber;
            }
        }
        echo $this->result. ' ';
        exit();
    }
}