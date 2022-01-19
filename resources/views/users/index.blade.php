
<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="{{ config('app.charset') }}"/>
        <title>@yield('title') - {{ config('app.name') }}</title>
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
                            @if (count($data) > 0)
                                <h4><center>{{ $data['message'] }}</center></h4>
                            @endif
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
                                <a class="navbar-brand" href="#">Usuários - Lista de Usuários</a>
                            </div>
                            <div class="collapse navbar-collapse">
                                <div class="text-right" style="padding-top: 3px">
                                    <a href="/users/add" class="btn btn-fill btn-primary">Novo Usuário</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="header"><h4 class="title">Localizar Usuário</h4></div>
                                        <div class="content">
                                            <form method="POST" action="/users" accept-charset="UTF-8">
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <input class="form-control" name="search" type="text">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button class="btn btn-success" title="Localizar um usuário"><i class="fa fa-search"></i></button>
                                                        <a href="/users" class="btn btn-fill btn-danger" title="Limpar busca"><i class="fas fa-broom"></i></a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="content">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>E-mail</th>
                                                        <th width="10%">&nbsp;</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($users as $user)
                                                        <tr>
                                                            <td>{{ $user['id'] }}</td>
                                                            <td>{{ $user['email'] }}</td>
                                                            <td class="td-actions">
                                                                <form method="GET" action="/users/edit/{{ $user['id'] }}" accept-charset="UTF-8">
                                                                <button class="btn btn-default btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </button>
                                                                </form>
                                                                <form method="POST" action="/users/delete/{{ $user['id'] }}" accept-charset="UTF-8" data-confirm="Esta operação é irreversível, deseja continuar?" data-title="Tem certeza disso?" data-type="warning">
                                                                    <input class="form-control" name="_method" type="hidden" value="DELETE">
                                                                    <input class="form-control" name="_token" type="hidden" value="rOxphFulkchmosEaJyx6uLqGO7XxSOzlvdV8ZdsA">
                                                                    <button class="btn btn-danger btn-xs">
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="2"><center>Nenhum usuário encontrado.</center></td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
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