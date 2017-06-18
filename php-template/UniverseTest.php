<?php
    include 'Universe.php';
    function test() {
        if (countAllStars([2,3]) ==  5 && countAllStars([9,-3]) == 6) {

            echo("TECHIO> success true \r\n");
            $file = file_get_contents("./Universe.php");
            if (strpos($file, "array_sum") !== false) {
                echo("TECHIO> success [true]");
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
        } 
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
            echo("TECHIO> message --channel Hint💡 Did you properly accumulate all stars into 'totalStars'? 🤔 \r\n");
        }
    }
    test();
?>