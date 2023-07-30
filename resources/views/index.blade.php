<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <h1>Contact data</h1>

    @foreach ($getAll as $data)
        <div class="d-flex justify-content-start border">
            <p class="px-2 mx-3">{{$data->uid}}</p>
            <p class="px-2 mx-3">{{$data->contact_no}}</p>
            <p class="px-2 mx-3">{{$data->email}}</p>
            <p class="px-2 mx-3">{{$data->address}}</p>
            <p class="px-2 mx-3">{{$data->created_at}}</p>
            <p class="px-2 mx-3">{{$data->updated_at}}</p>
        </div>
    @endforeach

</body>
</html>