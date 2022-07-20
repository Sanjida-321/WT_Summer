<?php
include("../control/registrationprocess.php");

?>
<html>
    <head>
        <title>
            Form
        </title>

        <link rel="stylesheet" href="../css/style.css">
    </head>
        <body>
            <h1 id="reg">Registration</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><h1>First name</h1></td>
                        <td><input type = "text" name="fname" id=""></td>
                    </tr>
                    <tr>
                        <td><h1>Last name</h1></td>
                        <td><input type = "text" name="lname" id=""></td>
                    </tr>
                    <tr>
                        <td><h1>Age</h1></td>
                        <td><input type = "number" name="age" id=""></td>
                    </tr>
                    <tr>
                        <td><h1>Designation</h1></td>
                        <td><input type = "radio" value="junior programmer" name="designation" id="">Junior Programmer</td>
                        <td><input type = "radio" value="senior programmer" name="designation" id="">Senior Programmer</td>
                        <td><input type = "radio" value="project lead" name="designation" id="">Project lead</td>
                    </tr>
                    <tr>
                        <td><h1>Prefered Language</h1></td>
                        <td><input type = "checkbox" value="java" name="java" id="">JAVA</td>
                        <td><input type = "checkbox" value="php" name="php" id="">PHP</td>
                        <td><input type = "checkbox" value="c++" name="c++" id="">C++</td>

                    </tr>
                    <tr>
                        <td><h1>Email</h1></td>
                        <td><input type = "name" name="email" id=""></td>
                    </tr>
                    <tr>
                        <td><h1>Password</h1></td>
                        <td><input type = "password" name="password" id=""></td>
                    </tr>
                    <td><h1>Please choose a file</h1></td>
                    <td><input type="file" name="myfile" id="">
                    <tr>

</tr>
<td><input type="submit" value="Submit" name="registraion"></td>
<td><input type="reset" value="Reset"></td>
<td>
    <?php
    echo $registrationError;
    ?>
</td>
</tr>


                </table>

            </form>
            
            <table border='1'>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Password</th>
                    <th>Designation</th>
                    <th>Email</th>
                    <th>Preferred Language</th>
                    <th>Photo</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            if(!empty($result) && $result->num_rows > 0){
                while($row = $results->fetch_assoc()) 
                echo "
                <tr>
                <td>{$row["fname"]}</td>
                <td>{$row["lname"]}</td>
                <td>{$row["age"]}</td>
                <td>{$row["password"]}</td>
                <td>{$row["designation"]}</td>
                <td>{$row["email"]}</td>
                <td>{$row["planguage"]}</td>
                <td>{$row["picture"]}</td>
                </tr>
                ";
                    
                }
            

?>

            </tbody>
            </table>

          
        
            </body>
   
</html>