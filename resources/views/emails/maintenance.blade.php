@component('mail::message')

Your website is in maintenance mood for view your website click the button.

@component('mail::button', ['url' => $m_link])
View site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
