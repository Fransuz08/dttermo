
    // ============================================================
    // DT TERMO GROUP — main.js (vanilla JS, no dependencies)
    // ============================================================

    // ---------- Mobile navigation ----------
    (function initNav(){
    const toggle = document.querySelector('.nav-toggle');
    const nav = document.querySelector('.main-nav');
    const scrim = document.querySelector('.nav-scrim');
    if(!toggle || !nav) return;

    function closeNav(){
    nav.classList.remove('is-open');
    scrim && scrim.classList.remove('is-open');
    toggle.setAttribute('aria-expanded','false');
    document.body.style.overflow = '';
}
    function openNav(){
    nav.classList.add('is-open');
    scrim && scrim.classList.add('is-open');
    toggle.setAttribute('aria-expanded','true');
    document.body.style.overflow = 'hidden';
}
    toggle.addEventListener('click', () => {
    const isOpen = toggle.getAttribute('aria-expanded') === 'true';
    isOpen ? closeNav() : openNav();
});
    scrim && scrim.addEventListener('click', closeNav);
    document.addEventListener('keydown', (e) => {
    if(e.key === 'Escape') closeNav();
});
    nav.querySelectorAll('a').forEach(a => a.addEventListener('click', closeNav));
})();

    // ---------- FAQ accordion ----------
    (function initFaq(){
    const items = document.querySelectorAll('.faq-item');
    items.forEach(item => {
    const btn = item.querySelector('.faq-q');
    const panel = item.querySelector('.faq-a');
    if(!btn || !panel) return;
    btn.addEventListener('click', () => {
    const isOpen = item.getAttribute('data-open') === 'true';
// close all others (single-open accordion)
    items.forEach(other => {
    other.setAttribute('data-open','false');
    other.querySelector('.faq-q').setAttribute('aria-expanded','false');
    other.querySelector('.faq-a').style.maxHeight = null;
});
    if(!isOpen){
    item.setAttribute('data-open','true');
    btn.setAttribute('aria-expanded','true');
    panel.style.maxHeight = panel.scrollHeight + 'px';
}
});
});
})();

    // ---------- Animated stat counters ----------
    (function initCounters(){
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const counters = document.querySelectorAll('[data-count-to]');
    if(!counters.length) return;

    function animate(el){
    const target = parseFloat(el.dataset.countTo);
    const suffix = el.dataset.suffix || '';
    if(reduceMotion){ el.textContent = target + suffix; return; }
    const duration = 1200;
    const start = performance.now();
    function step(now){
    const p = Math.min((now - start) / duration, 1);
    const eased = 1 - Math.pow(1 - p, 3);
    el.textContent = Math.round(target * eased) + suffix;
    if(p < 1) requestAnimationFrame(step);
}
    requestAnimationFrame(step);
}

    if('IntersectionObserver' in window){
    const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
    if(entry.isIntersecting){
    animate(entry.target);
    io.unobserve(entry.target);
}
});
}, { threshold: 0.4 });
    counters.forEach(c => io.observe(c));
} else {
    counters.forEach(animate);
}
})();

    // ---------- Contact / lead forms ----------
    // TODO: замените ENDPOINT на реальный адрес обработчика формы (например /api/submit.php
    // на PHP-хостинге, либо URL стороннего сервиса форм для Vercel/Netlify).
    const FORM_ENDPOINT = document.getElementById('lead-form').getAttribute('data-submit-form');

    function showStatus(form, type, message){
    const status = form.querySelector('.form-status');
    if(!status) return;
    status.textContent = message;
    status.classList.remove('success','error');
    status.classList.add(type, 'is-visible');
    status.setAttribute('role', type === 'error' ? 'alert' : 'status');
}

    function validateField(field){
    const errorEl = field.parentElement.querySelector('.field-error');
    const valid = field.checkValidity();
    field.setAttribute('aria-invalid', valid ? 'false' : 'true');
    if(errorEl) errorEl.classList.toggle('is-visible', !valid);
    return valid;
}

    document.addEventListener('DOMContentLoaded', () => {
        const form = document.querySelector('[data-lead-form]');
        if (!form) return;

        const endpoint = form.dataset.submitForm;
        const submitBtn = form.querySelector('button[type="submit"]');
        const statusEl = form.querySelector('.form-status');
        const originalBtnText = submitBtn.textContent;

        // --- Защита от ботов: время на заполнение ---
        const loadedInput = form.querySelector('input[name="form_loaded"]');
        loadedInput.value = Math.floor(Date.now() / 1000);

        // --- Хелперы статусов ---
        const showStatus = (type, message) => {
            statusEl.textContent = message;
            statusEl.className = `form-status form-status--${type}`;
            statusEl.setAttribute('role', type === 'error' ? 'alert' : 'status');
        };

        const clearFieldErrors = () => {
            form.querySelectorAll('.field-error').forEach(el => el.style.display = 'none');
            form.querySelectorAll('input, textarea').forEach(el => el.classList.remove('is-invalid'));
        };

        const showFieldErrors = (errors) => {
            Object.entries(errors).forEach(([field, messages]) => {
                const input = form.querySelector(`[name="${field}"]`);
                if (!input) return;
                input.classList.add('is-invalid');
                const errEl = input.closest('.field')?.querySelector('.field-error');
                if (errEl) {
                    errEl.textContent = Array.isArray(messages) ? messages[0] : messages;
                    errEl.style.display = 'block';
                }
            });
        };

        // --- Клиентская валидация (быстрая проверка до отправки) ---
        const validateClient = () => {
            clearFieldErrors();
            let ok = true;

            const name = form.name.value.trim();
            if (name.length < 2) {
                showFieldErrors({ name: ['Укажите имя (от 2 символов).'] });
                ok = false;
            }

            const phone = form.phone.value.trim();
            // Простая проверка: минимум 10 цифр
            const digits = phone.replace(/\D/g, '');
            if (digits.length < 10) {
                showFieldErrors({ phone: ['Укажите корректный телефон.'] });
                ok = false;
            }

            const email = form.email.value.trim();
            if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                showFieldErrors({ email: ['Проверьте формат email.'] });
                ok = false;
            }

            if (!form.consent.checked) {
                showFieldErrors({ consent: ['Необходимо согласие на обработку данных.'] });
                ok = false;
            }

            return ok;
        };

        // --- Сабмит ---
        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            if (submitBtn.disabled) return;
            if (!validateClient()) return;

            clearFieldErrors();
            submitBtn.disabled = true;
            submitBtn.textContent = 'Отправка...';
            showStatus('info', '');

            try {
                const formData = new FormData(form);

                const response = await fetch(endpoint, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                    credentials: 'same-origin', // важно для CSRF-cookie
                });

                let result = {};
                try {
                    result = await response.json();
                } catch (_e) {
                    // сервер вернул не-JSON
                }

                if (response.ok && result.success) {
                    showStatus('success', result.message || 'Спасибо! Заявка отправлена, мы свяжемся с вами в течение рабочего дня.');
                    form.reset();
                    loadedInput.value = Math.floor(Date.now() / 1000); // сбрасываем таймер
                } else if (response.status === 422 && result.errors) {
                    // Ошибки валидации от Laravel
                    showFieldErrors(result.errors);
                    showStatus('error', result.message || 'Проверьте выделенные поля.');
                } else {
                    showStatus('error', result.message || 'Не удалось отправить заявку. Попробуйте ещё раз.');
                }
            } catch (err) {
                console.error('Lead form error:', err);
                showStatus('error', 'Не удалось связаться с сервером. Свяжитесь с нами по телефону.');
            } finally {
                submitBtn.disabled = false;
                submitBtn.textContent = originalBtnText;
            }
        });
    });

    // ---------- Current year in footer ----------
    document.querySelectorAll('[data-year]').forEach(el => {
    el.textContent = new Date().getFullYear();
});

