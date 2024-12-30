<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1><a href="{{ route('form') }}">Go</a></h1>

    <table>
        <thead>
            <tr>
                <th>SL</th>
                <th>Fname</th>
                <th>Lname</th>
                <th>Age</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->fname }}</td>
                    <td>{{ $data->lname }}</td>
                    <td>{{ $data->age }}</td>
                    <td><img src="{{ $data->image }}" alt="Image" /></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
