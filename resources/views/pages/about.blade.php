@extends('layouts.app')

@section('content')

<div class="page-header">
    <div class="container">
        <nav class="breadcrumbs" aria-label="Хлебные крошки"><a href="{{ route('index') }}">Главная</a><span>/</span><span>О нас</span></nav>
        <h1>DT Termo Group — 20+ лет на рынке ОВК и ВК</h1>
        <p>Мы поставляем оборудование и материалы для инженерных систем с 2001 года, помогая заказчикам находить надёжные технические решения — от концепции проекта до сдачи объекта.</p>
    </div>
</div>

<section class="section" aria-labelledby="story-title">
    <div class="container about-split">
        <div>
            <div class="eyebrow">Наша история</div>
            <h2 id="story-title">Компания, которая растёт вместе с рынком</h2>
            <p>DT Termo Group основана в 2001 году. На протяжении всего времени компания занимает лидирующие позиции как поставщик оборудования и материалов для систем ОВК и ВК на российском рынке и в странах СНГ.</p>
            <p>Мы всегда идём в ногу со временем: анализируем ситуацию на рынке и модернизируем внутренние рабочие процессы исходя из потребностей клиентов. Постоянно проводим мониторинг нового и уже существующего оборудования, чтобы предложить наиболее обширную линейку качественной продукции в разной ценовой категории.</p>
            <p>Складские площади и отлаженная система управления поставками позволяют поддерживать широкий номенклатурный ряд продукции и гарантировать своевременную доставку.</p>
        </div>
        <div class="about-media">
            <!-- TODO: заменить на реальное фото сотрудников/офиса компании -->
            <img src="{{ asset('img/au-est_2001.png') }}" alt="Команда DT Termo Group" width="800" height="620" loading="lazy" decoding="async">
            <div class="about-media-badge"><div><b>2001</b><span>год основания</span></div></div>
        </div>
    </div>
</section>

<section class="section section--soft" aria-labelledby="exp-title">
    <div class="container">
        <div class="section-head">
            <div class="eyebrow">Опыт</div>
            <h2 id="exp-title">На каких объектах мы уже работали?</h2>
            <p>За долгое время работы мы накопили опыт на тысячах объектов по всей России — от типовых зданий до узкоспециализированных производств.</p>
        </div>
        <div class="card-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg></div>
                <h3>Торговые и офисные центры</h3>
                <p>Комплексные поставки инженерного оборудования для коммерческой недвижимости.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M4 21h16M6 21V10l6-6 6 6v11" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg></div>
                <h3>Гостиницы и жилые комплексы</h3>
                <p>Решения для отопления, вентиляции и водоснабжения жилых и гостиничных объектов.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M12 3l9 4.5v9L12 21l-9-4.5v-9L12 3z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg></div>
                <h3>Объекты нефтяной промышленности</h3>
                <p>Оборудование для объектов со специфическими техническими требованиями.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M12 21s-7-4.6-7-10a7 7 0 1114 0c0 5.4-7 10-7 10z" stroke="currentColor" stroke-width="1.8"/><circle cx="12" cy="11" r="2.4" stroke="currentColor" stroke-width="1.8"/></svg></div>
                <h3>Медицинские учреждения</h3>
                <p>Поставки для объектов здравоохранения с повышенными требованиями к микроклимату.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M9 3v4M15 3v4M4 8h16M5 8v12h14V8" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg></div>
                <h3>Фармацевтические комплексы</h3>
                <p>В том числе решения для чистых помещений с контролируемыми параметрами воздуха.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M4 20V9l8-5 8 5v11M9 20v-6h6v6" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg></div>
                <h3>Производственные объекты</h3>
                <p>Комплексные инженерные решения для промышленных предприятий любого масштаба.</p>
            </article>
        </div>
    </div>
</section>

<section class="section" aria-labelledby="services-title">
    <div class="container">
        <div class="section-head">
            <div class="eyebrow">Что входит в работу с нами</div>
            <h2 id="services-title">Полный цикл сопровождения — от выбора до эксплуатации</h2>
        </div>
        <div class="steps">
            <div class="step"><div class="step-num">01</div><div><h3>Квалифицированная консультация</h3><p>Помощь в подборе оборудования по техническим характеристикам под требования проекта.</p></div></div>
            <div class="step"><div class="step-num">02</div><div><h3>Широкий ассортимент</h3><p>Оборудование и материалы ведущих мировых производителей в разных ценовых категориях.</p></div></div>
            <div class="step"><div class="step-num">03</div><div><h3>Оперативная обработка заказов</h3><p>Гибкая система скидок и индивидуальный подход к каждому клиенту.</p></div></div>
            <div class="step"><div class="step-num">04</div><div><h3>Чёткое соблюдение сроков поставки</h3><p>Координирование доставки от склада до объекта в любой точке России и СНГ.</p></div></div>
            <div class="step"><div class="step-num">05</div><div><h3>Сервис</h3><p>Пусконаладочные работы, гарантийное и постгарантийное обслуживание.</p></div></div>
            <div class="step"><div class="step-num">06</div><div><h3>Информационная поддержка</h3><p>Сертификаты, каталоги, проспекты и рекламные материалы по запросу.</p></div></div>
        </div>
    </div>
</section>

<section class="section section--soft" aria-labelledby="member-title2">
    <div class="container">
        <div class="section-head">
            <div class="eyebrow">Членство и партнёрство</div>
            <h2 id="member-title2">Профессиональное признание отрасли</h2>
            <p>DT Termo Group принимает участие в специализированных выставках ОВК и ВК и состоит в профильных отраслевых объединениях.</p>
        </div>
        <div class="badge-strip">
            <span class="badge-item"><span class="dot"></span>С 2005 года — коллективный член НП «АВОК»</span>
            <span class="badge-item"><span class="dot"></span>Участник корпорации «Сибинжиниринг»</span>
            <span class="badge-item"><span class="dot"></span>Член Ассоциации индустриальных парков России</span>
        </div>
        <!-- TODO: подключить актуальную брошюру о компании: /files/downloads/file_ru/dt-broschure-2024.pdf -->
        <a href="{{ asset('storage/files/dt-broschure.pdf') }}" class="btn btn-dark" style="margin-top:2rem;">Скачать брошюру о компании</a>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cta-band">
            <div><h2>Нужна консультация по подбору оборудования?</h2><p>Расскажите о задачах объекта — персональный менеджер подготовит техническое решение.</p></div>
            <div class="cta-band-actions">
                <a href="{{ route('contacts') }}" class="btn btn-primary">Связаться с нами</a>
            </div>
        </div>
    </div>
</section>

@endsection
