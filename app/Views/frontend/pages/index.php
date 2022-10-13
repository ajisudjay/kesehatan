<!DOCTYPE html>
<html lang="en">
<?= $this->include('frontend/layouts/header') ?>

<body>
    <?= $this->include('frontend/layouts/top_navbar') ?>
    <main id="main">
        <!-- ======= Hero Slider Section ======= -->
        <section id="hero-slider" class="hero-slider">
            <div class="container-md" data-aos="fade-in">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper sliderFeaturedPosts rounded-4">
                            <div class="swiper-wrapper ">
                                <div class="swiper-slide ">
                                    <a href="single-post.html" class="img-bg d-flex align-items-end rounded-4" style="background-image: url('libraries_frontend/assets/img/post-slide-1.jpg');">
                                        <div class="img-bg-inner">
                                            <h2>The Best Homemade Masks for Face (keep the Pimples Away)</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="single-post.html" class="img-bg d-flex align-items-end rounded-4" style="background-image: url('libraries_frontend/assets/img/post-slide-2.jpg');">
                                        <div class="img-bg-inner">
                                            <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="single-post.html" class="img-bg d-flex align-items-end rounded-4" style="background-image: url('libraries_frontend/assets/img/post-slide-3.jpg');">
                                        <div class="img-bg-inner">
                                            <h2>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="single-post.html" class="img-bg d-flex align-items-end rounded-4" style="background-image: url('libraries_frontend/assets/img/post-slide-4.jpg');">
                                        <div class="img-bg-inner">
                                            <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="custom-swiper-button-next">
                                <span class="bi-chevron-right"></span>
                            </div>
                            <div class="custom-swiper-button-prev">
                                <span class="bi-chevron-left"></span>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Hero Slider Section -->

        <!-- ======= Post Grid Section ======= -->
        <section id="posts" class="posts">
            <div class="container" data-aos="fade-up">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="post-entry-1 lg">
                            <a href="single-post.html"><img src="libraries_frontend/assets/img/post-landscape-1.jpg" alt="" class="img-fluid rounded-2"></a>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2><a href="single-post.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                            <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi atque eveniet, quo, praesentium dignissimos</p>

                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="libraries_frontend/assets/img/person-1.jpg" alt="" class="img-fluid"></div>
                                <div class="name">
                                    <h3 class="m-0 p-0">Cameron Williamson</h3>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <div class="row g-5">
                            <div class="col-lg-4 border-start custom-border">
                                <div class="post-entry-1">
                                    <a href="single-post.html"><img src="libraries_frontend/assets/img/post-landscape-2.jpg" alt="" class="img-fluid rounded-1"></a>
                                    <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2><a href="single-post.html">Let’s Get Back to Work, New York</a></h2>
                                </div>
                                <div class="post-entry-1">
                                    <a href="single-post.html"><img src="libraries_frontend/assets/img/post-landscape-5.jpg" alt="" class="img-fluid rounded-1"></a>
                                    <div class="post-meta"><span class="date">Food</span> <span class="mx-1">&bullet;</span> <span>Jul 17th '22</span></div>
                                    <h2><a href="single-post.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                                </div>
                                <div class="post-entry-1">
                                    <a href="single-post.html"><img src="libraries_frontend/assets/img/post-landscape-7.jpg" alt="" class="img-fluid rounded-1"></a>
                                    <div class="post-meta"><span class="date">Design</span> <span class="mx-1">&bullet;</span> <span>Mar 15th '22</span></div>
                                    <h2><a href="single-post.html">Why Craigslist Tampa Is One of The Most Interesting Places On the Web?</a></h2>
                                </div>
                            </div>
                            <div class="col-lg-4 border-start custom-border">
                                <div class="post-entry-1">
                                    <a href="single-post.html"><img src="libraries_frontend/assets/img/post-landscape-3.jpg" alt="" class="img-fluid rounded-1"></a>
                                    <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2><a href="single-post.html">6 Easy Steps To Create Your Own Cute Merch For Instagram</a></h2>
                                </div>
                                <div class="post-entry-1">
                                    <a href="single-post.html"><img src="libraries_frontend/assets/img/post-landscape-6.jpg" alt="" class="img-fluid rounded-1"></a>
                                    <div class="post-meta"><span class="date">Tech</span> <span class="mx-1">&bullet;</span> <span>Mar 1st '22</span></div>
                                    <h2><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                                </div>
                                <div class="post-entry-1">
                                    <a href="single-post.html"><img src="libraries_frontend/assets/img/post-landscape-8.jpg" alt="" class="img-fluid rounded-1"></a>
                                    <div class="post-meta"><span class="date">Travel</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2><a href="single-post.html">5 Great Startup Tips for Female Founders</a></h2>
                                </div>
                            </div>

                            <!-- Trending Section -->
                            <div class="col-lg-4">

                                <!-- ======= Sidebar ======= -->
                                <div class="aside-block">

                                    <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Popular</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-latest" aria-selected="false">Latest</button>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">

                                        <!-- Popular -->
                                        <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                                <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>

                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                                <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>

                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                                <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>

                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                                <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s Guide</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>

                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                                <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>

                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                                <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>
                                        </div> <!-- End Popular -->

                                        <!-- Latest -->
                                        <div class="tab-pane fade" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">
                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                                <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s Guide</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>

                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                                <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>

                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                                <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>

                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                                <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>

                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                                <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>

                                            <div class="post-entry-1 border-bottom">
                                                <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                                <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                                                <span class="author mb-3 d-block">Jenny Wilson</span>
                                            </div>

                                        </div> <!-- End Latest -->

                                    </div>

                                </div> <!-- End Trending Section -->
                            </div>
                        </div>

                    </div> <!-- End .row -->
                </div>
        </section> <!-- End Post Grid Section -->



    </main><!-- End #main -->
    <?= $this->include('frontend/layouts/footer') ?>



    <?= $this->include('frontend/layouts/javascript') ?>


</body>

</html>