<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Add New Movie</title>

    <style>
        /* Style for the container */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
        }
        body{
            background-color:black;
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
            <h1>Add New Movie</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        
        <form action="process.php" method="post">
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="name" placeholder="Movie Name:">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="ratings" placeholder="IMDB Ratings:">
            </div>
            <div class="form-elemnt my-4">
                <select name="type" id="" class="form-control">
                    <option value="">Select Movie Type:</option>
                    <option value="Now Showing">Now Showing</option>
                    <option value="Comming Soon">Comming Soon</option>

                </select>
            </div>

            <div class="form-elemnt my-4">
                <select name="time" id="" class="form-control">
                    <option value="">Select Show Time:</option>
                    <option value="10.30 AM">10.30 AM</option>
                    <option value="2.30 PM">2.30 PM</option>
                    <option value="7.30 PM">7.30PM</option>

                </select>
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" value="Add Movie" class="btn btn-primary">
            </div>
        </form>
        
        
    </div>
</body>
</html>