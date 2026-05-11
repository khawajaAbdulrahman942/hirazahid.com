<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: 'Inter', sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #eee; border-radius: 10px; }
        .header { border-bottom: 2px solid #9719FD; padding-bottom: 10px; margin-bottom: 20px; }
        .label { font-weight: bold; color: #9719FD; }
        .content { margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Contact Message</h2>
        </div>
        <div class="content">
            <p><span class="label">Name:</span> {{ $contact->name }}</p>
        </div>
        <div class="content">
            <p><span class="label">Email:</span> {{ $contact->email }}</p>
        </div>
        <div class="content">
            <p><span class="label">Message:</span></p>
            <p>{{ $contact->message }}</p>
        </div>
    </div>
</body>
</html>
