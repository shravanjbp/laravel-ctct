<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel Constant Contact | @yield('template_title')</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
        @stack('styles')
        <style type="text/css">
            body{padding-top: 90px;}
        </style>
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ route('account') }}">Laravel Constant Contact</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="dropdown {{ Request::is('ctct/account*') ? 'active' : '' }}"> 
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Account <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">  
                        <li><a href="{{ route('account') }}">Account</a></li>
                        <li><a href="{{ route('account.edit') }}">Edit Account</a></li>
                    </ul>
                </li>
                <li class="dropdown {{ Request::is('ctct/campaign*') ? 'active' : '' }}"> 
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Campaigns <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">  
                        <li><a href="{{ route('campaigns.index') }}">Campaigns</a></li>
                        <li><a href="{{ route('campaigns.create') }}">Add New</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
        <div class="container">
            @include('vendor.laravelctct.shared._notifications')
            @yield('container')
        </div>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        @stack('scripts')
    </body>
</html>