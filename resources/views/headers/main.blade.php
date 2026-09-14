<header class="site-header">
    <div class="container header-inner">
        <a href="{{ route('index') }}" class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="logo" width="50px">
            <span class="logo-text">DT Termo Group<small>ОВК и ВК оборудование</small></span>
        </a>
        <nav class="main-nav" aria-label="Главное меню">
            <ul>
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li><a href="{{ route('about_us') }}">О нас</a></li>
                <li><a href="{{ route('catalog') }}">Каталог</a></li>
                <li><a href="{{ route('contacts') }}">Контакты</a></li>
            </ul>
        </nav>
        <div class="header-actions">
            <a href="tel:+74957772399" class="header-phone">+7 (495) 777-23-99<small>Пн–Пт, 9:00–18:00</small></a>
            <!--      <a href="/contacts.html" class="btn btn-primary">Оставить заявку</a>-->
            <button class="nav-toggle" aria-expanded="false" aria-controls="primary-navigation" aria-label="Открыть меню">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>
