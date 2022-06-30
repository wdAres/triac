<?php include 'nav.php' ?>

<!-- SECTION-1 IMPORT FROM ABOUT PAGE-->
<section id="about-sec-1" class="blog-header container-fluid mx-0 px-0 d-flex flex-column flex-md-row align-items-center">
    <div class="d-flex flex-column  p-4 about-sec-1-left wid align-items-center align-items-md-start justify-content-center h-100">
        <h1  class="mb-4 ps-md-5 fw-bold all-page-heading">Blogs & News</h1>
        <p class="w-75 ps-md-5" style="text-align: justify;">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores error adipisci, sequi modi voluptates eveniet sapiente magni saepe veritatise omnis totam rem.
        </p>
    </div>
    <!-- <div class="d-flex justify-content-center align-items-center wid p-4 h-100">
            <div >
            <img src="../background/about-us.jpg" width="100%" alt="">
            </div>
        </div> -->
</section>
<!-- SECTION-1 -->




<section id="blogs-container">
    <div class="container row  mx-auto  py-4">
        <div class=" col-lg-4 col-md-4 col-sm-6 col-12 my-4">
            <div class="blog-card">
                <div class="blog-img"><img width="100%" height="100%" src="bg/blog-1.jpg" alt=""></div>
                <div class="blog-footer">
                    <div href="#" class="blog-title">Supply Chain Challenges to Linger for the Foreseeable Future, Says New Report</div>
                    <p class="blog-detail ">What little optimism industries had for an easing of supply chain challenges moving into 2022 haes...</p>
                    <a href="blog-detail.php" class="blog-detail-link">Read More</a>
                </div>
            </div>
        </div>
        <div class=" col-lg-4 col-md-4 col-sm-6 col-12 my-4">
            <div class="blog-card">
                <div class="blog-img"><img width="100%" height="100%" src="bg/blog-2.jpg" alt=""></div>
                <div class="blog-footer">
                    <div href="#" class="blog-title">Electronics and Semic Manufacturing Poised for Big Gains in Coming Years</div>
                    <p class="blog-detail ">The electronics and semiconductor manufacturing landscape is expected to grow by leaps and bounds, and even despite</p>
                    <a href="blog-detail.php" class="blog-detail-link">Read More</a>
                </div>
            </div>
        </div>
        <div class=" col-lg-4 col-md-4 col-sm-6 col-12 my-4">
            <div class="blog-card">
                <div class="blog-img"><img width="100%" height="100%" src="bg/blog-3.jpg" alt=""></div>
                <div class="blog-footer">
                    <div href="#" class="blog-title">Chip Manufacturers Embrace Production Beyond China, Including in the US</div>
                    <p class="blog-detail ">Semiconductors today now play a critical role in nearly every major industry in some form or another...</p>
                    <a href="blog-detail.php" class="blog-detail-link">Read More</a>
                </div>
            </div>
        </div>
        <div class=" col-lg-4 col-md-4 col-sm-6 col-12 my-4">
            <div class="blog-card">
                <div class="blog-img"><img width="100%" height="100%" src="bg/blog-4.jpg" alt=""></div>
                <div class="blog-footer">
                    <div href="#" class="blog-title">Inflation and Shipping Costs Hit All-Time Highs</div>
                    <p class="blog-detail ">In the wake of the Federal Reserve’s recent announcements that they will reduce their balance sheet by as much as $95 billion per month — with anticipation they will deliver two half-point interest...</p>
                    <a href="blog-detail.php" class="blog-detail-link">Read More</a>
                </div>
            </div>
        </div>
        <div class=" col-lg-4 col-md-4 col-sm-6 col-12 my-4">
            <div class="blog-card">
                <div class="blog-img"><img width="100%" height="100%" src="bg/blog-5.jpg" alt=""></div>
                <div class="blog-footer">
                    <div href="#" class="blog-title">Supply Chain Shortages for Semiconductors to Last to 2024, Says Intel CEO</div>
                    <p class="blog-detail ">f there was any hope that the electronic component and semiconductor markets are on the upswing...</p>
                    <a href="blog-detail.php" class="blog-detail-link">Read More</a>
                </div>
            </div>
        </div>
        

    </div>
</section>

<div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>






<style>
    .blog-card {}

    .blog-img {
        width: 100%;
        height: 200px;
        background: #cdcdcd;
    }

    .blog-footer {
        padding-top: 15px;
    }

    .blog-footer .blog-title {
        text-decoration: none;
        font-size: 1.4rem;
        margin-bottom: 10px;
        color: black;
        font-weight: 500;
    }

    .blog-footer .blog-detail {
        font-size: 15px;
        margin: 10px 0;
    }

    .blog-footer .blog-link {}
</style>


<?php include 'foot.php' ?>

</body>

</html>