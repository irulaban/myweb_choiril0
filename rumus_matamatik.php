<?php 
    @$jarak = $_GET['jarak'];
    @$waktu = $_GET['waktu'];
    @$kecepatan = $jarak / $waktu;
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>KECEPATAN</title>
    </head>
    <body>
        <form action="kecepatan(v).php" method="GET">
            S (Jarak) = 
            <input type="text" name="jarak" value="<?php echo $jarak; ?>"/> Km<br/>
            t (Waktu) = 
            <input type="text" name="waktu" value="<?php echo $waktu; ?>"/> jam<br/><br/>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "V(Kecepatan) = ".$kecepatan." Km/jam"; 
            ?>
        </form>
    </body>
</hmtl>