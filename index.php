<?php
include ("include/header.php");
?>

 <div class="container-fluid mt-4">
 <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
             <h2 class="text-center"> <strong>Tasks Management</strong></h2>

              <a href="create_task.php" style="float: right;" class="btn btn-primary">Add Tasks</a>


              <table class="table datatable">
                <thead>
                  <tr>
                    <th class="col">ID</th>
                    <th class="col">Title</th>
                    <th class="col">Description</th>
                    <th class="col">Priority</th>
                    <th class="col">Due Date</th>
                    
                  </tr>
                </thead>
                <tbody>


                <?php
                $query = "SELECT * FROM `tasks`";
                $query_run = mysqli_query($con, $query);
                if(mysqli_num_rows($query_run) > 0)
                {
                foreach($query_run as $row)
                {
                ?>
                    <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['title']; ?></td>
                <td><?= $row['description']; ?></td>
                <td><?= $row['priority']; ?></td>
                <td><?= $row['due_date']; ?></td>

                <td>

                <a type="button" class="btn btn-outline-primary" href="view_tasks.php?id=<?=$row['id'];?>">VIEW</a><a type="button" class="btn btn-outline-warning" href="edit_task.php?id=<?=$row['id'];?>">UPDATE</a>
                
                

                <form action="delete_task.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                <button type="submit" class="btn btn-outline-danger">DELETE</button>
                </form>
              </td>
                    </tr>

                    <?php
                } 
                } else
                {
                ?>
                <tr>
                <td colspan="6">No such Task</td>
                </tr>
                <?php
                }
                ?>

                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
 </div>
 
 <style>
  body{
    background-color: #f1f1f1;
    
  }

  .container-fluid {
  background: #f1f1f1;
  padding-left: 25%;
  padding-top: 5%;
 
  }
   

h2{
    margin-top: 40px;

    
}

</style>

 <?php 
include ("include/footer.php");
?>