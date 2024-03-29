<!doctype html>
<html lang="en">

<head>
    <title>Đặt vé xem phim nhanh nhất</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
    <script src="https://kit.fontawesome.com/5938ac041a.js"></script>
</head>

<body>


    <div class="wapper">


        <!-- button view video-box -->

        <div class="video-box text-center">
            <div class="video">
                <iframe src="https://www.youtube.com/embed/_PuuuobNsWc" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <div class="button-close">
                    <i class="fas fa-times"></i>
                </div>
            </div>

        </div>

        <!-- end button view video-box -->

        <!-- start header -->

        <header>
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <a class="navbar-brand" href="#">logo</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse"></div>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lịch chiếu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cụm rạp</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ứng dụng</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <a href="login.html">Login</a>
                    </form>
                </div>
            </nav>
        </header>

        <!-- end header -->


        <!-- start slide -->

        <div class="slide">
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo base_url() ?>images/slide/1.jpg" class="d-block w-100" alt="...">

                            <div class="button-play">
                                <img src="<?php echo base_url() ?>images/button/play-video.png" alt="">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo base_url() ?>images/slide/2.jpg" class="d-block w-100" alt="...">

                            <div class="button-play">
                                <img src="<?php echo base_url() ?>images/button/play-video.png" alt="">
                            </div>

                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo base_url() ?>images/slide/3.jpg" class="d-block w-100" alt="...">

                            <div class="button-play">
                                <img src="<?php echo base_url() ?>images/button/play-video.png" alt="">
                            </div>

                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo base_url() ?>images/slide/4.jpg" class="d-block w-100" alt="...">

                            <div class="button-play">
                                <img src="<?php echo base_url() ?>images/button/play-video.png" alt="">
                            </div>

                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- end slide -->

        <div class="muavengay">
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" id="selectfilm" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Phim
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action1</a>
                    <a class="dropdown-item" href="#">Another action1</a>
                    <a class="dropdown-item" href="#">Something else here1</a>
                </div>
                <a class="btn dropdown-toggle" href="#" role="button" id="selectrapchieu" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Rạp
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action2</a>
                    <a class="dropdown-item" href="#">Another action2</a>
                    <a class="dropdown-item" href="#">Something else here2</a>
                </div>
                <a class="btn dropdown-toggle" href="#" role="button" id="selectngayxem" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Ngày xem
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action3</a>
                    <a class="dropdown-item" href="#">Another action3</a>
                    <a class="dropdown-item" href="#">Something else here3</a>
                </div>
                <a class="btn dropdown-toggle" href="#" role="button" id="selectsuatchieu" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Ngày xem
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action4</a>
                    <a class="dropdown-item" href="#">Another action4</a>
                    <a class="dropdown-item" href="#">Something else here4</a>
                </div>
                <div class="button-muave">
                    <button class="btn">Mua vé ngay</button>
                </div>
            </div>
        </div>

        <!-- end muave ngay -->

        <!-- start list -->

        <div class="list">
            <div class="container">
                <!-- start title -->
                <div class="title text-center">
                    <a href="#" class="active">Đang Chiếu</a>
                    <a href="#">Sắp Chiếu</a>
                </div>
                <!-- end title -->
                <!-- start list film -->
                <div class="list-film">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 khoifilm">
                            <div class="img">
                                <div class="man"></div>
                                <img src="<?php echo base_url() ?>images/list-film/khoihinh.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="title-film">
                                <h6>Siêu Quậy Có Bầu - Naughty Teenager</h6>
                                <p>100 phút</p>
                            </div>
                            <div class="button-play">
                                <img src="<?php echo base_url() ?>images/button/play-video.png" alt="">
                            </div>
                            <div class="button-muave">
                                <a href="#">Mua vé</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 khoifilm">
                            <div class="img">
                                <div class="man"></div>
                                <img src="<?php echo base_url() ?>images/list-film/khoihinh2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="title-film">
                                <h6>Siêu Quậy Có Bầu - Naughty Teenager</h6>
                                <p>100 phút</p>
                            </div>
                            <div class="button-play">
                                <img src="<?php echo base_url() ?>images/button/play-video.png" alt="">
                            </div>
                            <div class="button-muave">
                                <a href="#">Mua vé</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 khoifilm">
                            <div class="img">
                                <div class="man"></div>
                                <img src="<?php echo base_url() ?>images/list-film/khoihinh2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="title-film">
                                <h6>Siêu Quậy Có Bầu - Naughty Teenager</h6>
                                <p>100 phút</p>
                            </div>
                            <div class="button-play">
                                <img src="<?php echo base_url() ?>images/button/play-video.png" alt="">
                            </div>
                            <div class="button-muave">
                                <a href="#">Mua vé</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 khoifilm">
                            <div class="img">
                                <div class="man"></div>
                                <img src="<?php echo base_url() ?>images/list-film/hinh3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="title-film">
                                <h6>Siêu Quậy Có Bầu - Naughty Teenager</h6>
                                <p>100 phút</p>
                            </div>
                            <div class="button-play">
                                <img src="<?php echo base_url() ?>images/button/play-video.png" alt="">
                            </div>
                            <div class="button-muave">
                                <a href="#">Mua vé</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 khoifilm">
                            <div class="img">
                                <div class="man"></div>
                                <img src="<?php echo base_url() ?>images/list-film/khoihinh.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="title-film">
                                <h6>Siêu Quậy Có Bầu - Naughty Teenager</h6>
                                <p>100 phút</p>
                            </div>
                            <div class="button-play">
                                <img src="<?php echo base_url() ?>images/button/play-video.png" alt="">
                            </div>
                            <div class="button-muave">
                                <a href="#">Mua vé</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 khoifilm">
                            <div class="img">
                                <div class="man"></div>
                                <img src="<?php echo base_url() ?>images/list-film/khoihinh2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="title-film">
                                <h6>Siêu Quậy Có Bầu - Naughty Teenager</h6>
                                <p>100 phút</p>
                            </div>
                            <div class="button-play">
                                <img src="<?php echo base_url() ?>images/button/play-video.png" alt="">
                            </div>
                            <div class="button-muave">
                                <a href="#">Mua vé</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 khoifilm">
                            <div class="img">
                                <div class="man"></div>
                                <img src="<?php echo base_url() ?>images/list-film/khoihinh2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="title-film">
                                <h6>Siêu Quậy Có Bầu - Naughty Teenager</h6>
                                <p>100 phút</p>
                            </div>
                            <div class="button-play">
                                <img src="<?php echo base_url() ?>images/button/play-video.png" alt="">
                            </div>
                            <div class="button-muave">
                                <a href="#">Mua vé</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 khoifilm">
                            <div class="img">
                                <div class="man"></div>
                                <img src="<?php echo base_url() ?>images/list-film/hinh3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="title-film">
                                <h6>Siêu Quậy Có Bầu - Naughty Teenager</h6>
                                <p>100 phút</p>
                            </div>
                            <div class="button-play">
                                <img src="<?php echo base_url() ?>images/button/play-video.png" alt="">
                            </div>
                            <div class="button-muave">
                                <a href="#">Mua vé</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end list film -->
            </div>

            <footer>
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="title">
                                    phim 93
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="thongtin">
                                    <ul>
                                        <li><a href="#">Thỏa thuận sử dụng</a></li>
                                        <li><a href="#">Quy chế hoạt động</a></li>
                                        <li><a href="#">Chính sách bảo mật</a></li>
                                        <li><a href="#">Quyền lợi thành viên</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="title text-left ml-2">
                                    Đối tác
                                </div>
                                <div class="list-cinema">
                                    <ul>
                                        <li><img src="<?php echo base_url() ?>images/logo/list-logo-cinema/bhd.png" alt=""></li>
                                        <li><img src="<?php echo base_url() ?>images/logo/list-logo-cinema/bt.jpg" alt=""></li>
                                        <li><img src="<?php echo base_url() ?>images/logo/list-logo-cinema/cinestar.png" alt=""></li>
                                        <li><img src="<?php echo base_url() ?>images/logo/list-logo-cinema/cnx.jpg" alt=""></li>
                                        <li><img src="<?php echo base_url() ?>images/logo/list-logo-cinema/bhd.png" alt=""></li>
                                        <li><img src="<?php echo base_url() ?>images/logo/list-logo-cinema/bt.jpg" alt=""></li>
                                        <li><img src="<?php echo base_url() ?>images/logo/list-logo-cinema/cinestar.png" alt=""></li>
                                        <li><img src="<?php echo base_url() ?>images/logo/list-logo-cinema/cnx.jpg" alt=""></li>
                                        <li><img src="<?php echo base_url() ?>images/logo/list-logo-cinema/bhd.png" alt=""></li>
                                        <li><img src="<?php echo base_url() ?>images/logo/list-logo-cinema/bt.jpg" alt=""></li>
                                        <li><img src="<?php echo base_url() ?>images/logo/list-logo-cinema/cinestar.png" alt=""></li>
                                        <li><img src="<?php echo base_url() ?>images/logo/list-logo-cinema/cnx.jpg" alt=""></li>
                                        <li><img src="<?php echo base_url() ?>images/logo/list-logo-cinema/bhd.png" alt=""></li>
                                        <li><img src="<?php echo base_url() ?>images/logo/list-logo-cinema/bt.jpg" alt=""></li>
                                        <li><img src="<?php echo base_url() ?>images/logo/list-logo-cinema/cinestar.png" alt=""></li>
                                        <li><img src="<?php echo base_url() ?>images/logo/list-logo-cinema/cnx.jpg" alt=""></li>
                                        <li><img src="<?php echo base_url() ?>images/logo/list-logo-cinema/cinestar.png" alt=""></li>
                                        <li><img src="<?php echo base_url() ?>images/logo/list-logo-cinema/cnx.jpg" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="title text-left ml-2">
                                    Mobile App
                                </div>
                                <div class="logo list-cinema">
                                    <ul>
                                        <li><img src="<?php echo base_url() ?>images/logo/apple-logo.png" alt=""></li>
                                        <li><img src="<?php echo base_url() ?>images/logo/android-logo.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="title text-left ml-2">
                                    Social
                                </div>
                                <div class="logo list-cinema">
                                    <ul>
                                        <li><img src="<?php echo base_url() ?>images/logo/facebook-logo.png" alt=""></li>
                                        <li><img src="<?php echo base_url() ?>images/logo/zalo-logo.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr class="hrfooter">

                        <div class="gioithieu">
                            <h6>Trang web được code & design by : <strong>Lương Văn Dũng</strong></h6>
                            <p>Sinh viên lớp : D16 - TH08</p>
                            <p>Email: <a href="#">dungluong0688@gmail.com</a></p>
                            <p>Trường : Đại học công nghệ sài gòn</p>
                            <p>Địa chỉ : 180 cao lỗ, phường 4, quận 8</p>
                        </div>

                    </div>
                </div>
            </footer>

            <!-- end footer -->
        </div>

    </div>


















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script src="<?php echo base_url() ?>js/main.js"></script>


</body>

</html>