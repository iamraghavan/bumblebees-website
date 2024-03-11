@component('mail::message')
    
# Contact Form Submission

**Name:** {{ $formData['name'] }}

**Email:** {{ $formData['email'] }}

**Contact Number:** {{ $formData['contactNumber'] }}

**Appointment Time:** {{ $formData['appointmentTime'] ? \Carbon\Carbon::parse($formData['appointmentTime'])->format('h:i A') : 'Not specified' }}

**Appointment Date:** {{ $formData['appointmentDate'] ? \Carbon\Carbon::parse($formData['appointmentDate'])->format('F j, Y') : 'Not specified' }}

@endcomponent
