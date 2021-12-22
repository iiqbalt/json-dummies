<?php
$res = [
        [
            "id" => 1,
            "nama" => "KEWEDANAN"
        ],
        [
            "id" => 2,
            "nama" => "NGUJUNG"
        ],
        [
            "id" => 3,
            "nama" => "KARANGREJO"
        ],
        [
            "id" => 4,
            "nama" => "CANDIREJO"
        ],
    ];

    $json_string = json_encode($res, JSON_PRETTY_PRINT);
    echo $json_string;
?>