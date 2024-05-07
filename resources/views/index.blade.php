<!DOCTYPE html>
<html>
<head>
    <script>
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        console.log(csrfToken);
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PEMROGRAMAN WEB LANJUT</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
       
        .student-info {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <h1>Data Mahasiswa</h1>
    <p>Nama : Ines Rahayu Tyas</p>
    <p>Nim : 22104410049</p>
    <p>Kelas : TI A</p>
    <p>Semester : 4</p>

    <h1>Data Mahasiswa</h1>
    <p>Nama : Asshyffatul Aina Ni'mah</p>
    <p>Nim : 22104410044</p>
    <p>Kelas : TI A</p>
    <p>Semester : 4</p>

    <h1>Data Mahasiswa</h1>
    <p>Nama : Umi Hanik</p>
    <p>Nim : 22104410021</p>
    <p>Kelas : TI A</p>
    <p>Semester : 4</p>

    <h1>Data Mahasiswa</h1>
    <p>Nama : AfianaSepti Laili</p>
    <p>Nim : 22104410032</p>
    <p>Kelas : TI A</p>
    <p>Semester : 4</p>

    <h1>Data Mahasiswa</h1>
    <p>Nama : Tandiyo Dwi Oktavian</p>
    <p>Nim : 22104410017</p>
    <p>Kelas : TI A</p>
    <p>Semester : 4</p>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var message = "{{ Session::get('kunci') }}";
            if (message && message.length > 0) {
                alert(message);
            }
        });
    </script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
