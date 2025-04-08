<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITM college of pharmacy</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
    <!-- Custom CSS -->
  
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar d-none d-md-block">
        <div class="container">
            <div class="row">
               <div class="col-md-6">
               <div class="contact-info">
        <span><i class="fas fa-phone"></i> <a href="tel:+917388664423">+91 73886 64423</a></span>
        <span class="ms-3"><i class="fas fa-phone"></i> <a href="tel:+917388662848">+91 73886 62848</a></span>
        <span class="ms-3"><i class="fas fa-envelope"></i> <a href="mailto:kmcnursing2018@gmail.com">kmcnursing2018@gmail.com</a></span>
    </div>
</div>

                <div class="col-md-6 text-md-end">
                    <div class="social-icons">
                        <span class="me-2">Follow us:</span>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color:rgba(179, 112, 88, 0.93) !important; margin: 0; padding: 0;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" alt="Logo" class="img-fluid">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <!-- About Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="aboutus.php">About Us</a></li>
                            <li><a class="dropdown-item" href="chairman_message.php">Chairman's Message</a></li>
                            <!-- <li><a class="dropdown-item" href="messageceo">CEO's Message</a></li> -->
                            <li><a class="dropdown-item" href="cmd_message.php">C.M.D's Message</a></li>
                            <li><a class="dropdown-item" href="principal_message.php">Principal's Message</a></li>
                            <!-- <li><a class="dropdown-item" href="medicalsuperintendent">M.S's Message</a></li> -->
                        </ul>
                    </li>
                    <!-- Departments Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="departmentsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Departments</a>
                        <ul class="dropdown-menu" aria-labelledby="departmentsDropdown">
                            <!-- Pre Clinical -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Pre Clinical</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="anatomy">Anatomy</a></li>
                                    <li><a class="dropdown-item" href="physiology">Physiology</a></li>
                                    <li><a class="dropdown-item" href="biochemistry">Biochemistry</a></li>
                                </ul>
                            </li>
                            <!-- Para Clinical -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Para Clinical</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="microbiology">Microbiology</a></li>
                                    <li><a class="dropdown-item" href="pharmacology">Pharmacology</a></li>
                                    <li><a class="dropdown-item" href="pathology">Pathology</a></li>
                                    <li><a class="dropdown-item" href="forensic-medicine">Forensic Medicine</a></li>
                                    <li><a class="dropdown-item" href="community-medicine">Community Medicine</a></li>
                                </ul>
                            </li>
                            <!-- Clinical -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Clinical</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="general-medicine">General Medicine</a></li>
                                    <li><a class="dropdown-item" href="dermatology-and-veneral-disease">Dermatology and Veneral Disease</a></li>
                                    <li><a class="dropdown-item" href="psychiatry">Psychiatry</a></li>
                                    <li><a class="dropdown-item" href="pediatrics">Pediatrics</a></li>
                                    <li><a class="dropdown-item" href="general-surgery">General Surgery</a></li>
                                    <li><a class="dropdown-item" href="orthopadic">Orthopaedic</a></li>
                                    <li><a class="dropdown-item" href="opthalmology">Ophthalmology</a></li>
                                    <li><a class="dropdown-item" href="oto-rhino-laryngology">ENT</a></li>
                                    <li><a class="dropdown-item" href="obstetrics-gynaecology">Obstetrics & Gynaecology</a></li>
                                    <li><a class="dropdown-item" href="emergency-medicine">Emergency Medicine</a></li>
                                    <li><a class="dropdown-item" href="anaesthesiology">Anaesthesiology</a></li>
                                    <li><a class="dropdown-item" href="radiodiagnosis">Radiodiagnosis</a></li>
                                    <li><a class="dropdown-item" href="dentistry">Dentistry</a></li>
                                    <li><a class="dropdown-item" href="physiotherapy">Physiotherapy</a></li>
                                </ul>
                            </li>
                            <!-- Super Speciality -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Super Speciality</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Gastrology</a></li>
                                    <li><a class="dropdown-item" href="#">Cardiology</a></li>
                                    <li><a class="dropdown-item" href="#">Neurology</a></li>
                                    <li><a class="dropdown-item" href="#">Urology</a></li>
                                    <li><a class="dropdown-item" href="#">Plastic Surgery</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Hospital Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="hospitalDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hospital</a>
                        <ul class="dropdown-menu" aria-labelledby="hospitalDropdown">
                            <li><a class="dropdown-item" href="departmentofcriticalcaremedicine">Department of Critical Care Medicine</a></li>
                            <li><a class="dropdown-item" href="coronarycare">Coronary Care Unit</a></li>
                            <li><a class="dropdown-item" href="hospitallabservice">Hospital Lab Services</a></li>
                            <li><a class="dropdown-item" href="radiology">Radiodiagnosis</a></li>
                            <li><a class="dropdown-item" href="icu">ICU/SICU/MICU</a></li>
                            <li><a class="dropdown-item" href="emergency">Emergency</a></li>
                            <li><a class="dropdown-item" href="picunicu">PICU/NICU</a></li>
                            <li><a class="dropdown-item" href="bloodbank">Blood Bank</a></li>
                            <li><a class="dropdown-item" href="examinationcell">Examination Cell</a></li>
                            <li><a class="dropdown-item" href="cme">CME, Conference</a></li>
                            <li><a class="dropdown-item" href="awards">Awards, Achievements</a></li>
                        </ul>
                    </li>
                    <!-- Admission Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="admissionDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admission</a>
                        <ul class="dropdown-menu" aria-labelledby="admissionDropdown">
                            <li><a class="dropdown-item" href="feestructure">Fee Structure</a></li>
                            <li><a class="dropdown-item" href="admissions-notice">Admissions Notice</a></li>
                        </ul>
                    </li>
                    <!-- Contact -->
                    <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

   