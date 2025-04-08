<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITM  college of Pharmacy</title>

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
                        <span><i class="fas fa-phone"></i> <a href="tel:+91 9935632546">+91 9935632546</a></span>
                        <span class="ms-3"><i class="fas fa-phone"></i> <a href="tel:+91 9250650283">+91 9250650283</a></span>
                        <span class="ms-3"><i class="fas fa-envelope"></i> <a
                                href="mailto:itmcop@gmail.com">itmcop@gmail.com</a></span>
                    </div>
                </div>

                <div class="col-md-6 text-md-end">
                    <div class="social-icons">
                        <span class="me-2">Follow us:</span>
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
           
           <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
           <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg"
        style="background-color:rgba(184, 145, 95, 0.93) !important; margin: 0; padding: 0;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo3.png" alt="Logo" class="img-fluid">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center"  style="margin-left:150px; gap: 100px;"id="navbarNav">
                <ul class="navbar-nav" >
                    <li class="nav-item " ><a class="nav-link active" href="index.php">Home</a></li>
                    <!-- About Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">About</a>
                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="aboutus.php">About Us</a></li>
                            <li><a class="dropdown-item" href="chairman_message.php">Chairman's Message</a></li>
                            <!-- <li><a class="dropdown-item" href="messageceo">CEO's Message</a></li> -->
                            <li><a class="dropdown-item" href="cmd_message.php">Director Message</a></li>
                            <li><a class="dropdown-item" href="principal_message.php">Principal's Message</a></li>
                            <!-- <li><a class="dropdown-item" href="medicalsuperintendent">M.S's Message</a></li> -->
                        </ul>
                    </li>
                    <!-- Departments Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Courses</a>
                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="diploma_homoeopathic_pharmacy.php">Diploma in Homoeopathic Pharmacy</a></li>
                            <li><a class="dropdown-item" href="dpharmacy.php">D.Pharmacy</a></li>
                          
                            <li><a class="dropdown-item" href="bpharmacy.php">B.Pharmacy</a></li>
                           
                        </ul>
                    </li>




                    <!-- Hospital Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="hospitalDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Hospital</a>
                        <ul class="dropdown-menu" aria-labelledby="hospitalDropdown">
                        <li><a class="dropdown-item" href="anti_ragging.php">Anti-Ragging</a></li>

                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Rules and Regulations</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="rules_of_intitutes.php">Rules & Regulations of the Institute</a>
                                    </li>
                                    <li><a class="dropdown-item" href="rules_of_hostel.php">Rules & Regulations of the Hostels</a>
                                    </li>
                                   
                                </ul>
                            </li>

                            <li class="dropdown-submenu">
    <a class="dropdown-item dropdown-toggle" href="#">Facilities</a>
    <ul class="dropdown-menu">
    
        <li><a class="dropdown-item" href="transport.php">Transport Facilities</a></li>
        <li><a class="dropdown-item" href="hostel.php">Hostel Facilities</a></li>
        <li><a class="dropdown-item" href="cultural_activity.php">Cultural Activity</a></li>
        <li><a class="dropdown-item" href="library.php">Library</a></li>
        <li><a class="dropdown-item" href="e-library.php">Book Bank</a></li>
        <li><a class="dropdown-item" href="pre_clinical.php">Pre-clinical Science Lab</a></li>
        <li><a class="dropdown-item" href="mess_facility.php">Mess Facility</a></li>
        <li><a class="dropdown-item" href="sports_facility.php">Sports Facility</a></li>
    </ul>
</li>


                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="admissionDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Gallery</a>
                        <ul class="dropdown-menu" aria-labelledby="admissionDropdown">
                            <li><a class="dropdown-item" href="gallery.php">Photo & Media</a></li>
                            <li><a class="dropdown-item" href="#">Video Gallery</a></li>
                        </ul>
                    </li>


                    <!-- Admission Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="admissionDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Admission</a>
                        <ul class="dropdown-menu" aria-labelledby="admissionDropdown">
<!--                             <li><a class="dropdown-item" href="#">Fee Structure</a></li> -->
<!--                             <li><a class="dropdown-item" href="#">Admissions Notice</a></li> -->
                            <li><a class="dropdown-item" href="eligiblity.php">Eligiblity</a></li>
                        </ul>
                    </li>
                    <!-- Contact -->
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
