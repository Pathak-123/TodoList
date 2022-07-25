<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>ToDo List App!</title>
  </head>
  <body style="background-color:#cbe3ee">
    
    <h1 class="text-center py-4 my-4">ToDo List App</h1>

    <div class="w-50 m-auto">
    <form action="data.php" method="post" autocomplete="off">
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" placeholder="Add item" Required>

        </div><br>
        <button class="btn btn-success">Add </button>

    </form>

    </div><br>
    <hr class="bg-dark w-50 m-auto">
    <div class="lists w-50 m-auto my-4">
        <h1>Your items</h1>
        <div id="lists">
        <table class="table table-dark table-hover">
  <thead>
    <tr>
     <!-- <th scope="col" name="id">S.no</th> -->
      <th scope="col">Items</th>
    <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
        include 'database.php';
        $sql="SELECT * FROM todos where status='0'";
        $result=mysqli_query($conn, $sql);

        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $title=$row['Title'];
               


                ?>
                <tr>
                    
                    <td><?php echo $title  ?></td>
                    <td>
                    <a class="btn btn-success btn-sm" href="edit.php?id=<?php echo $id ?>" role="button"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $id ?>" role="button"><i class="fa-solid fa-trash-can"></i></a>
 
                    </td>
                      
                </tr>

                <?php

                
            }
        }
    ?>
    
   
  </tbody>
</table>
        </div>
    </div>

    
      <!--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
      <script src="https://kit.fontawesome.com/d8ead51cf8.js" crossorigin="anonymous"></script>

   
  </body>
</html>