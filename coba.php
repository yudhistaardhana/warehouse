<?php
$conn = mysqli_connect("localhost", "root","","warehouse");

// check connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// select the timestamp column from the table
$sql = 'SELECT time_in FROM data_rak1';

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $timestamp_ms1 = $row['time_in']/ 1000;
        date_default_timezone_set('Asia/Jakarta'); // set zona waktu ke WIB
        //$timestamp_s1 = $timestamp_ms1 / 1000;
        $time = date('Y-m-d H:i:s',$timestamp_ms1);
        echo $time . '<br>';
    }
} else {
   echo '0 results';
}

mysqli_close($conn);

?>
