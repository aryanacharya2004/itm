<?php include 'includes/header.php'; ?>

<!-- Hero Section with Image Slider -->
<section id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/images/image2.jpeg" class="d-block w-100 fixed-height" alt="Image 1">
        </div>
        <div class="carousel-item">
            <img src="assets/images/image8.jpeg" class="d-block w-100 fixed-height" alt="Image 2">
        </div>
        <div class="carousel-item">
            <img src="assets/images/image9.jpeg" class="d-block w-100 fixed-height" alt="Image 3">
        </div>
        <div class="carousel-item">
            <img src="assets/images/image11.jpeg" class="d-block w-100 fixed-height" alt="Image 4">
        </div>
        <div class="carousel-item">
            <img src="assets/images/image13.jpeg" class="d-block w-100 fixed-height" alt="Image 5">
        </div>
        <div class="carousel-item">
            <img src="assets/images/image15.jpeg" class="d-block w-100 fixed-height" alt="Image 6">
        </div>
        <div class="carousel-item">
            <img src="assets/images/image19.jpeg" class="d-block w-100 fixed-height" alt="Image 7">
        </div>
        <div class="carousel-item">
            <img src="assets/images/image20.jpeg" class="d-block w-100 fixed-height" alt="Image 8">
        </div>
        <div class="carousel-item">
            <img src="assets/images/image23.jpeg" class="d-block w-100 fixed-height" alt="Image 9">
        </div>
        <div class="carousel-item">
            <img src="assets/images/image41.jpeg" class="d-block w-100 fixed-height" alt="Image 10">
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon visually-hidden" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon visually-hidden" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</section>


<!-- Affiliation, Vision, Mission Section -->
<section>
    <div class="container">
        <div class="row">
            <!-- Single Row Layout -->

            <!-- Affiliation Card -->
            <div class="col-md-4 mb-4">
                <div class="card h-100"
                    style="border: none; border-radius: 12px; box-shadow: 0 4px 12px rgba(0, 98, 255, 0.1);">
                    <div class="card-body p-4 text-center">
                        <div
                            style="background: #0062ff; width: 60px; height: 60px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 15px;">
                            <i class="fas fa-building fa-lg text-white"></i>
                        </div>
                        <h3 class="card-title" style="color: #2d3748;">Affiliation</h3>
                        <p class="card-text" style="color: #4a5568; line-height: 1.6;">
                            The institution is affiliated with Dr. A.P.J Abdul Kalam Technical University (AKTU),
                            Lucknow and Pharmacy Council of India (PCI) and Board of Technical Education (BTE).
                        </p>
                    </div>
                </div>
            </div>

            <!-- Vision Card -->
            <div class="col-md-4 mb-4">
                <div class="card h-100"
                    style="border: none; border-radius: 12px; box-shadow: 0 4px 12px rgba(255, 65, 108, 0.1);">
                    <div class="card-body p-4 text-center">
                        <div
                            style="background: #ff416c; width: 60px; height: 60px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 15px;">
                            <i class="fas fa-eye fa-lg text-white"></i>
                        </div>
                        <h3 class="card-title" style="color: #2d3748;">Vision</h3>
                        <p class="card-text" style="color: #4a5568; line-height: 1.6;">
                            ITM, Maharajganj is committed to quality education and to bring out quality Technocrats with
                            high caliber. Man Making and Nation Building and bringing the aspirants of this area who are
                            poor but have potential, to the main stream of the nation, is our ultimate goal.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Mission Card -->
            <div class="col-md-4 mb-4">
                <div class="card h-100"
                    style="border: none; border-radius: 12px; box-shadow: 0 4px 12px rgba(41, 204, 151, 0.1);">
                    <div class="card-body p-4 text-center">
                        <div
                            style="background: #29cc97; width: 60px; height: 60px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 15px;">
                            <i class="fas fa-bullseye fa-lg text-white"></i>
                        </div>
                        <h3 class="card-title" style="color: #2d3748;">Mission</h3>
                        <p class="card-text" style="color: #4a5568; line-height: 1.6;">
                            To transform the institution into one of the leading institution and centers of excellence
                            and into high caliber having technical competency of higher accepted level with high
                            professional ethics, moral and human values and responsive to nation needs in this backward
                            part of the country.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .h-100 {
        height: 100%;
    }
</style>
<!-- About Section -->
<section id="about_h" class="py-5 bg-light" style="background-color: rgba(233, 197, 188, 0.88);">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Image -->
            <div class="col-md-4 text-center">
                <img src="assets/images/image11.jpeg" alt="ITM Maharajganj" class="img-fluid rounded-3 shadow"
                    style="height: 380px; object-fit: cover; border: 5px solid #ff7350;">
            </div>

            <!-- Content Section -->
            <div class="col-md-4 text-center">
                <h4 class="fw-bold mb-3 text-primary">
                    <i class="fa fa-graduation-cap me-2"></i> About ITM Maharajganj
                </h4>
                <p>
                    <b>ITM Maharajganj</b> is committed to <b>quality education</b>, shaping skilled technocrats with
                    high professional ethics and human values. Our vision is to uplift talented yet underprivileged
                    students, integrating them into the nation's mainstream through <b>Man Making and Nation
                        Building</b>.
                </p>

                <p>
                    Affiliated with <b>Dr. A.P.J. Abdul Kalam Technical University (AKTU)</b>, <b>Pharmacy Council of
                        India (PCI)</b>, and <b>Board of Technical Education (BTE)</b>, ITM stands as a <b>center of
                        excellence</b>, fostering technical competency and innovation in Eastern Uttar Pradesh.
                </p>

                <a class="btn btn-primary mt-3 px-4 py-2 fw-semibold" href="aboutus.php">
                    Read More <i class="fa fa-long-arrow-right ms-2"></i>
                </a>
            </div>

            <!-- Right Image -->
            <div class="col-md-4 text-center">
                <img src="assets/images/image9.jpeg" alt="ITM Campus" class="img-fluid rounded-3 shadow"
                    style="height: 380px; object-fit: cover; border: 5px solid #125875;">
            </div>
        </div>
    </div>
</section>


<!-- Faculty Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Our Faculty</h2>
        <div class="row text-center">
            <!-- Vice Chancellor Card -->
            <div class="col-md-4 mb-4">
                <div class="card hover-card">
                    <div class="card-body">
                        <h5 class="card-title designation">Chairman</h5>
                    </div>
                    <img src="assets/images/image68.png" class="card-img-top" alt="Chairman">
                    <div class="card-body">
                        <h5 class="card-title">VINAY KUMAR SRIVASTAVA</h5>
                       
                    </div>
                </div>
            </div>

            <!-- Controller of Examination Card -->
            <div class="col-md-4 mb-4">
                <div class="card hover-card">
                    <div class="card-body">
                        <h5 class="card-title designation">Director</h5>
                    </div>
                    <img src="assets/images/image1.jpg" class="card-img-top" alt="Controller of Examination"
                        style="height: 510px !important;">
                    <div class="card-body">
                        <h5 class="card-title">Anup Kumar Singh</h5>
                       
                    </div>
                </div>
            </div>

            <!-- Principal/Medical Superintendent Card -->
            <div class="col-md-4 mb-4">
                <div class="card hover-card">
                    <div class="card-body">
                        <h5 class="card-title designation">Principal</h5>
                    </div>
                    <img src="assets/images/image69.png" class="card-img-top" alt="Controller of Examination" style="height: 510px !important;">
                    <div class="card-body">
                        <h5 class="card-title">Mrs. U. Bhanupriya</h5>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Chairman Message -->
<!-- Chairman Message Section -->
<!-- Chairman Message Section -->
<section class="py-5 bg-white" id="leadership">
    <div class="container-lg">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="badge bg-primary bg-opacity-10 text-primary mb-3">Our Leadership</span>
            <h2 class="display-6 fw-bold">Guiding <span class="text-gradient-primary">Visionaries</span></h2>
            <p class="lead text-muted max-w-600 mx-auto">Meet the exceptional minds shaping ITM College of Pharmacy</p>
        </div>

        <!-- Leadership Timeline -->
        <div class="leadership-timeline position-relative">
            <!-- Vertical Line -->
            <div class="timeline-line position-absolute start-50 translate-middle-x bg-primary bg-opacity-10" style="width: 2px; height: 100%;"></div>

            <!-- Chairman -->
            <div class="row gx-5 mb-5 align-items-center">
                <div class="col-md-6 order-md-2 ps-lg-5">
                    <div class="position-relative">
                        <img src="assets/images/image68.png" class="img-fluid rounded-4 shadow" alt="Chairman" style="height: 400px ; width: 400px;">
                        <div class="position-absolute bottom-0 start-0 bg-white px-3 py-2 rounded-end shadow-sm">
                            <span class="text-primary fw-bold">Chairman</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-md-1 pe-lg-5">
                    <div class="pe-lg-4">
                        <h3 class="fw-bold mt-4 mt-md-0">Vinay Kumar Srivastava</h3>
                        <p class="text-muted">Preserving values while embracing progress</p>
                        <p>Our institute is for students who believe that education must address these imperatives, while
                    preserving essential values from the past. We prepare our students for both academic and social
                    challenges. I warmly welcome you to "ITM college of Pharmacy" where your dreams will come true.</p>
                        <a href="chairman_message.php" class="btn btn-sm btn-outline-primary">Read Full Message</a>
                    </div>
                </div>
            </div>

            <!-- Director -->
            <div class="row gx-5 mb-5 align-items-center">
                <div class="col-md-6 ps-lg-5">
                    <div class="position-relative">
                        <img src="assets/images/image1.jpg" class="img-fluid rounded-4 shadow" alt="Director" style="height: 400px ; width: 400px;">
                        <div class="position-absolute bottom-0 end-0 bg-white px-3 py-2 rounded-start shadow-sm">
                            <span class="text-danger fw-bold">Director</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pe-lg-5 text-md-end">
                    <div class="ps-lg-4">
                        <h3 class="fw-bold mt-4 mt-md-0">Anup Kumar Singh</h3>
                        <p class="text-muted">Bridging industry and academia</p>
                        <p>   With an enriching experience of over 16+ year, he has a blend of industrial and academic experience to maintain the standards and quality of pharmacy education and take it  to the higher level , ultimately strengthening the bond between academicians and aspirant of pharmacy education.Being linked to professional organizations and research association , he does the promotion of research and developmental activities in the forefront.Masters  at exploring design and characterization of controlled release drug delivery systems and complexation technology.When ats lelsure ,he likes to go camping taking care of animals and has a penchant for element section.</p>
                        <a href="cmd_message.php" class="btn btn-sm btn-outline-danger">Read Full Message</a>
                    </div>
                </div>
            </div>

            <!-- Principal -->
            <div class="row gx-5 align-items-center">
                <div class="col-md-6 order-md-2 ps-lg-5">
                    <div class="position-relative">
                        <img src="assets/images/image69.png" class="img-fluid rounded-4 shadow" alt="Principal" style="height: 400px ; width: 400px;">
                        <div class="position-absolute bottom-0 start-0 bg-white px-3 py-2 rounded-end shadow-sm">
                            <span class="text-dark fw-bold">Principal</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-md-1 pe-lg-5">
                    <div class="pe-lg-4">
                        <h3 class="fw-bold mt-4 mt-md-0">Mrs. U. Bhanupriya</h3>
                        <p class="text-muted">Excellence in pharmaceutical education</p>
                        <p> Welcome to ITM college of Pharmacy, Maharajganj. At ITM college of Pharmacy, we are committed to
                    excellence in nursing education, equipping
                    our students with the knowledge, skills, and values necessary to meet the challenges of modern
                    healthcare. Our college is dedicated to fostering an environment that promotes academic excellence,
                    critical thinking, and compassionate care, ensuring that our graduates are well-prepared to serve in
                    diverse healthcare settings.</p>
                        <a href="principal_message.php" class="btn btn-sm btn-outline-dark">Read Full Message</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="text-center mt-5 pt-3">
            <a href="aboutus.php" class="btn btn-primary px-4 rounded-pill">
                Explore Our College Culture
                <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<style>
    .text-gradient-primary {
        background: linear-gradient(90deg, #0d6efd 0%, #198754 100%);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .max-w-600 {
        max-width: 600px;
    }
    .rounded-4 {
        border-radius: 1rem !important;
    }
    @media (min-width: 768px) {
        .leadership-timeline .row:nth-child(odd) .col-md-6:first-child {
            padding-right: calc(var(--bs-gutter-x) * 1.5);
        }
        .leadership-timeline .row:nth-child(even) .col-md-6:last-child {
            padding-left: calc(var(--bs-gutter-x) * 1.5);
        }
    }
</style>


<!-- Facilities -->
<section class="py-5" style="background-color:rgb(179, 200, 222);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-primary">Why Choose Us</h2>
            <p class="lead text-muted">Discover the exceptional facilities that set us apart</p>
        </div>

        <div class="row g-4">
            <!-- Feature Cards -->
            <div class="col-md-3 col-lg-3">
                <div class="card border-0 shadow h-100 text-center">
                    <div class="card-body py-5">
                        <div class="icon-box mb-3">
                            <i class="fas fa-bus"></i>
                        </div>
                        <h4 class="h5 text-primary">Comprehensive Transport</h4>
                        <p class="text-muted">We provide transport facilities for students and faculty, ensuring easy access to all clinical exposure areas and seamless connectivity between the institute and hostel.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3">
                <div class="card border-0 shadow h-100 text-center">
                    <div class="card-body py-5">
                        <div class="icon-box mb-3">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h4 class="h5 text-primary">Well-Equipped Laboratories</h4>
                        <p class="text-muted">Our institute has state-of-the-art labs including Nursing Foundation, Pre-clinical Science, OBG & Paediatrics, and Nutrition Labs, offering hands-on training with modern equipment.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3">
                <div class="card border-0 shadow h-100 text-center">
                    <div class="card-body py-5">
                        <div class="icon-box mb-3">
                            <i class="fas fa-home"></i>
                        </div>
                        <h4 class="h5 text-primary">Comfortable Hostel & Mess</h4>
                        <p class="text-muted">We provide well-furnished hostel and mess facilities within the campus, ensuring a comfortable and secure stay for students.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3">
                <div class="card border-0 shadow h-100 text-center">
                    <div class="card-body py-5">
                        <div class="icon-box mb-3">
                            <i class="fas fa-book"></i>
                        </div>
                        <h4 class="h5 text-primary">Advanced Library & E-Library</h4>
                        <p class="text-muted">Our library is stocked with numerous books and journals. The E-Library facility allows students to expand their knowledge beyond physical books.</p>
                    </div>
                </div>
            </div>

            <!-- Additional Facilities -->

            <div class="col-md-3 col-lg-3">
                <div class="card border-0 shadow h-100 text-center">
                    <div class="card-body py-5">
                        <div class="icon-box mb-3">
                            <i class="fas fa-desktop"></i>
                        </div>
                        <h4 class="h5 text-primary">Computer Center</h4>
                        <p class="text-muted">Our computer center is equipped with over 400 PCs, providing students with a multi-user environment, 24/7 internet access, and a high-speed Wi-Fi system for seamless connectivity and learning.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3">
                <div class="card border-0 shadow h-100 text-center">
                    <div class="card-body py-5">
                        <div class="icon-box mb-3">
                            <i class="fas fa-book-reader"></i>
                        </div>
                        <h4 class="h5 text-primary">Book Bank</h4>
                        <p class="text-muted">To ease the burden of purchasing textbooks, our institute offers a book bank service, providing students with textbooks for the entire semester, free of cost.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3">
                <div class="card border-0 shadow h-100 text-center">
                    <div class="card-body py-5">
                        <div class="icon-box mb-3">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <h4 class="h5 text-primary">Banking Facility</h4>
                        <p class="text-muted">We have partnered with Nagar Sahakari Bank Ltd. to offer banking services including account openings, chequing facilities, and ATM access on campus for the convenience of our students.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3">
                <div class="card border-0 shadow h-100 text-center">
                    <div class="card-body py-5">
                        <div class="icon-box mb-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 class="h5 text-primary">Induction Program</h4>
                        <p class="text-muted">Our induction program helps new students acclimate to academic life by introducing them to the various departments, infrastructure, and faculty, ensuring a smooth transition into their academic journey.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3">
                <div class="card border-0 shadow h-100 text-center">
                    <div class="card-body py-5">
                        <div class="icon-box mb-3">
                            <i class="fas fa-futbol"></i>
                        </div>
                        <h4 class="h5 text-primary">Sports Facility</h4>
                        <p class="text-muted">Our campus offers extensive sports facilities including hockey, soccer, volleyball, basketball, and badminton. Regular sports events, both inter-collegiate and recreational, are held throughout the year.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3">
                <div class="card border-0 shadow h-100 text-center">
                    <div class="card-body py-5">
                        <div class="icon-box mb-3">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <h4 class="h5 text-primary">Alumni Association</h4>
                        <p class="text-muted">Our Alumni Association, founded in 2013, aims to foster lifelong connections through reunions, networking, and social activities that promote the growth and development of both the alumni and the institute.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3">
                <div class="card border-0 shadow h-100 text-center">
                    <div class="card-body py-5">
                        <div class="icon-box mb-3">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h4 class="h5 text-primary">Training & Placement Cell</h4>
                        <p class="text-muted">Our dedicated placement cell offers training, placement drives, and industry exposure, ensuring our students have the skills and experience required to secure top positions in leading organizations.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3">
    <div class="card border-0 shadow h-100 text-center">
        <div class="card-body py-5">
            <div class="icon-box mb-3">
                <i class="fas fa-user-edit"></i>
            </div>
            <h4 class="h5 text-primary">Personality Development</h4>
            <p class="text-muted">Focusing on the need for developing professionals with well-rounded skills, our corporate trainers specialize in personality development. The students are trained in body language, resume writing, public speaking, and presentation skills. We provide soft skill modules to enhance career prospects and prepare students for the corporate world.</p>
        </div>
    </div>
</div>


        </div>
    </div>
</section>


<!-- Custom Bootstrap Styles -->
<style>
    .icon-box {
        width: 60px;
        height: 60px;
        line-height: 60px;
        background: rgba(0, 123, 255, 0.1);
        color: #007bff;
        font-size: 1.5rem;
        border-radius: 50%;
        display: inline-block;
    }

    .card:hover {
        transform: translateY(-5px);
        transition: 0.3s ease-in-out;
    }
</style>


<!-- Important Links -->


<?php include 'includes/footer.php'; ?>