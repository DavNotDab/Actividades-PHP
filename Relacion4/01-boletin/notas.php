<?php

    function media($array) : float{
        return round(array_sum($array)/count($array), 1);
    }

    $mates = array(3, 10, 7);
    $lengua = array(8, 5, 3);
    $fisica = array(7, 2, 1);
    $latin = array(4, 7, 8);
    $ingles = array(6, 2, 3);

    $notas = array($mates, $lengua, $fisica, $latin, $ingles);

    $medias = [];

    foreach ($notas as $asignatura) {
        array_push($medias, media($asignatura));
    }

    $media_total = media($medias);

?>