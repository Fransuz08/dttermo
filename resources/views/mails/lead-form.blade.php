<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Новая заявка</title>
</head>
<body style="font-family: Arial, sans-serif; color:#222; line-height:1.5;">
<h2>Новая заявка с сайта</h2>

<table cellpadding="8" cellspacing="0" style="border-collapse:collapse; width:100%; max-width:600px;">
    <tr>
        <td style="border:1px solid #ddd; background:#f9f9f9; width:180px;"><strong>Имя</strong></td>
        <td style="border:1px solid #ddd;">{{ $data['name'] }}</td>
    </tr>
    <tr>
        <td style="border:1px solid #ddd; background:#f9f9f9;"><strong>Телефон</strong></td>
        <td style="border:1px solid #ddd;">{{ $data['phone'] }}</td>
    </tr>
    @if(!empty($data['email']))
        <tr>
            <td style="border:1px solid #ddd; background:#f9f9f9;"><strong>Email</strong></td>
            <td style="border:1px solid #ddd;">{{ $data['email'] }}</td>
        </tr>
    @endif
    @if(!empty($data['message']))
        <tr>
            <td style="border:1px solid #ddd; background:#f9f9f9;"><strong>Комментарий</strong></td>
            <td style="border:1px solid #ddd;">{!! nl2br(e($data['message'])) !!}</td>
        </tr>
    @endif
</table>

<hr style="margin:24px 0; border:none; border-top:1px solid #eee;">
</body>
</html>
