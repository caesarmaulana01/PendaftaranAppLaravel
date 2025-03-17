<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil</title>
    <script>
        window.onload = function() {
            window.location.href = "{{ route('pendaftaran.pdf', ['id' => $id]) }}";
        }
    </script>
</head>
<body>
    <p>Pendaftaran berhasil! Mengunduh PDF...</p>
</body>
</html>
