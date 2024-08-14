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
    <form action="/tambah" method="post" class="p-5 m-5">
        @csrf
        <div class="row p-5 mt-5 shadow " style="">
            <div class="col-12">
                <h1 class="text-center mb-5">Buat Data</h1>
            </div>
            <div class="col-12 mb-5">
                <label for="name">Name :</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="col-12 mb-5">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="col-12 mb-5">
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="col-12">
                <input type="submit" value="Tambahkan" class="btn btn-primary">
            </div>
        </div>
    </form>
</body>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>