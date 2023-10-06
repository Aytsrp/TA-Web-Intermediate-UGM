<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/style.css'); }} ">
    <script src="https://kit.fontawesome.com/947ce277b0.js" crossorigin="anonymous"></script>
    <script src="{{URL::asset('javascript/script.js');}}"></script>
    <title>Homepage - MyGarage</title>
</head>
<body>
    <header class="header">
        <nav class="navigation-container sticky">
            <a href="/home">My Garage</a>
            <a href="/dashboard">Dashboard</a>
            <a href="#">Profile</a>
        </nav>
    </header>
    <main class="main">
        <div class="main-container">
            <div class="card-container">
                @foreach($cars as $car)
                    <div class="card">
                        <div class="image-container">
                            <img src="{{asset('images/uploads/'.$car->images);}}" class="thumbnail curve-top" loading="lazy">
                        </div>
                        <div class="text-container">
                            <h1 class="text-title">{{$car->brand}}</h1>
                            <h3 class="text-subtitle">{{$car->model}}</h3>
                            <p class="text-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga dolorum autem unde veritatis magnam quod, laboriosam earum ipsam consequuntur laudantium cum veniam sapiente tempore vero facilis obcaecati non quia provident! Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, repellendus. Unde, magnam quibusdam? Quia eaque voluptates beatae adipisci accusantium ducimus quo, quod qui fugit iste nam laudantium est eveniet! Dolor.</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> 
    </main>
    <footer>
        <p> © 2023 MyGarage. All Rights Reserved</p>
    </footer>
</body>
</html>