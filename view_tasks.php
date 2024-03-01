<?php
    session_start();
    include("config.php");

      
        if(isset($_GET['id'])) {
            $id = $_GET['id'];

     
            $query = "SELECT * FROM `tasks` WHERE `id` = $id";
            $query_run = mysqli_query($con, $query);

            if(mysqli_num_rows($query_run) > 0) {
                $row = mysqli_fetch_assoc($query_run);
               
                ?>
                <h1>Tasks Information</h1>
                <a type="button" class="btn btn-outline-primary" href="index.php">Go Back</a>
                <ul>
                <p><strong>ID</strong><br><br><?php echo $row['id']; ?></p>
                <p><strong>Title</strong><br><br><?php echo $row['title']; ?></p>
                <p><strong>Description</strong><br><br><?php echo $row['description']; ?></p>
                <p><strong>Priority</strong><br><br><?php echo $row['priority']; ?></p>
                <p><strong>Due Date</strong><br><br><?php echo $row['due_date']; ?></p>
                </ul>
                
              
                <?php
            } else {
                echo "Task not found.";
                header("Location: index.php? msg=Successfully Deleted");
            }
        } else {
            echo "Invalid ID.";
        }
        ?>
    </div>

    <style>
         body{
    background-color: #f1f1f1;
    
  
 
  }
        h1{
            margin-top: 90px;  
            text-align: center;
            font-size: 50px;
        }

        p{
            text-align: center;
            line-height: 40px;
            margin-right: 90px;
            font-size: 30px;
        }

        ul {
            text-align: center;
            display: flex;
            margin-left: 25%;         
        }

        a{
            background-color: blue;
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-decoration: none;
            margin-left: 75%;
            font-size: 15px;
           

            
        }
        
    </style>

