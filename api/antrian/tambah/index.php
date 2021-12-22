<?php

    $res = [
    "status"=> 200,
    "data"=> [
            "puskesmas_nama"=> "KAWEDANAN",
            "puskesmas_id"=> "1",
            "poli_nama"=> "UGD",
            "poli_id"=> "2",
            "no_antrian"=> 1,
            "waktu"=> "2021-12-22 10:04:10",
            "waktu_readable"=> "22 Des 2021, 10:04"
        ]
    ];

    $json_string = json_encode($res, JSON_PRETTY_PRINT);
    echo $json_string;
?>