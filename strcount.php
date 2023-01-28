<?php
$str1 = $_POST['str1'];
$str2 = $_POST['str2'];
$str3 = $_POST['str3'];
$choice = $_POST['choice'];
$oc = 0;
// Fuunction for first occurence  -> strpos
//Function for last occurence ->strrpos
//To count occuerence of strings -> substr_count()
$len1 = strlen($str1);
$len2 = strlen($str2);

if ($str1 > $str2) {
    switch ($choice) {
        case 1:
            $locc = strrpos($str1, $str2);
            $focc = strpos($str1, $str2);
            echo "<h2>First occurence is at position : </h2> " . $focc;
            echo "<br>";
            echo "<h2>Last occurence is at postion : </h2>" . $locc;
        case 2:
            $oc_count = substr_count($str1, $str2);
            if ($oc_count == 0) {
                echo "No such sub str exist in original string..";
            } else {
                echo "<br><h2>Sub string 2 is presented $oc_count times in original string.</h2>";
            }
        case 3:
            $newstr = str_replace($str2, $str3, $str1);
            echo "After replacement the new string is: " . $newstr;
    }
}
