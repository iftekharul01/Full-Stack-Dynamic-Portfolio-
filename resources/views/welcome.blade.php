@extends('index')
@push('style')
<title>Iftekharul Islam - Portfolio</title>
@endpush
@section('main-content')
    
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
@endsection