<?php

function pages_get_data($redirectError){
    $title = filter_input(INPUT_POST, 'title');
    $url = filter_input(INPUT_POST, 'url');
    $body = filter_input(INPUT_POST, 'body');
    $user_id = 1;

    if(is_null($title) or is_null($url) or is_null($user_id)){
        flash('Imforme os campos de Título e url', 'error');
        header('location:'. $redirectError);
        die();
    }

    return compact('title', 'body', 'url', 'user_id');
}


//Buscar todas as páginas
$pages_all = function () use($conn){
    $result = $conn->query('SELECT * FROM pages');
    return $result->fetch_all(MYSQLI_ASSOC);
};

 //Buscar uma única página
$pages_one = function ($id) use($conn){
   $sql = 'SELECT * FROM pages WHERE id=?';
   $stmt = $conn->prepate($sql);
   $stmt->bind_param('i', $id);
   $stmt->execute();

   $result = $stmt->get_result();
   return $result->fetch_assoc();
};

//Cadatro da páginas
$pages_create = function () use($conn){
    $data = pages_get_data('/admin/pages/create');

    $sql = 'INSERT INTO pages(title, body, url, users_id, updated, created) VALUES (?, ?, ?, ?, now(), now()) ';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssi', $data['title'],$data['body'],$data['url'], $data['user_id']);
    flash('Registro criado com sucesso', 'success');

    return $stmt->execute();
};

$pages_edit = function ($id){
    //Editar uma página
    flash('Registro editado com sucesso', 'success');
};

$pages_delete = function ($id){
    //Deletar uma página
    flash('Registro excluido com sucesso', 'success');
};