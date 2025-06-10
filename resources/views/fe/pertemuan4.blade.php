<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Equipment Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        .mostly-borrowed {
            background-color: #007bff;
            color: white;
            font-size: 6px;
            padding: 2px 6px;
            border-radius: 5px;
            position: absolute;
            top: 5px;
            left: 5px;
        }

        .card {
            position:relative;
            border-radius: 16px;
            overflow: auto;
        }

        .btn-book {
            display: block;
            width: fit-content;
            margin: 20px auto;
            padding: 2px 10px;
            font-size: 18px;
            border: 2px solid black;
            border-radius: 15px;
            text-decoration: none;
            color: black;
            box-shadow: 3px 3px 5px gray;
            font-weight: bold;
            letter-spacing: 1.5px;
        }

        .nav-item.active {
            color: #007bff;
            font-weight: bold;
        }

        .bottom-nav {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: white;
            padding: 10px 0;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }

        .card-text {
            font-size: 10px; /* Sesuaikan ukuran teks judul */
            font-weight: bold; /* Pastikan teks tetap bold */
        }

        .card-body small {
            font-size: 7px; /* Ukuran lebih kecil untuk tanggal */
            color: red; /* Warna tetap merah */
        }
    </style>
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-light bg-white shadow-sm px-3">
    <img src="{{asset('img/materials/logocekdong.png')}}" class="rounded-circle border border-dark p-1" width="50" height="50" alt="Logo CekDong">
</nav>

<!-- Equipment Section -->
<div class="container-fluid mt-3">
    <h4 class="fw-bold">Equipment</h4>
    <p>All list of goods, please tap the goods for start booking</p>

    <div class="row">
        <!-- Item 1 -->
        <div class="col-3 col-md-4 mb-3">
            <div class="card p-2">
                <span class="mostly-borrowed">Mostly Borrowed</span>
                <img src="{{asset('img/materials/Godox.png')}}" class="card-img-top" alt="Equipment">
                <div class="card-body p-2">
                    <p class="card-text fw-bold">Godox H160-B Lighting Kit</p>
                    <small class="text-danger"><i class="fas fa-circle"></i> 20 November 2024</small>
                </div>
            </div>
        </div>

        <!-- Item 2 -->
        <div class="col-3 col-md-4 mb-3">
            <div class="card p-2">
                <span class="mostly-borrowed">Mostly Borrowed</span>
                <img src="{{asset('img/materials/Nikon.png')}}" class="card-img-top" alt="Equipment">
                <div class="card-body p-2">
                    <p class="card-text fw-bold">Nikon AF 80-200mm</p>
                    <small class="text-danger"><i class="fas fa-circle"></i> 20 November 2024</small>
                </div>
            </div>
        </div>

        <!-- Item 3 -->
        <div class="col-3 col-md-4 mb-3">
            <div class="card p-2">
                <img src="{{ asset('img/materials/instax.png') }}"class="card-img-top" alt="Equipment">
                <div class="card-body p-2">
                    <p class="card-text fw-bold">Instax Mini 11</p>
                    <small class="text-danger"><i class="fas fa-circle"></i> 19 November 2024</small>
                </div>
            </div>
        </div>

        <!-- Item 4 -->
        <div class="col-3 col-md-4 mb-3">
            <div class="card p-2">
                <span class="mostly-borrowed">Mostly Borrowed</span>
                <img src="{{asset('img/materials/Canon.png')}}" class="card-img-top" alt="Equipment">
                <div class="card-body p-2">
                    <p class="card-text fw-bold">Canon EOS 80D</p>
                    <small class="text-danger"><i class="fas fa-circle"></i> 20 November 2024</small>
                </div>
            </div>
        </div>

        <!-- Item 5 -->
        <div class="col-3 col-md-4 mb-3">
            <div class="card p-2">
                <span class="mostly-borrowed">Mostly Borrowed</span>
                <img src="{{asset('img/materials/whitebg.jpg')}}" class="card-img-top" alt="Equipment">
                <div class="card-body p-2">
                    <p class="card-text fw-bold">White Backdrop kit</p>
                    <small class="text-danger"><i class="fas fa-circle"></i> 20 November 2024</small>
                </div>
            </div>
        </div>

        <!-- Item 6 -->
        <div class="col-3 col-md-4 mb-3">
            <div class="card p-2">
                <span class="mostly-borrowed">Mostly Borrowed</span>
                <img src="{{asset('img/materials/acckit.jpg')}}" class="card-img-top" alt="Equipment">
                <div class="card-body p-2">
                    <p class="card-text fw-bold">Studio Accessories kit</p>
                    <small class="text-danger"><i class="fas fa-circle"></i> 20 November 2024</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Book Now Button -->
    <a href="#" class="btn-book text-center">Book Now!</a>
</div>

<!-- Bottom Navigation -->
<div class="bottom-nav text-center">
    <div class="d-flex justify-content-around">
        <div class="nav-item">
            <i class="fas fa-user fa-lg"></i><br>
            <small>Profile</small>
        </div>
        <div class="nav-item">
            <i class="fas fa-th-large fa-lg"></i><br>
            <small>Menu</small>
        </div>
        <div class="nav-item">
            <i class="fas fa-history fa-lg"></i><br>
            <small>Riwayat</small>
        </div>
        <div class="nav-item active">
            <i class="fas fa-shopping-basket fa-lg"></i><br>
            <small>Equipment</small>
        </div>
    </div>
</div>

</body>
</html>
