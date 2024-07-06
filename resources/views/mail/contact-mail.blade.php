<x-mail::message>
You got new contact mail from **{{ $inputs['name'] }}**. You can find full details below.

<x-mail::table>
| Key               | Value                  |
| :---------------- | ---------------------: |
| **Name**          | {{ $inputs['name'] }}  |
| **Email Address** | {{ $inputs['email'] }} |
</x-mail::table>

<x-mail::panel>
{{ $inputs['message'] }}
</x-mail::panel>

Regards from, <br>
{{ env('APP_NAME') }}
</x-mail::message>
