@extends('layouts.app')
@section('content')
    <div class="page-header">
        <div class="container">
            <nav class="breadcrumbs" aria-label="Хлебные крошки"><a href="{{ route('index') }}">Главная</a><span>/</span><span>Контакты</span></nav>
            <h1>Свяжитесь с нами</h1>
            <p>Ответим на вопросы по подбору и поставке оборудования, поможем рассчитать техническое решение под ваш объект.</p>
        </div>
    </div>

    <section class="section" aria-labelledby="contact-title">
        <div class="container contact-grid">

            <div>
                <div class="eyebrow">Контактная информация</div>
                <h2 id="contact-title">DT Termo Group</h2>
                <p>Персональный менеджер свяжется с вами в течение рабочего дня и поможет с подбором оборудования.</p>

                <div class="contact-info-list">
                    <div class="contact-info-item">
                        <span class="ico" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M12 21s-7-4.6-7-10a7 7 0 1114 0c0 5.4-7 10-7 10z" stroke="currentColor" stroke-width="1.8"/><circle cx="12" cy="11" r="2.4" stroke="currentColor" stroke-width="1.8"/></svg></span>
                        <div><b>Адрес</b><span>107023, Москва, Медовый переулок, д. 5, стр. 1</span></div>
                    </div>
                    <div class="contact-info-item">
                        <span class="ico" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M4 5h4l2 5-2.5 1.5a12 12 0 006 6L15 15l5 2v4a2 2 0 01-2 2C9 23 1 15 1 6a2 2 0 012-1z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg></span>
                        <div><b>Телефоны</b><a href="tel:+74957772399">+7 (495) 777-23-99</a><br><a href="tel:+79856906915">+7 (985) 690-69-15</a></div>
                    </div>
                    <div class="contact-info-item">
                        <span class="ico" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"><rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.6"/><path d="M4 7l8 6 8-6" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg></span>
                        <div><b>Email</b><a href="mailto:info@dttermo.ru">info@dttermo.ru</a></div>
                    </div>
                    <div class="contact-info-item">
                        <span class="ico" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.6"/><path d="M12 7v5l3.5 2" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg></span>
                        <div><b>Режим работы</b><span>Пн–Пт: 9:00–18:00</span></div>
                    </div>
                    <div class="contact-info-item">
                        <span class="ico" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M21 4L2.5 11.5l6 2 2 6.5 3-4 4.5 3.5L21 4z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg></span>
                        <div><b>Telegram</b><a href="https://t.me/DTtermoGroup" target="_blank" rel="noopener nofollow">@DTtermoGroup</a></div>
                    </div>
                </div>

                <div class="map-frame">
                    <!-- TODO: заменить на актуальный embed-код Яндекс.Карт для адреса: Медовый переулок, д. 5, стр. 1, Москва -->
                    <iframe src="https://yandex.ru/map-widget/v1/?text=Москва%2C%20Медовый%20переулок%2C%205%20стр.1" title="Карта: офис DT Termo Group в Москве" loading="lazy"></iframe>
                </div>
            </div>

            <div>
                <div class="eyebrow">Форма заявки</div>
                <h2>Оставить заявку</h2>
                <p>Заполните форму — мы свяжемся с вами, чтобы уточнить детали и предложить решение.</p>

                <form id="lead-form" data-submit-form="{{ route('leadFormSubmit') }}" method="POST" data-lead-form novalidate>
                    @csrf
                    <div class="form-status" role="status" aria-live="polite"></div>

                    <!-- Time-check (защита от ботов) -->
                    <input type="hidden" name="form_loaded" value="0">
                    <!-- Honeypot-поля (скрыты от людей, видны ботам) -->
                    <div class="hp-field" aria-hidden="true">
                        <label>Website (не заполнять): <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
                        <label>Доп. телефон: <input type="text" name="phone_secondary" tabindex="-1" autocomplete="off"></label>
                    </div>

                    <div class="form-grid">
                        <div class="field">
                            <label for="name">Имя <span class="req">*</span></label>
                            <input type="text" id="name" name="name" required minlength="2" maxlength="100" autocomplete="name" aria-required="true">
                            <span class="field-error">Укажите, пожалуйста, ваше имя (от 2 символов).</span>
                        </div>

                        <div class="grid-2">
                            <div class="field">
                                <label for="phone">Телефон <span class="req">*</span></label>
                                <input type="tel" id="phone" name="phone" required autocomplete="tel" aria-required="true" placeholder="+7 (___) ___-__-__">
                                <span class="field-error">Укажите контактный телефон.</span>
                            </div>
                            <div class="field">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" autocomplete="email">
                                <span class="field-error">Проверьте формат email.</span>
                            </div>
                        </div>

                        <div class="field">
                            <label for="message">Комментарий к заявке</label>
                            <textarea id="message" name="message" maxlength="1500" placeholder="Кратко опишите объект и какое оборудование интересует"></textarea>
                        </div>

                        <label class="checkbox-row">
                            <input type="checkbox" name="consent" required aria-required="true">
                            <span>Я согласен на <a href="/legal/privacy.html" target="_blank">обработку персональных данных</a> в соответствии с политикой конфиденциальности</span>
                        </label>

                        <button type="submit" class="btn btn-primary btn-block">Отправить заявку</button>
                    </div>
                </form>
            </div>

        </div>
    </section>
@endsection
