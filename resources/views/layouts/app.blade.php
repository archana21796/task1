<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', env('APP_NAME'))</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            transition: background-color 0.3s, color 0.3s !important;
        }
        .dark-mode {
            background-color: #121212 !important;
            color: white !important;
        }
        .bg-food{
            background-image: url('/resources/images/food1.jpeg');
        }
    </style>
</head>

<body class="bg-light text-dark">

<!-- Header -->
<div class="container-fluid blog-head row p-3">
    <div class="col-9 text-danger">
        <h1>FoodBlog</h1>
        <strong>The foodies' choice</strong>
    </div>
    <div class="col-3 text-center">
        <button id="themeToggle" class="btn btn-light">
            <i class="fa-solid fa-moon p-2"></i>Dark Mode
        </button>
    </div>
</div>

<!-- Main Content -->
<div class="row fw-bold py-3">
    <div class="col-7 text-center">
        <p>From hearty lacto-vegetarian dishes to refreshing beverages and sweet treats,
            every recipe is designed to uplift your spirit and nourish your body. Explore a diverse array of delicious,
            health-conscious recipes inspired by the yogic lifestyle.</p>
    </div>
    <div class="col-5 bg-food p-5" style="background-image: url('{{ asset('images/food1.jpeg') }}'); background-repeat: no-repeat; background-size: contain; background-position: center; height:200px;"></div>

</div>

<!-- Read More Collapse -->
<div class="row p-3">
    <div class="col-5">
        <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample">
            Read More
        </button>
        <div class="collapse mt-2" id="collapseExample">
            <div class="card card-body">
                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (Without Integrity Issue) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<!-- Dark/Light Mode Toggle Script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const themeToggle = document.getElementById('themeToggle');
        const body = document.body;

        // Check saved theme preference
        if (localStorage.getItem('theme') === 'dark') {
            body.classList.add('dark-mode');
            themeToggle.classList.replace('btn-light', 'btn-dark');
            themeToggle.innerHTML = '<i class="fa-solid fa-sun p-2"></i> Light Mode';
        }

        themeToggle.addEventListener('click', () => {
            if (body.classList.contains('dark-mode')) {
                body.classList.remove('dark-mode');
                themeToggle.classList.replace('btn-dark', 'btn-light');
                themeToggle.innerHTML = '<i class="fa-solid fa-moon p-2"></i> Dark Mode';
                localStorage.setItem('theme', 'light');
            } else {
                body.classList.add('dark-mode');
                themeToggle.classList.replace('btn-light', 'btn-dark');
                themeToggle.innerHTML = '<i class="fa-solid fa-sun p-2"></i> Light Mode';
                localStorage.setItem('theme', 'dark');
            }
        });
    });
</script>

</body>
</html>
