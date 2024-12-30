<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if (session('success'))
        <h1>{{ session('success') }}</h1>
    @endif
    <form action="submitform" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        @error('fname')
            <p>{{ $message }}</p>
        @enderror
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br><br>
        @error('lname')
            <p>{{ $message }}</p>
        @enderror
        <label for="age">Age</label><br>
        <input type="text" id="age" name="age"><br><br>
        <label for="image">Image</label><br>
        <input type="file" id="image" name="image"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
