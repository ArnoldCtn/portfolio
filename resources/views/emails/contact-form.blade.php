<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouveau Message de IntellosisCFP</title>
    <style>
        body { font-family:Georgia, 'Times New Roman', Times, serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #071ecb; color: white; padding: 20px; text-align: center; border-radius: 25px; }
        .content { background: #f9f9f9; padding: 20px; border-radius: 5px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #0722d1; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Message from Portfolio Contact Form</h1>
        </div>
        
        <div class="content">
            <div class="field">
                <span class="label">Name:</span>
                <span>{{ $name ?? 'Not specified' }}</span>
            </div>
            
            <div class="field">
                <span class="label">Email:</span>
                <span>{{ $email ?? 'Not specified' }}</span>
            </div>
            
            <div class="field">
                <span class="label">Message:</span>
                <div style="margin-top: 10px; padding: 15px; background: white; border-radius: 5px; border-left: 4px solid #2E7D32;">
                    {{ $messageContent ?? 'No message provided' }}
                </div>
            </div>
            
            <div class="field" style="margin-top: 20px; padding-top: 20px; border-top: 1px solid #ddd;">
                <small>This message was sent from the contact form of your Personal Portfolio Page.</small>
            </div>
        </div>
    </div>
</body>
</html>