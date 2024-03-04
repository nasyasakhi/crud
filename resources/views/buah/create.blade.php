<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah Buah</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-5">Tambah Buah</h1>
    <form action="{{ route('buah.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Buah</label>
            <input name="nama_buah" type="text" class="form-control @error('nama_buah') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('nama_buah')
            <span style="color: red;"> {{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Harga</label>
            <input name="harga" type="number" class="form-control @error('harga') is-invalid @enderror" id="exampleInputPassword1">
            @error('harga')
            <span style="color: red;"> {{ $message }}</span>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>