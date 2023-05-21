<x-mail::message>
Welcome to Our Blogging Channel

Dear {{ $email }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
