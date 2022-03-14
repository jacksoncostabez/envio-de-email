@component('mail::message')
    <h1>Saiu um novo episódio!</h1>

    E aí {{ $user->name }}, seu e-mail é: {{ $user->email }}

    @component('vendor.mail.html.button', ['url' => 'https://inovadev.com.br'])
        Garantir Meu Site
    @endcomponent

@endcomponent
