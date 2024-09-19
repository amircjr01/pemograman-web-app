<!DOCTYPE html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @foreach ($mahasiswa as $item)
        {{ $item->nim }} <br>
        {{ $item->nama }}
    @endforeach
    <div class="container">
        <h1>Data Mahasiswa</h1>
        <a href="{{ route('tambah-mahasiswa') }}" class="btn btn-primary">Tambah Data</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
@@ -29,6 +30,14 @@
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>
                            <a href="{{ route('edit-mahasiswa', ['nim' => $item->nim]) }}" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger" onclick="document.getElementById('delete-form').submit();">Hapus</a>
                            <form id="delete-form" action="{{ route('hapus-mahasiswa', ['nim' => $item->nim]) }}" method="post">
                                @csrf
                                @method("DELETE")
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>