<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
  
  
  
</style>
</head>
<body>
  

   <div class="row">
      <div class="col-4"></div>
      
      <div class="col-4">
    <div class="card shadow-lg  ">
        <div class="card-body">
 
    <form method="post" action="index.php?action=c_employee_loging">
        <div id="div_login ">
            <h1>Login</h1>
            <div>
                <input type="text" class="form" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
             <button type="submit" name="but_submit" class="btn btn-info text-white">Login</button>
             <a   href="index.php?action=register" type="submit" name="but_submit" class="btn btn-warning text-white">Register</a>

                <!-- <input type="submit" value="Submit" name="but_submit" id="but_submit" class=" text-info"/>
                <input type="submit" value="Submit" name="but_submit" id="but_submit"  class=" text-danger" /> -->
                
            </div>
        </div>
    </form>
    </div>
    </div>
    </div>
    <div class="col-4"></div>
   
   </div>
</body>
</html>