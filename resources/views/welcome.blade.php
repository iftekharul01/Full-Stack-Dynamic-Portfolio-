<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iftekharul Islam - Portfolio</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">Iftekharul Islam</div>
            <ul class="nav-links">
                <li><a href="#">Profile</a></li>
                <li><a href="#">Skills</a></li>
                <li><a href="#">Goals</a></li>
                <li><a href="#">Parents</a></li>
                <li><a href="#">Achievements</a></li>
                <li><a href="#">Education</a></li>
                <li><a href="#">My Photography</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to My <br><span>Portfolio</span></h1>
        </div>
    </section>

    <div class="about">
    <h2>About Me</h2>
    <div class="about-content">
        <img class="avatar" id="avatar" src="{{asset('assets/images/a.jpg')}}" alt="My Photo">

        <div class="text">
            <h3>HEY!!</h3>
            <p id="name">I am Iftekharul Islam.</p>
            <p>Hight: 5'6"</p>
            <p>Weight: 60 Kg</p>
            <p>Religion: Islam.</p>
            <p>Marital status: Single.</p>
            <p>Blood group: A+</p>
            <p>Favorite color: Black, Indigo.</p>
            <p>Aim: I want to be a Data Scientist.</p>
            <p>My favorite hobby is cricket and online gaming & my passion is Photography and Traveling.</p>
            <p><strong>Present Address:</strong> Yunus Khan Scholar Garden-2, Daffodil International University, Ashulia, Savar, Dhaka, Bangladesh</p>
        </div>
    </div>
</div>
    <script>
        const imageUrl = "{{ asset('assets/images/b.jpg') }}";
    </script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
