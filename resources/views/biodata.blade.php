<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Formulir Biodata</h2>
    <form action="/biodata" method="POST">
        @csrf
        Nama : <br>
        <input type="text" name="nama" value="{{@old('nama')}}">
        @error('nama')
        <br><label style="color:red">{{$message}}</label>
        @enderror
        <br>


        Jenis Kelamin : <br>
        <select name="gender">
            <option value="">Pilih</option>
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
        </select>
        @error('gender')
        <br><label style="color:red">{{$message}}</label>
        @enderror
        <br>


        Email : <br>
        <input type="text" name="email" value="{{@old('email')}}">
        @error('email')
        <br><label style="color:red">{{$message}}</label>
        @enderror 
        <br>
        
        Nomor Ponsel : <br>
        <input type="text" name="ponsel" value="{{@old('ponsel')}}">
        @error('ponsel')
        <br><label style="color:red">{{$message}}</label>
        @enderror 
        <br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>