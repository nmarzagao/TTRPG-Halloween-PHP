<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new Charecter</title>
    <style>
        body {
            background-color: #512888;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px;
        }

        .box {
            width: 500px;
            height: 300px;
            border: 1px solid black;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .title {
            color: #EB6123;
            text-align: center;
            font-size: 50px;
            margin: 80px;
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

<h1 class="title">Pick Your Monster!</h1>
<div class="container">
    <div class="box">
        <a href="AbilityPicker.php?monsterTypeNUM=1">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSV7V3T1CWi98ebwLeic2A1xE28m5wAAOOfQw&usqp=CAU"></img>
        </a>
    </div>
    
    <div class="box">
        <a href="AbilityPicker.php?monsterTypeNUM=2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSV7V3T1CWi98ebwLeic2A1xE28m5wAAOOfQw&usqp=CAU"></img>
        </a>
    </div>

    <div class="box">
        <a href="AbilityPicker.php?monsterTypeNUM=3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSV7V3T1CWi98ebwLeic2A1xE28m5wAAOOfQw&usqp=CAU"></img>
        </a>
    </div>
</div>

<div class="container">
    <a href="../index.php">
        <button class="primary-button">Back</button>
    </a>
</div>
</body>
</html>