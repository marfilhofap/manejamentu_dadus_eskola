<?php
$content = isset($_GET['c']) ? $_GET['c'] : "index";


echo '<div class="app-main__inner">';

switch ($content) {
    case 'index':
        include __DIR__ . '/../content/home.php';
        break;
    case 'lista_estudante':
        include __DIR__ . '/../content/estudante/lista_estudante.php';
        break;
    case 'lista_professor':
        include __DIR__ . '/../content/professor/lista_professor.php';
        break;
    default:
        include __DIR__ . '/../content/home.php';
        break;
}

echo '</div>';
