@include('layouts.header')
@extends('layouts.main')

@section('container')
            <!--end-->
            <div id="myCarousel1" class="carousel slide" data-ride="carousel"> 
                <!-- Indicators -->

                <ol class="carousel-indicators">
                    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel1" data-slide-to="1"></li>
                    <li data-target="#myCarousel1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active"> <img src="images/beranda1.jpg" style="width:100%; height: 500px" alt="First slide">
                        <div class="carousel-caption">
                            
                        </div>
                    </div>
                    <div class="item"> <img src="images/beranda2.jpg" style="width:100%; height: 500px" alt="Second slide">
                        <div class="carousel-caption">
                        <h1>WELCOME TO<br> SMASA SITUBONDO</h1>
                        </div>
                    </div>
                    <div class="item"> <img src="images/beranda3.jpeg" style="width:100%; height: 500px" alt="Third slide">
                        <div class="carousel-caption">
                            <h1>WELCOME TO<br> SMASA SITUBONDO</h1>
                        </div>
                    </div>

                </div>
                <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img src="images/icons/left-arrow.png" onmouseover="this.src = 'images/icons/left-arrow-hover.png'" onmouseout="this.src = 'images/icons/left-arrow.png'" alt="left"></a>
                <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img src="images/icons/right-arrow.png" onmouseover="this.src = 'images/icons/right-arrow-hover.png'" onmouseout="this.src = 'images/icons/right-arrow.png'" alt="left"></a>

            </div>
            <div class="clearfix"></div>

            <!--service block--->
            <!-- <iframe width="300" height="200" src="https://youtube.com/embed/O1L7uQGXFIM" allowfullscreen></iframe> -->
            <section class="service-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="images/icons/berprestasi.png">
                                </div>
                                <h4><a>Berprestasi</a></h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="images/icons/inovatif.png">
                                </div>
                                <h4><a>Inovatif</a></h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="images/icons/berkarakter.png">
                                </div>
                                <h4><a>Berkarakter</a></h4>
                            </div>
                        </div>                       
                        <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                            <div class="service-details text-center">
                                <div class="service-image">
                                    <img alt="image" class="img-responsive" src="images/icons/peduli.png">
                                </div>
                                <h4><a>Peduli Sesama</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


                        <!-----blog slider----->
            <!--blog trainer block-->
            <section class="blog-block-slider">
                <div class="blog-block-slider-fix-image">
                    <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                        <div class="container">
                            
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel2" data-slide-to="1"></li>
                                <li data-target="#myCarousel2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                    <div class="blog-box">
                                        <p>SMA Negeri 1 Situbondo adalah SMA Negeri yang ada di Kabupaten Situbondo. SMA ini sekaligus sebagai SMA pertama dan terfavorit di daerah Situbondo dan sekitarnya. Sejak 01 Agustus 1961 telah mengharumkan Kabupaten Situbondo di tingkat Provinsi, Nasional, bahkan Internasional dengan prestasi luar biasa.</p>
                                    </div>
                                    <div class="blog-view-box">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/client3.png" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading blog-title">Drs. Winarto, M.Pd</h3>
                                                <h5 class="blog-rev">Kepala Sekolah SMAN 1 Situbondo</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="blog-box">
                                        <p> SMA Negeri 1 Situbondo merupakan Sekolah Rujukan dan Sekolah Adiwiyata. Lokasi SMA ini terletak di Jalan PB Sudirman Nomor 5A Kode Pos 68312 Situbondo. Lokasi tersebut di sebu sebut sebagai jalan pendidikan karena sepanjang Jalan PB Sudirman, terdapat banyak lembaga pendidikan. </p>
                                    </div>
                                    <div class="blog-view-box">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/client1.png" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading blog-title">Ariyandina Riska, S.Pd</h3>
                                                <h5 class="blog-rev">Guru SMAN 1 Situbondo</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="blog-box">
                                        <p>SMASA, julukan untuk SMAN 1 Situbondo, memiliki motto yaitu SMASA PALING BERKIBAR yang berarti Peduli dan Sadar Lingkungan, Berkarakter, Kreatif, Inovatif, Berprestasi, Aktif, dan Religius.</p>
                                    </div>
                                    <div class="blog-view-box">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/client2.png" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading blog-title">Shofii hoo</h3>
                                                <h5 class="blog-rev">Alumni SMASA 2018</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </section>

            <!--gallery block--->
            <section class="gallery-block gallery-front">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="gallery-image">
                            <iframe width="300" height="200" src="https://youtube.com/embed/O1L7uQGXFIM" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-3 col-xs-6 width-50"></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="gallery-image">
                            <iframe width="300" height="200" src="https://youtube.com/embed/iHg_o1lj1H8" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-3 col-xs-6 width-50"></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="gallery-image">
                            <iframe width="300" height="200" src="https://youtube.com/embed/PMP15AP0_ko" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--offer block-->
            <!-- <section class="vacation-offer-block">
                <div class="vacation-offer-bgbanner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="vacation-offer-details">
                                    <h1>Your vacation Awaits</h1>
                                    <h4>Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit.</h4>
                                    <button type="button" class="btn btn-default">Choose a package</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!--End-->

            <!----resort-overview--->
            <!-- <section class="resort-overview-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                            <div class="side-A">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a><img src="images/category1.png" class="img-responsive" alt="image"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="side-B">
                                <div class="product-desc-side">
                                    <h3><a>SMASA BERKIBAR</a></h3>
                                    <p>SMASA PALING BERKIBAR yang berarti Peduli dan Sadar Lingkungan, Berkarakter, Kreatif, Inovatif, Berprestasi, Aktif, dan Religius.</p>
                                    <div class="links"><a href="single-blog.html">Read more</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                            <div class="side-A">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a><img alt="image" class="img-responsive" src="images/category2.png"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="side-B">
                                <div class="product-desc-side">
                                    <h3><a>Beatusish ingl</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis luctus non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.</p>
                                    <div class="links"><a href="single-blog.html">Read more</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                            <div class="side-A">
                                <div class="product-desc-side">
                                    <h3><a>luxury room</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis luctus non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.</p>
                                    <div class="links"><a href="single-blog.html">Read more</a></div>
                                </div>
                            </div>

                            <div class="side-B">
                                <div class="product-thumb">
                                    <div class="image txt-rgt">
                                        <a class="arrow-left"><img src="images/category3.png" class="img-responsive" alt="imaga"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                            <div class="side-A">
                                <div class="product-desc-side">
                                    <h3><a>heaven seanery</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis luctus non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.</p>
                                    <div class="links"><a href="single-blog.html">Read more</a></div>
                                </div>
                            </div>

                            <div class="side-B">
                                <div class="product-thumb txt-rgt">
                                    <div class="image">
                                        <a class="arrow-left"><img src="images/category4.png" class="img-responsive" alt="imaga"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </section> -->



            <!---blog block--->
            <!-- <section class="blog-block">
                <div class="container">
                    <div class="row offspace-45">
                        <div class="view-set-block">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="event-blog-image">
                                    <img alt="image" class="img-responsive" src="images/blog1.png">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 side-in-image">
                                <div class="event-blog-details">
                                    <h4><a href="single-blog.html">Lorem ipsum dolor sit amet</a></h4>
                                    <h5>Post By Admin <a><i aria-hidden="true" class="fa fa-heart-o fa-lg"></i>Likes</a><a><i aria-hidden="true" class="fa fa-comment-o fa-lg"></i>comments</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornare turpis neque, eu commodo sapien porta sed. Nam ut ante turpis. Nam arcu odio, scelerisque a vehicula vitae, auctor sit amet lectus. </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornard hendrerit tortor vulputate id. Vestibulum mauris nibh, luctus non maximus vitae, porttitor eget neque. Donec tristique nunc facilisis, dapibus libero ac</p>
                                    <a class="btn btn-default" href="single-blog.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row offspace-45">
                        <div class="view-set-block">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="event-blog-image">
                                    <img alt="image" class="img-responsive" src="images/blog2.png">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 side-in-image">
                                <div class="event-blog-details">
                                    <h4><a href="single-blog.html">Lorem ipsum dolor sit amet</a></h4>
                                    <h5>Post By Admin <a><i aria-hidden="true" class="fa fa-heart-o fa-lg"></i>Likes</a><a><i aria-hidden="true" class="fa fa-comment-o fa-lg"></i>comments</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornare turpis neque, eu commodo sapien porta sed. Nam ut ante turpis. Nam arcu odio, scelerisque a vehicula vitae, auctor sit amet lectus. </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornard hendrerit tortor vulputate id. Vestibulum mauris nibh, luctus non maximus vitae, porttitor eget neque. Donec tristique nunc facilisis, dapibus libero ac</p>
                                    <a class="btn btn-default" href="single-blog.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->