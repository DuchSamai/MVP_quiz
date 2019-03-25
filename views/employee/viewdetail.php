<div class="well col-md-12 well-sm">
<form class="form-horizontal" action="index.php?action=viewdetail&id= <?php echo $row['id']?>"  method="POST">
    <fieldset>

    <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" required value="<?php echo $row['username']?>"> 
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name" required value="<?php echo $row['name']?>">
                        </div>
                        
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required value="<?php echo $row['password']?>">
                        </div>
            
                        
                     
                            <button class="btn btn-primary" type="submit" name="btn-update">Update </button>
                            <button class="btn btn-danger float-right" type="reset" name="">Cancel </button>
                            
                        </div>
               
                    </form>