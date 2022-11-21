<?php
$a = explode("\n", shell_exec("ps aux | grep php"));
$say = 0;
if(!empty($a) and isset($a)){
foreach($a as $process){

if(strpos($process,$argv[1])){
$say++;
}
}
}

echo $say;



//USAGE
//go to cli and write php cp.php test4.php , its an example. it shows you how many process has test4.php in system.
