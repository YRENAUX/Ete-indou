<?php
function getVid($conn, $nb = null, $id = null){
    if ($nb AND !$id) {
        $req = $conn->query('SELECT * FROM video LIMIT' .$nb);
        $vids = $req->fetchAll();
    }
    elseif($id){
        $req = $conn->query('SELECT * FROM video WHERE id_video =' .$id);
        $vids = $req->fetchObject();
    }
    else{
        $req = $conn->query('SELECT * FROM video');
        $vids = $req->fetchAll();
    }
    return $vids;
}