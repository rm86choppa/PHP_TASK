<?php 

class FizzBuzz {

    public function valueCheck($fizz, $buzz) {

        //文字列、少数、空はエラー表示
        if ($fizz === "" || $buzz === "") {
            echo '整数値を入力してください';
            exit();
        } 

        if((preg_match("/^[0-9]+$/", ($fizz))) && (preg_match("/^[0-9]+$/", ($buzz)))) {
            return true;
        }
    }
    
    public function Display($fizzNum, $buzzNum) {

        $fizzMultipul = $fizzNum;
        $buzzMultipul = $buzzNum;
        $fizzcnt = 1;
        $buzzcnt = 1;
        
        //fizzBuzz表示
        while($fizzMultipul < 100 || $buzzMultipul < 100) {

            //値が同じ
            if ($fizzNum === $buzzNum) {

                //fizz,buzzどちらか一方の値と'fizzBuzz'を表示
                echo("fizzBuzz {$buzzMultipul}<br>");
            }
            //fizzが両方の倍数
            else if ($fizzMultipul % $fizzNum === 0 && $fizzMultipul % $buzzNum === 0) {

                //buzzNumの方が小さい値のとき、fizzNumですでに'fizzBuzz'を表示してるので、
                //こちらでは表示せず、倍数カウントと倍数のみ上げる
                if ($fizzNum < $buzzNum) {
                    $fizzcnt++;
                    $fizzMultipul = $fizzNum * $fizzcnt;
                    continue;
                }
                
                //ループでどちらかが100未満の場合処理されるのでどちらかが100を超えてる可能性があるので100未満のチェック
                if($buzzMultipul < 100) {
                    echo("buzz {$buzzMultipul}<br>"); 
                }
                
                if($fizzMultipul < 100) {
                    echo("fizzBuzz {$fizzMultipul}<br>");
                }
            }
            //buzzが両方の倍数
            else if ($buzzMultipul % $fizzNum === 0 && $buzzMultipul % $buzzNum === 0) {

                //buzzNumの方が小さい値のとき、fizzNumですでに'fizzBuzz'を表示してるので、
                //こちらでは表示せず、倍数カウントと倍数のみ上げる
                if ($buzzNum < $fizzNum) {
                    $buzzcnt++;
                    $buzzMultipul = $buzzNum * $buzzcnt;
                    continue;
                }

                //ループでどちらかが100未満の場合処理されるのでどちらかが100を超えてる可能性があるので100未満のチェック
                if($fizzMultipul < 100) {
                    echo("fizz {$fizzMultipul}<br>");
                }
                
                if($buzzMultipul < 100) {
                    echo("fizzBuzz {$buzzMultipul}<br>"); 
                }
            }
            //fizz,buzzがともに両方の倍数ではない
            else {

                //小さい順に表示
                if($fizzNum < $buzzNum) {

                    //ループでどちらかが100未満の場合処理されるのでどちらかが100を超えてる可能性があるので100未満のチェック
                    if($fizzMultipul < 100) {
                        echo("fizz {$fizzMultipul}<br>");
                    }
    
                    if($buzzMultipul < 100) {
                        echo("buzz {$buzzMultipul}<br>"); 
                    }
                } else {

                    //ループでどちらかが100未満の場合処理されるのでどちらかが100を超えてる可能性があるので100未満のチェック
                    if($buzzMultipul < 100) {
                        echo("buzz {$buzzMultipul}<br>"); 
                    }

                    if($fizzMultipul < 100) {
                        echo("fizz {$fizzMultipul}<br>");
                    }
                }
            }

            $fizzcnt++;
            $buzzcnt++;
            $fizzMultipul = $fizzNum * $fizzcnt;
            $buzzMultipul = $buzzNum * $buzzcnt;

        }
    }
}
    
?>