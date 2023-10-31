<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TTRPG - Main Menu</title>
    <style>
        body {
            background-color: #512888;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 300px;
        }

        .title {
            color: #EB6123;
            text-align: center;
            font-size: 75px;
            margin: 200px;
            text-decoration: bold;
        }

        .primary-button {
            color: white;
            background-color: #DA4200;
            font-size: 24px;
            padding: 14px 40px;
            border-radius: 4px;
            transition-duration: 0.4s;
            text-align: center;
            text-decoration: none;
            outline: none;
            margin: 20px;
        }

        .primary-button:hover {
            background-color: white; /* Green */
            color: #DA4200;
        }

        .button:active {
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
    </style>
</head>
<body>
    <h1 class="title">Welcome Monsters!</h1>
    <div class="container">
        <a href="views/MonsterPicker.php">
            <button class="primary-button">Play</button>
        </a>
        <a href="#loadCharecter.php">
            <button class="primary-button">Load</button>
        </a>
    </div>
</body>
</html>