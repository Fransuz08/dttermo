@extends('layouts.app')

@section('content')
    <!-- HERO -->
    <section class="hero" aria-labelledby="hero-title">
        <div class="container hero-inner">
            <div class="hero-copy">
                <div class="hero-badges">
                    <span class="hero-badge">С 2001 года на рынке</span>
                    <span class="hero-badge">Член НП «АВОК»</span>
                </div>
                <h1 id="hero-title" style="color: white">DT Termo Group — поставщик оборудования и материалов для систем ОВК и ВК</h1>
                <p class="lead">Комплексные поставки оборудования и материалов для отопления, вентиляции, кондиционирования и водоснабжения от ведущих мировых производителей — на объекты любой сложности, по всей России и странам СНГ.</p>
                <div class="hero-cta">
                    <a href="{{ route('contacts') }}" class="btn btn-primary">Оставить заявку</a>
                    <a href="{{ route('catalog') }}" class="btn btn-outline">Смотреть каталог направлений</a>
                </div>
            </div>
            <div class="hero-panel">
                <div class="hero-panel-title">DT Termo Group в цифрах</div>
                <div class="hero-stat-grid">
                    <div class="hero-stat"><b data-count-to="25" data-suffix="+">0</b><span>лет на рынке ОВК и ВК</span></div>
                    <div class="hero-stat"><b data-count-to="5000" data-suffix=" м²">0</b><span>склад в г. Лобня</span></div>
                    <div class="hero-stat"><b data-count-to="2005" data-suffix="">0</b><span>год вступления в НП «АВОК»</span></div>
                    <div class="hero-stat"><b data-count-to="5" data-suffix="">0</b><span>ключевых направлений поставки</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS STRIP -->
    <section class="stats-strip" aria-label="Ключевые показатели">
        <div class="container">
            <div class="stat-item"><b>20+</b><span>лет успешной работы</span></div>
            <div class="stat-item"><b>5000 м²</b><span>складские площади в г. Лобня</span></div>
            <div class="stat-item"><b>СНГ</b><span>и вся территория России</span></div>
            <div class="stat-item"><span>ПЕРСОНАЛЬНЫЙ менеджер на каждого клиента</span></div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="section" aria-labelledby="about-title">
        <div class="container about-split">
            <div>
                <div class="eyebrow">О компании</div>
                <h2 id="about-title">Лидер на российском рынке комплексных поставок инженерных систем</h2>
                <p>DT Termo Group — это компания, которая с 2001 года анализирует рынок и модернизирует внутренние процессы, чтобы предложить клиентам широкую линейку качественного оборудования и материалов для систем ОВК и ВК в разной ценовой категории.</p>
                <p>Складские площади и отлаженная система управления поставками позволяют поддерживать широкий номенклатурный ряд продукции и гарантировать своевременную доставку.</p>
                <ul class="about-list">
                    <li>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M4 10.5L8 14.5L16 5.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Персональный менеджер и техническая консультация по подбору оборудования
                    </li>
                    <li>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M4 10.5L8 14.5L16 5.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Гибкая система скидок и индивидуальный подход к каждому клиенту
                    </li>
                    <li>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M4 10.5L8 14.5L16 5.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Сервис: пусконаладочные работы, гарантийное и постгарантийное обслуживание
                    </li>
                </ul>
                <a href="{{ route('about_us') }}" class="btn btn-dark" style="margin-top:2rem;">Подробнее о компании</a>
            </div>
            <div class="about-media">
                <!-- TODO: заменить на реальное фото офиса/склада компании. Ищи через Cmd+F: "about-media" -->
                <img src="{{ asset('img/au-est_2001.png') }}" alt="Складской комплекс DT Termo Group в г. Лобня" width="800" height="620" loading="lazy" decoding="async">
                <div class="about-media-badge">
                    <div><b>2001</b><span>год основания компании</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ADVANTAGES -->
    <section class="section section--soft" aria-labelledby="adv-title">
        <div class="container">
            <div class="section-head center">
                <div class="eyebrow" style="justify-content:center;">Почему выбирают нас</div>
                <h2 id="adv-title">Чем DT Termo Group отличается от других поставщиков?</h2>
            </div>
            <div class="card-grid">
                <article class="feature-card">
                    <div class="feature-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M12 3l8 4v5c0 5-3.4 8.4-8 9-4.6-.6-8-4-8-9V7l8-4z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg></div>
                    <h3>Надёжный поставщик</h3>
                    <p>Более 20 лет на рынке. Лидер в области комплексных поставок оборудования и материалов для инженерных систем в России и странах СНГ.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M4 12l6 6L20 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                    <h3>Подбор и техподдержка</h3>
                    <p>Профессиональная техническая поддержка и подбор оборудования под требования проекта — от концепции до сдачи объекта.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none"><rect x="3" y="7" width="18" height="13" rx="1.5" stroke="currentColor" stroke-width="1.8"/><path d="M8 7V5a4 4 0 018 0v2" stroke="currentColor" stroke-width="1.8"/></svg></div>
                    <h3>Комплексная поставка</h3>
                    <p>Поставляем ОВК и ВК оборудование и материалы ведущих мировых производителей на объекты любой сложности.</p>
                </article>
                <!--        <article class="feature-card">-->
                <!--          <div class="feature-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M3 21V9l9-6 9 6v12" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 21v-8h6v8" stroke="currentColor" stroke-width="1.8"/></svg></div>-->
                <!--          <h3>Наличие на складе</h3>-->
                <!--          <p>Собственные складские мощности МО г. Лобня — всегда поддерживается запас ходовых позиций.</p>-->
                <!--        </article>-->
                <article class="feature-card">
                    <div class="feature-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M3 16V8a1 1 0 011-1h9v9H3z" stroke="currentColor" stroke-width="1.8"/><path d="M13 10h4l3 3v3h-7v-6z" stroke="currentColor" stroke-width="1.8"/><circle cx="7" cy="18" r="1.6" stroke="currentColor" stroke-width="1.8"/><circle cx="17" cy="18" r="1.6" stroke="currentColor" stroke-width="1.8"/></svg></div>
                    <h3>Логистика</h3>
                    <p>Слаженная работа отделов продаж, снабжения и склада, контроль местонахождения груза и собственный автопарк — доставка точно в срок.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M12 15a5 5 0 100-10 5 5 0 000 10z" stroke="currentColor" stroke-width="1.8"/><path d="M8.5 14L7 21l5-2.5L17 21l-1.5-7" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg></div>
                    <h3>Сервисное обслуживание</h3>
                    <p>Гарантийное и техническое обслуживание, пусконаладочные работы систем ОВК и ВК — для долгосрочной работы оборудования.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- CATALOG PREVIEW -->
    <section class="section" aria-labelledby="cat-title">
        <div class="container">
            <div class="section-head">
                <div class="eyebrow">Направления поставки</div>
                <h2 id="cat-title">Какое оборудование и материалы мы поставляем?</h2>
                <p>Пять ключевых направлений — от систем отопления до чистых помещений. Подберём комплексное решение под задачи вашего объекта.</p>
            </div>
            <div class="category-grid">
                <article class="category-card">
                    <img src="{{ asset('img/index-condition.jpg') }}" alt="Оборудование систем кондиционирования" width="600" height="510" loading="lazy" decoding="async">
                    <div class="category-body">
                        <span class="tag">Направление 01</span>
                        <h3>Кондиционирование</h3>
                        <p>Новейшие технологии для поддержания требуемых параметров микроклимата в помещении.</p>
                        <a href="{{ route('catalog') }}#ac" class="category-link">Подробнее →</a>
                    </div>
                </article>
                <article class="category-card">
                    <img src="{{ asset('img/index-vent.jpg') }}" alt="Оборудование систем вентиляции" width="600" height="510" loading="lazy" decoding="async">
                    <div class="category-body">
                        <span class="tag">Направление 02</span>
                        <h3>Вентиляция</h3>
                        <p>Современное оборудование для эффективного воздухообмена в помещениях любого назначения.</p>
                        <a href="{{ route('catalog') }}#ventilation" class="category-link">Подробнее →</a>
                    </div>
                </article>
                <article class="category-card">
                    <!-- TODO: заменить на фото объекта/оборудования по направлению "Отопление" -->
                    <img src="{{ asset('img/index-heating.jpg') }}" alt="Оборудование систем отопления" width="600" height="510" loading="lazy" decoding="async">
                    <div class="category-body">
                        <span class="tag">Направление 03</span>
                        <h3>Отопление</h3>
                        <p>Технические решения для обогрева помещений и поддержания требуемой температуры в холодный период года.</p>
                        <a href="{{ route('catalog') }}#heating" class="category-link">Подробнее →</a>
                    </div>
                </article>
                <article class="category-card">
                    <img src="{{ asset('img/index-clean_rooms.jpg') }}" alt="Оборудование для чистых помещений" width="600" height="510" loading="lazy" decoding="async">
                    <div class="category-body">
                        <span class="tag">Направление 04</span>
                        <h3>Чистые помещения</h3>
                        <p>Высокотехнологичное оборудование для создания чистых зон и производств под требования заказчика.</p>
                        <a href="{{ route('catalog') }}#clean" class="category-link">Подробнее →</a>
                    </div>
                </article>
                <article class="category-card">
                    <img src="{{ asset('img/COD.png') }}" alt="Оборудование систем водоснабжения" width="600" height="510" loading="lazy" decoding="async">
                    <div class="category-body">
                        <span class="tag">Направление 05</span>
                        <h3>ЦОД</h3>
                        <p>Комплекс решений для холодильных машин, холодных стен, адиабатических вентиляционных установок.</p>
                        <a href="{{ route('catalog') }}#water" class="category-link">Подробнее →</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- HOW WE WORK -->
    <section class="section section--soft" aria-labelledby="steps-title">
        <div class="container">
            <div class="section-head">
                <div class="eyebrow">Как мы работаем</div>
                <h2 id="steps-title">Как проходит работа с DT Termo Group?</h2>
                <p>Прозрачный процесс от заявки до сдачи объекта — с персональным менеджером на каждом этапе.</p>
            </div>
            <div class="steps">
                <div class="step">
                    <div class="step-num">01</div>
                    <div><h3>Консультация и подбор оборудования</h3><p>Квалифицированная консультация по техническим характеристикам, помощь в подборе оборудования под требования проекта.</p></div>
                </div>
                <div class="step">
                    <div class="step-num">02</div>
                    <div><h3>Расчёт и коммерческое предложение</h3><p>Формируем предложение с учётом бюджета, сроков и специфики объекта — от типовых зданий до узкоспециализированных производств.</p></div>
                </div>
                <div class="step">
                    <div class="step-num">03</div>
                    <div><h3>Поставка и логистика</h3><p>Оперативная обработка заказа, координация доставки и контроль местонахождения груза благодаря собственному автопарку.</p></div>
                </div>
                <div class="step">
                    <div class="step-num">04</div>
                    <div><h3>Сервис и сопровождение</h3><p>Пусконаладочные работы, гарантийное и постгарантийное обслуживание — для долгосрочной и стабильной работы оборудования.</p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- MEMBERSHIP -->
    <section class="section" aria-labelledby="member-title">
        <div class="container">
            <div class="section-head">
                <div class="eyebrow">Членство и партнёрство</div>
                <h2 id="member-title">Профессиональное признание отрасли</h2>
            </div>
            <div class="badge-strip">
                <span class="badge-item"><span class="dot"></span>С 2005 года — коллективный член НП «АВОК»</span>
                <span class="badge-item"><span class="dot"></span>Участник корпорации «Сибинжиниринг»</span>
                <span class="badge-item"><span class="dot"></span>Член Ассоциации индустриальных парков России</span>
            </div>
        </div>
    </section>

    <!-- NEWS -->
    <section class="section section--soft" aria-labelledby="news-title">
        <div class="container">
            <div class="section-head">
                <div class="eyebrow">Новости</div>
                <h2 id="news-title">Последние новости компании</h2>
            </div>
            <div class="news-grid">
                @foreach($news as $n)
                    <article class="news-card">
                        <div class="news-thumb" aria-hidden="true">
                            <img src="{{ asset('img/news/' . $n->img) }}" alt="">
                        </div>
                        <div class="news-body">
                            <span class="news-date">{{ \Carbon\Carbon::parse($n->created_at)->translatedFormat('j F Y') }}</span>
                            <h3>{{ $n->title }}</h3>
                            <a href="{{ route('news.oneNews', $n) }}" class="read-more">Читать далее →</a>
                        </div>
                    </article>
                @endforeach
            </div>
            <div style="padding-top: 30px">
                <a href="{{ route('news.allNews') }}" class="read-more" style="font-weight:700; font-size:.88rem; color:var(--c-green-dark);">Перейти к новостям →</a>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section" aria-labelledby="faq-title">
        <div class="container" style="max-width:840px;">
            <div class="section-head center">
                <div class="eyebrow" style="justify-content:center;">Вопросы и ответы</div>
                <h2 id="faq-title">Частые вопросы о работе с DT Termo Group</h2>
            </div>
            <div itemscope itemtype="https://schema.org/FAQPage">
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-q" aria-expanded="false" itemprop="name">С какими объектами вы работаете?<span class="plus" aria-hidden="true"></span></button>
                    <div class="faq-a" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="faq-a-inner"><p itemprop="text">Мы поставляем оборудование как на типовые объекты — торговые центры, офисы, гостиницы, жилые комплексы, — так и на объекты узкой специфики: нефтяная промышленность, медицинские и фармацевтические учреждения, производство.</p></div>
                    </div>
                </div>
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-q" aria-expanded="false" itemprop="name">Есть ли оборудование в наличии на складе?<span class="plus" aria-hidden="true"></span></button>
                    <div class="faq-a" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="faq-a-inner"><p itemprop="text">Да, склад в г. Лобня площадью 5000 м² позволяет поддерживать постоянный запас ходовых позиций и оперативно отгружать заказы.</p></div>
                    </div>
                </div>
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-q" aria-expanded="false" itemprop="name">Оказываете ли вы сервисное обслуживание?<span class="plus" aria-hidden="true"></span></button>
                    <div class="faq-a" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="faq-a-inner"><p itemprop="text">Да, мы проводим пусконаладочные работы, а также гарантийное и постгарантийное обслуживание поставленного оборудования систем ОВК и ВК.</p></div>
                    </div>
                </div>
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <button class="faq-q" aria-expanded="false" itemprop="name">В каких регионах вы осуществляете поставки?<span class="plus" aria-hidden="true"></span></button>
                    <div class="faq-a" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="faq-a-inner"><p itemprop="text">Мы работаем на территории всей России и в странах СНГ, благодаря собственному автопарку и отлаженной логистике гарантируем доставку точно в срок.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section">
        <div class="container">
            <div class="cta-band">
                <div><h2>Подберём оборудование под ваш объект</h2><p>Оставьте заявку — персональный менеджер свяжется с вами и предложит оптимальное техническое решение.</p></div>
                <div class="cta-band-actions">
                    <a href="{{ route('contacts') }}" class="btn btn-primary">Оставить заявку</a>
                    <a href="tel:+74957772399" class="btn btn-outline">+7 (495) 777-23-99</a>
                </div>
            </div>
        </div>
    </section>

@endsection
