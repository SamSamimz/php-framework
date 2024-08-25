<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .not-found-container {
            text-align: center;
            max-width: 600px;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .not-found-container .icon {
            font-size: 6rem;
            color: #dc3545;
            margin-bottom: 20px;
        }
        .not-found-container h1 {
            font-size: 3rem;
            margin: 0;
            color: #343a40;
        }
        .not-found-container h2 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #6c757d;
        }
        .not-found-container p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: #6c757d;
        }
        .not-found-container .btn-secondary {
            background-color: #6c757d;
            border: none;
        }
        .not-found-container .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>

<div class="not-found-container">
    <div class="icon">
        <i class="fas fa-exclamation-triangle"></i>
    </div>
    <h1>404</h1>
    <h2>Page Not Found</h2>
    <p>Sorry, the page you are looking for does not exist. It may have been moved or deleted.</p>
        <a href="/" class="btn btn-primary">Back to root!</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
