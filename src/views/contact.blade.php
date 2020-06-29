<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <h1>Contact Us anytime</h1>
        <form action="{{route('contact')}}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Your Name Please">
            <input type="text" name="email" placeholder="Your Valid Email">
            <textarea name="message" cols="30" rows="10" placeholder="Your Query"></textarea>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
