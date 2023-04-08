<?php

function fetchInstrument(pdo $dbConnect){
    $sql = $dbConnect->query('SELECT i.id , i.title,i.description,i.history,i.technics,i.category_id, ihc.instrument_id, ihc.category_id, c.id, c.nomcategory
    FROM instrument i
    INNER JOIN instrument_has_category ihc
    ON i.id = ihc.instrument_id
    INNER JOIN category c
    ON ihc.category_id = c.id');
}

function fetchInstrumentHome(pdo $dbConnect) {
        $sql= $dbConnect->query('SELECT id, title , LEFT(description,150)as shortdescription FROM instrument LIMIT 10');
        $dataInstrumentHome= $sql->fetchAll(PDO::FETCH_ASSOC);
        return $dataInstrumentHome;
}
function truncate (string $text): string{
    // fonction qui trouve un numérique qui est la dernière sous chaine dans une chaine pour remplacer $cut : " "
    $cut = strrpos($text, ' ');
    return substr ($text, 0,$cut);
}