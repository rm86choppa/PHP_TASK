<?php 

class FizzBuzz {

    public function valueCheck($fizz, $buzz) {

        //������A�����A��̓G���[�\��
        if((preg_match("/^[0-9]+$/", ($fizz))) && (preg_match("/^[0-9]+$/", ($buzz)))) {
            return true;
        }
    }
    
    public function Display($fizzNum, $buzzNum) {

        for($num = 1; $num < 100; $num++) {

            //�����̔{��
            if ($num % $fizzNum === 0 && $num % $buzzNum === 0 ) {
                echo("fizzBuzz {$num}<br>");
            } 
            //fizz�̔{��
            else if ($num % $fizzNum === 0) {
                echo("fizz {$num}<br>");
            }
            //buzz�̔{��
            else if ($num % $buzzNum === 0) {
                echo("buzz {$num}<br>");
            }
        }
    }
}
    
?>