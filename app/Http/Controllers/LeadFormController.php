<?php

namespace App\Http\Controllers;

use App\Mail\LeadFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class LeadFormController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'min:2', 'max:100'],
            'phone'   => ['required', 'string', 'max:30'],
            'email'   => ['nullable', 'email', 'max:150'],
            'message' => ['nullable', 'string', 'max:1500'],
            'consent' => ['accepted'],
        ], [
            'name.required'    => 'Укажите имя.',
            'name.min'         => 'Имя должно быть не короче 2 символов.',
            'phone.required'   => 'Укажите телефон.',
            'email.email'      => 'Проверьте формат email.',
            'message.max'      => 'Комментарий слишком длинный.',
            'consent.accepted' => 'Необходимо согласие на обработку данных.',
        ]);

        try {
            $adminEmail = 'info@dt-termo.ru';

            Mail::to($adminEmail)
                ->send(new LeadFormMail($validated));

            return response()->json([
                'success' => true,
                'message' => 'Спасибо! Заявка отправлена, мы свяжемся с вами в течение рабочего дня.',
            ]);
        } catch (\Throwable $e) {
            Log::error('Lead form mail send failed', [
                'error' => $e->getMessage(),
                'data'  => $validated,
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Не удалось отправить заявку. Свяжитесь с нами по телефону.',
            ], 500);
        }
    }
}
