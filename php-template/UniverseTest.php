<?php
    include 'Universe.php';
    function test() {
        if (countAllStars([2,3]) ==  5 && countAllStars([9,-3]) == 6) {

            $file = file_get_contents("./Universe.php");
            if (strpos($file, "array_sum") !== false) {
                echo("TECHIO> message --channel Sucess! My personal Yoda, you are. 🙏 * ● ¸ .　¸. :° ☾ ° 　¸. ● ¸ .　　¸.　:. • \r\n");
                echo("TECHIO> message --channel Sucess! My personal Yoda, you are. 🙏           　★ °  ☆ ¸. ¸ 　★　 :.　 .   \r\n");
                echo("TECHIO> message --channel Sucess! My personal Yoda, you are. 🙏 __.-._     ° . .　　　　.　☾ ° 　. *   ¸ .\r\n");
                echo("TECHIO> message --channel Sucess! My personal Yoda, you are. 🙏  /'.-c    　   * ●  ¸.　　°     ° 　¸.    \r\n");
                echo("TECHIO> message --channel Sucess! My personal Yoda, you are. 🙏  |  /T      　　°     ° 　¸.     ¸ .　　  \r\n");
                echo("TECHIO> message --channel Sucess! My personal Yoda, you are. 🙏 _)_/LI");
            }
            else
            {
                echo("TECHIO> message --channel Hint: Good Job! Try using array_sum");
            }


            if( strpos(file_get_contents("./Universe.php"),$_GET['array_sum']) !== false) {
                    
            } else {
                
            } 
        } else {
            echo("TECHIO> message --channel Oops! Try Again 🐞");
            echo("TECHIO> message --channel Oops! Hint 💡 Did you properly accumulate all stars into 'totalStars'? 🤔");
        }
    }
    test();
?>