<?php
$cars=array("Cadillac","Volvo","Subru","Mazda");
for($i=0;$i<=3;$i++)
print $cars[$i];
print ("<br>****************************");
$mont = array("January"=>"First Month","FEB"=>"Second Month","March"=>"Third Month","April"=>"Fourth Month",
"May"=>"Fifth Month","June"=>"Sixth Month");
foreach($mont as $monthh=>$mothhvalue)
print("<p>$monthh is the  $mothhvalue");
print ("<br>**************************************************************************************");
$fruit=array("apple","orange","jackfruit","avocado","cherry");
sort($fruit);
foreach($fruit as $x)
print "<p>$x";
print ("<br>**************************************************************************************");
$fruit=array("apple","orange","jackfruit","avocado","cherry");
rsort($fruit);
foreach($fruit as $x)
print "<p>$x";

ksort($mont);
foreach($mont as $monthh=>$mothhvalue);
  {
     print $monthh;
     print "<br>";
}
print ("<br>**************************************************************************************");
$arr1=array('a','0','b','c');
$arr2=array('1','b');
if(array_intersect($arr2,$arr1)==$arr2)
  print("Array is a subset of the given  array");
else
 print("Element is not a subset of the string");
print ("<br>**************************************************************************************");

function writeamg(){
    print("<br>Hello  world<br>");

}
writeamg();

function name($name,$age){
    print("$name is  $age years old<br>");
}
name("joeson","21");
name("Mathew","21");
name("Alan","20");

print ("<br>**************************************************************************************");
$ages=array("Harry"=>21,"Alice"=>20,"Megha"=>22,"Bob"=>19);
$ages["Megha"] = 20;
asort($ages);
foreach($ages as $name=>$age){
  echo "$name=>$age";
}
function add(&$value)
{
  $value+=98;


}
$num =2;
add($num);
echo "Num =$num";
<form action="">
  cap
</form>
?>