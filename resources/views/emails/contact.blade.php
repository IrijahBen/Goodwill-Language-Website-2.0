<!DOCTYPE html>
<html>
<head>
    <title>New Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6;">
    <h2>You have a new inquiry!</h2>
    <p><strong>Name:</strong> {{ $data['firstName'] }} {{ $data['lastName'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    
    <h3>Message:</h3>
    <div style="background: #f3f4f6; padding: 15px; border-radius: 5px;">
        {{ $data['message'] }}
    </div>
</body>
</html>
