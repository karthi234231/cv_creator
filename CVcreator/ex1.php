<?php
    $name = $_POST["name"];
    $degree = $_POST["Degree"];

?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>student details</title>
    </head>
    <style>
        *{
            font-size: 20px;
        }
        body{
            background-image: #f6f6f6;
        }
        input,textarea{
            margin: 8px 0;
            padding: 0 10px;
            border: 2px solid black;
            border-radius:10px;
        }
        input:focus,textarea:focus{
            background-color: lightblue;
        }
        legend{
            size: larger;
        }
        fieldset{
            border: 2px solid black;
            padding: 30px;
            border: auto;
        }
        input[type=submit]{
           
            height: 40px;
            width:120px;
            background-color: rgb(111, 116, 114);
            color: #f6f6f6;
            margin-left:30px ;
            margin-top: 20px;
            margin-bottom: -40px;
        }
       
       

    </style>
    <body>
        <h1>STUDENT DETAILS</h1>
        <form action="success.html" action="portfolio.php" autocomplete="on" method="POST">
            <fieldset>
                <legend>Personal</legend>
                <table>
                    <tr>
                        <td>Name : </td>
                        <td><input type="text" name="name" id="name" required></td>
                    </tr>
                    <tr>
                        <td>Degree : </td>
                        <td><input type="text" name="degree" id="degree"></td>
                    </tr>
                    <tr>
                        <td>Date of birth : </td>
                        <td> <input type="date" id="dob" name="dob"></td>
                    </tr>
                    <tr>
                        <td>Age : </td>
                        <td><input type="text" name="age" id="age" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit"></td>
                    </tr>
                </table>
            </fieldset>
        </form>

    </body>
</html>