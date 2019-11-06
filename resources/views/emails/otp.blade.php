<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-com</title>
    </head>
    <body>
        <div>
            Dear Customer,
            <br><br>
            The One Time Password (OTP) is {{ $data }}. 
            Please do not share this One Time Password with anyone.
        </div>
    </body>
</html>
