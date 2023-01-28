
   
    <?php

    $str = $_POST["str"];
    echo "The string you entered is " . $str;
    $va = 0;
    $ve = 0;
    $vi = 0;
    $vo = 0;
    $vu = 0;
    $i = 0;
    $len = strlen($str);
    echo $len;

    for ($i = 1; $i < strlen($str); $i++) {
        if ($str[$i] == 'a') {
            $va++;
        } else if ($str[$i] == 'e') {
            $ve++;
        } else if ($str[$i] == 'i') {
            $vi++;
        } else if ($str[$i] == 'o') {
            $vo++;
        } else if ($str[$i] == 'u') {
            $vu++;
        }
    }
    echo "<h3>Occurence of the vowel A is:$va</h3>";
    echo "</br>";
    echo "<h3>Occurence of the vowel E is:$ve</h3>";
    echo "</br>";
    echo "<h3>Occurence of the vowel I is:$vi</h3>";
    echo "</br>";
    echo "<h3>Occurence of the vowel O is:$vo</h3>";
    echo "</br>";
    echo "<h3>Occurence of the vowel U is:$vu</h3>";
    echo "</br>";


    ?>
