<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>KAIO FOFÃO</title>
    <!--favicon-->
    <link rel="icon" href="{{asset('assets/images/ico.png')}}" type="image/x-icon">
    <!-- jquery steps CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/jquery.steps/css/jquery.steps.css')}}">
    <!-- notifications css -->
    <link rel="stylesheet" href="{{asset('assets/plugins/notifications/css/lobibox.min.css')}}"/>
    <!-- simplebar CSS-->
    <link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="{{asset('assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="{{asset('assets/css/app-style.css')}}" rel="stylesheet"/>
    <!--Select Plugins-->
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet"/>
    <!--inputtags-->
    <link href="{{asset('assets/plugins/inputtags/css/bootstrap-tagsinput.css')}}" rel="stylesheet" />
    <!--Bootstrap Datepicker-->
    <link href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<!-- start loader -->
<div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
<!-- end loader -->
<!-- Start wrapper-->
<div id="wrapper">
    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" class="bg-theme bg-theme2" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">
            <a href="{{route('index')}}">
                <h5 class="logo-text">ADMINISTRAÇÃO</h5>
            </a>
        </div>
        <div class="user-details">

        </div>
        <ul class="sidebar-menu do-nicescrol">
            <li class="sidebar-header">MENU PRINCIPAL</li>
            <li>
                <a href="{{route('topico.index')}}" class="waves-effect">
                    <i class="fa fa-list-ul"></i> <span>Tópcios</span>
                </a>
            </li>
            <li>
                <a href="{{route('questao.index')}}" class="waves-effect">
                    <i class="fa fa-language"></i> <span>Questões</span>
                </a>
            </li>
        </ul>
    </div>
    <!--End sidebar-wrapper-->
    <!--Start topbar header-->
    <header class="topbar-nav">
        <nav class="navbar navbar-expand fixed-top">
            <ul class="navbar-nav mr-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link toggle-menu" href="javascript:void();">
                        <i class="icon-menu menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">

                </li>
            </ul>
            <ul class="navbar-nav align-items-center right-nav-link">
               <li class="nav-item">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                        <span class="user-profile"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item user-details">
                            <a href="javaScript:void();">
                                <div class="media">
                                    <div class="avatar"></div>
                                    <div class="media-body">
                                        <h6 class="mt-2 user-title"></h6>
                                        <p class="user-subtitle"></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><i class="icon-user"></i></li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><i class="icon-power mr-2"></i></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!--End topbar header-->
    <div class="clearfix"></div>
    <div class="content-wrapper">
        <div class="container-fluid">
            @yield('conteudo')
        </div>
        <!-- End container-fluid-->
    </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
    <!--Start footer-->
    <footer class="footer">
        <div class="container">
            <div class="text-center">
                Copyright © {{date('Y')}} Kaio Fofão
            </div>
        </div>
    </footer>
    <!--End footer-->
</div><!--End wrapper-->
<!-- Bootstrap core JavaScript-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- simplebar js -->
<script src="{{asset('assets/plugins/simplebar/js/simplebar.js')}}"></script>
<!-- sidebar-menu js -->
<script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
<!-- Custom scripts -->
<script src="{{asset('assets/js/app-script.js')}}"></script>
<!-- Input Mask -->
<script src="{{asset('assets/js/jquery.mask.min.js')}}"></script>
<!--notification js -->
<script src="{{asset('assets/plugins/notifications/js/lobibox.min.js')}}"></script>
<script src="{{asset('assets/plugins/notifications/js/notifications.min.js')}}"></script>
<!--Select Plugins Js-->
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Inputtags Js-->
<script src="{{asset('assets/plugins/inputtags/js/bootstrap-tagsinput.js')}}"></script>
<!--Bootstrap Datepicker Js-->
<script src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<!--Form Wizard-->
<script src="{{asset('assets/plugins/jquery.steps/js/jquery.steps.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
<!--wizard initialization-->
<script src="{{asset('assets/plugins/jquery.steps/js/jquery.wizard-init.js')}}"></script>
<script>
    $(document).ready(function() {
        $('div[role="alert"]').hide();
        $('.single-select').select2();
        @if (session()->has('mensagem'))
        function notificacao(){
            Lobibox.notify('{{ session("tipo") }}', {
                pauseDelayOnHover: true,
                size: 'mini',
                rounded: true,
                continueDelayOnInactiveTab: false
                position: 'top right',
                icon: 'fa fa-exclamation-circle',
                msg: '{{ session("mensagem") }}'
            });
        }
        notificacao();
        @endif;
        $('#sessao').on('click', 'button', function(){
            $('#alert'+$(this).attr('sessao')).show();
        });
    });
</script>
</body>
</html>
