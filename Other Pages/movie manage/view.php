<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Movie Details</title>
    <style>

        body{
            background-color:black;
        }
        .movie-details{
            background-color:#f5f5f5;
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
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>Movie Details</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <div class="book-details p-5 my-4">
            <?php
            include("connect.php");
            $id = $_GET['id'];
            if ($id) {
                $sql = "SELECT * FROM movies WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                 ?>
                 <h3>name:</h3>
                 <p><?php echo $row["name"]; ?></p>
                 <h3>time:</h3>
                 <p><?php echo $row["time"]; ?></p>
                 <h3>type:</h3>
                 <p><?php echo $row["type"]; ?></p>
                 <h3>ratings:</h3>
                 <p><?php echo $row["ratings"]; ?></p>
                
                 <?php
                }
            }
            else{
                echo "<h3>No Movie found</h3>";
            }
            ?>
            
        </div>
    </div>
</body>
</html>