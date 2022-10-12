<?php
$people = array("kode_barang"=>["B001","B002","B003"],
                "nama_barang"=>["vest rajut","dress midi","cardigan"],
                "Harga"=>[75000,80000,60000]);
    for ($i=0; $i < count($people["kode_barang"]); $i++) { 
        echo "|".$people["kode_barang"][$i];
        for ($j=$i; $j < count($people["nama_barang"]); $j+=3) { 
            // echo "\n";
        echo "|".$people["nama_barang"][$j];
        for ($k=$j; $k < count($people["Harga"]); $k+=3) { 
            echo "|".$people["Harga"][$k];
            echo "\n";
            }
        }
    }
?>