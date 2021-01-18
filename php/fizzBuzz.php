<?php 

class FizzBuzz {

    public function valueCheck($fizz, $buzz) {

        //文字列、少数、空はエラー表示
        if((preg_match("/^[0-9]+$/", ($fizz))) && (preg_match("/^[0-9]+$/", ($buzz)))) {
            return true;
        }
    }
    
    public function Display($fizzNum, $buzzNum) {

        for($num = 1; $num < 100; $num++) {

            //両方の倍数
            if ($num % $fizzNum === 0 && $num % $buzzNum === 0 ) {
                echo("fizzBuzz {$num}<br>");
            } 
            //fizzの倍数
            else if ($num % $fizzNum === 0) {
                echo("fizz {$num}<br>");
            }
            //buzzの倍数
            else if ($num % $buzzNum === 0) {
                echo("buzz {$num}<br>");
            }
        }
    }
}
    
?>