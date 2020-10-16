<?php


/*
 * Complete the 'countMeetings' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY firstDay
 *  2. INTEGER_ARRAY lastDay
 */

function countMeetings($firstDay, $lastDay) {
    // Write your code here    
    if(!empty($firstDay) && !empty($lastDay)){
        $result = array_unique(array_merge($firstDay, $lastDay));
        return count($result);        
    }else{
        return 0;
    }

}
$fptr = fopen(getenv("OUTPUT_PATH"), "w");
