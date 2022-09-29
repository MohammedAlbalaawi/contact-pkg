<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<h1 style="text-align: center;">Contact us</h1>
<div style="display: flex;justify-content: center;">

<form method="post" action="{{ route('contact') }}">
@csrf
    <input type="text" name="name" placeholder="Your name please"><br /><br />
    <input type="email" name="email" placeholder="Your email please"><br /><br />
    <textarea name="message" placeholder="Your Message" rows="10" rows="30" ></textarea><br /><br />
    <input type="submit" value="Send">
</form>
</div>
</body>
</html>
