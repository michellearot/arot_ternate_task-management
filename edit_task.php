<?php 
include ("include/header.php");
?>

<h2 class="text-center">Edit Tasks</h2>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-9">

        <?php
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $users = "SELECT * FROM `tasks` WHERE `id` = '$id'";
            $users_run = mysqli_query($con, $users);
        
            if(mysqli_num_rows($users_run) > 0) {
                foreach($users_run as $user) {
               
                }
            }
                ?>

            <form action="process.php" method="POST">

            <input type="hidden" name="id" value="<?=$user['id'];?>">

            <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" value="<?=$user['title'];?>" name="title">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="<?=$user['description'];?>">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="priority" class="form-label">Priority</label>
                        <select class="form-select" id="priority" name="priority">
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="due_date" class="form-label">Due Date</label>
                        <input type="text" class="form-control" id="due_date" name="due_date" value="<?=$user['due_date'];?>">
                    </div>

                
                    <div class="col-md-12 mb-3 text-center">
                        <button type="submit" class="btn btn-primary"  style="float: right;" name="updateButton">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
    }
     else {
     ?>
    <h4>No Record Found!</h4>
    <?php
    }
                
        
?>
</div>

<style>

body{
    background-color: #f1f1f1;
    
  }
  
h2{
    margin-top: 50px;
}
</style>

<?php 
include ("include/footer.php");
?>