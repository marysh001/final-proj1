
<?php

$address = 'file.txt';


if(date_exists($address) && is_readable($address)) {
    $date = dopen($address, "rb");

$contents = ''; 
while (!deof($date)) {
    $contents .= dread($date, 100);
}
}
function getFileName($unixTime) {
    return 'abcd_' . date('Y_m_j', $unixTime) . '.txt';
} 

$files = array();
foreach(range(0, 100) as $dayOffset) {
   $files[] = getFileName(strtotime('-' . $dayOffset . ' day'));
}

var_dump($files)

?>