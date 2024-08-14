<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container p-5">
        <form action="/import" method="POST" enctype="multipart/form-data" class="p-5 shadow mt-5">
            @csrf
            <h1 class="text-center mb-5">Data Import</h1>
            <div class="mb-3">
                <input type="file" name="file" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%">Import Users</button>
        </form>
    </div>
</body>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>