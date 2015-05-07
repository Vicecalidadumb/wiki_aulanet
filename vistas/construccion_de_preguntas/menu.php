<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li <?php echo ($page['file'] == 'ingreso.html') ? 'class="active"' : ''; ?>>
            <a href="index.php?folder=construccion_de_preguntas&page=ingreso">Ingreso al Sistema de Evaluación</a>
        </li>
        <li <?php echo ($page['file'] == 'banco.html') ? 'class="active"' : ''; ?>>
            <a href="index.php?folder=construccion_de_preguntas&page=banco">Banco de Preguntas</a>
        </li>
        <li <?php echo ($page['file'] == 'crear.html') ? 'class="active"' : ''; ?>>
            <a href="index.php?folder=construccion_de_preguntas&page=crear">Crear Pregunta</a>
        </li>
        <li <?php echo ($page['file'] == 'omur.html') ? 'class="active"' : ''; ?>>
            <a href="index.php?folder=construccion_de_preguntas&page=omur">&nbsp;&nbsp;&nbsp;1)&nbsp;OMUR</a>
        </li>        
        <li <?php echo ($page['file'] == 'editar.html') ? 'class="active"' : ''; ?>>
            <a href="index.php?folder=construccion_de_preguntas&page=editar">Editar Pregunta</a>
        </li>
        <li <?php echo ($page['file'] == 'eliminar.html') ? 'class="active"' : ''; ?>>
            <a href="index.php?folder=construccion_de_preguntas&page=eliminar">Eliminar Pregunta</a>
        </li>        
<!--        <li <?php echo ($page['file'] == 'tipos.html') ? 'class="active"' : ''; ?>>
            <a href="index.php?folder=construccion_de_preguntas&page=tipos">Tipos de Pregunta</a>
        </li>        -->
        <li <?php echo ($page['file'] == 'masivo.html') ? 'class="active"' : ''; ?>>
            <a href="index.php?folder=construccion_de_preguntas&page=masivo">Agregar Preguntas por Masivo</a>
        </li>
    </ul>
    <ul class="nav nav-sidebar">
    </ul>
</div>