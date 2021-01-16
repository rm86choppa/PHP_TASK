<?php 

class FizzBuzz {

    public function valueCheck($fizz, $buzz) {

        //������A�����A��̓G���[�\��
        if ($fizz === "" || $buzz === "") {
            echo '�����l����͂��Ă�������';
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
        
        //fizzBuzz�\��
        while($fizzMultipul < 100 || $buzzMultipul < 100) {

            //�l������
            if ($fizzNum === $buzzNum) {

                //fizz,buzz�ǂ��炩����̒l��'fizzBuzz'��\��
                echo("fizzBuzz {$buzzMultipul}<br>");
            }
            //fizz�������̔{��
            else if ($fizzMultipul % $fizzNum === 0 && $fizzMultipul % $buzzNum === 0) {

                //buzzNum�̕����������l�̂Ƃ��AfizzNum�ł��ł�'fizzBuzz'��\�����Ă�̂ŁA
                //������ł͕\�������A�{���J�E���g�Ɣ{���̂ݏグ��
                if ($fizzNum < $buzzNum) {
                    $fizzcnt++;
                    $fizzMultipul = $fizzNum * $fizzcnt;
                    continue;
                }
                
                //���[�v�łǂ��炩��100�����̏ꍇ���������̂łǂ��炩��100�𒴂��Ă�\��������̂�100�����̃`�F�b�N
                if($buzzMultipul < 100) {
                    echo("buzz {$buzzMultipul}<br>"); 
                }
                
                if($fizzMultipul < 100) {
                    echo("fizzBuzz {$fizzMultipul}<br>");
                }
            }
            //buzz�������̔{��
            else if ($buzzMultipul % $fizzNum === 0 && $buzzMultipul % $buzzNum === 0) {

                //buzzNum�̕����������l�̂Ƃ��AfizzNum�ł��ł�'fizzBuzz'��\�����Ă�̂ŁA
                //������ł͕\�������A�{���J�E���g�Ɣ{���̂ݏグ��
                if ($buzzNum < $fizzNum) {
                    $buzzcnt++;
                    $buzzMultipul = $buzzNum * $buzzcnt;
                    continue;
                }

                //���[�v�łǂ��炩��100�����̏ꍇ���������̂łǂ��炩��100�𒴂��Ă�\��������̂�100�����̃`�F�b�N
                if($fizzMultipul < 100) {
                    echo("fizz {$fizzMultipul}<br>");
                }
                
                if($buzzMultipul < 100) {
                    echo("fizzBuzz {$buzzMultipul}<br>"); 
                }
            }
            //fizz,buzz���Ƃ��ɗ����̔{���ł͂Ȃ�
            else {

                //���������ɕ\��
                if($fizzNum < $buzzNum) {

                    //���[�v�łǂ��炩��100�����̏ꍇ���������̂łǂ��炩��100�𒴂��Ă�\��������̂�100�����̃`�F�b�N
                    if($fizzMultipul < 100) {
                        echo("fizz {$fizzMultipul}<br>");
                    }
    
                    if($buzzMultipul < 100) {
                        echo("buzz {$buzzMultipul}<br>"); 
                    }
                } else {

                    //���[�v�łǂ��炩��100�����̏ꍇ���������̂łǂ��炩��100�𒴂��Ă�\��������̂�100�����̃`�F�b�N
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