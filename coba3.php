<<?php
    $nilai = 80;

    //
    if ($nilai <= 100) {

        if ($nilai != 0) {
            if ($nilai >= 90) {
                echo "keterangan = A";
            } else if ($nilai >= 80) {
                echo "keterangan = B";
            } elseif ($nilai >= 70) {
                echo "keterangan =C";
            } else {
                echo "keterangan = D";
            }
        } else {
            echo "keterangan = tidak lulus";
        }
    } else {
        return;
    }
    ?>