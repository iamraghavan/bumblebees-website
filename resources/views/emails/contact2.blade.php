@component('mail::message')
# New Contact Form Submission

You have received a new contact form submission. Here are the details:

**Name:** {{ $formData2['name'] }} {{ $formData2['Lname'] }}

**Phone:** {{ $formData2['phone'] }}

**Email:** {{ $formData2['email'] }}

**Message:**
{{ $formData2['message'] }}

Thank you,<br>
{{ config('app.name') }}
@endcomponent
