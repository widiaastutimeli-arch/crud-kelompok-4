
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            margin: 0;
            padding: 30px;
            color: #334155;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 25px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 10px #00000015;
        }

        h1 {
            color: #2563eb;
            margin-bottom: 8px;
        }

        p {
            color: #64748b;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            margin: 25px 0 15px;
        }

        .btn {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: #1d4ed8;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border: 1px solid #e2e8f0;
            text-align: left;
        }

        th {
            background: #2563eb;
            color: white;
        }

        tr:hover {
            background: #eff6ff;
        }

        .aksi {
            white-space: nowrap;
        }

        .btn-detail,
        .btn-edit,
        .btn-hapus {
            display: inline-block;
            padding: 7px 10px;
            border-radius: 4px;
            text-decoration: none;
            color: white;
            font-size: 13px;
            border: none;
            cursor: pointer;
            margin: 2px;
        }

        .btn-detail {
            background: #2563eb;
        }

        .btn-edit {
            background: #0f766e;
        }

        .btn-hapus {
            background: #dc2626;
        }

        .btn-detail:hover {
            background: #1d4ed8;
        }

        .btn-edit:hover {
            background: #115e59;
        }

        .btn-hapus:hover {
            background: #b91c1c;
        }

        .success {
            background: #dbeafe;
            color: #1e40af;
            padding: 12px;
            border-radius: 5px;
        }

        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            .container {
                padding: 15px;
                overflow-x: auto;
            }

            .top-bar {
                align-items: flex-start;
                flex-direction: column;
            }

            table {
                min-width: 750px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Data Siswa</h1>
        <p>Sistem Informasi Data Siswa SMKN 1 PADAHERANG</p>

        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

<div class="top-bar">
    <span>Daftar Seluruh Siswa</span>

    <a href="{{ route('siswa.create') }}" class="btn">
        + Tambah Siswa
    </a>
</div>

<form action="{{ route('siswa.index') }}" method="GET" style="margin-bottom: 20px;">
    <input
        type="text"
        name="search"
        placeholder="Cari nama atau NIS siswa..."
        value="{{ $search ?? '' }}"
        style="padding: 10px; width: 250px; border: 1px solid #cbd5e1; border-radius: 5px;"
    >

    <button class="btn" type="submit">Cari</button>
<a href="{{ route('siswa.index') }}" class="btn" style="background:#db0d0d">Reset</a>
</form>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($siswas as $siswa)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $siswa->nis }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>{{ $siswa->jurusan }}</td>
                        <td class="aksi">
                            <a href="{{ route('siswa.show', $siswa->id) }}"
                               class="btn-detail">Detail</a>

                            <a href="{{ route('siswa.edit', $siswa->id) }}"
                               class="btn-edit">Edit</a>

                            <form
                                action="{{ route('siswa.destroy', $siswa->id) }}"
                                method="POST"
                                style="display: inline;"
                                onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn-hapus">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Belum ada data siswa.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
