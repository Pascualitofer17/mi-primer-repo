<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Web en Construcción</title>
    

    <meta http-equiv="refresh" content="7; url=https://pascualitofer.com">

    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f0f2f5;
            color: #1c1e21;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
            flex-direction: column;
        }
        .container {
            padding: 40px;
            border-radius: 12px;
            background-color: #ffffff;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
        }
        h1 {
            color: #333;
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        p {
            font-size: 1.2em;
            color: #606770;
        }
        .spinner {
            border: 4px solid rgba(0, 0, 0, 0.1);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border-left-color: #0866ff;
            margin-top: 20px;
            animation: spin 1s ease infinite;
        }
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sitio en Construcción</h1>
        <h2>¡Probando Terminus!</h2>  <p>Estamos preparando algo increíble para ti que estas viendo.</p>
        <div class="spinner"></div>
    </div>
</body>
</html>