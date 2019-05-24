<?php

if(resolve('/admin')){
   echo('Administrção');
}elseif(resolve('/admin/pages')){
    echo('Administrção de páginas');
}else{
    echo('Página não encontrada');
}