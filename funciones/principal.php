<?php

function get_body($get) {
    $page = (isset($get['folder'])) ? $get['page'] : 'index';
    $folder = (isset($get['folder'])) ? $get['folder'] : 'inicio';
    return array(
        'menu' => 'vistas/' . $folder . '/menu.php',
        'body' => 'vistas/' . $folder . '/' . $page . '.html',
        'file' => $page . '.html',
        'folder' => $folder ,
    );
}
