<?php

    //session_start();

    $perfil = $_SESSION['perfil'];
    
    if ($perfil == 'admin'){
        echo "<div class='sidebar-heading'>
        CADASTROS ADMIN
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class='nav-item'>
        <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseTwo'
            aria-expanded='true' aria-controls='collapseTwo'>
            <i class='fas fa-fw fa-cog'></i>
            <span>Cadastros</span>
        </a>
        <div id='collapseTwo' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionSidebar'>
            <div class='bg-white py-2 collapse-inner rounded'>
                <h6 class='collapse-header'>Usuários:</h6>
                <a class='collapse-item' href='cadastro_usuario.php'>Cadastro de Usuários</a>
                <a class='collapse-item' href='exibe_usuario.php'>Exibição de Usuários</a>
            </div>
            <div class='bg-white py-2 collapse-inner rounded'>
                <h6 class='collapse-header'>Professor:</h6>
                <a class='collapse-item' href='cadastro_professor.php'>Cadastro de Professor</a>
                <a class='collapse-item' href='exibe_professor.php'>Exibição de Professor</a>
            </div>
            <div class='bg-white py-2 collapse-inner rounded'>
                <h6 class='collapse-header'>Redação:</h6>
                <a class='collapse-item' href='exibe_redacao.php'>Tipo Redação</a>
                <a class='collapse-item' href='exibe_cadastro_status.php'>Registro Tipo de Redação</a>
            </div>
        </div>
    </li>";
    }

?>    
