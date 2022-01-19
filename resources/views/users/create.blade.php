
<!doctype html>
<html lang="pt_BR">
    <head>
        <meta charset="utf-8"/>
        <title>Usuários - Caller</title>
        <link rel="icon" type="image/png" href="/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
        <meta name="viewport" content="width=device-width"/>
        <meta name="csrf-token" content="rOxphFulkchmosEaJyx6uLqGO7XxSOzlvdV8ZdsA">
        <meta name="api-token" content="">
        
        <link rel="stylesheet" href="/css/theme.css"/>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' type='text/css'>
        <link href="/css/dashboard.css" rel="stylesheet"/>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Scripts -->
        <script>
            window.Laravel = {"csrfToken":"rOxphFulkchmosEaJyx6uLqGO7XxSOzlvdV8ZdsA","apiToken":null};
        </script>
    </head>
    <body style="overflow:hidden;">
        <div id="app">
            <div class="wrapper">
                <div class="sidebar" data-color="black" data-image="/img/full-screen-image-9.jpg">
                    <div class="logo">
                        <a href="/users" class="logo-text">
                            <img src="/img/marca-mp-vertical-colorida.png" height="100"/>
                        </a>
                    </div>
                    <div class="sidebar-wrapper">
                        <div class="user">
                            <div class="photo">
                                <img src="/storage/account/c4ca4238a0b923820dcc509a6f75849b.jpg" alt=""/>
                            </div>
                            
                            <div class="info">
                                <center>Evandro de Oliveira</center>
                                <center>evandrojlle@gmail.com</center>
                                <center><a href="https://api.whatsapp.com/send?phone=5547999067829&text=Escreva sua mensagem" target="blank">WhatsApp</a></center>
                            </div>
                        </div>
                        <ul class="nav">
                            <li class="">
                                <a href="/users">
                                    <i class="fas fa-users"></i>
                                    <p>Usuários</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="main-panel">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-minimize">
                                <button id="minimizeSidebar" class="btn btn-default btn-fill btn-round btn-icon">
                                    <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                                    <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                                </button>
                            </div>
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">Usuários</a>
                            </div>
                            <div class="collapse navbar-collapse">
                                <div class="text-right" style="padding-top: 3px">
                                    <a href="/users" class="btn btn-default">Voltar</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h4 class="title">Novo Usuário</h4>
                                        </div>
                                        <div class="content">
                                            <form method="POST" action="/users/store" accept-charset="UTF-8">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label for="email">E-mail</label><b style="color:red">*</b>
                                                        <input placeholder="Ex: john@domain.com" class="form-control" name="email" type="email" id="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label for="password">Senha</label>
                                                        <input class="form-control" name="password" type="password" value="" id="password">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <button class="btn btn-info btn-fill pull-right">Criar</button>
                                                <div class="clearfix"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/js/theme.js"></script>
        <script src="/js/dashboard.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    </body>
</html>