<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div>
                <a href="{{ route('index') }}" class="footer-logo">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" width="50px">DT Termo Group</a>
                <p style="color:#9BA39F; font-size:.9rem; max-width:32ch;">Поставки оборудования и материалов для систем ОВК и ВК с 2001 года.</p>
                <div class="footer-social">
                    <a href="https://t.me/DTtermoGroup" aria-label="Telegram DT Termo Group" target="_blank" rel="noopener nofollow">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M21 4L2.5 11.5l6 2 2 6.5 3-4 4.5 3.5L21 4z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
                    </a>
                    <a href="https://www.youtube.com/user/dttermo" aria-label="YouTube DT Termo Group" target="_blank" rel="noopener nofollow">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><rect x="3" y="6" width="18" height="12" rx="3" stroke="currentColor" stroke-width="1.5"/><path d="M10 9.5l5 2.5-5 2.5v-5z" fill="currentColor"/></svg>
                    </a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Навигация</h4>
                <ul>
                    <li><a href="{{ route('index') }}">Главная</a></li>
                    <li><a href="{{ route('about_us') }}">О нас</a></li>
                    <li><a href="{{ route('catalog') }}">Каталог</a></li>
                    <li><a href="{{ route('contacts') }}">Контакты</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Направления</h4>
                <ul>
                    <li><a href="{{ route('catalog') }}#heating">Отопление</a></li>
                    <li><a href="{{ route('catalog') }}#ventilation">Вентиляция</a></li>
                    <li><a href="{{ route('catalog') }}#ac">Кондиционирование</a></li>
                    <li><a href="{{ route('catalog') }}#clean">Чистые помещения</a></li>
                    <li><a href="{{ route('catalog') }}#water">Водоснабжение</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Контакты</h4>
                <ul>
                    <li>107023, Москва, Медовый переулок, д. 5, стр. 1</li>
                    <li><a href="tel:+74957772399">+7 (495) 777-23-99</a></li>
                    <li><a href="tel:+79856906915">+7 (985) 690-69-15</a></li>
                    <li><a href="mailto:info@dttermo.ru">info@dttermo.ru</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© 2001–<span data-year>2026</span> DT Termo Group. Все права защищены.</span>
            <a href="/legal/oferta.html">Публичная оферта</a>
        </div>
    </div>
</footer>
