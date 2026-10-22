
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            margin: 0;
            padding: 30px;
            color: #334155;
        }

        .container {
            max-width: 700px;
            margin: auto;
            padding: 25px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 10px #00000015;
        }

        h1 {
            color: #2563eb;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input, textarea, select {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid #cbd5e1;
            border-radius: 5px;
        }

        .btn {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            box-sizing: border-box;
            width: 100px;
            height: 40px;
            margin-top: 20px;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
        }

        .simpan {
            background: #2563eb;
        }

        .kembali {
            background: #64748b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Data Siswa</h1>
        <p>Silakan ubah data siswa berikut.</p>

        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nis">NIS</label>
            <input type="text" id="nis" name="nis"
                   value="{{ $siswa->nis }}" required>

            <label for="nama">Nama Siswa</label>
            <input type="text" id="nama" name="nama"
                   value="{{ $siswa->nama }}" required>

            <label for="kelas">Kelas</label>
            <input type="text" id="kelas" name="kelas"
                   value="{{ $siswa->kelas }}" required>

            <label for="jurusan">Jurusan</label>
            <select id="jurusan" name="jurusan" required>
                <option value="">-- Pilih Jurusan --</option>
                <option value="PPLG" {{ $siswa->jurusan == 'PPLG' ? 'selected' : '' }}>PPLG</option>
                <option value="ULP" {{ $siswa->jurusan == 'ULP' ? 'selected' : '' }}>ULP</option>
                <option value="TGP" {{ $siswa->jurusan == 'TGP' ? 'selected' : '' }}>TGP</option>
                <option value="ELKA" {{ $siswa->jurusan == 'ELKA' ? 'selected' : '' }}>ELKA</option>
                <option value="TKIN" {{ $siswa->jurusan == 'TKIN' ? 'selected' : '' }}>TKIN</option>
                <option value="TJKT" {{ $siswa->jurusan == 'TJKT' ? 'selected' : '' }}>TJKT</option>
                <option value="OTO" {{ $siswa->jurusan == 'OTO' ? 'selected' : '' }}>OTO</option>
                <option value="BC" {{ $siswa->jurusan == 'BC' ? 'selected' : '' }}>BC</option>
            </select>

            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir"
                   name="tanggal_lahir"
                   value="{{ $siswa->tanggal_lahir }}" required>

            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat"
                      rows="3" required>{{ $siswa->alamat }}</textarea>

            <label for="keterangan">Keterangan</label>
            <textarea id="keterangan" name="keterangan"
                      rows="3">{{ $siswa->keterangan }}</textarea>

            <button type="submit" class="btn simpan">Simpan</button>

            <a href="{{ route('siswa.index') }}"
               class="btn kembali">Kembali</a>
        </form>
    </div>
</body>
</html>
