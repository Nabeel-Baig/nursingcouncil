@component('mail::message')
# {{ config('app.name') }}

You have received the donation of {{ $data->description }} is ${{ number_format($data->amount) }} from {{ $data->name }}

@component('mail::button', ['url' => url('/') ])
Visit Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
