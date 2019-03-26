<!DOCTYPE html>
<html>
   <title>PHP MySQL MVC</title>
   <script src="views/jquery-1.9.1.js" ></script>
   <script src="views/list.js" ></script>
   <script src="views/bootstrap-3.3.7/js/bootstrap.min.js"></script>
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
   <link href="views/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
   <link href="views/style.css" rel="stylesheet" type="text/css" media="all">
   
</head>

<body data-gr-c-s-loaded="true">
    <div class="container">
    <div class="control float-left">
             
             <a href="index.php?action=login" class="btn btn-gray">Sign Out</a>
             <legend class="header">
                <h3 class="pull">User Manager</h3>
      
             </legend>
            

     </div>
             
         <?php
            include "views/" . $data['page'] . ".php";
            // include "views/employee/view.php";
         ?> 
     </div> 

</body>
</html>
