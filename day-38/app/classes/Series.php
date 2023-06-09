<?php


namespace App\classes;


class Series
{
    public $firstNumber,$secondNumber,$result,$option,$odd,$even;

    public function __construct($xyz)
    {
        $this->firstNumber=$xyz['first_number'];
        $this->secondNumber=$xyz['second_number'];
        $this->option=$xyz['Option'];
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
      if ($this->firstNumber < $this->secondNumber){
          for ($this->firstNumber;$this->firstNumber<=$this->secondNumber;$this->firstNumber++)
          {
              if ($this->option =='Odd'&& $this->firstNumber % 2==1)
              {
                  $this->odd .=$this->firstNumber.' ';
              }elseif ($this->option=='Even' && $this->firstNumber % 2==0)
              {
                  $this->even .=$this->firstNumber.' ';
              }
          }
      }else{
          for ($this->secondNumber;$this->secondNumber<=$this->firstNumber;$this->secondNumber++)
          {
              if ($this->option =='Odd'&& $this->secondNumber % 2==1)
              {
                  $this->odd .= $this->secondNumber.' ';
              }elseif ($this->option=='Even' && $this->secondNumber % 2==0)
              {
                  $this->even .= $this->secondNumber.' ';
              }
          }
      }
        if ($this->option=='Odd'){
            return $this->odd;
        }else{
            return $this->even;
        }
    }
}