<?php 
function get_total($data = array(), $mins = array())
{
    $arr = array();
    $sum = array_sum($mins);

    foreach ($data as $key => $val) {
        $i = 0;
        foreach ($val as $k => $v) {
            $arr[$key][$k] = ($mins[$i] / $sum) * $v ;
            $i++;
        }
    }
    
    
    $result = array();
    foreach ($arr as $key => $val) {
        foreach ($val as $k => $v) {
            $result[$key] += $v;
        }
    }
    return $result;
}


?>