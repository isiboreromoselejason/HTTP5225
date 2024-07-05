<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>German population</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-4 mt-5 mb-5">All population</h1>
        </div>
      </div>
    </div>
  </div>

  <?php
      // Database connection parameters
      $servername = "your_server";
      $username = "your_username";
      $password = "your_password";
      $dbname = "your_database";

      $connect = mysqli_connect('localhost', 'root', 'root', 'places');

       // Check connection
      if (!$connect) {
          die("Connection Failed: " . mysqli_connect_error());
      }

      // SQL query
      $query = 'SELECT * FROM places';
      $places = mysqli_query($connect, $query);
      if (!$places) {
          die("Query Failed: " . mysqli_error($connect));
      }
  ?>

  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <?php
          while ($place = mysqli_fetch_assoc($places)) {
            // Output data of each row
            echo '<div class="col-md-4 col-sm-12 mt-5 mb-5">
                    <div class="card h-100">
                      <div class="card-body d-flex flex-column">
                        <h5 class="card-title">'.$place['city'].'</h5>
                        <p class="card-text">'.$place['population'].'</p>
                        <a href="details.php?id='.$place['capital'].'" class="btn btn-primary">ViewDetails</a>
                    </div>
                  </div>
                </div>';
          }
        ?>
      </div>
    </div>
</body>
</html>
