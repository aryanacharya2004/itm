<?php include 'includes/header.php'; ?>

<!-- Gallery Section -->
<div class="hero-section" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('assets/images/image11.jpeg') center/cover; height: 60vh; display: flex; align-items: center; justify-content: center; color: white; text-align: center;">
    <div class="container">
        <h1 style="font-size: 3rem; font-weight: 700; margin-bottom: 1rem;">Photo Gallery</h1>
        <p class="lead" style="font-size: 1.5rem; max-width: 800px; margin: 0 auto;">Browse through the memories that make our college experience unforgettable!</p>
    </div>
</div>
<section class="py-4" style="background-color: rgb(228, 233, 239);">
    <div class="container">
        <div class="row">
            <?php
            // Array of image paths from image1.jpeg to image65.jpeg
            $images = [
                // 'assets/images/image1.jpeg',
                'assets/images/image2.jpeg',
                'assets/images/image3.jpeg',
                'assets/images/image4.jpeg',
                'assets/images/image5.jpeg',
                'assets/images/image6.jpeg',
                'assets/images/image7.jpeg',
                'assets/images/image8.jpeg',
                'assets/images/image9.jpeg',
                'assets/images/image10.jpeg',
                'assets/images/image11.jpeg',
                'assets/images/image12.jpeg',
                'assets/images/image13.jpeg',
                'assets/images/image14.jpeg',
                'assets/images/image15.jpeg',
                'assets/images/image16.jpeg',
                'assets/images/image17.jpeg',
                'assets/images/image18.jpeg',
                'assets/images/image19.jpeg',
                'assets/images/image20.jpeg',
                'assets/images/image21.jpeg',
                'assets/images/image22.jpeg',
                'assets/images/image23.jpeg',
                'assets/images/image24.jpeg',
                'assets/images/image25.jpeg',
                // 'assets/images/image26.jpeg',
                // 'assets/images/image27.jpeg',
                // 'assets/images/image28.jpeg',
                // 'assets/images/image29.jpeg',
                // 'assets/images/image30.jpeg',
                // 'assets/images/image31.jpeg',
                // 'assets/images/image32.jpeg',
                // 'assets/images/image33.jpeg',
                // 'assets/images/image34.jpeg',
                // 'assets/images/image35.jpeg',
                // 'assets/images/image36.jpeg',
                'assets/images/image37.jpeg',
                'assets/images/image38.jpeg',
                'assets/images/image39.jpeg',
                'assets/images/image40.jpeg',
                'assets/images/image41.jpeg',
                'assets/images/image42.jpeg',
                'assets/images/image43.jpeg',
                'assets/images/image44.jpeg',
                'assets/images/image45.jpeg',
                'assets/images/image46.jpeg',
                'assets/images/image47.jpeg',
                'assets/images/image48.jpeg',
                'assets/images/image49.jpeg',
                'assets/images/image50.jpeg',
                'assets/images/image51.jpeg',
                'assets/images/image52.jpeg',
                // 'assets/images/image53.jpeg',
                // 'assets/images/image54.jpeg',
                // 'assets/images/image55.jpeg',
                // 'assets/images/image56.jpeg',
                // 'assets/images/image57.jpeg',
                // 'assets/images/image58.jpeg',
                // 'assets/images/image59.jpeg',
                // 'assets/images/image60.jpeg',
                // 'assets/images/image61.jpeg',
                // 'assets/images/image62.jpeg',
                // 'assets/images/image63.jpeg',
                // 'assets/images/image64.jpeg',
                // 'assets/images/image65.jpeg'
            ];

            // <?php
            foreach ($images as $image) {
                echo '
                    <div class="col-md-4 col-sm-6 mb-4 text-center">
                        <a href="' . $image . '" target="_blank">
                            <div class="card shadow-lg rounded-lg overflow-hidden" style="border: 2px solid #f0ad4e; height: 350px; transition: transform 0.3s ease-in-out;">
                                <div class="card-body p-0 d-flex justify-content-center align-items-center" style="height: 100%; width: 100%;">
                                    <img src="' . $image . '" alt="Gallery Image" class="img-fluid rounded" style="object-fit: cover; width: 100%; height: 100%; transition: transform 0.3s ease;">
                                </div>
                            </div>
                        </a>
                    </div>
                ';
            }
            ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
