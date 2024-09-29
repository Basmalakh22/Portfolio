@extends('layouts.dashoard')

@section('content')
<main class="main">

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Sumary</h3>

            <div class="resume-item pb-0">
              <h4>Basmala Khaled</h4>
              <p><em>I am a passionate Backend Developer specializing in PHP and the Laravel framework. With hands-on experience in building scalable applications, I have a strong focus on clean code, performance, and security.</em></p>
              <ul>
                <li>Mansoura ,Egypt</li>
                <li>basmalakha772@gmail.com</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Bachelor of Science in Computer Science</h4>
              <h5>2020 - 20224</h5>
              <p>Graduation Project: Waste-to-Energy Conversion System, Received Excellent Grad ,Finalist in multiple tech competitions.</p>
            </div><!-- Edn Resume Item -->



          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Team Leader | Graduation Project</h4>
              <h5>2024</h5>
              <ul>
                <li>Managed a multidisciplinary team to create an innovative waste-to-energy device.</li>
                <li>Oversaw project deadlines, resource management, and task assignments. </li>
                <li>Played a major role in backend architecture and API development. </li>
              </ul>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>Junior Backend Developer | Freelance</h4>
              <h5>June 2024 – Present</h5>
              <ul>
                <li>Designed and developed multiple web applications using PHP and Laravel.</li>
                <li>Collaborated with frontend developers to integrate APIs and ensure seamless user experiences.</li>
                <li>Optimized database queries and reduced API response times by 30%.</li>
                <li>Developed and maintained reusable, testable, and efficient code.</li>
              </ul>
            </div><!-- Edn Resume Item -->

          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

  </main>
@endsection
