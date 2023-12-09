<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading"></li>

                <li>
                    <a href="index.php" class="<?= !isset($_GET['c']) ? 'mm-active' : '' ?>">
                        <i class="metismenu-icon pe-7s-display1"></i>
                        Home
                    </a>
                </li>

                <li class="<?= $_GET['c'] == 'lista_estudante' ? 'mm-active' : '' ?>">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-shopbag"></i>
                        Estudante
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="?c=lista_estudante" class="<?= $_GET['c'] == 'lista_estudante' ? 'mm-active' : '' ?>">
                                <i class="metismenu-icon"></i>
                                Dados Estudante
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="<?= $_GET['c'] == 'lista_professor' ? 'mm-active' : '' ?>">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-user"></i>
                        Professor
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="?c=lista_professor" class="<?= $_GET['c'] == 'lista_professor' ? 'mm-active' : '' ?>">
                                <i class="metismenu-icon"></i>
                                Dados Professor
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>