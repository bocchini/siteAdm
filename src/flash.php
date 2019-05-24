<?php


function flash($message = null, $type = null){
    if($message){
        //Guardo a mensagem
        $_SESSION['flash'][] = compact('message', 'type');
    }else{
        //Mostra a mensagem
        $flash = $_SESSION['flash'] ?? [];
        if(!count($flash)){
            return;
        }

        foreach($flash as $key => $message){
            render('flash', 'ajax', $message); //Printo a mensagem
            unset($_SESSION['flash'][$key]); //Removo a mensagem
        }
    }
}