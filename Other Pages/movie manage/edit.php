<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit Movie</title>

    <style>
                body{
            background-color:black;
        }
        /* Style for the container */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
        }

        /* Style for the header */
        header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        /* Style for the "Add New Movie" heading */
        h1 {
            font-size: 24px;
        }

        /* Style for the "Back" button */
        .btn-primary {
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        /* Style for the form elements */
        .form-element {
            margin-bottom: 20px;
        }

        /* Style for input fields and select boxes */
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>



</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Edit Movie</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM movies WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                     <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="name" placeholder="Movie Name:" value="<?php echo $row["name"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="ratings" placeholder="IMDB Ratings:" value="<?php echo $row["ratings"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <select name="type" id="" class="form-control">
                    <option value="">Select Movie Type:</option>
                    <option value="Now Showing" <?php if($row["type"]=="Now Showing"){echo "selected";} ?>>Now Showing</option>
                    <option value="Comming Soon" <?php if($row["type"]=="Now Showing"){echo "selected";} ?>>Comming Soon</option>

                </select>
            </div>

            <div class="form-elemnt my-4">
                <select name="time" id="" class="form-control">
                    <option value="">Select Show Time:</option>
                    <option value="10.30 AM" <?php if($row["time"]=="10.30 AM"){echo "selected";} ?>>10.30 AM</option>
                    <option value="2.30 PM" <?php if($row["time"]=="2.30 PM"){echo "selected";} ?>>2.30 PM</option>
                    <option value="7.30 PM" <?php if($row["time"]=="7.30 PM"){echo "selected";} ?>>7.30 PM</option>

                </select>
            </div>

            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Edit Movie" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>Movie Does Not Exist</h3>";
            }
            ?>
           
        </form>
        
        
    </div>
</body>
</html>