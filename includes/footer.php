<!-- Footer -->
<footer class="bg-dark text-white pt-5 pb-4 justify-content-center">
    <div class="container justify-content-center">
        <div class="row text-center text-md-start justify-content-center">
            <div class="col-md-4 mb-4">
                <h5>About Us</h5>
                <p>Welcome to ITM College of Pharmacy, Maharajganj! We are dedicated to excellence in pharmaceutical
                    education and research, equipping our students with the technical expertise and ethical values
                    needed for success in the healthcare and pharmaceutical industries.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php" class="text-white">Home</a></li>
                    <li><a href="aboutus.php" class="text-white">About Us</a></li>
                    <li><a href="eligiblity.php" class="text-white">Eligibility</a></li>
                    <li><a href="contact.php" class="text-white">Contact</a></li>
                </ul>
            </div>

            <div class="col-md-4 mb-4">
                <h5>Contact Info</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-map-marker-alt me-2"></i> Mahuawa, Farenda Road, Maharajganj, Uttar Pradesh -
                        273303</li>
                    <li>
                        <i class="fas fa-phone me-2"><a href="tel:+919935632546" class="text-reset text-decoration-none mt-2">+91 9935632546
                            </a></i><br>
                        <i class="fas fa-phone me-2"><a href="tel:+919250650283"
                                class="text-reset text-decoration-none mt-2">+91 9250650283</a></i>
                    </li>
                    <li>
                        <i class="fas fa-envelope me-2"></i>
                        <a href="mailto:itmcop@gmail.com" class="text-reset text-decoration-none">itmcop@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>

        <hr class="my-4">
        <div class="row text-center align-items-center">
            <div class="col-md-6">
                <p class="mb-0">© <?php echo date("Y"); ?> ITM college of pharmacy. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0">Design and Developed & Maintained by OIMS IT</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12">
                <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>

                <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Handle submenu toggle
        document.querySelectorAll('.dropdown-submenu a.dropdown-toggle').forEach(function (element) {
            element.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                const submenu = this.nextElementSibling;

                if (submenu && submenu.classList.contains('dropdown-menu')) {
                    // Close any open submenus first
                    document.querySelectorAll('.dropdown-submenu .dropdown-menu.show').forEach(function (menu) {
                        if (menu !== submenu) {
                            menu.classList.remove('show');
                        }
                    });

                    // Toggle the clicked submenu
                    submenu.classList.toggle('show');
                }
            });
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', function (e) {
            if (!e.target.closest('.dropdown-submenu')) {
                document.querySelectorAll('.dropdown-submenu .dropdown-menu.show').forEach(function (menu) {
                    menu.classList.remove('show');
                });
            }
        });

        // Initialize Bootstrap dropdowns
        var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
        dropdownElementList.forEach(function (dropdownToggleEl) {
            new bootstrap.Dropdown(dropdownToggleEl);
        });
    });

</script>
</body>

</html>