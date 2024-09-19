<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Edit Data Mahasiswa</h1>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ $mahasiswa->nama }}">
                <input type="text" name="nama" class="form-control  @error('nama') is-invalid @enderror" id="nama" value="{{ $mahasiswa->nama }}">
                @error('nama')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-danger">Kembali</a>
            <a href="{{ route('list-mahasiswa') }}" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</body>
</html>