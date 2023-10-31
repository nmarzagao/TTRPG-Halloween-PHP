<?php
const WITCH    = 1;
const WAREWOLF = 2;
const VAMPIRE  = 3;

$abilityOptions = [];

switch ($_GET['monsterTypeNUM']) {
    case WITCH:
        $abilityOptions[0] = ["test", "test"];
        $abilityOptions[1] = [];
        $abilityOptions[2] = [];
        $abilityOptions[3] = [];

        break;

    case WAREWOLF:
        $abilityOptions[0] = [];
        $abilityOptions[1] = [];
        $abilityOptions[2] = [];
        $abilityOptions[3] = [];

        break;
    
    case VAMPIRE:
        $abilityOptions[0] = [];
        $abilityOptions[1] = [];
        $abilityOptions[2] = [];
        $abilityOptions[3] = [];

        break;

    default:
        echo "Error: Invalid Monster Type!\n";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Abilities </title>

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

<h1>Select Abilities</title>

<form action="#sendthisform" method="post">
    <div>
        <label><?php echo $abilityOptions[0][0] ?></label><br>
        <input type="radio" id="html" name="ability1" value="HTML"><br>
        <label><?php echo $abilityOptions[0][1] ?></label><br>
        <input type="radio" id="html" name="ability1" value="HTML"><br>'
        
        <label><?php echo $abilityOptions[1][0] ?></label><br>
        <input type="radio" id="html" name="ability2" value="HTML"><br>
        <label><?php echo $abilityOptions[1][1] ?></label><br>
        <input type="radio" id="html" name="ability2" value="HTML"><br>

        <label><?php echo $abilityOptions[2][0] ?></label><br>
        <input type="radio" id="html" name="ability3" value="HTML"><br>
        <label><?php echo $abilityOptions[2][1] ?></label><br>
        <input type="radio" id="html" name="ability3" value="HTML"><br>

        <label><?php echo $abilityOptions[3][0] ?></label><br>
        <input type="radio" id="html" name="ability4" value="HTML"><br>
        <label><?php echo $abilityOptions[3][1] ?></label><br>
        <input type="radio" id="html" name="ability4" value="HTML"><br>
</body>
</html>