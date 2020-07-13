<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Presence Web</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <!--[if lte IE 8]>
    <script src="/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="/assets/css/main.css"/>
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/assets/css/ie9.css"/><![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/assets/css/ie8.css"/><![endif]-->
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <ul class="links">
            <li><a href="index.html">Home</a></li>
            <li><a href="landing.html">Landing</a></li>
            <li><a href="generic.html">Generic</a></li>
            <li><a href="elements.html">Elements</a></li>
        </ul>
        <ul class="actions vertical">
            <li><a href="#" class="button special fit">{{__("home.get_started")}}</a></li>
            {{--<li><a href="#" class="button fit">Log In</a></li>--}}
        </ul>
    </nav>

    <!-- Banner -->
    <section id="banner" class="major">
        <div class="inner">
            <header class="major">
                <h1>{{$home->main_title}}</h1>
            </header>
            <div class="content">
                <p>{{$home->main_description}}</p>
                @if($home->get_started_button)
                    <ul class="actions">
                        <li><a href="#one" class="button next scrolly">{{__("home.get_started")}}</a></li>
                    </ul>
                @endif
            </div>
        </div>
    </section>

    <!-- Main -->
    <div id="main">

        <!-- One -->
        <section id="one" class="tiles">
            @foreach($articles as $article)
                <article>
                    <span class="image">
                        <img src="{{url('/storage',$article->image)}}" alt=""/>
                    </span>
                    <header class="major">
                        <h3><a href="#" class="link">{{$article->title}}</a></h3>
                        <p>{{$article->description}}</p>
                    </header>
                </article>
            @endforeach
        </section>
    </div>

    <!-- Contact -->
    <section id="contact">
        <div class="inner">
            <section>
                <form method="post" action="{{route('contact-form')}}">
                    @csrf
                    <div class="field half first">
                        <label for="name">{{__("home.name")}}</label>
                        <input type="text" name="name" id="name"/>
                        @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="field half">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email"/>
                        @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="6"></textarea>
                        @error('message')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="{{__('home.send_message')}}" class="special"/></li>
                        <li><input type="reset" value="Clear"/></li>
                    </ul>
                </form>
            </section>
            <section class="split">
                <section>
                    <div class="contact-method">
                        <span class="icon alt fa-envelope"></span>
                        <h3>Email</h3>
                        <a href="#">{{$credentials->email}}</a>
                    </div>
                </section>
                <section>
                    <div class="contact-method">
                        <span class="icon alt fa-phone"></span>
                        <h3>{{__("home.phone")}}</h3>
                        <span>{{$credentials->phone}}</span>
                    </div>
                </section>
                <section>
                    <div class="contact-method">
                        <span class="icon alt fa-home"></span>
                        <h3>{{__("home.address")}}</h3>
                        <span>{{$credentials->address}}</span>
                    </div>
                </section>
            </section>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <ul class="icons">
                <li><a href="//{{$socialMedia[0]->link}}" class="icon alt fa-facebook"><span
                                class="label">Facebook</span></a>
                </li>
                <li><a href="//{{$socialMedia[1]->link}}" class="icon alt fa-twitter"><span
                                class="label">Twitter</span></a></li>
                <li><a href="//{{$socialMedia[2]->link}}" class="icon alt fa-instagram"><span
                                class="label">Instagram</span></a></li>
                <li><a href="//{{$socialMedia[3]->link}}" class="icon alt fa-linkedin"><span
                                class="label">LinkedIn</span></a>
                </li>
            </ul>
            <ul class="copyright">
                <li><a href="http://www.safesoft-dz.com/">&copy; Safe Soft 2020</a></li>
                {{--                <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>--}}
            </ul>
        </div>
    </footer>

</div>

<!-- Scripts -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/jquery.scrolly.min.js"></script>
<script src="/assets/js/jquery.scrollex.min.js"></script>
<script src="/assets/js/skel.min.js"></script>
<script src="/assets/js/util.js"></script>
<!--[if lte IE 8]>
<script src="/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="/assets/js/main.js"></script>

</body>
</html>