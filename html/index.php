<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>phpTASK</title>
    </head>
    <body>
        <h1>FizzBuzz問題</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <p>FizzNum:<input type="text" name="FizzNum"></p>
            <p>BizzNum:<input type="text" name="BuzzNum"></p>
            <input type="submit" value="実行" name="buttonClick">
        </form>

        <p>【出力】</p>

        <?php 
            
            //ボタンが押下されたとき、値チェックする(入力しないで、空なのか初めの表示か判断のため)
            if (isset($_POST['buttonClick'])) {

                require('../php/FizzBuzz.php'); 
                $FizzBuzz = new FizzBuzz();

                //値チェック(空欄、文字列、少数はエラー表示)し、問題ないとき数値に変換
                if($FizzBuzz->valueCheck($_POST['FizzNum'], $_POST['BuzzNum'])) {
                    $fizzNum = intval($_POST['FizzNum']);
                    $buzzNum = intval($_POST['BuzzNum']);

                    //fizzBuzz表示
                    $FizzBuzz->Display($fizzNum, $buzzNum);
                } else {
                    echo("整数値を入力してください");
                }
            }
        ?>

    </body>
</html>
