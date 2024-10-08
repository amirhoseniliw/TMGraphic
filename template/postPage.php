<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>postPage</title>
    <link rel="stylesheet" href="<?= asset('public/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= asset('public/css/style.css')?>">
</head>
<body class="background_color">

    <header class="">

        <nav class="navbar_bg navbar navbar-expand-xl position-fixed w-100 px-xl-5 px-3 d-flex align-items-center justify-content-between py-4"
            style="z-index: 20;">
            <a href=" <?= url('EN')?>"
                class="navbar-brand text-light d-flex justify-content-center align-items-center column-gap-2">
                <img src="<?= asset('public/img/Logos/Logo.png')?>" width="50" class="logo_size" alt="">
                <span style="font-weight: 500;" class="fs-4">TM grathic</span>
            </a>
            <ul class="navbar-nav d-none d-sm-none d-xl-flex flex-row-reverse column-gap-5">
                <li class="nav-item">
                    <a href=" " class="btn_link_header text-decoration-none px-2 py-2">Logos</a>
                </li>
                <li class="nav-item">
                    <a href="" class="btn_link_header text-decoration-none px-2 py-2">Storys</a>
                </li>
                <li class="nav-item">
                    <a href="" class="btn_link_header text-decoration-none px-2 py-2">Banners</a>
                </li>
                <li class="nav-item">
                    <a href=" " class="btn_link_header text-decoration-none px-2 py-2">Visiting
                        card</a>
                </li>
                <li class="nav-item">
                    <a href=" " class="btn_link_header text-decoration-none px-2 py-2">Photomontage</a>
                </li>
            </ul>
            <a href="#" data-bs-toggle="modal" data-bs-target="#aboutModal"
                class="btn_about_st d-xl-flex d-none bg_color_basic text- px-5 py-2 text-decoration-none rounded-2">about</a>

            <button class="navbar-toggler border-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-box">
                <img src="<?= asset('public/img/icon/Burger Menu.png')?>" alt="">
            </button>
            <div class="offcanvas offcanvas-start d-xl-none d-flex d-sm-flex px-3 offcanvas-box" id="offcanvas-box"
                style="height: 100vh;">
                <div class="d-flex align-items-center mt-2 justify-content-between py-1">
                    <a href=" <?= url('EN')?>"
                        class="navbar-brand text-light d-flex align-items-center column-gap-2">
                        <img src="<?= asset('public/img/icon/Storefront-2.png')?>" alt="">
                        <span style="font-weight: 500;">TM grathic</span>
                    </a>
                    <button class="btn-close" data-bs-toggle="offcanvas"></button>
                </div>
                <hr style="width: 80%;" class="mx-auto shadow">
                <ul class="navbar-nav d-flex row-gap-2 d-sm-flex d-xxl-none column-gap-3 flex-column-reverse">
                    <hr style="width: 80%;" class="mx-auto shadow">
                    <li class="nav-item">
                        <a href=" " class="nav-link text-light rounded-3 px-2">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a href=" " class="nav-link text-light rounded-3 px-2">Logos</a>
                    </li>
                    <li class="nav-item">
                        <a href=" " class="nav-link text-light rounded-3 px-2 active">Storys</a>
                    </li>
                    <li class="nav-item">
                        <a href=" " class="nav-link text-light rounded-3 px-2 active">Banners</a>
                    </li>
                    <li class="nav-item">
                        <a href=" " class="nav-link text-light rounded-3 px-2">Visiting card</a>
                    </li>
                    <li class="nav-item">
                        <a href=" " class="nav-link text-light rounded-3 px-2 active">Photomontage</a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>

    <div class="modal fade text-light" id="aboutModal" tabindex="-1" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-dialog-centered modal_lg_one modal-dialog-scrollable">
            <div class="modal-content background_color_two">
                <div class="modal-header py-2" style="border-color: #c2c2c276;">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">About</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 col-12">
                            <div class="d-flex justify-content-center align-items-center flex-column row-gap-2">
                                <div class="logo_box_about">
                                    <img src="<?= asset('public/img/icon/Storefront.png')?>" width="200" alt="">
                                </div>
                                <div class="d-flex justify-content-center align-items-center flex-column">
                                    <span class="fs-4">TM Graphic</span>
                                    <span class="fs-6">
                                        <a href="#" class="text-light text-decoration-none">TM Graphic@gmail.com</a>
                                    </span>
                                </div>
                                <div class="box-Specialties-grop bg_box_special w-75 rounded-4 py-4 px-2 mt-3">
                                    <div class="row row-gap-3">
                                        <div class="col-4 d-flex justify-content-center align-items-center">
                                            <div class="d-flex justify-content-center align-items-center img_size_soecial">
                                                <img src="./img/icon/icons8-photoshop-96.png" style="width: 100%;"  alt="">
                                            </div>
                                        </div>
                                        <div class="col-4 d-flex justify-content-center align-items-center">
                                            <div class="d-flex justify-content-center align-items-center img_size_soecial">
                                                <img src="./img/icon/icons8-illustrator-96.png" style="width: 100%;"  alt="">
                                            </div>
                                        </div>
                                        <div class="col-4 d-flex justify-content-center align-items-center">
                                            <div class="d-flex justify-content-center align-items-center img_size_soecial">
                                                <img src="./img/icon/icons8-photoshop-96.png" style="width: 100%;"  alt="">
                                            </div>
                                        </div>
                                        <div class="col-4 d-flex justify-content-center align-items-center">
                                            <div class="d-flex justify-content-center align-items-center img_size_soecial">
                                                <img src="./img/icon/icons8-illustrator-96.png" style="width: 100%;"  alt="">
                                            </div>
                                        </div>
                                        <div class="col-4 d-flex justify-content-center align-items-center">
                                            <div class="d-flex justify-content-center align-items-center img_size_soecial">
                                                <img src="./img/icon/icons8-photoshop-96.png" style="width: 100%;"  alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-Specialties-grop bg_box_special w-75 rounded-4 py-4 px-2 mt-3">
                                    <div class="row row-gap-3">
                                        <div class="col-4 d-flex justify-content-center align-items-center">
                                            <div class="d-flex justify-content-center align-items-center img_size_soecial">
                                                <a href="https://t.me/Mahdi_abbasi0" class="text-decoration-none fs-5 text-light-50">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" class="tel_shadow" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 512">
                                                        <defs>
                                                            <linearGradient id="" gradientUnits="userSpaceOnUse" x1="256" y1="3.84" x2="256" y2="512">
                                                                <stop offset="0" stop-color="#2AABEE"></stop>
                                                                <stop offset="1" stop-color="#229ED9"></stop>
                                                            </linearGradient>
                                                        </defs>
                                                        <circle fill="url(#prefix__a)" cx="256" cy="256" r="256"></circle>
                                                        <path fill="#fff" d="M115.88 253.3c74.63-32.52 124.39-53.95 149.29-64.31 71.1-29.57 85.87-34.71 95.5-34.88 2.12-.03 6.85.49 9.92 2.98 2.59 2.1 3.3 4.94 3.64 6.93.34 2 .77 6.53.43 10.08-3.85 40.48-20.52 138.71-29 184.05-3.59 19.19-10.66 25.62-17.5 26.25-14.86 1.37-26.15-9.83-40.55-19.27-22.53-14.76-35.26-23.96-57.13-38.37-25.28-16.66-8.89-25.81 5.51-40.77 3.77-3.92 69.27-63.5 70.54-68.9.16-.68.31-3.2-1.19-4.53s-3.71-.87-5.3-.51c-2.26.51-38.25 24.3-107.98 71.37-10.22 7.02-19.48 10.43-27.77 10.26-9.14-.2-26.72-5.17-39.79-9.42-16.03-5.21-28.77-7.97-27.66-16.82.57-4.61 6.92-9.32 19.04-14.14z"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4 d-flex justify-content-center align-items-center">
                                            <div class="d-flex justify-content-center align-items-center img_size_soecial">
                                                <a href="https://www.linkedin.com/in/abbasiimahdi" class="text-decoration-none fs-5 text-light-50">
                                                    <svg id="Layer_1" width="50" class="linkedin_shadow" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 122.31">
                                                        <defs>
                                                            <style>
                                                                .cls-1 {
                                                                    fill: #0a66c2;
                                                                }
                
                                                                .cls-1,
                                                                .cls-2 {
                                                                    fill-rule: evenodd;
                                                                }
                
                                                                .cls-2 {
                                                                    fill: #fff;
                                                                }
                                                            </style>
                                                        </defs>
                                                        <title>linkedin-app</title>
                                                        <path class="cls-1" d="M27.75,0H95.13a27.83,27.83,0,0,1,27.75,27.75V94.57a27.83,27.83,0,0,1-27.75,27.74H27.75A27.83,27.83,0,0,1,0,94.57V27.75A27.83,27.83,0,0,1,27.75,0Z"></path>
                                                        <path class="cls-2" d="M49.19,47.41H64.72v8h.22c2.17-3.88,7.45-8,15.34-8,16.39,0,19.42,10.2,19.42,23.47V98.94H83.51V74c0-5.71-.12-13.06-8.42-13.06s-9.72,6.21-9.72,12.65v25.4H49.19V47.41ZM40,31.79a8.42,8.42,0,1,1-8.42-8.42A8.43,8.43,0,0,1,40,31.79ZM23.18,47.41H40V98.94H23.18V47.41Z"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-4 d-flex justify-content-center align-items-center">
                                            <div class="d-flex justify-content-center align-items-center img_size_soecial">
                                                <a href="https://www.instagram.com/mahdi.marandi.orginal?igsh=Y2d4bTZpbjZoNzZ2" class="text-decoration-none fs-5 text-light-50">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" class="ins_shadow" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 132.004 132">
                                                        <defs>
                                                            <linearGradient id=">
                                                                <stop offset="0" stop-color="#3771c8"></stop>
                                                                <stop stop-color="#3771c8" offset=".128"></stop>
                                                                <stop offset="1" stop-color="#60f" stop-opacity="0"></stop>
                                                            </linearGradient>
                                                            <linearGradient id="">
                                                                <stop offset="0" stop-color="#fd5"></stop>
                                                                <stop offset=".1" stop-color="#fd5"></stop>
                                                                <stop offset=".5" stop-color="#ff543e"></stop>
                                                                <stop offset="1" stop-color="#c837ab"></stop>
                                                            </linearGradient>
                                                            <radialGradient id="" cx="158.429" cy="578.088" r="65" xlink:href="#a" gradientUnits="userSpaceOnUse" gradientTransform="matrix(0 -1.98198 1.8439 0 -1031.402 454.004)" fx="158.429" fy="578.088"></radialGradient>
                                                            <radialGradient id="" cx="147.694" cy="473.455" r="65" xlink:href="#b" gradientUnits="userSpaceOnUse" gradientTransform="matrix(.17394 .86872 -3.5818 .71718 1648.348 -458.493)" fx="147.694" fy="473.455"></radialGradient>
                                                        </defs>
                                                        <path fill="url(#c)" d="M65.03 0C37.888 0 29.95.028 28.407.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468C4 13.126 1.5 18.394.595 24.656c-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28 7.79-2.01 14.24-7.29 17.75-14.53 1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624C116.9 4 111.64 1.5 105.372.596 102.335.157 101.73.027 86.19 0H65.03z" transform="translate(1.004 1)"></path>
                                                        <path fill="url(#d)" d="M65.03 0C37.888 0 29.95.028 28.407.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468C4 13.126 1.5 18.394.595 24.656c-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28 7.79-2.01 14.24-7.29 17.75-14.53 1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624C116.9 4 111.64 1.5 105.372.596 102.335.157 101.73.027 86.19 0H65.03z" transform="translate(1.004 1)"></path>
                                                        <path fill="#fff" d="M66.004 18c-13.036 0-14.672.057-19.792.29-5.11.234-8.598 1.043-11.65 2.23-3.157 1.226-5.835 2.866-8.503 5.535-2.67 2.668-4.31 5.346-5.54 8.502-1.19 3.053-2 6.542-2.23 11.65C18.06 51.327 18 52.964 18 66s.058 14.667.29 19.787c.235 5.11 1.044 8.598 2.23 11.65 1.227 3.157 2.867 5.835 5.536 8.503 2.667 2.67 5.345 4.314 8.5 5.54 3.054 1.187 6.543 1.996 11.652 2.23 5.12.233 6.755.29 19.79.29 13.037 0 14.668-.057 19.788-.29 5.11-.234 8.602-1.043 11.656-2.23 3.156-1.226 5.83-2.87 8.497-5.54 2.67-2.668 4.31-5.346 5.54-8.502 1.18-3.053 1.99-6.542 2.23-11.65.23-5.12.29-6.752.29-19.788 0-13.036-.06-14.672-.29-19.792-.24-5.11-1.05-8.598-2.23-11.65-1.23-3.157-2.87-5.835-5.54-8.503-2.67-2.67-5.34-4.31-8.5-5.535-3.06-1.187-6.55-1.996-11.66-2.23-5.12-.233-6.75-.29-19.79-.29zm-4.306 8.65c1.278-.002 2.704 0 4.306 0 12.816 0 14.335.046 19.396.276 4.68.214 7.22.996 8.912 1.653 2.24.87 3.837 1.91 5.516 3.59 1.68 1.68 2.72 3.28 3.592 5.52.657 1.69 1.44 4.23 1.653 8.91.23 5.06.28 6.58.28 19.39s-.05 14.33-.28 19.39c-.214 4.68-.996 7.22-1.653 8.91-.87 2.24-1.912 3.835-3.592 5.514-1.68 1.68-3.275 2.72-5.516 3.59-1.69.66-4.232 1.44-8.912 1.654-5.06.23-6.58.28-19.396.28-12.817 0-14.336-.05-19.396-.28-4.68-.216-7.22-.998-8.913-1.655-2.24-.87-3.84-1.91-5.52-3.59-1.68-1.68-2.72-3.276-3.592-5.517-.657-1.69-1.44-4.23-1.653-8.91-.23-5.06-.276-6.58-.276-19.398s.046-14.33.276-19.39c.214-4.68.996-7.22 1.653-8.912.87-2.24 1.912-3.84 3.592-5.52 1.68-1.68 3.28-2.72 5.52-3.592 1.692-.66 4.233-1.44 8.913-1.655 4.428-.2 6.144-.26 15.09-.27zm29.928 7.97c-3.18 0-5.76 2.577-5.76 5.758 0 3.18 2.58 5.76 5.76 5.76 3.18 0 5.76-2.58 5.76-5.76 0-3.18-2.58-5.76-5.76-5.76zm-25.622 6.73c-13.613 0-24.65 11.037-24.65 24.65 0 13.613 11.037 24.645 24.65 24.645C79.617 90.645 90.65 79.613 90.65 66S79.616 41.35 66.003 41.35zm0 8.65c8.836 0 16 7.163 16 16 0 8.836-7.164 16-16 16-8.837 0-16-7.164-16-16 0-8.837 7.163-16 16-16z"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 mt-sm-0 mt-4 d-flex justify-content-center align-items-start">
                            <div class="w-75">
                                <span class="fs-6 lh-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione suscipit magnam exercitationem! Dolores nulla officia consectetur doloremque ipsa iure dolor, culpa repellendus architecto quis? Recusandae repudiandae qui consequatur voluptatem distinctio provident et eum blanditiis aperiam, cum unde velit corporis? Reiciendis rem facilis unde nostrum ullam culpa delectus quibusdam? Odio iure eveniet, amet quas atque dolor unde fugit nostrum laboriosam veritatis!</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border-color: #c2c2c276;">
                    <div class="d-flex justify-content-lg-end justify-content-center align-items-center w-100 h-100">
                        <button type="button" class="btn btn-secondary px-5" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="bannerCard">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content background_color_two">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-12 background_color">
                        <div class="h-100">
                            <div class="modal-header border-0 h-100" style="border-color: #c2c2c276;">
                                <div class="d-flex justify-content-center w-100 align-items-cente rounded-4 overflow-hidden">
                                    <img id="img-banner-card" src="img/instagram-stories-template-with-online-shopping_23-2148545458.jpg" id="img-visiting-card" class="img-visiting-card" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-12 py-3 background_color_two">
                        <div class="modal-body body_size">
                            <div class="h-100 w-100 mt-1 d-flex justify-content-start align-items-start flex-column row-gap-2">
                                <span id="title" class="fs_title_modal title_modla text-light">hello world</span>
                                <span id="sub_title" class="fs_sub_title_modal sub_title_modla lh-lg text-light-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus fugit ipsam explicabo voluptates accusantium iure necessitatibus magni voluptatem, mollitia eaque provident magnam nam doloribus rem quia quis suscipit beatae unde?</span>
                            </div>
                        </div>
                        <div class="modal-footer border-0" style="border-color: #c2c2c276; width: 100%; height: 15%;">
                            <!-- <button type="button" class="btn btn-secondary px-5"data-bs-dismiss="modal">Close</button> -->
                            <div class="btn_view_ankings d-flex w-100 h_btn_modal">
                                <a href="#" data-bs-dismiss="modal" class="btn bg_color_basic w-100 d-block px-4 py-4 rounded-4 d-flex justify-content-center align-items-center flex-row column-gap-3">
                                    <span class="fs-4 text-light">Close</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main>
        <div class="box_title_page_logo text-light d-flex justify-content-center align-items-center">
            <div class="title_page_banner w-75 d-flex justify-content-center flex-column row-gap-2">
                <span class="fs-1">Browse Marketplace</span>
                <p class="fs-4">Browse through more than 50k NFTs on the NFT Marketplace.</p>
            </div>
        </div>

        <!-- <div class="title_section_logo">
            <div class="py-4 border_color_logo d-flex justify-content-center align-items-center">
                <a href="#" class="btn_title_logo active text-decoration-none text-light py-2 d-flex justify-content-center align-items-center title_logo_item">Logo</a>
            </div>
        </div> -->

        <div class="content_logo_box">
            <div class="browse_categories py-5 container-lg container-fluid">
                <div class="row row-gap-5 banner_box_content">

                </div>
            </div>
        </div>
    </main>

    <footer id="about_TM" class="background_color_two py-5 mt-5">
        <div class="row container-lg container-fluid mx-auto">
            <div class="col-12 col-lg-4 mt-lg-0 mt-5">
                <div class="px-xl-4 px-0">
                    <a class="navbar-brand text-light d-flex align-items-center column-gap-2">
                        <img src="<?= asset('public/img/Logos/Logo.png')?>" width="45" class="logo_size" alt="">
                        <span style="font-weight: 500;" class="fs-3">TM Graphic</span>
                    </a>
                    <ul class="list-group mt-4 row-gap-4">
                        <li class="list-unstyled text_shadow_footer">
                            <span class="text-decoration-none fs-6 text-light-50">NFT marketplace UI created with
                                Anima for Figma</span>
                        </li>
                        <li class="list-unstyled text_shadow_footer">
                            <span class="text-decoration-none fs-6 text-light-50">NFT marketplace UI created with
                                Anima for Figma</span>
                        </li>
                        <li class="list-unstyled d-flex flex-row column-gap-3">
                            <a href="https://t.me/Mahdi_abbasi0" class="text-decoration-none fs-5 text-light-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" class="tel_shadow"
                                    shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                                    image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                                    viewBox="0 0 512 512">
                                    <defs>
                                        <linearGradient id="prefix__a" gradientUnits="userSpaceOnUse" x1="256"
                                            y1="3.84" x2="256" y2="512">
                                            <stop offset="0" stop-color="#2AABEE" />
                                            <stop offset="1" stop-color="#229ED9" />
                                        </linearGradient>
                                    </defs>
                                    <circle fill="url(#prefix__a)" cx="256" cy="256" r="256" />
                                    <path fill="#fff"
                                        d="M115.88 253.3c74.63-32.52 124.39-53.95 149.29-64.31 71.1-29.57 85.87-34.71 95.5-34.88 2.12-.03 6.85.49 9.92 2.98 2.59 2.1 3.3 4.94 3.64 6.93.34 2 .77 6.53.43 10.08-3.85 40.48-20.52 138.71-29 184.05-3.59 19.19-10.66 25.62-17.5 26.25-14.86 1.37-26.15-9.83-40.55-19.27-22.53-14.76-35.26-23.96-57.13-38.37-25.28-16.66-8.89-25.81 5.51-40.77 3.77-3.92 69.27-63.5 70.54-68.9.16-.68.31-3.2-1.19-4.53s-3.71-.87-5.3-.51c-2.26.51-38.25 24.3-107.98 71.37-10.22 7.02-19.48 10.43-27.77 10.26-9.14-.2-26.72-5.17-39.79-9.42-16.03-5.21-28.77-7.97-27.66-16.82.57-4.61 6.92-9.32 19.04-14.14z" />
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/in/abbasiimahdi"
                                class="text-decoration-none fs-5 text-light-50">
                                <svg id="Layer_1" width="40" class="linkedin_shadow" data-name="Layer 1"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 122.31">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #0a66c2;
                                            }

                                            .cls-1,
                                            .cls-2 {
                                                fill-rule: evenodd;
                                            }

                                            .cls-2 {
                                                fill: #fff;
                                            }
                                        </style>
                                    </defs>
                                    <title>linkedin-app</title>
                                    <path class="cls-1"
                                        d="M27.75,0H95.13a27.83,27.83,0,0,1,27.75,27.75V94.57a27.83,27.83,0,0,1-27.75,27.74H27.75A27.83,27.83,0,0,1,0,94.57V27.75A27.83,27.83,0,0,1,27.75,0Z" />
                                    <path class="cls-2"
                                        d="M49.19,47.41H64.72v8h.22c2.17-3.88,7.45-8,15.34-8,16.39,0,19.42,10.2,19.42,23.47V98.94H83.51V74c0-5.71-.12-13.06-8.42-13.06s-9.72,6.21-9.72,12.65v25.4H49.19V47.41ZM40,31.79a8.42,8.42,0,1,1-8.42-8.42A8.43,8.43,0,0,1,40,31.79ZM23.18,47.41H40V98.94H23.18V47.41Z" />
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/mahdi.marandi.orginal?igsh=Y2d4bTZpbjZoNzZ2"
                                class="text-decoration-none fs-5 text-light-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" class="ins_shadow"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 132.004 132">
                                    <defs>
                                        <linearGradient id="b">
                                            <stop offset="0" stop-color="#3771c8" />
                                            <stop stop-color="#3771c8" offset=".128" />
                                            <stop offset="1" stop-color="#60f" stop-opacity="0" />
                                        </linearGradient>
                                        <linearGradient id="a">
                                            <stop offset="0" stop-color="#fd5" />
                                            <stop offset=".1" stop-color="#fd5" />
                                            <stop offset=".5" stop-color="#ff543e" />
                                            <stop offset="1" stop-color="#c837ab" />
                                        </linearGradient>
                                        <radialGradient id="c" cx="158.429" cy="578.088" r="65" xlink:href="#a"
                                            gradientUnits="userSpaceOnUse"
                                            gradientTransform="matrix(0 -1.98198 1.8439 0 -1031.402 454.004)"
                                            fx="158.429" fy="578.088" />
                                        <radialGradient id="d" cx="147.694" cy="473.455" r="65" xlink:href="#b"
                                            gradientUnits="userSpaceOnUse"
                                            gradientTransform="matrix(.17394 .86872 -3.5818 .71718 1648.348 -458.493)"
                                            fx="147.694" fy="473.455" />
                                    </defs>
                                    <path fill="url(#c)"
                                        d="M65.03 0C37.888 0 29.95.028 28.407.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468C4 13.126 1.5 18.394.595 24.656c-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28 7.79-2.01 14.24-7.29 17.75-14.53 1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624C116.9 4 111.64 1.5 105.372.596 102.335.157 101.73.027 86.19 0H65.03z"
                                        transform="translate(1.004 1)" />
                                    <path fill="url(#d)"
                                        d="M65.03 0C37.888 0 29.95.028 28.407.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468C4 13.126 1.5 18.394.595 24.656c-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28 7.79-2.01 14.24-7.29 17.75-14.53 1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624C116.9 4 111.64 1.5 105.372.596 102.335.157 101.73.027 86.19 0H65.03z"
                                        transform="translate(1.004 1)" />
                                    <path fill="#fff"
                                        d="M66.004 18c-13.036 0-14.672.057-19.792.29-5.11.234-8.598 1.043-11.65 2.23-3.157 1.226-5.835 2.866-8.503 5.535-2.67 2.668-4.31 5.346-5.54 8.502-1.19 3.053-2 6.542-2.23 11.65C18.06 51.327 18 52.964 18 66s.058 14.667.29 19.787c.235 5.11 1.044 8.598 2.23 11.65 1.227 3.157 2.867 5.835 5.536 8.503 2.667 2.67 5.345 4.314 8.5 5.54 3.054 1.187 6.543 1.996 11.652 2.23 5.12.233 6.755.29 19.79.29 13.037 0 14.668-.057 19.788-.29 5.11-.234 8.602-1.043 11.656-2.23 3.156-1.226 5.83-2.87 8.497-5.54 2.67-2.668 4.31-5.346 5.54-8.502 1.18-3.053 1.99-6.542 2.23-11.65.23-5.12.29-6.752.29-19.788 0-13.036-.06-14.672-.29-19.792-.24-5.11-1.05-8.598-2.23-11.65-1.23-3.157-2.87-5.835-5.54-8.503-2.67-2.67-5.34-4.31-8.5-5.535-3.06-1.187-6.55-1.996-11.66-2.23-5.12-.233-6.75-.29-19.79-.29zm-4.306 8.65c1.278-.002 2.704 0 4.306 0 12.816 0 14.335.046 19.396.276 4.68.214 7.22.996 8.912 1.653 2.24.87 3.837 1.91 5.516 3.59 1.68 1.68 2.72 3.28 3.592 5.52.657 1.69 1.44 4.23 1.653 8.91.23 5.06.28 6.58.28 19.39s-.05 14.33-.28 19.39c-.214 4.68-.996 7.22-1.653 8.91-.87 2.24-1.912 3.835-3.592 5.514-1.68 1.68-3.275 2.72-5.516 3.59-1.69.66-4.232 1.44-8.912 1.654-5.06.23-6.58.28-19.396.28-12.817 0-14.336-.05-19.396-.28-4.68-.216-7.22-.998-8.913-1.655-2.24-.87-3.84-1.91-5.52-3.59-1.68-1.68-2.72-3.276-3.592-5.517-.657-1.69-1.44-4.23-1.653-8.91-.23-5.06-.276-6.58-.276-19.398s.046-14.33.276-19.39c.214-4.68.996-7.22 1.653-8.912.87-2.24 1.912-3.84 3.592-5.52 1.68-1.68 3.28-2.72 5.52-3.592 1.692-.66 4.233-1.44 8.913-1.655 4.428-.2 6.144-.26 15.09-.27zm29.928 7.97c-3.18 0-5.76 2.577-5.76 5.758 0 3.18 2.58 5.76 5.76 5.76 3.18 0 5.76-2.58 5.76-5.76 0-3.18-2.58-5.76-5.76-5.76zm-25.622 6.73c-13.613 0-24.65 11.037-24.65 24.65 0 13.613 11.037 24.645 24.65 24.645C79.617 90.645 90.65 79.613 90.65 66S79.616 41.35 66.003 41.35zm0 8.65c8.836 0 16 7.163 16 16 0 8.836-7.164 16-16 16-8.837 0-16-7.164-16-16 0-8.837 7.163-16 16-16z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-3 mt-lg-0 mt-5">
                <div class="px-xl-4 px-0">
                    <div>
                        <span class="fs-3 text-light">portfolio</span>
                    </div>
                    <ul class="list-group mt-4 row-gap-3">
                        <li class="list-unstyled text_shadow_footer">
                            <a href=" " class="text-decoration-none fs-6 text-light-50">Photomontage</a>
                        </li>
                        <li class="list-unstyled text_shadow_footer">
                            <a href=" " class="text-decoration-none fs-6 text-light-50">Visiting
                                card</a>
                        </li>
                        <li class="list-unstyled text_shadow_footer">
                            <a href=" " class="text-decoration-none fs-6 text-light-50">Banners</a>
                        </li>
                        <li class="list-unstyled text_shadow_footer">
                            <a href=" " class="text-decoration-none fs-6 text-light-50">Storys</a>
                        </li>
                        <li class="list-unstyled text_shadow_footer">
                            <a href=" " class="text-decoration-none fs-6 text-light-50">Logos</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-5 mt-lg-0 mt-5">
                <div class="px-xl-4 px-0">
                    <div>
                        <span class="fs-3 text-light">Join our weekly digest</span>
                    </div>
                    <ul class="list-group mt-4">
                        <li class="list-unstyled text_shadow_footer">
                            <a href="#" class="text-decoration-none fs-6 text-light-50">Get exclusive promotions &
                                updates straight to your inbox.</a>
                        </li>
                        <li class="list-unstyled">
                            <form class="input-group d-sm-flex d-none mt-4">
                                <input type="text" class="form-control border-0 input_group_box"
                                    placeholder="Enter Your Email Address">
                                <button
                                    class="input-group-text border-0 text-light fs-6 px-4 py-3 rounded-end-3 bg_color_basic d-flex flex-row justify-content-center align-items-center column-gap-lg-2 column-gap-1">
                                    <img src="<?= asset('public/img/icon/EnvelopeSimple.png')?>" width="20" alt="">
                                    <span>Subscribe</span>
                                </button>
                            </form>
                            <form class="d-sm-none d-flex flex-column mt-4 row-gap-4 w-100">
                                <input type="text" class="form-control py-2 px-3 rounded-pill"
                                    placeholder="Enter Your Email Address">
                                <button
                                    class="btn py-2 bg_color_basic text-light fs-6 rounded-pill d-flex flex-row justify-content-center align-items-center column-gap-lg-2 column-gap-1">
                                    <img src="<?= asset('public/img/icon/EnvelopeSimple.png')?>" width="20" alt="">
                                    <span>Subscribe</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="container-lg container-fluid mx-auto text-light-50 mt-5" />
        <div class="container-lg container-fluid mx-auto d-flex flex-row column-gap-2 text-light-50">
            <xml version="1.0" encoding="utf-8"?><svg version="1.1" width="20" id="Layer_1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 122.88 122.72" style="enable-background:new 0 0 122.88 122.72" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                    }
                </style>
                <g>
                    <path class="st0"
                        d="M89.34,46.85L76.2,49.97c-2.85-7.47-7.61-11.23-14.29-11.23c-5.12,0-9.15,1.97-12.05,5.94 c-2.93,3.94-4.38,9.23-4.38,15.8c0,5.17,0.6,9.56,1.83,13.12c1.23,3.56,3.04,6.21,5.42,8.02c2.38,1.78,5.23,2.68,8.54,2.68 c7.37,0,12.4-4.6,15.09-13.8l12.98,4.41C85.07,88.82,75.6,95.78,60.95,95.78c-5.23,0-10.13-1.29-14.65-3.86 c-4.52-2.55-8.13-6.46-10.87-11.69c-2.71-5.26-4.08-11.5-4.08-18.78c0-6.79,1.26-12.73,3.78-17.85c2.49-5.09,6.11-9.06,10.79-11.91 c4.68-2.82,10.16-4.24,16.48-4.24C75.65,27.43,84.63,33.9,89.34,46.85L89.34,46.85z M61.44,0c8.38,0,16.32,1.56,23.79,4.68 c7.45,3.15,14.02,7.56,19.71,13.25c5.7,5.69,10.1,12.27,13.25,19.71c3.12,7.47,4.68,15.39,4.68,23.79c0,11.01-2.77,21.25-8.3,30.67 c-5.53,9.45-13.01,16.92-22.42,22.4c-9.42,5.48-19.66,8.21-30.72,8.21c-11.23,0-21.55-2.74-30.91-8.19 c-9.39-5.45-16.84-12.9-22.31-22.34C2.74,82.77,0,72.5,0,61.44c0-11.12,2.74-21.41,8.21-30.83c5.48-9.45,12.95-16.92,22.4-22.4 C40.03,2.74,50.32,0,61.44,0L61.44,0z M61.44,12.05c-9.04,0-17.33,2.22-24.83,6.65c-7.5,4.44-13.47,10.43-17.88,17.99 c-4.41,7.58-6.63,15.83-6.63,24.75c0,8.98,2.22,17.22,6.63,24.72c4.41,7.53,10.38,13.47,17.91,17.88 c7.56,4.41,15.8,6.63,24.81,6.63c8.93,0,17.17-2.19,24.78-6.57c7.58-4.38,13.58-10.32,17.99-17.85c4.41-7.5,6.63-15.77,6.63-24.81 c0-8.87-2.22-17.11-6.65-24.7c-4.44-7.58-10.43-13.61-18.02-18.04C78.61,14.27,70.37,12.05,61.44,12.05L61.44,12.05z" />
                </g>
            </svg>
            <span>All material and intellectual rights of this site are reserved for TM Graphic.</span>
        </div>
    </footer>
    
    <script src="<?= asset('public/js/bootstrap.bundle.min.js')?>"></script>
    <!-- <script src="js/app.js"></script> -->
    <!-- <script src="js/anime.js"></script> -->
    <script src="<?= asset('public/js/postPage.js')?>"></script>
</body>
</html>