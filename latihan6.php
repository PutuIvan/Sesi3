<?php
    $mhs = array(
        array("Adit","2233112255","Depok"),
        array("Rijal","1112131466","Semarang"),
        array("Ucup","0099887799","Banyuwangi"),
        array("Asep","4455223344","Bandung"),
    );
    header("Content-Type: application/json");
    echo json_encode ($mhs);