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
        }
    </style>
</head>
<body>

<h1 class="title">Pick your monster!</h1>
<div class="container">
    <div class="box">
        <a href="#WitchCreation.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSV7V3T1CWi98ebwLeic2A1xE28m5wAAOOfQw&usqp=CAU"></img>
        </a>
    </div>
    
    <div class="box">
        <a href="#WarewolfCreation.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSV7V3T1CWi98ebwLeic2A1xE28m5wAAOOfQw&usqp=CAU"></img>
        </a>
    </div>

    <div class="box">
        <a href="#VampireCreation.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSV7V3T1CWi98ebwLeic2A1xE28m5wAAOOfQw&usqp=CAU"></img>
        </a>
    </div>
</div>

<button><a href="../index.php">Back</a></button>

</body>
</html>