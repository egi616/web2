<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sintaks form blade</title>
</head>
<body>
    <h1>Form data mahasiswa</h1>
    <form action="{{route('mahasiswa.simpan')}}" method="POST">
        {{-- fungsi untuk standar keamanan form laravel --}}
        @csrf
        <label for="npm">NPM</label>
        <input type="text" name="npm"><br>

        <label for="nama">Nama</label>
        <input type="text" name="nama"><br>  
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>