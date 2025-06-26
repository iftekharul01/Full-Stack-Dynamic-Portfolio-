@extends('index')
@push('style')
<title>Iftekharul Islam - College</title>
@endpush
@section('main-content')

<section class="hero-section">
    <img src="images/school-bg.png" alt="School Background" class="bg-image" />
    <div class="overlay-text">College</div>
  </section>

  <section class="content-section">
    <div class="school-card">
      <img src="images/college.jpg" alt="Govt. Syed Hatem Ali College" />
      <div>
        <h3>Govt. Syed Hatem Ali College, Barishal</h3>
        <p>I have completed my Higher Secondary Certificate (HSC) from this esteemed institution.</p>
      </div>
    </div>

    <div class="result-section">
      <div class="result-card">
        <h4>HSC</h4>
        <p><strong>Institution:</strong> Govt. Syed Hatem Ali College, Barishal</p>
        <p><strong>Result:</strong> GPA 5.00</p>
        <p><strong>Board:</strong> Barishal</p>
        <p><strong>Passing Year:</strong> 2020</p>
      </div>
    </div>
  </section>
  @endsection