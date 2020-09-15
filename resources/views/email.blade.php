<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="{{url('/email/send')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    
    <input type="text" name="nama">
    <input type="email" name="email">
    <input type="contact" name="contact">
    <input type="file" name="image">
    <br>

    <input type="submit" value="submit">
    
    </form>
</body>
</html>