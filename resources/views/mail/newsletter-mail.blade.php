<x-mail::message>
You got new newsletter mail. You can find full details below.

<x-mail::table>
| Key               | Value                  |
| :---------------- | ---------------------: |
| **Email Address** | {{ $inputs['email'] }} |
</x-mail::table>

Regards from, <br>
{{ env('APP_NAME') }}
</x-mail::message>
