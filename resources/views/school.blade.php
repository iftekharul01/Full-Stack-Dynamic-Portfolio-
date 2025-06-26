@extends('index')
@push('style')
<title>Iftekharul Islam - School</title>
@endpush
@section('main-content')

<section class="hero-section">
    <img src="images/school-bg.png" alt="School Background" class="bg-image" />
    <div class="overlay-text">School</div>
  </section>

  <section class="content-section">
    <div class="school-card">
      <img src="images/mallika.jpg" alt="Mallika School" />
      <div>
        <h3>Mallika Kindergarten School, Barishal</h3>
        <p>I attended this school until second grade, starting from kindergarten.</p>
      </div>
    </div>

    <div class="school-card">
      <img src="images/zilla.jpg" alt="Barishal Zilla School" />
      <div>
        <h3>Barishal Zilla School, Barishal</h3>
        <p>I commenced my studies in <strong>third grade</strong> and successfully completed my
          <strong>Secondary School Certificate (SSC)</strong> from this esteemed institution.
        </p>
      </div>
    </div>

    <div class="result-section">
      <div class="result-card">
        <h4>PSC</h4>
        <p><strong>Institution:</strong> Barishal Zilla School, Barishal</p>
        <p><strong>Result:</strong> GPA 5.00</p>
        <p><strong>Board:</strong> Barishal</p>
        <p><strong>Passing Year:</strong> 2012</p>
      </div>
      <div class="result-card">
        <h4>JSC</h4>
        <p><strong>Institution:</strong> Barishal Zilla School, Barishal</p>
        <p><strong>Result:</strong> GPA 5.00</p>
        <p><strong>Board:</strong> Barishal</p>
        <p><strong>Passing Year:</strong> 2015</p>
      </div>
      <div class="result-card">
        <h4>SSC</h4>
        <p><strong>Institution:</strong> Barishal Zilla School, Barishal</p>
        <p><strong>Result:</strong> GPA 5.00</p>
        <p><strong>Board:</strong> Barishal</p>
        <p><strong>Passing Year:</strong> 2018</p>
      </div>
    </div>
  </section>
  @endsection