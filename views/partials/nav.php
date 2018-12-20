<script type="text/javascript">
    switch (window.location.pathname) {
        case '/':
            $('#news').addClass('active');
            break;
        case '/about':
            $('#about').addClass('active');
            break;
        case '/donate':
            $('#donate').addClass('active');
            break;
    }
</script>
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="/" id="news">News/Events</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/about" id="about">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/donate" id="donate">Donate</a>
    </li>
</ul>