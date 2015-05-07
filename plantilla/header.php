<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Evaluaciones UMB.</a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li <?php echo ($page['folder'] == 'construccion_de_preguntas') ? 'class="active"' : ''; ?>>
                        <a href="index.php?folder=construccion_de_preguntas&page=ingreso">Construccion de Preguntas</a>
                    </li>
                    <li <?php echo ($page['folder'] == 'elaboracion_de_cuestionarios') ? 'class="active"' : ''; ?>>
                        <a href="index.php?folder=elaboracion_de_cuestionarios&page=ingreso">Elaboracion de Cuestionarios</a>
                    </li>
                    <!--<li><a href="index.php?folder=aplicacion_de_pruebas&page=ingreso">Aplicacion de Pruebas</a></li>-->
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">