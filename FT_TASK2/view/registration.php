
<html>
    <head>
        <title>
            Form
        </title>

        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
        <body>
            <div class="head">
                <h1>ABC Management System</h1>
                <h2>We Create Future</h2>
            </div>

            <div class="nav">
                <button>Home</button>
                <button>AboutUs</button>
                <button>Shop</button>
            </div>
            <div class="reg">
            <h1 >Registration Form</h1>
            </div>
           
            <form action="" method="POST" enctype="multipart/form-data">
                <table>
                    <tr class="data">
                        <td>First name</td>
                        <td><input type = "text" name="fname" id=""></td>
                    </tr>
                    <tr class="data">
                        <td>Last name</td>
                        <td><input type = "text" name="lname" id=""></td>
                    </tr>
                    <tr class="data">
                        <td>Age</td>
                        <td><input type = "number" name="age" id=""></td>
                    </tr>
                    <tr class="data">
                        <td>Designation</td>
                        <td>
                        <div id="jp"><input type="radio" name="designation" value="juniorprogrammer">Junior Programmer </div> 
                        <div id="sp"><input type="radio" name="designation" value="seniorprogrammer">Senior Programmer
                        </div>
                        <div id="pl"><input type="radio" name="designation" value="projectlead">Project Lead</div>
</td>
                    </tr>
                    <tr class="data">
                        <td>Prefered Language</td>
                        <td>
                            <input type = "checkbox" value="java" name="java" id="">JAVA
                            <input type = "checkbox" value="php" name="php" id="">PHP
                            <input type = "checkbox" value="c++" name="c++" id="">C++
                        </td>

                    </tr>
                    <tr class="data">
                        <td>Email</td>
                        <td><input type = "name" name="email" id=""></td>
                    </tr>
                    <tr class="data">
                        <td>Password</td>
                        <td><input type = "password" name="password" id=""></td>
                    </tr>
                    
                    <tr class="data">
                    <td>Please choose a file</td>
                    <td><input type="file" name="myfile" id="">
</tr>
<td ><input class="btn submit" type="submit" value="Submit" name="registraion">
<input class="btn reset" type="reset" value="Reset"></td>
<td>
    
</td>
</tr>


                </table>

            </form>
            </body>
   
</html>