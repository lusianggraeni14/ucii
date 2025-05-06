
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        .details {
            font-size: 18px;
            margin-top: 20px;
        }

        .details p {
            margin: 10px 0;
        }

        .details strong {
            color: #2980b9;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Detail Laundry</h1>

        <div class="details">
            <p><strong>ID:</strong> {{ $laundry->id }}</p>
            <p><strong>Nama:</strong> {{ $laundry->name }}</p>
            <p><strong>Alamat:</strong> {{ $laundry->address }}</p>
            <p><strong>Status:</strong> {{ $laundry->status }}</p>
            <!-- Sesuaikan dengan field yang ada di model Laundry -->
        </div>

        <a href="{{ route('laundry.index') }}" class="back-button">Kembali ke Daftar Laundry</a>
    </div>

</body>
</html>
