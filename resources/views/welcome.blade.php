<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css"   
 href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    @include('sweetalert::alert')
    <div class="container align-items-center p-5">
        <div class="d-flex mb-4">
            <a href="/tambah" class="btn btn-primary me-5" style="width: 20%">Buat Data</a>
            <a href="/import" class="btn btn-secondary me-3">Import Data</a>
            <a href="/export" class="btn btn-success ">Export Data</a>
        </div>
       
        <table class="table table-striped table-bordered" id="data_table">
            <thead class="">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <a href="/edit/{{ $item->id }}" class="btn btn-warning fw-bold">Edit</a>
                        <a href="/hapus/{{ $item->id }}" class="btn btn-danger fw-bold">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>   
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/Javascript">
        $(document).ready( function () {
        $('#data_table').DataTable();
        } );
    </script>

</body>
</html>