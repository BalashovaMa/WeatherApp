<?php 
    if(isset($_GET['city'])) {
        $urlContent = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q=London&appid=24079dfe2fa15a31fd23b31138cb89f7');
        $forcastArray = json_decode($urlContent, true);
        print_r($forcastArray);
       
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div class="container" id='mainDiv'>
        <h1>Weather In Your City</h1>
        <form>
            <div class="mb-3">
                <label for="city" class="form-label">Input a city name</label>
                <input class="form-control" id="city" aria-describedby="Forcast city" placeholder="Enter city name" name='city'>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>