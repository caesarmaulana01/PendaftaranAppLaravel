<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran PDF</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .foto { text-align: center; margin-top: 20px; }
        .foto img { max-width: 150px; height: auto; border: 1px solid #000; }
    </style>
</head>
<body>
    <h2>Detail Pendaftaran</h2>
    <table>
        <tr>
            <th>NIK</th>
            <td>{{ $pendaftaran->nik }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $pendaftaran->nama }}</td>
        </tr>
        <tr>
            <th>Tempat, Tanggal Lahir</th>
            <td>{{ $pendaftaran->tempat_lahir }}, {{ $pendaftaran->tanggal_lahir }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $pendaftaran->jenis_kelamin }}</td>
        </tr>
        <tr>
            <th>Agama</th>
            <td>{{ $pendaftaran->agama }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $pendaftaran->alamat }}</td>
        </tr>
        <tr>
            <th>Hobi</th>
            <td>{{ isset($pendaftaran->hobi) && is_array($pendaftaran->hobi) ? implode(", ", $pendaftaran->hobi) : '-' }}</td>
        </tr>
    </table>

    <!-- Menampilkan Foto jika tersedia -->
    @if(!empty($pendaftaran->foto))
        <div class="foto">
            <h3>Foto Pendaftar</h3>
            <img src="{{ public_path('storage/'.$pendaftaran->foto) }}" alt="Foto Pendaftar">
        </div>
    @endif

</body>
</html>
