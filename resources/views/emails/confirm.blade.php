<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> 注册确定链接</title>
</head>
<body>
<h1> 感谢您使用Weibo App </h1>
<p>
    <a href="{{ route('confirm_email', $user->activation_token) }}">
        {{ route('confirm_email', $user->activation_token) }}
    </a>
</p>
<p>
如果不是您本人，请忽略邮件。
</p>

</body>
</html>
