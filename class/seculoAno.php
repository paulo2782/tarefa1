<?php
class SECULOANO {
    public $year;
    public $isFloat;

    public function __construct($year){
        if($year <= 0){
            echo "Ano não pode ser 0 ou negativo";
            exit;
        }
        
        if($year <= 100 and $year > 0){
            echo "Seculo 1";
        }else{
            $this->isFloat = $year / 100;

            if(is_float($this->isFloat) == true){
                echo "Seculo ".ceil($this->isFloat);
            }else{
                echo "Seculo ".floor($this->isFloat);
            }
        }    
        
    }
}

?>