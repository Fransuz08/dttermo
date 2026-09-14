@extends('layouts.app')

@section('content')
    <div class="page-header">
        <div class="container">
            <nav class="breadcrumbs" aria-label="Хлебные крошки"><a href="{{ route('index') }}">Главная</a><span>/</span><span>Каталог</span></nav>
            <h1>Каталог направлений — DT Termo Group</h1>
            <p>Оборудование и материалы для систем ОВК и ВК от ведущих мировых производителей. Пять направлений, каждое — с подбором под требования вашего проекта.</p>
        </div>
    </div>

    <section class="section" aria-labelledby="heading-ac" id="ac">
        <div class="container about-split">
            <div class="about-media">
                <img src="{{ asset('img/index-condition.jpg') }}" alt="Оборудование систем кондиционирования" width="800" height="620" loading="lazy" decoding="async">
            </div>
            <div>
                <span class="hero-badge" style="background:var(--c-green-light); color:var(--c-green-dark); border-color:transparent;">Направление 01</span>
                <h2 id="heading-ac" style="margin-top:.6em;">Кондиционирование</h2>
                <p>Новейшие технологии для поддержания требуемых параметров микроклимата в помещении: холодильные машины разных типов (центробежные, винтовые, абсорбционные), сухие охладители, градирни, фанкойлы, VRF системы.</p>
                <p>Подбор с учётом тепловых нагрузок объекта, требований к энергоэффективности и бюджету проекта.</p>
                <a href="{{ route('contacts') }}" class="btn btn-dark">Запросить подбор оборудования</a>
            </div>
        </div>
    </section>

    <section class="section section--soft" aria-labelledby="heading-vent" id="ventilation">
        <div class="container about-split">
            <div style="order:2;">
                <span class="hero-badge" style="background:var(--c-green-light); color:var(--c-green-dark); border-color:transparent;">Направление 02</span>
                <h2 id="heading-vent" style="margin-top:.6em;">Вентиляция</h2>
                <p>Современное оборудование для эффективного воздухообмена: приточно-вытяжные установки, вентиляторы, воздуховоды и автоматика управления системами вентиляции.</p>
                <p>Помогаем спроектировать систему, обеспечивающую нормативный воздухообмен при минимальных эксплуатационных затратах.</p>
                <a href="{{ route('contacts') }}" class="btn btn-dark">Запросить подбор оборудования</a>
            </div>
            <div class="about-media" style="order:1;">
                <img src="{{ asset('img/index-vent.jpg') }}" alt="Оборудование систем вентиляции" width="800" height="620" loading="lazy" decoding="async">
            </div>
        </div>
    </section>

    <section class="section" aria-labelledby="heading-heating" id="heating">
        <div class="container about-split">
            <div class="about-media">
                <!-- TODO: заменить на реальное фото котельного/теплового оборудования -->
                <img src="{{ asset('img/index-heating.jpg') }}" alt="Оборудование систем отопления" width="800" height="620" loading="lazy" decoding="async">
            </div>
            <div>
                <span class="hero-badge" style="background:var(--c-green-light); color:var(--c-green-dark); border-color:transparent;">Направление 03</span>
                <h2 id="heading-heating" style="margin-top:.6em;">Отопление</h2>
                <p>Технические решения для обогрева помещений и поддержания требуемой температуры в холодный период года: внутрипольные конвекторы, котельное оборудование, тепловые пункты, радиаторы и сопутствующие материалы.</p>
                <p>Подбираем оборудование с учётом тепловых нагрузок, площади и назначения объекта — от типовых зданий до промышленных площадок.</p>
                <a href="{{ route('contacts') }}" class="btn btn-dark">Запросить подбор оборудования</a>
            </div>
        </div>
    </section>

    <section class="section section--soft" aria-labelledby="heading-clean" id="clean">
        <div class="container about-split">
            <div style="order:2;">
                <span class="hero-badge" style="background:var(--c-green-light); color:var(--c-green-dark); border-color:transparent;">Направление 04</span>
                <h2 id="heading-clean" style="margin-top:.6em;">Чистые помещения</h2>
                <p>Высокотехнологичное оборудование для создания чистых зон и производств под различные требования заказчика: системы фильтрации воздуха, шлюзовые камеры, ограждающие конструкции.</p>
                <p>Востребовано в фармацевтике, медицине, микроэлектронике и других отраслях с повышенными требованиями к чистоте воздуха.</p>
                <a href="{{ route('contacts') }}" class="btn btn-dark">Запросить подбор оборудования</a>
            </div>
            <div class="about-media" style="order:1;">
                <img src="{{ asset('img/index-clean_rooms.jpg') }}" alt="Оборудование для чистых помещений" width="800" height="620" loading="lazy" decoding="async">
            </div>
        </div>
    </section>

    <section class="section" aria-labelledby="heading-water" id="water">
        <div class="container about-split">
            <div class="about-media">
                <img src="{{ asset('img/index-wc.jpg') }}" alt="Оборудование систем водоснабжения" width="800" height="620" loading="lazy" decoding="async">
            </div>
            <div>
                <span class="hero-badge" style="background:var(--c-green-light); color:var(--c-green-dark); border-color:transparent;">Направление 05</span>
                <h2 id="heading-water" style="margin-top:.6em;">Водоснабжение</h2>
                <p>Комплекс решений для холодного и горячего водоснабжения: насосное оборудование, трубопроводная арматура, системы очистки и подготовки воды.</p>
                <p>Поставляем оборудование как для жилых и коммерческих объектов, так и для промышленных предприятий.</p>
                <a href="{{ route('contacts') }}" class="btn btn-dark">Запросить подбор оборудования</a>
            </div>
        </div>
    </section>

    <section class="section section--soft">
        <div class="container">
            <div class="cta-band">
                <div><h2>Не нашли нужное оборудование?</h2><p>Оставьте заявку с описанием объекта и задач — подберём решение под ваш проект и предоставим коммерческое предложение.</p></div>
                <div class="cta-band-actions">
                    <a href="{{ route('contacts') }}" class="btn btn-primary">Оставить заявку</a>
                </div>
            </div>
        </div>
    </section>
@endsection
