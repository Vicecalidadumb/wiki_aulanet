<?php
include('funciones/principal.php');
$page = get_body($_GET);
$url = '';


include('plantilla/head.php');
include('plantilla/header.php');
include($page['menu']);
include($page['body']);
include('plantilla/footer.php');
?>