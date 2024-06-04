<!DOCTYPE html>
<html>
<head>
    <title>{{ $subject }}</title>
</head>
<body>
    <strong>您好,{{ $username }}!</strong>

    <p>這是您的首次登錄。請點擊以下連結來設置新密碼:</p>
    <a href="{{ url('forgot-password') }}">設置新密碼</a>
    
    <hr>
    
    <strong>Hello, {{ $username }}!</strong>
    
    <p>This is your first time logging in. Please click the link below to set a new password:</p>
    <a href="{{ url('forgot-password') }}">Set New Password</a>
</body>
</html>

