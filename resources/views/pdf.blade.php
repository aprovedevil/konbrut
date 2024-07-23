<!-- resources/views/pdf.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #333333;
            text-align: center;
        }

        p {
            margin-bottom: 10px;
        }

        .header,
        .footer {
            width: 100%;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
        }

        .header {
            top: 0;
        }

        .footer {
            bottom: 0;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>Header Surat</h2>
    </div>

    <div class="container">
        <h1>Data Pendaftaran</h1>
        <p><strong>Nama:</strong> {{ $post->name }}</p>
        <p><strong>NISN:</strong> {{ $post->nisn }}</p>
        <p><strong>Alamat:</strong> {{ $post->alamat }}</p>
    </div>

    <div class="footer">
        <p>Footer Surat</p>
    </div>
</body>

</html>

