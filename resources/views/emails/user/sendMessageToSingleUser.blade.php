@component('mail::message')
    # {{ $info->header }}

    {{ $info->message }}

    @component('mail::button', ['url' => $info->b_url ?? $def_url])
        view
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
