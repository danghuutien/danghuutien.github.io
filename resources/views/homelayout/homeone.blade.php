<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mật ong</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.3/tailwind.min.css"
        integrity="sha512-wl80ucxCRpLkfaCnbM88y4AxnutbGk327762eM9E/rRTvY/ZGAHWMZrYUq66VQBYMIYDFpDdJAOGSLyIPHZ2IQ=="
        crossorigin="anonymous" />
    <!-- js -->

    <!-- link carousel -->
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/bulma.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.theme.default.css">
</head>

<body>
    <!-- menu -->
    <div class="navigation">
        <div class="mobilemenu">
            <div class="category">
                <a href="" class=""><img
                        src="https://mellifera.qodeinteractive.com/wp-content/uploads/2020/05/New-logo-png1.png"
                        alt=""></a>
            </div>
            <i id="mobile-menu" class="fas fa-bars text-3xl cursor-pointer p-2 text-black"></i>
        </div>
        <div id="header">
            <div class="logo">
                <img src="https://mellifera.qodeinteractive.com/wp-content/uploads/2020/05/New-logo-png1.png" alt="">
            </div>
            <nav>
                <ul class="menu">
                    <li class="">
                        <a href="" class=""> <i class="fas fa-home text-lg "></i></a>
                    </li>
                    <li class="">
                        <a href="" class="">Giới thiệu </a>

                    </li>
                    <li class="">
                        <div class="menumobie">
                            <a href="" class="">Sản phẩm </a>
                            <i id="rightarrow" class="fas fa-angle-right px-2 "></i>
                        </div>


                        <ul id="navmenu" class="submenu">
                            <li>
                                <div class="submenumobie">
                                    <a href="">
                                        Sản phẩm a
                                    </a>
                                    <i id="rightarrowsub1" class="fas fa-angle-right px-2"></i>
                                </div>

                                <ul class="submenuchild">
                                    <li>
                                        <a href="">
                                            Sản phẩm c
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Sản phẩm d
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="submenumobie">
                                    <a href="">
                                        Sản phẩm b
                                    </a>
                                    <i id="rightarrowsub2" class="fas fa-angle-right px-2"></i>
                                </div>
                                <ul class="submenuchild">
                                    <li>
                                        <a href="">
                                            Sản phẩm e
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Sản phẩm f
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Sản phẩm g
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="" class="">Công trình</a>
                    </li>
                    <li class="">
                        <a href="" class=""> Màn cho thuê</a>
                    </li>
                    <li class="">
                        <a href="" class="">Tư vấn</a>
                    </li>
                </ul>
            </nav>
        </div>


    </div>
    <!-- menu -->
    <!-- Phần Slider -->
    <!-- <div class="h-80">
        <div class="sm:col-span-12 col-span-12   text-justify mb-4" style="height: 500px;">
            <div class="tinnoibat owl-carousel owl-theme">
                @foreach($slide as $s)
                <div class="item">
                    <div class=" w-full  tinnb-img-l" style="">
                        <div>
                            <img class="zoom transform hover:-translate-y-1 hover:scale-110 " style="height: 500px;"
                                width="100%" src="/storage/{{ $s->Anh }}" alt="">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> -->
    <!-- Hết phần Slider -->

    <!--introduce  -->
    <div class="w-full grid grid-cols-12 py-10 px-20">
        <div class="sm:col-span-6 col-span-12 ">
            <p class="uppercase font-semibold text-xl font-sans text-black sm:pl-2 pl-1">
                fresh & sweet as honey
            </p>
            <h1 class="uppercase font-semibold text-6xl sm:text-8xl font-sans text-black py-4">honeybee</h1>
            <p class=" text-xl font-sans text-black text-justify sm:pl-2 pl-1">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, sint alias reprehenderit qui iusto
                voluptatibus dolore nihil id quidem, delectus beatae ad quas debitis impedit, tenetur atque nobis totam
                cupiditate.
            </p>
            <button class="uppercase font-semibold text-xl font-sans text-white p-4 mt-4 sm:ml-2 "
                style="background-color: #c74817;">
                view more
            </button>



        </div>
        <div class="sm:col-span-6 col-span-12 mt-4 sm:mt-0">
            <img class="h-96 mx-auto" src="./images/pixlr-bg-result.png" alt="">
        </div>
    </div>
    <!-- end introduce -->
    <!--related topics -->
    <div class="w-full grid grid-cols-12 py-10 px-5">

        <div class="sm:col-span-7 col-span-12 mt-4 mx-2 sm:m-0 sm:mr-3">
            <img class="w-full h-96" src="./images/gettyimages-1323603433-2048x2048.jpg" alt="">
            <h2 class="uppercase font-semibold text-3xl  font-sans text-black py-4">
                OUR MISSION
            </h2>
            <P class=" text-xl font-sans text-black pb-2">
                The bees live as they naturally would and their benefits reach more people. Our goal is to raise <b> San
                    Diego’s bee population </b> throughout the city and at the same time <b> spread awareness among the
                    community.</b>
            </P>

            <p class=" text-xl font-sans text-black py-2">
                Our hope is that these backyard hives will facilitate a dialogue among neighbours, friends, family and
                the community at large about the huge importance of bees.
            </p>
        </div>
        <div class="sm:col-span-5 col-span-12  bg-white px-10">
            <h1 class="uppercase font-semibold text-3xl font-sans text-black sm:pt-4 pt-0">
                news
            </h1>
            <div class="mt-4">
                <p class="font-sans uppercase font-semibold text-base" style="color:#c74817;"> MAY 14, 2020</p>
                <h2 class="uppercase font-bold text-xl  font-sans text-black py-4 news">
                    SWEET HONEY PACKS FRESH RAW AND UNFILTERED
                </h2>
                <p class=" text-base font-sans text-black text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, sint alias reprehenderit qui iusto

                    cupiditate.
                </p>

            </div>
            <div class="mt-4">
                <p class="font-sans uppercase font-semibold text-base" style="color:#c74817;"> MAY 14, 2020</p>
                <h2 class="uppercase font-bold text-xl  font-sans text-black py-4 news">
                    SWEET HONEY PACKS FRESH RAW AND UNFILTERED
                </h2>
                <p class=" text-base font-sans text-black text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, sint alias reprehenderit qui iusto
                    cupiditate.
                </p>
                <p></p>
            </div>
            <div class="mt-4">
                <p class="font-sans uppercase font-semibold text-base" style="color:#c74817;"> MAY 14, 2020</p>
                <h2 class="uppercase font-bold text-xl  font-sans text-black py-4 news">
                    SWEET HONEY PACKS FRESH RAW AND UNFILTERED
                </h2>
                <p class=" text-base font-sans text-black text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, sint alias reprehenderit qui iusto
                    cupiditate.
                </p>
                <p></p>
            </div>

            <div class=" my-4  flex items-center shownews">
                <a class="font-medium uppercase text-base  font-sant" href="">
                    SHOW MORE NEWS
                </a>
                <i class="fas fa-caret-right text-xl pl-2 "></i>

            </div>



        </div>
    </div>
    <!-- end related topics -->
    <!-- OUR PRODUCTS -->
    <div class="w-full grid grid-cols-12 py-10 px-5">
        <div class="col-span-12 ">
            <h2 class="uppercase font-semibold text-4xl font-sans text-black py-4 text-center">OUR PRODUCTS</h2>
            <p  class=" text-base font-sans text-black text-center mx-96">
            Check out our online shop for cute bee-themed apparel, unique bee suits, educational tools, gift certificates and more.
            </p>
        </div>
        <div class="sm:col-span-4 col-span-12">
            <img width="420" height="420" src="https://mellifera.qodeinteractive.com/wp-content/uploads/2020/04/Shop-list-img1-600x600.jpg" alt="">
            <h3 class="uppercase font-semibold text-3xl  font-sans text-black py-4">
            HEATHER HONEY
            </h3>
            <p class="uppercase font-bold text-xl  font-sans text-black py-4 news">
            $10.00
            </p>
            <p class="uppercase  text-xl  font-sans text-black py-4 news">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
            </p>
        </div>
    </div>
    <!-- end OUR PRODUCTS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/owl.carousel.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/index.js"></script>
    <script>
    var header = document.getElementById('header');
    var mobileMenu = document.getElementById('mobile-menu');
    var rightArrow = document.getElementById('rightarrow');
    var navMenu = document.getElementById('navmenu');

    mobileMenu.onclick = function() {
        var isClosed = header.style.display === '';
        if (isClosed) {
            header.style.display = 'block';
        } else {
            header.style.display = '';
        }


    }
    rightArrow.onclick = function() {
        var isClosed = navMenu.style.display === '';

        if (isClosed) {
            navMenu.style.display = 'block';
            rightArrow.style.transform = "rotate(90deg)";
            rightArrow.style.transition = "0.6s ease-out";
        } else {
            navMenu.style.display = '';
            rightArrow.style.transform = "rotate(0deg)";
            rightArrow.style.transition = "0.6s ease-out";

        }
    }
    </script>
    <script>
    $('.tinnoibat').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        items: 1,
        dots: false,

    });
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 5,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true
    });
    </script>
</body>

</html>