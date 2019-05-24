<?php

include __DIR__ . '/db.php';

if(resolve('/admin/pages')){ //Index
    $pages = $pages_all();
    render('admin/pages/index','admin', ['pages' => $pages]);

}elseif(resolve('/admin/pages/create')){ //Create
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $pages_create();
       return  header('location: /admin/pages');
    }
    render('admin/pages/create','admin');

}elseif($params = resolve('/admin/pages/(\d+)')){ //View
    $page = $pages_one($params[1]);
    render('admin/pages/view','admin', ['page' => $page]);

}elseif($params = resolve('/admin/pages/(\d+)/edit')){  //Edit
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $pages_edit($params[1]);
        return header('location: /admin/pages');
    }
    render('admin/pages/edit','admin');

}elseif($params = resolve('/admin/pages/(\d+)/delete')){ //Delete

    $pages_delete($params[1]);
    return header('location: /admin/pages');
    

}