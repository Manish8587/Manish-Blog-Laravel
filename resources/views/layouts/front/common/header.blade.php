<!DOCTYPE HTML>
<html>
<head>
<title>First Blog project</title>
<link href="{!! asset('css/style.css') !!}" rel="stylesheet" type="text/css" media="all" />
<script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div class="header">
    <div class="wrap">
            <div class="logo"><a href="index.html"><img src="{!! asset('images/logo.png') !!}" alt="crocodile" /></a></div>
            <div class="headerbox">
                @if (Auth::guest())
                <div class="login">
                    <ul>
                        <li><a href="{!! url('/login') !!}">Sign-in</a></li> |
                        <li><a href="{!! url('/register') !!}">Sign-up</a></li>
                    </ul>
                </div>

                @else
                    <div class="login">
                    <ul>
                        <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Welcome {{ Auth::user()->name }} (Logout)
                                </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                            </form>
                            
                        </li>                        
                    </ul>
                </div>
                @endif


                <div class="search">
                    <form>
                        <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}">
                        <input type="submit" value="Go" />
                    </form>
                </div>
            </div>
        <div class="clear"></div>
    </div>
</div>
<div class="wrap">
    <div class="main">
        <div class="nav">
        <ul>
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="single.html">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Our Works</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <div class="clear"></div>
    </div>