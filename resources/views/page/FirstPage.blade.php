@extends('layouts.main')
@section('content')
    <!-- PAGE PERTAMA -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Hi, I'am Anugrah Bagas Kurniawan</h1>
            <p data-aos="fade-up" data-aos-delay="100">I am a Bachelor of Information Systems graduate from Telkom University</p>
            <a class="btn btn-danger" href="#Project" role="button">See My Project</a>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/Photo_Profile.jpeg" class="img-fluid animated rounded-circle" alt="">
          </div>
        </div>
      </div>

    </section>
    <!-- PAGE PERTAMA -->
    <section id="AboutMe" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p><span class="description-title">About Me</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p>
                I am an information systems graduate from telkom university with a focus on data analysis using python to generate information from data analysis results. In addition, I focus on designing business strategies and information technology with an enterprise architecture approach using the TOGAF ADM framework to align business needs with technology solutions. 
                During my studies, I actively participated in various academic and non-academic activities including:
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Staff of Public Relation for Public Lecture</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Chief Executive for Public Lecture</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Event Coordinator for Information System Major Annual Birthday Event</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Practicum Assistant for Enterprise Architecture Course</span></li>
              </ul>
            </div>
          </div>
        </div>

      </div>

    </section>

    <section id="Project" class="why-us section light-background">
      <div class="container section-title" data-aos="fade-up">
        <p><span>Project</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

              <div class="col-xl-6">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Bike Rent Data Analysis</h4>
                  <p>Bike Sharing is a dataset that contains bicycle lending data with various features. The purpose of data analysis on this project is to find out the pattern of bicycle rental every year, analyze the influence of the season on bicycle rental, and many more.</p>
                  <a class="btn btn-outline-danger" href="https://github.com/AnugrahBagas-K/Bike-Sharing-Data-Analysis" role="button">See More</a>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>E-Commerce Data Analysis</h4>
                  <p>The goal of this project is to analyze the e-commerce dataset to find out the highest and lowest product purchases, to know the overall sales pattern, and to find out the effect of the average delivery time on the review score given by customers.</p>
                  <a class="btn btn-outline-danger" href="https://github.com/AnugrahBagas-K/E-Commerce-Data-Analysis" role="button">See More</a>
                </div>
              </div><!-- End Icon Box -->

              <!--
              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Labore consequatur incidid dolore</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
              </div> End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="Certification" class="chefs section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p><span class="description-title">Certification<br></span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 d-flex align-items-stretch" style="min: height 100px;" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member card d-flex flex-column justify-content-between h-100">
              <div class="member-img">
                <img src="assets/img/DataAnalyst.png" class="card-img-top img-fluid" alt="">
              </div>
              <div class="member-info card-body d-flex flex-column justify-content-between">
                <h4>Belajar Analisis Data Dengan Python</h4>
                <span>Dicoding</span>
                <p class="flex-grow-1">This class is intended for individuals who want to understand the data analysis process as one of the skills to become a reliable data practitioner. At the end of the class, students can run through various stages in data analysis to answer business challenges using the Python programming language.</p>
                <a class="btn btn-outline-danger mt-auto align-self-center" href="https://www.dicoding.com/certificates/07Z64YO0YPQR" role="button">See More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-flex align-items-stretch" style="min: height 100px;" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member card d-flex flex-column justify-content-between h-100">
              <div class="member-img">
                <img src="assets/img/SQL.png" class="card-img-top img-fluid" alt="">
              </div>
              <div class="member-info card-body d-flex flex-column justify-content-between">
                <h4>Belajar Dasar Structured Query Language</h4>
                <span>Dicoding</span>
                <p class="flex-grow-1">This class is intended for individuals who want to become a data analyst or data scientist by learning the Structured Query Language (SQL) language. At the end of the class, students can master various basic queries that are often used in managing data using structured query language (SQL). </p>
                <a class="btn btn-outline-danger mt-auto align-self-center" href="https://www.dicoding.com/certificates/MRZMYRJ63ZYQ" role="button">See More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-flex align-items-stretch" style="min: height 100px;" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member card d-flex flex-column justify-content-between h-100">
              <div class="member-img">
                <img src="assets/img/EA2.png" class="card-img-top img-fluid" alt="">
              </div>
              <div class="member-info card-body d-flex flex-column justify-content-between">
                <h4>Enterprise Architect</h4>
                <span>Badan Nasional Sertifikasi Profesi</span>
                <p class="flex-grow-1">Enterprise Architect is tasked with designing enterprise architecture as a plan for an organization to carry out technological transformation which includes aspects of business, information systems, and technology.</p>
                <a class="btn btn-outline-danger mt-auto align-self-center" href="https://drive.google.com/file/d/1NL3FRV6Onwjijq_fa02F_Pzb3WFvgVM8/view?usp=sharing" role="button">See More</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>
@endsection