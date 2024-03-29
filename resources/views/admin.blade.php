
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS-->

    <!-- Font Awesome CSS-->
<title>SANTECHSEN</title>
<link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
<link href="{{asset('Admins/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
<link href="{{asset('Admins/css/plugins/clockpicker/clockpicker.css')}}" rel="stylesheet">
    <link href="{{asset('Admins/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{asset('Admins/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
 <link href="{{asset('Admins/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <!-- Gritter -->
    <link href="{{asset('Admins/js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">
    <link href="{{asset('Admins/css/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet">

    <link href="{{asset('Admins/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('Admins/css/style.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="Utilisateurs/img/logo.png">


</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" width="80px" height="80px" src="Admins/img/Ywk6MagyeTEretcWCCz5.jpeg   " />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">     prenom  numero </strong>
                            </span> <span class="text-muted text-xs block"><b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Email</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>

                    </li>

                    <li>
                        <a href="#"><i class="fa fa-wheelchair"></i> <span class="nav-label">Administrateur</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                             <li class="active"><a href="utilisateur">Utilisateur</a></li>
                             <li class="active"><a href="profil">Profil</a></li>
                             <li class="active"><a href="page">Page</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-wheelchair"></i> <span class="nav-label">Administrateur Page</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                             <li class="active"><a href="admin">Acceuil</a></li>
                             <li class="active"><a href="QuiSommeNous">qui somme nous</a></li>
                             <li class="active"><a href="contact">contact</a></li>
                             <li class="active"><a href="slide">slide</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-wheelchair"></i> <span class="nav-label">Partenaire</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                             <li class="active"><a href="liste">Liste partenaire</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-wheelchair"></i> <span class="nav-label">services</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="service">services</a></li>
                             <li class="active"><a href="Demande">Demande</a></li>
                             <li class="active"><a href="client">Client</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-wheelchair"></i> <span class="nav-label">Parametre</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                             <li class="active"><a href="TypeService">Type service </a></li>
                             <li class="active"><a href="TypePage">type page</a></li>
                        </ul>
                    </li>


            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Rechercher quelque chose..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Bienvenu Nazounki +  administrateur</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a data-toggle="modal"  href="#modal-form2">
                        <i class="fa fa-sign-out"></i> Deconnecter
                    </a>
                </li>
                <li>
                    <a class="right-sidebar-toggle">
                        <i class="fa fa-tasks"></i>
                    </a>
                </li>
            </ul>

        </nav>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                        <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                               <center>  <img width="20%" height="10%" src="Admins/img/Logo_SantechsenOKK1.png"></center>
                                <h3 class="no-margin-bottom">  Page d'Administration
                                 <strong style="color:  #13478d ;">Aujourd'hui le  : </strong>{{date('d/m/Y')}}
                                </div>
                    </div>
                @yield('content')
                </div>
               <div class="footer">
                    <div class="pull-right">
                        developer par nazounki  <strong></strong>
                    </div>
                   <marquee >  <p>  Adrese: 130 - 132 rue de Normandie, 92400 Courbevoie (Paris La Défense)
                   Tel: /   +33 (0)147 89 33 15
                        Email: info@nazounki.com</p></marquee>
               </div>
                </div>
            </div>
           </div>
        </div>
           <div class="small-chat-box fadeInRight animated">
           <div class="heading" draggable="true">
            <small class="chat-date pull-right">
                02.06.2019
                </small>
                Small chat
                </div>
                    <div class="content">

                                <div class="left">
                                    <div class="author-name">
                                        Monica Jackson <small class="chat-date">
                                        10:02 am
                                    </small>
                                    </div>
                                    <div class="chat-message active">
                                        Lorem Ipsum is simply dummy text input.
                                    </div>

                                </div>
                                <div class="right">
                                    <div class="author-name">
                                        Mick Smith
                                        <small class="chat-date">
                                            11:24 am
                                        </small>
                                    </div>
                                    <div class="chat-message">
                                        Lorem Ipsum is simpl.
                                    </div>
                                </div>
                                <div class="left">
                                    <div class="author-name">
                                        Alice Novak
                                        <small class="chat-date">
                                            08:45 pm
                                        </small>
                                    </div>
                                    <div class="chat-message active">
                                        Check this stock char.
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="author-name">
                                        Anna Lamson
                                        <small class="chat-date">
                                            11:24 am
                                        </small>
                                    </div>
                                    <div class="chat-message">
                                        The standard chunk of Lorem Ipsum
                                    </div>
                                </div>
                                <div class="left">
                                    <div class="author-name">
                                        Mick Lane
                                        <small class="chat-date">
                                            08:45 pm
                                        </small>
                                    </div>
                                    <div class="chat-message active">
                                        I belive that. Lorem Ipsum is simply dummy text.
                                    </div>
                                </div>


                            </div>
                            <div class="form-chat">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn"> <button
                                        class="btn btn-primary" type="button">Send
                                </button> </span></div>
                            </div>

                        </div>
                        <div id="small-chat">

                            <span class="badge badge-warning pull-right">5</span>
                            <a class="open-small-chat">
                                <i class="fa fa-comments"></i>

                            </a>
                        </div>

                        <div id="right-sidebar" class="animated">
                            <div class="sidebar-container">

                                <ul class="nav nav-tabs navs-3">

                                    <li class="active"><a data-toggle="tab" href="#tab-1">
                                        Notes
                                    </a></li>
                                    <li><a data-toggle="tab" href="#tab-2">
                                        Projects
                                    </a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-3">
                                        <i class="fa fa-gear"></i>
                                    </a></li>
                                </ul>

                <div class="tab-content">


                    <div id="tab-1" class="tab-pane active">

                        <div class="sidebar-title">
                            <h3> <i class="fa fa-comments-o"></i> Latest Notes</h3>
                            <small><i class="fa fa-tim"></i> You have 10 new message.</small>
                        </div>

                        <div>

                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a1.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">

                                        There are many variations of passages of Lorem Ipsum available.
                                        <br>
                                        <small class="text-muted">Today 4:21 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a2.jpg">
                                    </div>
                                    <div class="media-body">
                                        The point of using Lorem Ipsum is that it has a more-or-less normal.
                                        <br>
                                        <small class="text-muted">Yesterday 2:45 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a3.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        Mevolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                        <br>
                                        <small class="text-muted">Yesterday 1:10 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a4.jpg">
                                    </div>

                                    <div class="media-body">
                                        Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the
                                        <br>
                                        <small class="text-muted">Monday 8:37 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a8.jpg">
                                    </div>
                                    <div class="media-body">

                                        All the Lorem Ipsum generators on the Internet tend to repeat.
                                        <br>
                                        <small class="text-muted">Today 4:21 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a7.jpg">
                                    </div>
                                    <div class="media-body">
                                        Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                        <br>
                                        <small class="text-muted">Yesterday 2:45 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a3.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below.
                                        <br>
                                        <small class="text-muted">Yesterday 1:10 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="img/a4.jpg">
                                    </div>
                                    <div class="media-body">
                                        Uncover many web sites still in their infancy. Various versions have.
                                        <br>
                                        <small class="text-muted">Monday 8:37 pm</small>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div id="tab-2" class="tab-pane">

                        <div class="sidebar-title">
                            <h3> <i class="fa fa-cube"></i> Latest projects</h3>
                            <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
                        </div>

                        <ul class="sidebar-list">
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Business valuation</h4>
                                    It is a long established fact that a reader will be distracted.

                                    <div class="small">Completion with: 22%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Contract with Company </h4>
                                    Many desktop publishing packages and web page editors.

                                    <div class="small">Completion with: 48%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Meeting</h4>
                                    By the readable content of a page when looking at its layout.

                                    <div class="small">Completion with: 14%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary pull-right">NEW</span>
                                    <h4>The generated</h4>
                                    There are many variations of passages of Lorem Ipsum available.
                                    <div class="small">Completion with: 22%</div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Business valuation</h4>
                                    It is a long established fact that a reader will be distracted.

                                    <div class="small">Completion with: 22%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Contract with Company </h4>
                                    Many desktop publishing packages and web page editors.

                                    <div class="small">Completion with: 48%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9 hours ago</div>
                                    <h4>Meeting</h4>
                                    By the readable content of a page when looking at its layout.

                                    <div class="small">Completion with: 14%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary pull-right">NEW</span>
                                    <h4>The generated</h4>
                                    <!--<div class="small pull-right m-t-xs">9 hours ago</div>-->
                                    There are many variations of passages of Lorem Ipsum available.
                                    <div class="small">Completion with: 22%</div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>

                        </ul>

                    </div>

                    <div id="tab-3" class="tab-pane">

                        <div class="sidebar-title">
                            <h3><i class="fa fa-gears"></i> Settings</h3>
                            <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
                        </div>

                        <div class="setings-item">
                    <span>
                        Show notifications
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                    <label class="onoffswitch-label" for="example">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Disable Chat
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" checked class="onoffswitch-checkbox" id="example2">
                                    <label class="onoffswitch-label" for="example2">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Enable history
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                    <label class="onoffswitch-label" for="example3">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Show charts
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                    <label class="onoffswitch-label" for="example4">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Offline users
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example5">
                                    <label class="onoffswitch-label" for="example5">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Global search
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example6">
                                    <label class="onoffswitch-label" for="example6">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Update everyday
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                    <label class="onoffswitch-label" for="example7">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-content">
                            <h4>Settings</h4>
                            <div class="small">
                                I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                And typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s.
                                Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

      <div id="modal-form2"  class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                            <div class="row">
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h3 class="m-t-center-b"><center><strong style="color: red">Cormfirmer la Deconnexion !!</strong> </center></h3>
                                                    <center><p>Voulez-vous Quitter votre session ??</p></center>
                                                     <div class="col-xs-12" style="text-align: right;">
                                                    <button type="button" class="close" data-dismiss="modal">Non</button>
                                                    <form action="{{ route('logout') }}" method="post">
                                                    @csrf
                                                        <button  class="btn btn-danger" name="submit" > Deconnecter</button></form>
                                                  </div>
                                                 </div> 
                                        </div>
                                     </div>
                                 </div>
                             </div>
                           </div>



    <!-- Mainly scripts -->
    <script src="{{asset('Admins/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('Admins/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Admins/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('Admins/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- Flot -->
    <script src="{{asset('Admins/js/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('Admins/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('Admins/js/plugins/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('Admins/js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('Admins/js/plugins/flot/jquery.flot.pie.js')}}"></script>

    <!-- Peity -->
    <script src="{{asset('Admins/js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('Admins/js/demo/peity-demo.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('Admins/js/inspinia.js')}}"></script>
    <script src="{{asset('Admins/js/plugins/pace/pace.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{asset('Admins/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <!-- GITTER -->
    <script src="{{asset('Admins/js/plugins/gritter/jquery.gritter.min.js')}}"></script>

    <!-- Sparkline -->
    <script src="{{asset('Admins/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Sparkline demo data  -->
    <script src="{{asset('Admins/js/demo/sparkline-demo.js')}}"></script>

    <!-- ChartJS-->
    <script src="{{asset('Admins/js/plugins/chartJs/Chart.min.js')}}"></script>

    <!-- Toastr -->
    <script src="{{asset('Admins/js/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('Admins/js/plugins/sweetalert/sweetalert.min.js')}}"></script>


    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('entreprise de developpement', 'Bienvenu à Santechsen');

            }, 1300);


            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [300,50,100],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [70,27,85],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        });
    </script>
      <!-- Mainly scripts -->
    <script src="{{asset('Admins/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('Admins/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Admins/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('Admins/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <script src="{{asset('Admins/js/plugins/dataTables/datatables.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'liste des candidats'},
                    {extend: 'pdf', title: 'liste des candidats'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                      }
                    }
                ]

            });

        });

    </script>
    <script>
    $(document).ready(function () {

        $('.demo3').click(function () {
            swal({
                title: "voulez-vous supprimer?",
                text: "cet enregistrement va etre supprimer!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Oui, supprimer",
                closeOnConfirm: false
            }, function (confirmed) {
                     if (confirmed){
              swal("success!", "suppression effectue avec succes.", "success");
                       };

            });
        });
    });

</script>
<script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js')}}"></script>
<script>
    $(document).on("click", "#delete", function (e){
        e.preventDefault();
      var link = $(this).attr("href");
      bootbox.confirm("Voulez-vous supprimer !!", function (confirmed){
          if (confirmed){
              window.location.href = link;
          };

      });
    });
</script>
<script>
   $(document).on('click','#show-modal',function(){
   $('#editmon').modal('show');
   $('.form-horizontal').show();
   $('.modal-title').text('editer moniteur');
   $('#a').val($(this).data('cinmoni'));
   $('#t').val($(this).data('prenom_moni'));
   $('#b').val($(this).data('nom_moni'));

  }) ;
     $('.modal-foter').on('click','edit',function(){
  $.ajax({
    type:'POST',
    url:'editmoni',
data:{
     '-token':$('input[name=_token]').val(),
      '-token':$("#a").val(),
      '-token':$("#b").val(),
      '-token':$("#c").val(),
      },
      success:function(data){

      }
  });
 });

</script>



</body>
</html>
