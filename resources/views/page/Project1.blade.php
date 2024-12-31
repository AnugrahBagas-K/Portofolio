@extends('layouts.main')
@section('content')
    <section id="Project1" class="about section">

      <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <p><span class="description-title">Bike Rent Data Analysis</span></p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
                    <div class="content ps-0 ps-lg-5">
                        <h3><span class="description-title">Tujuan Analisis Data</span></h3>
                    </div>
                </div>
            <div>
            <div class="row gy-4">
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="250">
                    <div class="content ps-0 ps-lg-5">
                        <p>
                            Proses penyewaan berbagi sepeda sangat berkorelasi dengan lingkungan dan pengaturan musiman. Misalnya, kondisi cuaca,
                            curah hujan, hari dalam seminggu, musim, jam dalam sehari, dll dapat mempengaruhi perilaku sewa. Kumpulan data inti terkait dengan  
                            log historis dua tahun yang sesuai dengan tahun 2011 dan 2012 dari sistem Capital Bikeshare, Washington DC, AS. Kami mengumpulkan data secara dua jam dan setiap hari, lalu 
                            mengekstraksi dan menambahkan informasi cuaca dan musiman yang sesuai. Proses analisis data yang dilakukan diharapkan dapat menjawab pertanyaan bisnis berikut :
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Bagaimana Pengaruh Musim Terhadap Total Peminjaman Sepeda Untuk Setiap Tahunnya ?</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Bagaimana Pola Peminjaman Sepeda Untuk Setiap Bulan dan Tahun ?</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Bagaimana Perilaku Pelanggan Dalam Melakukan Penyewaan Sepeda Berdasarkan Jam Untuk Setiap Tahunnya ?</span></li>
                        </ul>
                    </div>                    
                </div>
            </div>
            <br>
            <div class="row gy-4">
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
                    <div class="content ps-0 ps-lg-5">
                        <h3><span class="description-title">Gathering Data</span></h3>
                    </div>
                </div>
            <div>
            <div class="row gy-4">
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="250">
                    <div class="content ps-0 ps-lg-5">
                        <p>
                            Gathering data merupakan proses awal pada tahap data wrangling yaitu mengumpulkan seluruh data yang dibutuhkan untuk menjawab semua pertanyaan atau masalah bisnis yang ingin kita hadapai. Terdapat beberapa sumber data yang dapat digunakan oleh praktisi data yang bersifat publik, diantaranya : 
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Kaggle</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>UCI Machine Learning</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Google Dataset Search</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Satu Data Indonesia</span></li>
                        </ul>
                        <p>
                        Untuk membaca dataset tersebut menggunakan library pandas untuk memanipulasi dan menganalisis data.
                            Terdapat dua dataset yang disediakan untuk proses analisis data peminjaman sepeda yaitu :
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Day : Data Peminjaman Sepeda Berdasarkan Hari</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Hour : Data Peminjaman Sepeda Berdasarkan Jam</span></li>
                        </ul>
                    </div>                    
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                    <img src="assets/img/Project1-1.png" class="img-fluid mb-4" alt="">                    
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                    <img src="assets/img/Project1-2.png" class="img-fluid mb-4" alt="">
                </div>
            </div>
            <br>
            <div class="row gy-4">
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
                    <div class="content ps-0 ps-lg-5">
                        <h3><span class="description-title">Assessing Data</span></h3>
                    </div>
                </div>
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="250">
                    <div class="content ps-0 ps-lg-5">
                        <p>
                            Assessing data merupakan proses yang bertujuan untuk mengidentifikasi masalah yang terdapat dalam data untuk memastikan data berkualitas. Beberapa masalah umum yang kerap dijumpai dalam sebuah data diantaranya :
                                
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Missing Value</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Invalid Value</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Duplicate Data</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Inacurate Value</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Inconsistent Value</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Outlier</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
                    <div class="content ps-0 ps-lg-5">
                        <h3><span class="description-title">Cleaning Data</span></h3>
                    </div>
                </div>
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
            <div class="row gy-4">
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
                    <div class="content ps-0 ps-lg-5">
                        <h3><span class="description-title">Explore Bike Rent Patterns for 2 Months fir 2 Years</span></h3>
                    </div>
                </div>
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
            <div class="row gy-4">
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
                    <div class="content ps-0 ps-lg-5">
                        <h3><span class="description-title">Explore Total Bike Rent by Season for Each Year</span></h3>
                    </div>
                </div>
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
@endsection