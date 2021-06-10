<?php 
    
    $koneksi = mysqli_connect("sql206.epizy.com", "epiz_28838780", "V6T0uatKAJNge9", "epiz_28838780_db_tokobaju");
    
    function query($query){
        global $koneksi;
        $result = mysql_query($koneksi, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }


?>