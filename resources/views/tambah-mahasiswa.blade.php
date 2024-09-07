<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tambah Data Mahasiswa</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-custom {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="form-container">
            <h2 class="text-center mb-4">Tambah Data Mahasiswa</h2>
            <form action="/store" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="nim">NIM</label>
                    <input type="number" class="form-control" id="nim" name="nim" min="1" required>
                </div>
                <div class="form-group mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="/" class="btn btn-secondary btn-custom">Kembali</a>
                    <button type="submit" class="btn btn-primary btn-custom">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>