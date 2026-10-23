
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            padding: 25px;
            background: white;
            border-radius: 10px;
        }

        h2 {
            color: #2563eb;
            margin-bottom: 20px;
        }

        .item {
            padding: 12px 0;
            border-bottom: 1px solid #ddd;
        }

        .label {
            display: inline-block;
            width: 150px;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 16px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Detail Data Siswa</h2>

        <div class="item">
            <span class="label">NIS</span>
            {{ $siswa->nis }}
        </div>

        <div class="item">
            <span class="label">Nama</span>
            {{ $siswa->nama }}
        </div>

        <div class="item">
            <span class="label">Kelas</span>
            {{ $siswa->kelas }}
        </div>

        <div class="item">
            <span class="label">Jurusan</span>
            {{ $siswa->jurusan }}
        </div>

        <div class="item">
            <span class="label">Tanggal Lahir</span>
            {{ $siswa->tanggal_lahir }}
        </div>

        <div class="item">
            <span class="label">Alamat</span>
            {{ $siswa->alamat }}
        </div>

        <div class="item">
            <span class="label">Keterangan</span>
            {{ $siswa->keterangan ?: '-' }}
        </div>

        <a href="{{ route('siswa.index') }}" class="btn">Kembali</a>
    </div>
</body>
</html>
