
 
<main class="container">
<div class="card bg-dark shadow-lg">
                <div class="card-header text-center">Information Form</div>
                <div class="card-body">
                   
                <?php 
                foreach( $data['data_update'] as $row){
                ?>
<form action="index.php?action=update_info&id=<?php echo $row['id']?>" method="POST">
                           
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
                <?php 
                  }
                ?>
                    </form>
                    
                </div>
            </div> 
</main>
