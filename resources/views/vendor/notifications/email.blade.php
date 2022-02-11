@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
{{--# {{ $greeting }}--}}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Merhaba!')
@endif
@endif

{{-- Intro Lines --}}
{{--@foreach ($introLines as $line)--}}
{{--{{ $line }}--}}

{{--@endforeach--}}

{{-- Action Button --}}
Bu mesajı şifre yenileme talebinizden dolayı alıyorsunuz.
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endisset
Bu şifre yenileme linki 60 dakika sonra yok olacaktır.
Eğer şifre yenileme talebiniz olmadıysa herhangi bir işleme devam etmeniz gerekmemektedir.
{{-- Outro Lines --}}
{{--@foreach ($outroLines as $line)--}}
{{--{{ $line }}--}}

{{--@endforeach--}}

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
İyi oyunlar,<br>
ArapasPlayStation
@endif

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@lang(
    "Eğer şifre yenileme butonuna tıklarken problem yaşıyorsanız aşağıdaki URL adresini tarayıcınıza kopyalayıp yapıştırın:"

) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
@endslot
@endisset
@endcomponent


