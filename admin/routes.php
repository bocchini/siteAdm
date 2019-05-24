<?php

if(resolve('/admin') || resolve('/admin/')){

   render('admin/home','admin');

}elseif(resolve('/admin/pages.*')){ //Qualquer rota para pages direciono para o aqruivo de rotas pages

    include __DIR__ . '/pages/routes.php';
}else{

    http_response_code(404);
    echo('Página não encontrada');

}