<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
<h1>
    Contact view

    <form action="{{route('contact')}}" method="post">
        {{csrf_token()}}

        <input type="text" name="name" placeholder="Your Name">
        <input type="email" name="email" placeholder="Your Email">
        <textarea name="message" cols="30" rows="10" placeholder="Enter Your Message"></textarea>
        <input type="submit" value="send">
    </form>
</h1>
</body>
</html>