<?php
//numeric array or index array
$arr= array("yash","sudarshan","pushpak","nandini","rubina");

foreach($arr as $value){
    echo "$value"." ";
}
echo "<br>";

//associative array
$arr1=array(1=>"yash",2=>"sudarshan",3=>"pushpak",4=>"nandini",5=>"rubina");

foreach($arr1 as $key => $value){
    echo"EmpId $key is of $value <br>";
}

//Multi Dimensional array

echo "Multi dimentional array <br>";
$multi=array(array(1,"yash","verulkar","se","php"),
array(2,"sudarshan","deore","se","php"),
array(3,"pushpak","shinde","se","php"),
array(4,"yashkumar","verulkar","se","python"),);


for ($i=0; $i < count($multi); $i++) { 
    for ($j=0; $j<count($multi[$i]); $j++) { 
        echo $multi[$i][$j]."  ";
    }
    echo "<br>";
}
/*foreach ($multi as $val1){
    foreach
}*/


?> 