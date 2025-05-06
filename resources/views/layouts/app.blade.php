<!DOCTYPE html>
<html>
<head>
    <title>App Laundry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background: #f7f7f7;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        th {
            background-color: #f0f0f0;
        }

        a {
            color: #0066cc;
            text-decoration: none;
            margin-right: 8px;
        }

        form {
            display: inline;
        }

        input, textarea, button {
            padding: 8px;
            margin: 4px 0;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
        }

        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            margin-bottom: 15px;
            border-left: 4px solid #28a745;
        }

        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            margin-bottom: 15px;
            border-left: 4px solid #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
