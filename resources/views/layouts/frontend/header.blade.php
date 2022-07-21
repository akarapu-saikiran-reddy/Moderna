<header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1>
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('homepage') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                <li><a href="{{ route('team') }}">Team</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('contactus') }}">Contact Us</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>