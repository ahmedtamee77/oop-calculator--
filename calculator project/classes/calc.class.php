<?php 

class Calc{

    public $operator;
    public $num1;
    public $num2;
    
    public function __construct( string $oper, int $numO , int $numT){
        $this->operator = $oper;
        $this->num1 = $numO;
        $this->num2 = $numT;
    }


    public function calculator(){
        switch ($this->operator) {
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;
                case 'div':
                $result = $this->num1 / $this->num2;
                if( $result = $this->num1/$this->num2 ===0){
                    echo "cant do this ";
                }
                return $result;
                case 'mul':
                $result = $this->num1 * $this->num2;
                return $result;
            default:
              echo "Error!!";
                break;
        }
    }
    
}