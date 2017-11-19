<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/19
 * Time: 21:25
 */
function writeName($fname,$punctuation)
{
    echo $fname . " Refsnes" . $punctuation . "<br>";
}
echo "My name is ";
writeName("Kai Jim",".");
echo "My sister's name is ";
writeName("Hege","!");
echo "My brother's name is ";
writeName("Ståle","?");
?>