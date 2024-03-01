<?php 
include ("include/header.php");
?>

<h2 class="text-center"><strong>Create Tasks</strong></h2>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <form action="process.php" method="POST">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description">
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
                        <input type="date" class="form-control" id="due_date" name="due_date">
                    </div>

                    <div class="col-md-12 mb-3 text-center">
                        <button type="submit" class="btn btn-primary"  style="float: right;" name="insertButton">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
    margin-top: 50px;
}
</style>

<?php 
include ("include/footer.php");
?>