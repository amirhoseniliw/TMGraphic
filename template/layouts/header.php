
<link rel="stylesheet" href="<?= asset('public/css/style.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/css/bootstrap.rtl.min.css') ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<header class="">

<nav class="navbar_bg navbar navbar-expand-xl position-fixed w-100 px-xl-5 px-3 d-flex align-items-center justify-content-between py-4" style="z-index: 20;">
    <a href="#header_content" class="navbar-brand text-light d-flex justify-content-center align-items-center column-gap-2">
        <img src="<?= asset('public/img/Logos/Logo.png')?>" width="50" class="logo_size" alt="">
        <span style="font-weight: 500;" class="fs-4">TM grathic</span>
    </a>
    <ul class="navbar-nav d-none d-sm-none d-xl-flex flex-row-reverse column-gap-5">
        <li class="nav-item">
            <a href="#Logos" class="btn_link_header text-decoration-none px-3 py-2">لوگوها</a>
        </li>
        <li class="nav-item">
            <a href="#Posts" class="btn_link_header text-decoration-none px-3 py-2">استوری ها</a>
        </li>
        <li class="nav-item">
            <a href="#Banners" class="btn_link_header text-decoration-none px-3 py-2">بنرها</a>
        </li>
        <li class="nav-item">
            <a href="#visiting_card" class="btn_link_header text-decoration-none px-3 py-2">کارت ویزیت</a>
        </li>
        <li class="nav-item">
            <a href="#Photomontage" class="btn_link_header text-decoration-none px-3 py-2">فتومونتاژ</a>
        </li>
    </ul>
    <a href="#" data-bs-toggle="modal" data-bs-target="#aboutModal" class="btn_about_st d-xl-flex d-none bg_color_basic text- px-5 py-2 text-decoration-none rounded-2">درباره ما</a>

    <button class="navbar-toggler border-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-box">
        <img src="<?= asset('public/img/icon/Burger Menu.png')?>" alt="">
    </button>
    <div class="offcanvas offcanvas-start d-xl-none d-flex d-sm-flex px-3 offcanvas-box" id="offcanvas-box"
        style="height: 100vh;">
        <div class="d-flex align-items-center mt-2 justify-content-between py-1">
            <a href="#header_content"
                class="navbar-brand text-light d-flex align-items-center column-gap-2">
                <img src="<?= asset('public/img/icon/Storefront-2.png')?>" alt="">
                <span style="font-weight: 500;">TM grathic</span>
            </a>
            <button class="btn-close" data-bs-toggle="offcanvas"></button>
        </div>
        <hr style="width: 80%;" class="mx-auto shadow">
        <ul class="navbar-nav d-flex row-gap-2 d-sm-flex d-xxl-none column-gap-3 flex-column-reverse">
            <li class="nav-item">
                <a href="#about_TM" data-bs-target="#aboutModal" data-bs-toggle="modal" class="d-flex btn_about text-light px-2 py-2 text-decoration-none rounded-2">درباره ما</a>
            </li>
            <hr style="width: 80%;" class="mx-auto shadow">
            <li class="nav-item">
                <a href="#Logos" class="nav-link text-light rounded-3 px-2">لوگو</a>
            </li>
            <li class="nav-item">
                <a href="#Posts" class="nav-link text-light rounded-3 px-2 active">استوری ها</a>
            </li>
            <li class="nav-item">
                <a href="#Banners" class="nav-link text-light rounded-3 px-2 active">بنرها</a>
            </li>
            <li class="nav-item">
                <a href="#visiting_card" class="nav-link text-light rounded-3 px-2">کارت ویزیت</a>
            </li>
            <li class="nav-item">
                <a href="#Photomontage" class="nav-link text-light rounded-3 px-2 active">فتومونتاژ</a>
            </li>
        </ul>
    </div>
</nav>

<div id="header_content" class="header_content position-relative">

</div>

</header>