@extends('layouts.app')
@section('content')
    <div class="page-header">
        <div class="container">
            <nav class="breadcrumbs" aria-label="Хлебные крошки"><a href="{{ route('index') }}">Главная</a><span>/</span><span>Новости</span></nav>
            <h1>Новости компании</h1>
            <p>События DT Termo Group, отраслевые награды, поздравления с праздниками и другие новости — всё в одном разделе.</p>
        </div>
    </div>

    <section class="section" aria-labelledby="news-list-title">
        <div class="container">
            <h2 id="news-list-title" class="sr-only" style="position:absolute; width:1px; height:1px; overflow:hidden; clip:rect(0 0 0 0);">Все новости</h2>
            <div class="news-grid">
                @foreach($news as $n)
                    <article class="news-card">
                        <div class="news-thumb" aria-hidden="true">
                            <img src="{{ asset('img/news/' . $n->img) }}" alt="">
                        </div>
                        <div class="news-body">
                            <span class="news-date">{{ \Carbon\Carbon::parse($n->created_at)->translatedFormat('j F Y') }}</span>
                            <h3>{{ $n->title }}</h3>
                            <p class="news-excerpt">{{ $n->short_text }}</p>
                            <a href="{{ route('news.oneNews', $n) }}" class="read-more">Читать далее →</a>
                        </div>
                    </article>
                @endforeach

            </div>
        </div>
    </section>

    <section class="section section--soft">
        <div class="container">
            <div class="cta-band">
                <div><h2>Остались вопросы по оборудованию?</h2><p>Оставьте заявку — персональный менеджер свяжется с вами и предложит оптимальное техническое решение.</p></div>
                <div class="cta-band-actions">
                    <a href="{{ route('contacts') }}" class="btn btn-primary">Оставить заявку</a>
                    <a href="tel:+74957772399" class="btn btn-outline">+7 (495) 777-23-99</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@graph": [
            {
              "@type": "BreadcrumbList",
              "itemListElement": [
                {"@type":"ListItem","position":1,"name":"Главная","item":"https://www.dttermo.ru/"},
                {"@type":"ListItem","position":2,"name":"Новости","item":"https://www.dttermo.ru/news.html"}
              ]
            },
            {
              "@type": "CollectionPage",
              "@id": "https://www.dttermo.ru/news.html",
              "name": "Новости DT Termo Group",
              "isPartOf": { "@id": "https://www.dttermo.ru/#website" }
            }
          ]
        }
    </script>
@endpush

@push('styles')
    <style>
        /* =========================================================
   DT TERMO GROUP — main stylesheet
   Design tokens
   ========================================================= */
        :root{
            --c-green:        #45A861;
            --c-green-dark:   #337A48;
            --c-green-light:  #E7F4EB;
            --c-gray:         #7B7A7A;
            --c-gray-light:   #F2F2F1;
            --c-ink:          #1C2321;
            --c-ink-soft:     #4A514E;
            --c-line:         #E3E5E3;
            --c-bg:           #FFFFFF;
            --c-bg-soft:      #F7F8F7;
            --c-white:        #FFFFFF;

            --font-display: 'Manrope', 'Segoe UI', sans-serif;
            --font-body: 'Inter', 'Segoe UI', sans-serif;

            --radius-sm: 6px;
            --radius-md: 12px;
            --radius-lg: 20px;

            --shadow-sm: 0 1px 2px rgba(28,35,33,.06), 0 1px 1px rgba(28,35,33,.04);
            --shadow-md: 0 8px 24px rgba(28,35,33,.08);
            --shadow-lg: 0 20px 48px rgba(28,35,33,.14);

            --container: 1240px;
            --gap: clamp(1rem, 2vw, 2rem);
        }

        *, *::before, *::after{ box-sizing:border-box; }
        html{ scroll-behavior:smooth; }
        @media (prefers-reduced-motion: reduce){
            html{ scroll-behavior:auto; }
            *, *::before, *::after{
                animation-duration:.01ms !important;
                animation-iteration-count:1 !important;
                transition-duration:.01ms !important;
                scroll-behavior:auto !important;
            }
        }

        body{
            margin:0;
            font-family:var(--font-body);
            color:var(--c-ink);
            background:var(--c-bg);
            font-size:clamp(.95rem, .5vw + .85rem, 1.0625rem);
            line-height:1.6;
            -webkit-font-smoothing:antialiased;
        }

        img{ max-width:100%; display:block; }
        a{ color:inherit; text-decoration:none; }
        ul{ margin:0; padding:0; list-style:none; }
        button{ font:inherit; }

        h1,h2,h3,h4{
            font-family:var(--font-display);
            color:var(--c-ink);
            margin:0 0 .5em;
            line-height:1.12;
            font-weight:800;
            letter-spacing:-.01em;
        }
        h1{ font-size:clamp(2.1rem, 4vw + 1rem, 3.9rem); }
        h2{ font-size:clamp(1.6rem, 2.4vw + .9rem, 2.6rem); }
        h3{ font-size:clamp(1.15rem, 1vw + .8rem, 1.45rem); }
        p{ margin:0 0 1em; color:var(--c-ink-soft); }

        .container{
            width:100%;
            max-width:var(--container);
            margin-inline:auto;
            padding-inline:clamp(1.25rem, 4vw, 2.5rem);
        }

        .eyebrow{
            display:inline-flex;
            align-items:center;
            gap:.5em;
            font-family:var(--font-display);
            font-weight:700;
            font-size:.8rem;
            letter-spacing:.08em;
            text-transform:uppercase;
            color:var(--c-green-dark);
            margin-bottom:.9em;
        }
        .eyebrow::before{
            content:"";
            width:22px; height:2px;
            background:var(--c-green);
            display:inline-block;
        }

        .section{ padding-block:clamp(3rem, 6vw, 6.5rem); }
        .section--soft{ background:var(--c-bg-soft); }
        .section--dark{ background:var(--c-ink); color:#EDEFED; }
        .section--dark h2, .section--dark h3{ color:#fff; }
        .section--dark p{ color:#B7BEBA; }

        .section-head{ max-width:680px; margin-bottom:clamp(2rem, 4vw, 3.5rem); }
        .section-head.center{ margin-inline:auto; text-align:center; }

        /* Buttons */
        .btn{
            display:inline-flex;
            align-items:center;
            justify-content:center;
            gap:.5em;
            min-height:48px;
            padding:.85em 1.7em;
            border-radius:999px;
            font-family:var(--font-display);
            font-weight:700;
            font-size:.95rem;
            border:1px solid transparent;
            cursor:pointer;
            transition:transform .18s ease, background .18s ease, color .18s ease, border-color .18s ease;
        }
        .btn-primary{ background:var(--c-green); color:#fff; }
        .btn-primary:hover{ background:var(--c-green-dark); transform:translateY(-2px); }
        .btn-outline{ background:transparent; border-color:rgba(255,255,255,.4); color:inherit; }
        .btn-outline:hover{ border-color:var(--c-green); color:var(--c-green); transform:translateY(-2px); }
        .btn-dark{ background:var(--c-ink); color:#fff; }
        .btn-dark:hover{ background:#000; transform:translateY(-2px); }
        .btn-block{ width:100%; }

        *:focus-visible{
            outline:2px solid var(--c-green);
            outline-offset:3px;
            border-radius:4px;
        }

        .skip-link{
            position:absolute; left:-9999px; top:0;
            background:var(--c-green); color:#fff;
            padding:.75em 1.25em; z-index:200; border-radius:0 0 8px 0;
        }
        .skip-link:focus{ left:0; }

        /* HEADER */
        .site-header{
            position:sticky; top:0; z-index:100;
            background:rgba(255,255,255,.92);
            backdrop-filter:blur(10px);
            border-bottom:1px solid var(--c-line);
        }
        .header-inner{
            display:flex; align-items:center; justify-content:space-between;
            gap:1.5rem;
            padding-block:.9rem;
        }
        .logo{
            display:flex; align-items:center; gap:.65em;
            font-family:var(--font-display); font-weight:800; font-size:1.15rem;
            color:var(--c-ink);
        }
        .logo-mark{
            width:38px; height:38px; border-radius:9px;
            background:linear-gradient(135deg, var(--c-green), var(--c-green-dark));
            display:flex; align-items:center; justify-content:center;
            color:#fff; font-family:var(--font-display); font-weight:800; font-size:1rem;
            flex-shrink:0;
        }
        .logo-text small{
            display:block; font-family:var(--font-body); font-weight:500;
            font-size:.66rem; letter-spacing:.04em; color:var(--c-gray); text-transform:uppercase;
        }

        .main-nav{ display:flex; }
        .main-nav ul{ display:flex; gap:clamp(1rem,2vw,2.1rem); align-items:center; }
        .main-nav a{
            font-weight:600; font-size:.95rem; color:var(--c-ink-soft);
            padding:.4em 0; position:relative;
        }
        .main-nav a::after{
            content:""; position:absolute; left:0; right:0; bottom:-2px; height:2px;
            background:var(--c-green); transform:scaleX(0); transform-origin:left;
            transition:transform .2s ease;
        }
        .main-nav a:hover, .main-nav a[aria-current="page"]{ color:var(--c-ink); }
        .main-nav a:hover::after, .main-nav a[aria-current="page"]::after{ transform:scaleX(1); }

        .header-actions{ display:flex; align-items:center; gap:1rem; }
        .header-phone{ font-weight:700; font-size:.95rem; white-space:nowrap; }
        .header-phone small{ display:block; font-weight:500; font-size:.7rem; color:var(--c-gray); }

        .nav-toggle{
            display:none;
            width:48px; height:48px;
            border:1px solid var(--c-line); border-radius:10px;
            background:#fff; align-items:center; justify-content:center;
            flex-direction:column; gap:5px; cursor:pointer;
        }
        .nav-toggle span{ width:20px; height:2px; background:var(--c-ink); display:block; transition:transform .2s ease, opacity .2s ease; }
        .nav-toggle[aria-expanded="true"] span:nth-child(1){ transform:translateY(7px) rotate(45deg); }
        .nav-toggle[aria-expanded="true"] span:nth-child(2){ opacity:0; }
        .nav-toggle[aria-expanded="true"] span:nth-child(3){ transform:translateY(-7px) rotate(-45deg); }

        @media (max-width:1024px){
            .main-nav{
                position:fixed; inset:0 0 0 auto; width:min(320px,86vw); height:100vh;
                background:#fff; padding:5.5rem 1.75rem 2rem;
                transform:translateX(100%); transition:transform .28s ease;
                box-shadow:-16px 0 40px rgba(0,0,0,.12);
            }
            .main-nav.is-open{ transform:translateX(0); }
            .main-nav ul{ flex-direction:column; align-items:flex-start; gap:1.5rem; width:100%; }
            .main-nav a{ font-size:1.1rem; }
            .nav-toggle{ display:flex; }
            .header-phone{ display:none; }
        }

        .nav-scrim{
            position:fixed; inset:0; background:rgba(20,24,22,.4);
            opacity:0; pointer-events:none; transition:opacity .25s ease; z-index:90;
        }
        .nav-scrim.is-open{ opacity:1; pointer-events:auto; }

        /* BREADCRUMBS / PAGE HEADER (inner pages) */
        .page-header{
            background:var(--c-ink); color:#fff; padding-block:clamp(2.5rem,5vw,4rem);
            position:relative; overflow:hidden;
        }
        .page-header::before{
            content:""; position:absolute; inset:0;
            background-image:linear-gradient(rgba(69,168,97,.14) 1px, transparent 1px), linear-gradient(90deg, rgba(69,168,97,.14) 1px, transparent 1px);
            background-size:48px 48px;
            mask-image:radial-gradient(ellipse 70% 100% at 20% 0%, #000 40%, transparent 90%);
        }
        .breadcrumbs{ position:relative; z-index:2; display:flex; flex-wrap:wrap; gap:.5em; font-size:.85rem; color:#9BA39F; margin-bottom:.9rem; }
        .breadcrumbs a{ color:#C6CCC9; }
        .breadcrumbs a:hover{ color:#fff; }
        .page-header h1{ position:relative; z-index:2; color:#fff; margin-bottom:.3em; }
        .page-header p{ position:relative; z-index:2; color:#B7BEBA; max-width:60ch; margin-bottom:0; }

        /* NEWS */
        .news-grid{ display:grid; grid-template-columns:repeat(3,1fr); gap:1.5rem; }
        .news-card{
            border:1px solid var(--c-line); border-radius:var(--radius-lg); overflow:hidden;
            background:#fff; display:flex; flex-direction:column; transition:box-shadow .2s ease, transform .2s ease;
        }
        .news-card:hover{ box-shadow:var(--shadow-md); transform:translateY(-3px); }
        .news-thumb{
            aspect-ratio:16/10; background:var(--c-gray-light);
            display:flex; align-items:center; justify-content:center; color:var(--c-gray);
        }
        .news-body{ padding:1.4rem; display:flex; flex-direction:column; flex:1; }
        .news-date{ font-size:.78rem; color:var(--c-gray); font-weight:600; margin-bottom:.5em; display:block; }
        .news-body h3{ font-size:1.05rem; margin-bottom:.5em; }
        .news-excerpt{ font-size:.92rem; margin-bottom:1rem; flex:1; }
        .news-body a.read-more{ font-weight:700; font-size:.88rem; color:var(--c-green-dark); }

        @media (max-width:900px){ .news-grid{ grid-template-columns:1fr; } }

        /* CTA BAND */
        .cta-band{
            background:linear-gradient(120deg, var(--c-ink), #0F1614);
            color:#fff; border-radius:var(--radius-lg);
            padding:clamp(2.2rem,5vw,4rem);
            display:flex; align-items:center; justify-content:space-between; gap:2rem; flex-wrap:wrap;
            position:relative; overflow:hidden;
        }
        .cta-band::after{
            content:""; position:absolute; right:-6%; top:-40%; width:340px; height:340px; border-radius:50%;
            background:radial-gradient(circle, rgba(69,168,97,.35), transparent 70%);
        }
        .cta-band h2{ color:#fff; margin-bottom:.3em; font-size:clamp(1.5rem,2vw+1rem,2.2rem); }
        .cta-band p{ color:#B7BEBA; margin-bottom:0; max-width:46ch; }
        .cta-band-actions{ position:relative; z-index:2; display:flex; gap:1rem; flex-wrap:wrap; }

        /* FOOTER */
        .site-footer{ background:#121613; color:#C6CCC9; padding-block:clamp(3rem,5vw,4.5rem) 1.5rem; }
        .footer-grid{
            display:grid; grid-template-columns:1.4fr 1fr 1fr 1.2fr; gap:2.5rem;
            padding-bottom:2.5rem; border-bottom:1px solid rgba(255,255,255,.1);
        }
        .footer-logo{ display:flex; align-items:center; gap:.65em; color:#fff; font-family:var(--font-display); font-weight:800; margin-bottom:1rem; }
        .footer-col h4{ color:#fff; font-family:var(--font-display); font-size:.85rem; text-transform:uppercase; letter-spacing:.06em; margin-bottom:1.1rem; }
        .footer-col ul{ display:grid; gap:.7rem; }
        .footer-col a{ font-size:.9rem; color:#B7BEBA; }
        .footer-col a:hover{ color:#fff; }
        .footer-bottom{
            display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1rem;
            padding-top:1.5rem; font-size:.82rem; color:#8A928E;
        }
        .footer-social{ display:flex; gap:.75rem; }
        .footer-social a{
            width:38px; height:38px; border-radius:50%; border:1px solid rgba(255,255,255,.16);
            display:flex; align-items:center; justify-content:center; color:#fff; transition:background .2s ease, border-color .2s ease;
        }
        .footer-social a:hover{ background:var(--c-green); border-color:var(--c-green); }

        /* Sticky mobile CTA */
        .sticky-cta{
            display:none;
            position:fixed; left:0; right:0; bottom:0; z-index:95;
            padding:.8rem 1rem; background:#fff; border-top:1px solid var(--c-line);
            box-shadow:0 -8px 24px rgba(0,0,0,.08);
        }
        @media (max-width:768px){
            .sticky-cta{ display:block; }
            body{ padding-bottom:76px; }
        }

        @media (max-width:900px){ .footer-grid{ grid-template-columns:1fr 1fr; } }
        @media (max-width:600px){ .footer-grid{ grid-template-columns:1fr; } }
    </style>
@endpush
