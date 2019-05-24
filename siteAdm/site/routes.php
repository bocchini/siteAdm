<?php


if(resolve('/')){
    echo('Home');
 }elseif(resolve('/contato')){
     echo('contato');
 }else{
     echo('Página não encontrada');
 }