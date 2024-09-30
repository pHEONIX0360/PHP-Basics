<?php
$string="redefine";
$pattern="/def/";
if(preg_match($pattern,$string)){
    echo "pattern $pattern found in $string /n";

}
else{
    echo "pattern $pattern not found in $string \n";
}
?>
