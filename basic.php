<?php
    /** Data Types **/
    $int = 666;
    $str = "hehe";
    $float = 6.66;
    $boolean = true;
    $array = array("1", "2", "3");
    class Dummy {
        function Dummy() {
            $this->dummy = "hoho";
        }
    }
    $classObj = new Dummy();
    echo var_dump($int);
    echo var_dump($str);
    echo var_dump($float);
    echo var_dump($boolean);
    echo var_dump($array);
    echo var_dump($classObj);
    echo "\n";

    /** Strings **/
    $someText = "Haha Hehe";
    echo strlen($someText);
    echo "\n";
    echo str_word_count($someText);
    echo "\n";

    /** Loops **/
    for ($x = 0; $x <= 3; $x++) {
        echo "The number is: $x";
        echo "\n";
    }

    foreach ($array as $value) {
        echo "$value";
        echo "\n";
    }

    /** Filesystem **/
    echo basename("/Users/dummy//basic.php");
    echo "\n";
    echo disk_free_space("."), " bytes";
    echo "\n";
?>
