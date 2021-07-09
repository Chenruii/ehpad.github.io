<?php include 'head.php'; ?>
<?php include 'banner.php'; ?>
    <main class="page">
        <section class="clean-block slider">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Slider</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in,
                        mattis vitae leo.</p>
                </div>
                <div data-ride="carousel" class="carousel slide" id="carousel-1">
                    <div role="listbox" class="carousel-inner">
                        <div class="carousel-item active"><img src="scenery/image1.jpg" alt="Slide Image"
                                                               class="w-100 d-block"/></div>
                        <div class="carousel-item"><img src="scenery/image4.jpg" alt="Slide Image"
                                                        class="w-100 d-block"/></div>
                        <div class="carousel-item"><img src="scenery/image6.jpg" alt="Slide Image"
                                                        class="w-100 d-block"/></div>
                    </div>
                    <div><a href="#carousel-1" role="button" data-slide="prev" class="carousel-control-prev"><span
                                    class="carousel-control-prev-icon"></span><span
                                    class="sr-only">Previous</span></a><a href="#carousel-1" role="button"
                                                                          data-slide="next"
                                                                          class="carousel-control-next"><span
                                    class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a>
                    </div>
                    <ol
                            class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </section>
    </main>
<?php include 'footer.php'; ?>