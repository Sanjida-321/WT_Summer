<html>
    <head>
        <title>
            Form
        </title>
    </head>
        <body>
        <h1>Registration</h1>
        <form action="../control/Lab1verify.php" method="POST">
           
            
                <table>
                    <tr>
                        <td><h1>First Name</h1></td>
                        <td><input type = "text" name="firstName" id=""></td>
</tr>
<tr>
<td><h1>Last Name</h1></td>
<td><input type = "text" name="lastName" id=""></td>
</tr>
<tr>
                        <td><h1>Age</h1></td>
                        <td><input type = "number" name="age" id=""></td>
</tr>
<tr>
<td><h1>Designation</h1></td>
                    <td><input type="radio" name="designation" value="Junior Programmer">Junior Programmer</td>
                    <td><input type="radio" name="designation" value="Senior Programmer">Senior Programmer</td>
                    <td><input type="radio" name="designation" value="Project Lead">Project Lead</td>
</tr>
<tr>
<td><h1>Preferred language</h1></td>                    
                    <td><input type="checkbox" name="preferredlanguage" value="Java">Java</td>
                    <td><input type="checkbox" name="preferredlanguage" value="PHP">PHP</td>
                    <td><input type="checkbox" name="preferredlanguage" value="C++">C++</td>
</tr>
<tr>
    <td><h1>Email</h1></td>
    <td><input type = "email" name="email" id=""></td>
</tr>
/
                    <tr>
                        <td><h1>Password</h1></td>
                        <td><input type = "password" name="password" id=""></td>
                    </tr>
<tr>
    <td>Please chose a file</td>
    <td><input type="file">
</tr>
<tr>
<td><input type="submit" value="Submit"></td>
<td><input type="reset" value="Reset"></td>


                </table>

            </form>
        </body>
   
</html>