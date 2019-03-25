
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    



<div id="users">

    <div class="col-md-12">
        <div class="pull-left">
            <input class="search" placeholder="Search" />
        </div>

        <div class="pull-right">
            <a href="index.php?action=add"><i class="glyphicon glyphicon-plus-sign" style="font-size:20px;"></i></a> &nbsp;
        </div>
       
    </div>
    <form action="employee.php" method="POST">
        <table class="table-bordered col-md-12">
            <th class="sort text-center">ID</th>
            <th class="sort text-center" data-sort="fname">Username</th>
            <th class="sort text-center" data-sort="age">name</th>
            <th class="sort text-center" data-sort="salary">passwork</th>
            
            <th class="sort text-center">Action</th>
            <!-- IMPORTANT, class="list" have to be at tbody -->
            <tbody class="list">
                  <?php 

                    if($data['employee_data'] !=""){
                         $i = 1;
                         foreach($data['employee_data'] as $row){

                             ?>
                             <tr>
                                  <td class="id text-center"><?php echo $i;?></td>
                                  <td class="name text-center"><?php echo $row['username'];?></td>
                                  <td class="age text-center"><?php echo $row['name'];?></td>
                                  <td class="salary text-center"><?php echo $row['password'];?></td>
                             
                                  <td class="Icon text-center">
                                  <a href="index.php?action=viewdetail&id=<?php echo $row['id']?>"><i class="glyphicon glyphicon-eye-open text-center" style="color:green;"></i></a> &nbsp;
                                  <a href="index.php?action=update&id=<?php echo $row['id']?>"><i class="glyphicon glyphicon-edit" style="color:blue;"></i></a>&nbsp;
                                  <a href="index.php?action=delete&id=<?php echo $row['id']?>" onclick="return confirm('Are you sure to delete it?')"s><i class="glyphicon glyphicon-trash" style="color:red;"></i></a> 
                                  </td>
                             </tr>
                              <?php 
                              $i++;
                         }

                         }else{
                             echo "<tr><td coslspan='6> No record found..!</td></tr>";
                         }
                         
                    ?>
           </tbody>
        </table>
    </form>
</div>

<script>
    var options = {
        valueNames: ['id', 'fname', 'age', 'salary']
    };

    var userList = new List('users', options);
</script>

</body>
</html>