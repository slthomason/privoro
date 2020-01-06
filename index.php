
<?php

echo "Node id:\t";
echo gethostname();

function convert($size)
{
    $unit=array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
}
echo "<br/>Memory Usage:\t";
echo convert(memory_get_usage(true)); 

echo "<br/>CPU Usage:\t";
$loads=sys_getloadavg();
$core_nums=trim(shell_exec("grep -P '^physical id' /proc/cpuinfo|wc -l"));
$load=$loads[0]/$core_nums;
echo $load;
