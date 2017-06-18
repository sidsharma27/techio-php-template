<?php
    include 'Universe.php';
    function test() {
        if (countAllStars([2,3]) ==  5 && countAllStars([9,-3]) == 6) {
            if( strpos(file_get_contents("./Universe.php"),$_GET['array_sum']) !== false) {
                echo("TECHIO> message --channel Sucess! My personal Yoda, you are. 🙏 * ● ¸ .　¸. :° ☾ ° 　¸. ● ¸ .　　¸.　:. • ");
                echo("TECHIO> message --channel Sucess! My personal Yoda, you are. 🙏           　★ °  ☆ ¸. ¸ 　★　 :.　 .   ");
                echo("TECHIO> message --channel Sucess! My personal Yoda, you are. 🙏 __.-._     ° . .　　　　.　☾ ° 　. *   ¸ .");
                echo("TECHIO> message --channel Sucess! My personal Yoda, you are. 🙏  /'.-c    　   * ●  ¸.　　°     ° 　¸.    ");
                echo("TECHIO> message --channel Sucess! My personal Yoda, you are. 🙏  |  /T      　　°     ° 　¸.     ¸ .　　  ");
                echo("TECHIO> message --channel Sucess! My personal Yoda, you are. 🙏 _)_/LI");    
            } else {
                echo("TECHIO> message --channel Hint: Try using array_sum");
            } 
        } else {
            echo("TECHIO> message --channel Oops! Try Again 🐞");
            echo("TECHIO> message --channel Oops! Hint 💡 Did you properly accumulate all stars into 'totalStars'? 🤔");
        }
    }
    test();
?>