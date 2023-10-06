<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/style.css'); }} ">
    <script src="https://kit.fontawesome.com/947ce277b0.js" crossorigin="anonymous"></script>
    <script src="{{URL::asset('javascript/script.js');}}"></script>
    <title>Add Car Form - MyGarage</title>
</head>

<body>
    <header>
        <nav class="return-container">
            <a href="/dashboard"><i class="fa-solid fa-arrow-left fa-2x"></i></a>
            <h1 class="return-title">ADD NEW CAR</h1>
        </nav>
    </header>
    <main>
        <div class="main-container form-container">
            <form action="add" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="left-container">
                    <div class="input-container">
                        <label for="brand">Brand</label><br>
                        <input type="text" id="brand" name="brand" placeholder="Car brand" required><br>
                    </div>
                    <div class="input-container">
                        <label for="model">Model</label><br>
                        <input type="text" id="model" name="model" placeholder="Car model" required><br>
                    </div>
                    <div class="input-container">
                        <label for="year">Year</label><br>
                        <input type="number" id="year" name="year" min="1886" max="2023" placeholder="Year of production" required><br>
                    </div>
                    <div class="input-container">
                        <label for="generation">Generation</label><br>
                        <input type="text" id="generation" name="generation" placeholder="Car generation" required><br>
                    </div>
                    <div class="input-container">
                        <label for="engine">Engine</label><br>
                        <input type="text" id="engine" name="engine" placeholder="Car engine" required><br>
                    </div>
                    <div class="input-container">
                        <label for="transmission">Transmission</label><br>
                        <select id="transmission" name="transmission" required>
                            <option value="" selected disabled hidden></option>
                            <option value="Manual">Manual</option>
                            <option value="Automatic">Automatic</option>
                            <option value="Continuously Variable">Continuously Variable</option>
                            <option value="Semi-automatic">Semi-automatic</option>
                            <option value="Dual Clutch">Dual Clutch</option>
                        </select><br>
                    </div>
                    <div class="input-container">
                        <label for="bodytype">Bodytype</label><br>
                        <select id="bodytype" name="bodytype" required>
                            <option value="" selected disabled hidden></option>
                            <option value="Off-road vehicle">Off-road vehicle</option>
                            <option value="Cabriolet">Cabriolet</option>
                            <option value="Coupe">Coupe</option>
                            <option value="Minivan">Minivan</option>
                            <option value="Pick-up">Pick-up</option>
                            <option value="Sedan">Sedan</option>
                            <option value="Station Wagon (estate)">Station Wagon (estate)</option>
                            <option value="Hatchback">Hatchback</option>
                            <option value="SUV">SUV</option>
                            <option value="Crossover">Crossover</option>
                            <option value="MPV">MPV</option>
                            <option value="Coupe - Cabriolet">Coupe - Cabriolet</option>
                            <option value="SAV">SAV</option>
                            <option value="CUV">CUV</option>
                            <option value="Targa">Targa</option>
                            <option value="Roadster">Roadster</option>
                            <option value="Grand Tourer">Grand Tourer</option>
                            <option value="Fastback">Fastback</option>
                            <option value="Liftback">Liftback</option>
                            <option value="SAC">SAC</option>
                            <option value="Quadricycle">Quadricycle</option>
                        </select><br>
                    </div>
                    <div class="input-container">
                        <label for="fueltype">Fueltype</label><br>
                        <select id="fueltype" name="fueltype" required>
                            <option value="" selected disabled hidden></option>
                            <option value="Petrol (Gasoline)">Petrol (Gasoline)</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Electricity">Electricity</option>
                            <option value="Hydrogen">Hydrogen</option>
                            <option value="LPG">LPG</option>
                            <option value="Ethanol - E85">Ethanol - E85</option>
                            <option value="Petrol / LPG">Petrol / LPG</option>
                            <option value="Petrol / CNG">Petrol / CNG</option>
                            <option value="Petrol / Electricity">Petrol / Electricity</option>
                            <option value="Diesel / Electricity">Diesel / Electricity</option>
                            <option value="Petrol / Ethanol">Petrol / Ethanol - E85</option>
                            <option value="Petrol / Ethanol / Electricity">Petrol / Ethanol - E85 / Electricity</option>
                            <option value="Hydrogen / Electricity">Hydrogen / Electricity</option>
                        </select><br>
                    </div>
                    <div class="input-container">
                        <label for="driverwheel">Driver Wheel</label><br>
                        <select id="driverwheel" name="drivewheel" required>
                            <option value="" selected disabled hidden></option>
                            <option value="Rear wheel drive">Rear wheel drive</option>
                            <option value="Front wheel drive">Front wheel drive</option>
                            <option value="All wheel drive (4x4)">All wheel drive (4x4)</option>
                        </select><br>
                    </div>
                </div>
                <div class="right-container">
                    <div class="preview-container input-container">
                        <label for="images">Images</label><br>
                        <img src="{{asset('images/assets/unavailable-image.jpg')}}" class="image-preview" id="output"><br>
                        <input type="file" id="images input" name="images" accept="image/png, image/jpg, image/jpeg" onchange="loadFile(event)" required>
                    </div>
                    <div class="input-button">
                        <button type="submit" class="submit-button button">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>