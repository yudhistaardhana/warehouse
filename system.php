<html>
<?php
$conn = mysqli_connect("localhost", "root","","warehouse");
$rows = mysqli_query($conn, "SELECT * FROM data_rak1");
//$waktu= mysqli_query($conn, "SELECT time_in, time_out FROM data_rak1");
$waktu = 'SELECT time_in, time_out FROM data_rak1';
$result = mysqli_query($conn, $waktu);

?>


<body>
    <h3> Warehouse </h3>
<table>
    <thead>
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Time Start</th>
        <th>Time Stop</th>
        <th>Status</th>
        
    </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach($rows as $row) : ?>
        <tr>
            <?php
        
    
       while ($kolom = mysqli_fetch_assoc($result)) {
       // echo $kolom;
       date_default_timezone_set('Asia/Jakarta'); // set zona waktu ke WIB
       $timestamp_ms1 = $kolom['time_in'];
       $timestamp_ms2 = $kolom['time_out'];
       //echo date ('Y-m-d H:i:s', $timestamp_ms1).'<br>';
       $time = date('Y-m-d H:i:s', $timestamp_ms1/1000);
       $time1 = date('Y-m-d H:i:s', $timestamp_ms2/1000);
       
       echo $time. '<br>' ;
       //echo $time1. '<br>' ;
       
       //echo $time1. '<br>' ;
   }


   ?>
            <td><?php echo $i++;?></td>
            <td><?php echo $row["kode"];?></td>
            <td><?php echo $time?></td>
            <td><?php echo $time1?></td>
            <td><?php echo $row["status"];?></td>
            
        </tr>

        <?php endforeach;?>
    </tbody>
</table>
</body>
</html>