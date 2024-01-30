<!doctype html>
<html>
<head>
   <title>PHP and For Loops</title> 
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <?php
        function getUsers(){
            $url = "https://jsonplaceholder.typicode.com/users";
            $data = file_get_contents($url);
            return json_decode($data, true);
        }
        $users = getUsers();

        //Loop through data
        for ($i = 0; $i < count ($users); $i ++)
        {
        echo 
        '<div class="col-md-4">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">' . $users[$i]['name'] . '</h5>
        <p class="card-text">' . $users[$i]['username'] . '</p>
        <a href="#">' . $users[$i]['email'] . '</a>
        <p class="card-text">' . $users[$i]['address']['street']['suite']['city']['zipcode'] . '</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>';
        }

        ?>
</div>
</div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>