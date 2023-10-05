<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/style.css'); }} ">
    <script src="https://kit.fontawesome.com/947ce277b0.js" crossorigin="anonymous"></script>
    <script src="{{URL::asset('javascript/script.js');}}"></script>
    <title>Dashboard - MyGarage</title>
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
        <div class="table-container">
            <h1>User Garage</h1>
            <form action="/dashboard/add">
                <button type="submit" class="add-button button">
                    <div class="button-container">
                        <i class="fa-solid fa-plus fa-1x"></i> Add Car
                    </div>
                </button>
            </form>
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Generation</th>
                        <th>Engine</th>
                        <th>Driver Wheel</th>
                        <th>Transmission Type</th>
                        <th>Body Type</th>
                        <th>Fuel Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cars as $car)
                    <tr>
                        <td class="image-table">
                            <img src="{{URL::asset('images/uploads'.$car->images)}}" class="thumbnail">
                        </td>
                        <td class="brand-table">
                            {{$car->brand}}
                        </td>
                        <td class="model-table">
                            {{$car->model}}
                        </td>
                        <td class="generation-table">
                            {{$car->generation}}
                        </td>
                        <td class="engine-table">
                            {{$car->engine}}
                        </td>
                        <td class="driverwheel-table">
                            {{$car->drivewheel}}
                        </td>
                        <td class="transmission-table">
                            {{$car->transmission}}
                        </td>
                        <td class="bodytype-table">
                            {{$car->bodytype}}
                        </td>
                        <td class="fueltype-table">
                            {{$car->fueltype}}
                        </td>
                        <td class="action-table">
                            <form action="/dashboard/{{$car->id}}/edit">
                                <button type="submit" value="Edit" class="edit-button button">
                                    <i class="fa-solid fa-edit"></i> Edit
                                </button>
                            </form>
                            <form action="/dashboard/{{$car->id}}/delete">
                                <button type="submit" value="Delete" class="delete-button button">
                                    <i class="fa-solid fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <p> © 2023 MyGarage. All Rights Reserved</p>
    </footer>
</body>

</html>