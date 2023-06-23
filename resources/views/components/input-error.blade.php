@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <p>Неправильный логин или пароль</p>
        @endforeach
    </ul>
@endif
