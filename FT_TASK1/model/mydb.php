<?php
class db{

    function openConn(){
        $dbservername="localhost";
        $dbfname="root";
        $password="";
        $dbname="labtask";
        $conn= new mysqli($dbservername, $dbfname,$password,$dbname);
        if($conn->connect_error)
        {
            echo "can't create con obj";
        }
        return $conn;
    }   

    function login($conn,$table,$fname,$password){
        $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
        return $result;
    }
    function CheckUser($conn,$table,$fname, $lname, $age, $designation, $planguage, $email, $password, $picture)
    {
        $sqlQuery = "INSERT INTO $table (fname, lname, age, password, designation, planguage, email, picture) VALUES ('$fname', '$lname', '$age', '$password', '$designation', '$planguage', '$email', '$picture')";
        $result = $conn->query($sqlQuery);
        return $result;
        
   

    }
    function showAll($conn){
        $sqlQuery="SELECT * FROM employee";
        $result = $conn->query($sqlQuery);
        return $result;
    }
    
    function closeConnection($conn)
            {
                $conn -> close();
            }
}



    

        
?>