<?php

   function m_get_data(){
       $query = "select*from user";
       include 'connection.php';
       $result = mysqli_query($dbconnect, $query);
       $rows = [];
       if(mysqli_num_rows($result) > 0){
           while ($get_result_to_array = mysqli_fetch_array($result, MYSQLI_ASSOC)){
               $rows[]= $get_result_to_array;
           }   
       }
        return $rows;
        // var_dump($rows);
    }

    function m_add_data(){

        include 'connection.php';
        
            $username = $_POST['username'];
            $name = $_POST['name'];
            $password = $_POST['password'];
           
            $query = "INSERT INTO user(username,name,password) VALUES ('$username','$name','" .md5('$password')."')";
            $result = mysqli_query($dbconnect, $query);
            
    
            if($result){
                header('location:index.php');   
                }else{
                  echo 'you cannot insert';
                }   
                return $result;   
            }


            
        

      
    function m_delete_employee(){
        include 'connection.php';
        $id = $_GET['id'];

        $query = "DELETE FROM user WHERE id = '$id'";
        $result = mysqli_query($dbconnect, $query);
        return $result;
        
    }
    
    function getupdateinfo_employee() {
        include "connection.php";
        $id =$_GET['id']; 
        $query = "SELECT * FROM user WHERE id ='$id'";
        $result = mysqli_query($dbconnect, $query);
        return $result;
        //var_dump($result);

    }

    function m_update_employee(){
        include 'connection.php';
        $id = $_GET['id'];
        $username = $_POST['username'];
            $name = $_POST['name'];
            $password = $_POST['password'];
         
         //$id = $_GET['id'];
         $query = "UPDATE user SET username='$username', name='$name', password='$password' WHERE id ='$id'";
         $result = mysqli_query($dbconnect, $query);
         return $result;
         //var_dump($result);

        
    //}



    }    


    function m_viewdetail_employee(){
        include 'connection.php';
        $id = $_GET['id'];
        // if(isset($_POST['btn-update'])){
         $firstname = $_POST['firstname'];
         $lastname = $_POST['lastname'];
         $age = $_POST['age'];
         $salary = $_POST['salary'];
         
         //$id = $_GET['id'];
         $query = "UPDATE employee SET firstname='$firstname', lastname='$lastname', age='$age', salary='$salary' WHERE id ='$id'";
         $result = mysqli_query($dbconnect, $query);
         return $result;
         //var_dump($result);

        
    //}



    }   
    
    function validate(){
    include "connection.php";
    $uname = mysqli_real_escape_string($dbconnect,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($dbconnect,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($dbconnect,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('location: index.php?action=view');
        }else{
            echo "Invalid username and password";
        }
        
    
    }

    }

    function validate_logout(){
        include "connection.php";
        session_destroy();
       header('Location: index.php');
        
    
    }


    function m_add_user(){

        include 'connection.php';
        
            $username = $_POST['username'];
            $name = $_POST['name'];
            $password = md5($_POST['password']);
           
            $query = "INSERT INTO user(username,name,password) VALUES ('$username','$name','" .md5('$password')."')";
            $result = mysqli_query($dbconnect, $query);
            
    
           
                return $result;   
            }

?>

