<?php
    $data = json_decode(file_get_contents("php://input"));
    $result = file_put_contents('data.txt', json_encode($data));
    $response = array('status' => 'success', 'message' => 'Data berhasil diterima');
    echo json_encode($response);