<?php
$res = [
        [
            "id" => 1,
            "nama" => "POLI UMUM"
        ],
        [
            "id" => 2,
            "nama" => "UGD"
        ],
        [
            "id" => 3,
            "nama" => "POLI KIA"
        ],
        [
            "id" => 4,
            "nama" => "APOTEK"
        ],
    ];

    $json_string = json_encode($res, JSON_PRETTY_PRINT);
    echo $json_string;
?>