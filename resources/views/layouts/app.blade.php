<html lang="ru">
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DT Termo Group — поставки оборудования и материалов ОВК и ВК</title>
    <meta name="description" content="DT Termo Group — поставщик оборудования и материалов для систем отопления, вентиляции, кондиционирования и водоснабжения с 2001 года. Собственный склад 5000 м², подбор, доставка, сервис.">
    <link rel="canonical" href="https://www.dttermo.ru/">

    <meta property="og:type" content="website">
    <meta property="og:title" content="DT Termo Group — поставки оборудования и материалов ОВК и ВК">
    <meta property="og:description" content="Поставщик оборудования и материалов для систем ОВК и ВК на российском рынке и в странах СНГ с 2001 года.">
    <meta property="og:image" content="https://www.dttermo.ru/assets/img/og-image.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="https://www.dttermo.ru/">
    <meta property="og:site_name" content="DT Termo Group">
    <meta property="og:locale" content="ru_RU">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DT Termo Group — поставки оборудования и материалов ОВК и ВК">
    <meta name="twitter:description" content="Поставщик оборудования и материалов для систем ОВК и ВК с 2001 года. Склад 5000 м², подбор, доставка, сервис.">
    <meta name="twitter:image" content="https://www.dttermo.ru/assets/img/og-image.jpg">

    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body>

<a href="#main" class="skip-link">Перейти к содержимому</a>

    @include('headers.main')

<div class="nav-scrim"></div>

<main id="main">

    @yield('content')

</main>

    @include('footers.main')

<div class="sticky-cta">
    <a href="{{ route('contacts') }}" class="btn btn-primary btn-block">Оставить заявку</a>
</div>


<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
<script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "Organization",
            "@id": "https://www.dttermo.ru/#organization",
            "name": "DT Termo Group",
            "url": "https://www.dttermo.ru/",
            "logo": "https://www.dttermo.ru/assets/img/logo.png",
            "foundingDate": "2001",
            "sameAs": [ "https://t.me/DTtermoGroup" ],
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+7-495-777-23-99",
                "contactType": "sales",
                "areaServed": ["RU"],
                "availableLanguage": ["Russian"]
            },
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Медовый переулок, д. 5, стр. 1",
                "addressLocality": "Москва",
                "postalCode": "107023",
                "addressCountry": "RU"
            }
        },
        {
            "@type": "WebSite",
            "@id": "https://www.dttermo.ru/#website",
            "url": "https://www.dttermo.ru/",
            "name": "DT Termo Group",
            "publisher": { "@id": "https://www.dttermo.ru/#organization" },
            "inLanguage": "ru-RU"
        }
    ]
}
</script>

</body>
</html>

