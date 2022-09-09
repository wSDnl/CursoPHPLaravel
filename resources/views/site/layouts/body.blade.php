<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel - @yield('titulo')</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/StyleOriginal.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styleSistema.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    <!-- Core JS files -->
    <script type="text/javascript" src="{{ asset('js/plugins/loaders/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/core/libraries/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->
    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('js/plugins/forms/styling/switchery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/ui/moment/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/pickers/daterangepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pages/dashboard.js') }}"></script>
    <!-- /theme JS files -->
  
</head>

<body>
    <!-- Basic modal -->
    <div class="contentAviso">
        <div id="avisoDeCamposVazios">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title">Alerta!!</h5>
                    </div>
                    <hr>
                    <div class="modal-body">
                        <p>Todos os Campos são obrigatórios</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /basic modal -->
    <!-- TELA DE AVISO GENÉRICO -->
    <div class="contentAvisoGenerico">
        <div id="avisoDeCamposVaziosGenerico">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title">Alerta</h5>
                    </div>
                    <hr>
                    <div class="modal-body">
                        <p><label id="labelMsgDeErroAvisoGenerico"></label></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /TELA DE AVISO GENÉRICO -->
    <!-- Main navbar -->
    <div class="navbar navbar-inverse" style="background-color:var( --topo )">

        <div class="navbar-header">

            <a class="navbar-brand" href="#"><img src="assets/images/logo_light.png" alt=""></a>

            <ul class="nav navbar-nav visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" style="display:none" id="navbar-mobile">

            <ul class="nav navbar-nav">
                <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown dropdown-user">

                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="assets/images/placeholder.jpg" alt="">
                        <span id="nomeUsuario">LOGIN</span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right" style="visibility:hidden">
                        <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                            <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                            <li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                        <li><a href="/Home/Login"><i class="icon-switch2"></i>Sair</a></li>
                    </ul>

                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->
    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <div class="sidebar sidebar-main" style="background-color:var(--menu)">
                <div class="sidebar-content">

                    <!-- User menu -->
                    <div class="sidebar-user userName" style="display:none">
                        <div class="category-content">
                            <div class="media">
                                <a href="#" class="media-left"><img src="{{ asset('images/placeholder.jpg') }}" class="img-circle img-sm" alt=""></a>

                                <div class="media-body">
                                    <span class="media-heading text-semibold"><label id="JSONNomeUsuario"></label></span>
                                    <div class="text-size-mini text-muted">&nbsp;</div>
                                </div>

                                <div class="media-right media-middle">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="#"><i class="icon-cog3"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- /user menu -->
                    <!-- Main navigation -->
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="category-content no-padding">
                            <ul class="navigation navigation-main navigation-accordion">
                                <!-- Main -->
                                <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="MENU"></i></li>
                                <li class="active"><a href="/"><i class="icon-home4"></i> <span>Inicio</span></a></li>
                                <li class="active"><a href="/Login"><i class="icon-soundcloud"></i> <span>Login</span></a></li>

                                <li>
                                    <a href="#"><i class="icon-stack2"></i> <span>Cadastros</span></a>
                                    <ul>
                                        <li><a href="/CadastroUsuarios">Usuário</a></li>
                                    </ul>
                                </li>

                                <!--
                                <li>
                                    <a href="#"><i class="icon-stack2"></i> <span>Relatórios</span></a>
                                    <ul>
                                        <li><a href="/Home/RelUsuarios">Usuarios</a></li>
                                    </ul>
                                </li>
                                -->




                            </ul>
                        </div>
                    </div>
                    <!-- /main navigation -->

                </div>
            </div>
            <!-- /main sidebar -->
            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content">
                    @yield('body')
                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->
    <!-- My Scripts -->
    <!-- /My Scripts -->
</body>
</html>