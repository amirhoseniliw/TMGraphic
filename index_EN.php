<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexPage</title>
    
</head>

<body>
    <?php        require_once(BASE_PATH . '/template/layouts/header-EN.php');
?>
    <div class="position-absolute h-100 background_color position-absolute w-100"
        style="height: max-content !important;">
        <?php
       define('BASE_PATH', __DIR__);
       ?> 
       

        <main class="text-light">

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
                                            <img src="public/img/icon/Storefront.png" width="200" alt="">
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center flex-column">
                                            <span class="fs-4">TM Graphic</span>
                                            <span class="fs-6">
                                                <a href="#" class="text-light text-decoration-none">TM
                                                    Graphic@gmail.com</a>
                                            </span>
                                        </div>
                                        <div class="box-Specialties-grop bg_box_special w-75 rounded-4 py-4 px-2 mt-3">
                                            <div class="row row-gap-3">
                                                <div class="col-4 d-flex justify-content-center align-items-center">
                                                    <div
                                                        class="d-flex justify-content-center align-items-center img_size_soecial">
                                                        <img src="./public/img/icon/icons8-photoshop-96.png"
                                                            style="width: 100%;" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-4 d-flex justify-content-center align-items-center">
                                                    <div
                                                        class="d-flex justify-content-center align-items-center img_size_soecial">
                                                        <img src="./public/img/icon/icons8-illustrator-96.png"
                                                            style="width: 100%;" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-4 d-flex justify-content-center align-items-center">
                                                    <div
                                                        class="d-flex justify-content-center align-items-center img_size_soecial">
                                                        <img src="./public/img/icon/icons8-photoshop-96.png"
                                                            style="width: 100%;" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-4 d-flex justify-content-center align-items-center">
                                                    <div
                                                        class="d-flex justify-content-center align-items-center img_size_soecial">
                                                        <img src="./public/img/icon/icons8-illustrator-96.png"
                                                            style="width: 100%;" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-4 d-flex justify-content-center align-items-center">
                                                    <div
                                                        class="d-flex justify-content-center align-items-center img_size_soecial">
                                                        <img src="./public/img/icon/icons8-photoshop-96.png"
                                                            style="width: 100%;" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-Specialties-grop bg_box_special w-75 rounded-4 py-4 px-2 mt-3">
                                            <div class="row row-gap-3">
                                                <div class="col-4 d-flex justify-content-center align-items-center">
                                                    <div
                                                        class="d-flex justify-content-center align-items-center img_size_soecial">
                                                        <a href="https://t.me/Mahdi_abbasi0"
                                                            class="text-decoration-none fs-5 text-light-50">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="50"
                                                                class="tel_shadow" shape-rendering="geometricPrecision"
                                                                text-rendering="geometricPrecision"
                                                                image-rendering="optimizeQuality" fill-rule="evenodd"
                                                                clip-rule="evenodd" viewBox="0 0 512 512">
                                                                <defs>
                                                                    <linearGradient id="" gradientUnits="userSpaceOnUse"
                                                                        x1="256" y1="3.84" x2="256" y2="512">
                                                                        <stop offset="0" stop-color="#2AABEE"></stop>
                                                                        <stop offset="1" stop-color="#229ED9"></stop>
                                                                    </linearGradient>
                                                                </defs>
                                                                <circle fill="url(#prefix__a)" cx="256" cy="256"
                                                                    r="256"></circle>
                                                                <path fill="#fff"
                                                                    d="M115.88 253.3c74.63-32.52 124.39-53.95 149.29-64.31 71.1-29.57 85.87-34.71 95.5-34.88 2.12-.03 6.85.49 9.92 2.98 2.59 2.1 3.3 4.94 3.64 6.93.34 2 .77 6.53.43 10.08-3.85 40.48-20.52 138.71-29 184.05-3.59 19.19-10.66 25.62-17.5 26.25-14.86 1.37-26.15-9.83-40.55-19.27-22.53-14.76-35.26-23.96-57.13-38.37-25.28-16.66-8.89-25.81 5.51-40.77 3.77-3.92 69.27-63.5 70.54-68.9.16-.68.31-3.2-1.19-4.53s-3.71-.87-5.3-.51c-2.26.51-38.25 24.3-107.98 71.37-10.22 7.02-19.48 10.43-27.77 10.26-9.14-.2-26.72-5.17-39.79-9.42-16.03-5.21-28.77-7.97-27.66-16.82.57-4.61 6.92-9.32 19.04-14.14z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-4 d-flex justify-content-center align-items-center">
                                                    <div
                                                        class="d-flex justify-content-center align-items-center img_size_soecial">
                                                        <a href="https://www.linkedin.com/in/abbasiimahdi"
                                                            class="text-decoration-none fs-5 text-light-50">
                                                            <svg id="Layer_1" width="50" class="linkedin_shadow"
                                                                data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 122.88 122.31">
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
                                                                    d="M27.75,0H95.13a27.83,27.83,0,0,1,27.75,27.75V94.57a27.83,27.83,0,0,1-27.75,27.74H27.75A27.83,27.83,0,0,1,0,94.57V27.75A27.83,27.83,0,0,1,27.75,0Z">
                                                                </path>
                                                                <path class="cls-2"
                                                                    d="M49.19,47.41H64.72v8h.22c2.17-3.88,7.45-8,15.34-8,16.39,0,19.42,10.2,19.42,23.47V98.94H83.51V74c0-5.71-.12-13.06-8.42-13.06s-9.72,6.21-9.72,12.65v25.4H49.19V47.41ZM40,31.79a8.42,8.42,0,1,1-8.42-8.42A8.43,8.43,0,0,1,40,31.79ZM23.18,47.41H40V98.94H23.18V47.41Z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-4 d-flex justify-content-center align-items-center">
                                                    <div
                                                        class="d-flex justify-content-center align-items-center img_size_soecial">
                                                        <a href="https://www.instagram.com/mahdi.marandi.orginal?igsh=Y2d4bTZpbjZoNzZ2"
                                                            class="text-decoration-none fs-5 text-light-50">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="50"
                                                                class="ins_shadow"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                viewBox="0 0 132.004 132">
                                                                <defs>
                                                                    <linearGradient id=">
                                                                        <stop offset=" 0" stop-color="#3771c8">
                                                                        </stop>
                                                                        <stop stop-color="#3771c8" offset=".128"></stop>
                                                                        <stop offset="1" stop-color="#60f"
                                                                            stop-opacity="0"></stop>
                                                                    </linearGradient>
                                                                    <linearGradient id="">
                                                                        <stop offset="0" stop-color="#fd5"></stop>
                                                                        <stop offset=".1" stop-color="#fd5"></stop>
                                                                        <stop offset=".5" stop-color="#ff543e"></stop>
                                                                        <stop offset="1" stop-color="#c837ab"></stop>
                                                                    </linearGradient>
                                                                    <radialGradient id="" cx="158.429" cy="578.088"
                                                                        r="65" xlink:href="#a"
                                                                        gradientUnits="userSpaceOnUse"
                                                                        gradientTransform="matrix(0 -1.98198 1.8439 0 -1031.402 454.004)"
                                                                        fx="158.429" fy="578.088"></radialGradient>
                                                                    <radialGradient id="" cx="147.694" cy="473.455"
                                                                        r="65" xlink:href="#b"
                                                                        gradientUnits="userSpaceOnUse"
                                                                        gradientTransform="matrix(.17394 .86872 -3.5818 .71718 1648.348 -458.493)"
                                                                        fx="147.694" fy="473.455"></radialGradient>
                                                                </defs>
                                                                <path fill="url(#c)"
                                                                    d="M65.03 0C37.888 0 29.95.028 28.407.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468C4 13.126 1.5 18.394.595 24.656c-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28 7.79-2.01 14.24-7.29 17.75-14.53 1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624C116.9 4 111.64 1.5 105.372.596 102.335.157 101.73.027 86.19 0H65.03z"
                                                                    transform="translate(1.004 1)"></path>
                                                                <path fill="url(#d)"
                                                                    d="M65.03 0C37.888 0 29.95.028 28.407.156c-5.57.463-9.036 1.34-12.812 3.22-2.91 1.445-5.205 3.12-7.47 5.468C4 13.126 1.5 18.394.595 24.656c-.44 3.04-.568 3.66-.594 19.188-.01 5.176 0 11.988 0 21.125 0 27.12.03 35.05.16 36.59.45 5.42 1.3 8.83 3.1 12.56 3.44 7.14 10.01 12.5 17.75 14.5 2.68.69 5.64 1.07 9.44 1.25 1.61.07 18.02.12 34.44.12 16.42 0 32.84-.02 34.41-.1 4.4-.207 6.955-.55 9.78-1.28 7.79-2.01 14.24-7.29 17.75-14.53 1.765-3.64 2.66-7.18 3.065-12.317.088-1.12.125-18.977.125-36.81 0-17.836-.04-35.66-.128-36.78-.41-5.22-1.305-8.73-3.127-12.44-1.495-3.037-3.155-5.305-5.565-7.624C116.9 4 111.64 1.5 105.372.596 102.335.157 101.73.027 86.19 0H65.03z"
                                                                    transform="translate(1.004 1)"></path>
                                                                <path fill="#fff"
                                                                    d="M66.004 18c-13.036 0-14.672.057-19.792.29-5.11.234-8.598 1.043-11.65 2.23-3.157 1.226-5.835 2.866-8.503 5.535-2.67 2.668-4.31 5.346-5.54 8.502-1.19 3.053-2 6.542-2.23 11.65C18.06 51.327 18 52.964 18 66s.058 14.667.29 19.787c.235 5.11 1.044 8.598 2.23 11.65 1.227 3.157 2.867 5.835 5.536 8.503 2.667 2.67 5.345 4.314 8.5 5.54 3.054 1.187 6.543 1.996 11.652 2.23 5.12.233 6.755.29 19.79.29 13.037 0 14.668-.057 19.788-.29 5.11-.234 8.602-1.043 11.656-2.23 3.156-1.226 5.83-2.87 8.497-5.54 2.67-2.668 4.31-5.346 5.54-8.502 1.18-3.053 1.99-6.542 2.23-11.65.23-5.12.29-6.752.29-19.788 0-13.036-.06-14.672-.29-19.792-.24-5.11-1.05-8.598-2.23-11.65-1.23-3.157-2.87-5.835-5.54-8.503-2.67-2.67-5.34-4.31-8.5-5.535-3.06-1.187-6.55-1.996-11.66-2.23-5.12-.233-6.75-.29-19.79-.29zm-4.306 8.65c1.278-.002 2.704 0 4.306 0 12.816 0 14.335.046 19.396.276 4.68.214 7.22.996 8.912 1.653 2.24.87 3.837 1.91 5.516 3.59 1.68 1.68 2.72 3.28 3.592 5.52.657 1.69 1.44 4.23 1.653 8.91.23 5.06.28 6.58.28 19.39s-.05 14.33-.28 19.39c-.214 4.68-.996 7.22-1.653 8.91-.87 2.24-1.912 3.835-3.592 5.514-1.68 1.68-3.275 2.72-5.516 3.59-1.69.66-4.232 1.44-8.912 1.654-5.06.23-6.58.28-19.396.28-12.817 0-14.336-.05-19.396-.28-4.68-.216-7.22-.998-8.913-1.655-2.24-.87-3.84-1.91-5.52-3.59-1.68-1.68-2.72-3.276-3.592-5.517-.657-1.69-1.44-4.23-1.653-8.91-.23-5.06-.276-6.58-.276-19.398s.046-14.33.276-19.39c.214-4.68.996-7.22 1.653-8.912.87-2.24 1.912-3.84 3.592-5.52 1.68-1.68 3.28-2.72 5.52-3.592 1.692-.66 4.233-1.44 8.913-1.655 4.428-.2 6.144-.26 15.09-.27zm29.928 7.97c-3.18 0-5.76 2.577-5.76 5.758 0 3.18 2.58 5.76 5.76 5.76 3.18 0 5.76-2.58 5.76-5.76 0-3.18-2.58-5.76-5.76-5.76zm-25.622 6.73c-13.613 0-24.65 11.037-24.65 24.65 0 13.613 11.037 24.645 24.65 24.645C79.617 90.645 90.65 79.613 90.65 66S79.616 41.35 66.003 41.35zm0 8.65c8.836 0 16 7.163 16 16 0 8.836-7.164 16-16 16-8.837 0-16-7.164-16-16 0-8.837 7.163-16 16-16z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-sm-6 col-12 mt-sm-0 mt-4 d-flex justify-content-center align-items-start">
                                    <div class="w-75">
                                        <span class="fs-6 lh-lg">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Ratione suscipit magnam exercitationem! Dolores nulla officia
                                            consectetur doloremque ipsa iure dolor, culpa repellendus architecto quis?
                                            Recusandae repudiandae qui consequatur voluptatem distinctio provident et
                                            eum blanditiis aperiam, cum unde velit corporis? Reiciendis rem facilis unde
                                            nostrum ullam culpa delectus quibusdam? Odio iure eveniet, amet quas atque
                                            dolor unde fugit nostrum laboriosam veritatis!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="border-color: #c2c2c276;">
                            <div
                                class="d-flex justify-content-lg-end justify-content-center align-items-center w-100 h-100">
                                <button type="button" class="btn btn-secondary px-5"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade text-light" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog modal-dialog-centered modal_lg_one modal-dialog-scrollable">
                    <div class="modal-content background_color_two">
                        <div class="modal-header" style="border-color: #c2c2c276;">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-xl-9 col-lg-8 col-12 border_modal">
                                    <div class="">
                                        <div
                                            class="vw_height_modal_img d-flex justify-content-center align-items-center py-lg-0 py-4">
                                            <img id="img_main_modal" src="" style="height: 100%;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-12">
                                    <div class="py-4 height_modal">
                                        <div class="row row-gap-3 mx-auto text_box_img_modal">

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer" style="border-color: #c2c2c276;">
                            <div class="row justify-content-between w-100 row-gap-5 row-gap-lg-0">
                                <div
                                    class="col-lg-6 col-12 box_img_last_modal d-flex flex-row justify-content-center align-items-center column-gap-4">

                                </div>
                                <div class="col-lg-6 col-12">
                                    <div
                                        class="d-flex justify-content-lg-end justify-content-center align-items-center w-100 h-100">
                                        <button type="button" class="btn btn-secondary px-5"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" tabindex="-1" id="visitingCard">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content background_color_two">
                        <div class="row">
                            <div class="col-xl-9 col-lg-8 col-12 background_color">
                                <div class="h-100">
                                    <div class="modal-header border-0 h-100" style="border-color: #c2c2c276;">
                                        <div
                                            class="d-flex justify-content-center w-100 align-items-cente rounded-4 overflow-hidden">
                                            <img src="public/img/img-trending/Primary Photo Placeholder-2.png"
                                                id="img-visiting-card" class="img-visiting-card" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-12 py-3 background_color_two">
                                <div class="modal-body body_size">
                                    <div
                                        class="h-100 w-100 mt-1 d-flex justify-content-start align-items-start flex-column row-gap-5">
                                        <span class="fs_title_modal title_modla">hello world</span>
                                        <span class="fs_sub_title_modal sub_title_modla lh-lg">Lorem ipsum dolor sit
                                            amet consectetur, adipisicing elit. Possimus fugit ipsam explicabo
                                            voluptates accusantium iure necessitatibus magni voluptatem, mollitia eaque
                                            provident magnam nam doloribus rem quia quis suscipit beatae unde?</span>
                                    </div>
                                </div>
                                <div class="modal-footer border-0"
                                    style="border-color: #c2c2c276; width: 100%; height: 15%;">
                                    <!-- <button type="button" class="btn btn-secondary px-5"data-bs-dismiss="modal">Close</button> -->
                                    <div class="btn_view_ankings d-flex w-100 h_btn_modal">
                                        <a href="#" data-bs-dismiss="modal"
                                            class="btn bg_color_basic w-100 d-block px-4 py-4 rounded-4 d-flex justify-content-center align-items-center flex-row column-gap-3">
                                            <span class="fs-4 text-light">Close</span>
                                        </a>
                                    </div>
                                </div>
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
                                        <div
                                            class="d-flex justify-content-center w-100 align-items-cente rounded-4 overflow-hidden">
                                            <img id="img-banner-card"
                                                src="public/img/instagram-stories-template-with-online-shopping_23-2148545458.jpg"
                                                id="img-visiting-card" class="img-visiting-card" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-12 py-3 background_color_two">
                                <div class="modal-body body_size">
                                    <div
                                        class="h-100 w-100 mt-1 d-flex justify-content-start align-items-start flex-column row-gap-5">
                                        <span id="title_banner" class="fs_title_modal title_modla">hello world</span>
                                        <span id="sub_title_banner" class="fs_sub_title_modal sub_title_modla">Lorem
                                            ipsum dolor sit amet consectetur, adipisicing elit. Possimus fugit ipsam
                                            explicabo voluptates accusantium iure necessitatibus magni voluptatem,
                                            mollitia eaque provident magnam nam doloribus rem quia quis suscipit beatae
                                            unde?</span>
                                    </div>
                                </div>
                                <div class="modal-footer border-0"
                                    style="border-color: #c2c2c276; width: 100%; height: 15%;">
                                    <!-- <button type="button" class="btn btn-secondary px-5"data-bs-dismiss="modal">Close</button> -->
                                    <div class="btn_view_ankings d-flex w-100 h_btn_modal">
                                        <a href="#" data-bs-dismiss="modal"
                                            class="btn bg_color_basic w-100 d-block px-4 py-4 rounded-4 d-flex justify-content-center align-items-center flex-row column-gap-3">
                                            <span class="fs-4 text-light">Close</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" tabindex="-1" id="postCard">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content background_color_two">
                        <div class="row">
                            <div class="col-xl-9 col-lg-8 col-12 background_color">
                                <div class="h-100">
                                    <div class="modal-header border-0 h-100" style="border-color: #c2c2c276;">
                                        <div
                                            class="d-flex justify-content-center w-100 align-items-cente rounded-4 overflow-hidden">
                                            <img id="img-post-card"
                                                src="public/img/instagram-stories-template-with-online-shopping_23-2148545458.jpg"
                                                id="img-visiting-card" class="img-visiting-card" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-12 py-3 background_color_two">
                                <div class="modal-body body_size">
                                    <div
                                        class="h-100 w-100 mt-1 d-flex justify-content-start align-items-start flex-column row-gap-5">
                                        <span id="title_post" class="fs_title_modal title_modla">hello world</span>
                                        <span id="sub_title_post" class="fs_sub_title_modal sub_title_modla">Lorem
                                            ipsum dolor sit amet consectetur, adipisicing elit. Possimus fugit ipsam
                                            explicabo voluptates accusantium iure necessitatibus magni voluptatem,
                                            mollitia eaque provident magnam nam doloribus rem quia quis suscipit beatae
                                            unde?</span>
                                    </div>
                                </div>
                                <div class="modal-footer border-0"
                                    style="border-color: #c2c2c276; width: 100%; height: 15%;">
                                    <!-- <button type="button" class="btn btn-secondary px-5"data-bs-dismiss="modal">Close</button> -->
                                    <div class="btn_view_ankings d-flex w-100 h_btn_modal">
                                        <a href="#" data-bs-dismiss="modal"
                                            class="btn bg_color_basic w-100 d-block px-4 py-4 rounded-4 d-flex justify-content-center align-items-center flex-row column-gap-3">
                                            <span class="fs-4 text-light">Close</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade text-light" id="discoverMore" tabindex="-1" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog modal-dialog-centered modal_lg_one modal-dialog-scrollable">
                    <div class="modal-content background_color_two">
                        <div class="modal-header" style="border-color: #c2c2c276;">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-xl-9 col-lg-8 col-12 border_modal">
                                    <div class="">
                                        <div
                                            class="vw_height_modal_img d-flex justify-content-center align-items-center py-lg-0 py-4">
                                            <img id="img_modal_Logos" src="" style="height: 100%;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-12">
                                    <div class="py-4 height_modal">
                                        <div class="row row-gap-3 mx-auto text_box_img_modal_Logos">

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer" style="border-color: #c2c2c276;">
                            <div class="row justify-content-between w-100 row-gap-5 row-gap-lg-0">
                                <div
                                    class="col-lg-6 col-12 box_img_modal_discover d-flex flex-row justify-content-center align-items-center column-gap-4">

                                </div>
                                <div class="col-lg-6 col-12">
                                    <div
                                        class="d-flex justify-content-lg-end justify-content-center align-items-center w-100 h-100">
                                        <button type="button" class="btn btn-secondary px-5"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="Photomontage" class="Photomontage position-relative container-lg container-fluid mt-5">
                <div class="" data-aos="fade-up">
                    <!-- <span class="fs-2 title_sub_text">Trending Collection</span> -->
                    <button class="title_text_hover" data-text="Awesome">
                        <span class="actual-text">&nbsp;Photomontage&nbsp;</span>
                        <span aria-hidden="true" class="hover-text">&nbsp;Photomontage&nbsp;</span>
                    </button>
                    <p class="fs-5 sub_text text-light-50">Checkout our weekly updated trending collection.</p>
                </div>

                <div class="row mt-5 column-gap-lg-0 row-gap-5 mx-auto" data-aos="fade-up">
                    <div class="col-12 col-xl-4 col-md-6 overflow-hidden" data-aos="fade-up">
                        <div class="position-relative w-100 d-flex flex-column">
                            <div style=" height: 408px; cursor: pointer;">
                                <div class="position-relative w-100">
                                    <img id="one" class="img_one rounded-4" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"
                                        src="public/img/instagram-stories-template-with-online-shopping_23-2148545458.jpg"
                                        style="width: 100%; height: 408px; position: absolute; object-fit: cover;"
                                        alt="">
                                </div>
                            </div>
                            <div class="position-relative d-flex mt-2 flex-row column-gap-4 column_gap_items_md"
                                style="width: 100% !important;">
                                <a href="#" class="overflow-hidden rounded-3" style="width: 50% !important;">
                                    <img src="public/img/instagram-stories-template-with-online-shopping_23-2148545458.jpg"
                                        class="w-100" alt="">
                                </a>
                                <a href="#" class="overflow-hidden rounded-3" style="width: 50% !important;">
                                    <img src="public/img/instagram-stories-template-with-online-shopping_23-2148545458.jpg"
                                        class="w-100" alt="">
                                </a>
                            </div>
                            <div></div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-4 col-md-6 overflow-hidden" data-aos="fade-up">
                        <div class="position-relative w-100 d-flex flex-column">
                            <div style=" height: 408px; cursor: pointer;">
                                <div class="position-relative w-100">
                                    <img id="two" class="img_one rounded-4" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"
                                        src="public/img/flat-design-teacher-s-day-template_23-2150254244.jpg"
                                        style="width: 100%; height: 408px; position: absolute; object-fit: cover;"
                                        alt="">
                                </div>
                            </div>
                            <div class="position-relative d-flex mt-2 flex-row column-gap-4 column_gap_items_md"
                                style="width: 100% !important;">
                                <a href="#" class="overflow-hidden rounded-3" style="width: 50% !important;">
                                    <img src="public/img/instagram-stories-template-with-online-shopping_23-2148545458.jpg"
                                        style="width: 100% !important;" alt="">
                                </a>
                                <a href="#" class="overflow-hidden rounded-3" style="width: 50% !important;">
                                    <img src="public/img/flat-design-teacher-s-day-template_23-2150254244.jpg"
                                        style="width: 100% !important;" alt="">
                                </a>
                            </div>
                            <div></div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-4 col-md-6 overflow-hidden" data-aos="fade-up">
                        <div class="position-relative w-100 d-flex flex-column">
                            <div style=" height: 408px; cursor: pointer;">
                                <div class="position-relative w-100">
                                    <img id="three" class="img_one rounded-4" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"
                                        src="public/img/instagram-stories-template-with-online-shopping_23-2148545458.jpg"
                                        style="width: 100%; height: 408px; position: absolute; object-fit: cover;"
                                        alt="">
                                </div>
                            </div>
                            <div class="position-relative d-flex mt-2 flex-row column-gap-4 column_gap_items_md"
                                style="width: 100% !important;">
                                <a href="#" class="overflow-hidden rounded-3" style="width: 50% !important;">
                                    <img src="public/img/instagram-stories-template-with-online-shopping_23-2148545458.jpg"
                                        style="width: 100% !important;" alt="">
                                </a>
                                <a href="#" class="overflow-hidden rounded-3" style="width: 50% !important;">
                                    <img src="public/img/instagram-stories-template-with-online-shopping_23-2148545458.jpg"
                                        style="width: 100% !important;" alt="">
                                </a>
                            </div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="visiting_card" class="visiting_card mt-5 container-lg container-fluid">
                <div class="d-flex flex-row justify-content-between align-items-center" data-aos="fade-up">
                    <div class="title_visiting_card">
                        <!-- <span class="fs-2 title_sub_text">Top creators</span> -->
                        <button class="title_text_hover" data-text="Awesome">
                            <span class="actual-text">&nbsp;visiting&nbsp;Card&nbsp;</span>
                            <span aria-hidden="true" class="hover-text">&nbsp;visiting&nbsp;Card&nbsp;</span>
                        </button>
                        <p class="fs-5 sub_text text-light-50">Checkout Top Rated Creators on the NFT Marketplace</p>
                    </div>
                </div>

                <div class="items_visiting_card mt-4" data-aos="fade-up">
                    <div class="row row-gap-xl-4 row-gap-3 content_box_visit_carts">

                    </div>
                </div>

            </div>

            <div id="Banners" class="Banners mt-5 container-lg container-fluid">

                <div class="d-flex py-4 flex-row justify-content-between align-items-center" data-aos="fade-up">
                    <div class="title_visiting_card" data-aos="fade-up">
                        <!-- <span class="fs-2 title_sub_text">Browse Categories</span> -->
                        <button class="title_text_hover" data-text="Awesome">
                            <span class="actual-text">&nbsp;Banners&nbsp;</span>
                            <span aria-hidden="true" class="hover-text">&nbsp;Banners&nbsp;</span>
                        </button>
                        <p class="fs-5 sub_text text-light-50">Checkout Top Rated Creators on the NFT Marketplace</p>
                    </div>
                    <div class="btn_view_ankings d-sm-flex d-none">
                        <a href="<?= url('bannerPage_EN')?>"
                            class="btn_see_more text-decoration-none px-4 py-3 rounded-4 d-flex align-items-center flex-row column-gap-2">
                            <img src="public/img/icon/RocketLaunch.png" class="fs_icon_btn_creators" alt="">
                            <span class=" fs_btn_creators">see more</span>
                        </a>
                    </div>
                </div>

                <div class="row row-gap-5 banner_box_content">

                </div>
                <div class="btn_view_ankings d-sm-none d-flex" data-aos="fade-up">
                    <a href="<?= url('bannerPage_EN')?>"
                        class="btn_see_more text-decoration-none px-4 py-3 rounded-4 d-flex align-items-center w-100 mt-5">
                        <div class="mx-auto d-flex justify-content-center align-items-center column-gap-3">
                            <img src="public/img/icon/RocketLaunch.png" class="fs_icon_btn_creators" alt="">
                            <span class=" fs_btn_creators">see more</span>
                        </div>
                    </a>
                </div>
            </div>

            <div id="Posts" class="Posts mt-5 container-lg container-fluid">
                <div class="d-flex py-4 flex-row justify-content-between align-items-center" data-aos="fade-up">
                    <div class="title_visiting_card" data-aos="fade-up">
                        <!-- <span class="fs-2 title_sub_text">Browse Categories</span> -->
                        <button class="title_text_hover" data-text="Awesome">
                            <span class="actual-text">&nbsp;storys&nbsp;</span>
                            <span aria-hidden="true" class="hover-text">&nbsp;storys&nbsp;</span>
                        </button>
                        <p class="fs-5 sub_text text-light-50">Checkout Top Rated Creators on the NFT Marketplace</p>
                    </div>
                    <div class="btn_view_ankings d-sm-flex d-none">
                        <a href="<?= url('postPage_EN')?>"
                            class="btn_see_more text-decoration-none px-4 py-3 rounded-4 d-flex align-items-center flex-row column-gap-2">
                            <img src="public/img/icon/RocketLaunch.png" class="fs_icon_btn_creators" alt="">
                            <span class=" fs_btn_creators">see more</span>
                        </a>
                    </div>
                </div>

                <div class="row row-gap-5 post_box_content">

                </div>
                <div class="btn_view_ankings d-sm-none d-flex" data-aos="fade-up">
                    <a href="<?= url('postPage_EN')?>"
                        class="btn_see_more text-decoration-none px-4 py-3 rounded-4 d-flex align-items-center w-100 mt-5">
                        <div class="mx-auto d-flex justify-content-center align-items-center column-gap-3">
                            <img src="public/img/icon/RocketLaunch.png" class="fs_icon_btn_creators" alt="">
                            <span class=" fs_btn_creators">see more</span>
                        </div>
                    </a>
                </div>
            </div>

            <div id="Logos" class="Logos mt-5 container-lg container-fluid">
                <div class="d-flex flex-row justify-content-between align-items-center" data-aos="fade-up">
                    <div class="title_visiting_card_2">
                        <!-- <span class="fs-2 title_sub_text">Discover More NFTs</span> -->
                        <button class="title_text_hover" data-text="Awesome">
                            <span class="actual-text">&nbsp;Logos&nbsp;</span>
                            <span aria-hidden="true" class="hover-text">&nbsp;Logos&nbsp;</span>
                        </button>
                        <p class="fs-5 sub_text text-light-50">Explore new trending NFTs</p>
                    </div>
                </div>

                <div class="mt-4" data-aos="fade-up">
                    <div class="row row-gap-3">
                        <div class="col-12 col-lg-4 col-sm-6" data-aos="fade-up">
                            <div class="background_color_two rounded-4 overflow-hidden">
                                <a href="#" id="LogosBox" data-bs-toggle="modal" data-bs-target="#discoverMore"
                                    class="one text-decoration-none text-light">
                                    <div>
                                        <img src="public/img/LogoSample/01/one-01.jpg"
                                            style="width: 100% !important;" alt="">
                                    </div>
                                    <div class="py-3 px-3 d-flex flex-column row-gap-3">
                                        <div class="d-flex flex-column">
                                            <span class="fs-5">Distant Galaxy</span>
                                            <div>
                                                <!-- <img src="public/img/img-creators/Avatar Placeholder-5.png" width="24" alt=""> -->
                                                <span style="font-size: 14px !important;">MoonDancer</span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column row-gap-1">
                                            <div class="d-flex flex-row justify-content-between align-content-center text-light-50"
                                                style="font-size: 14px !important;">
                                                <span>Price</span>
                                                <span>Highest Bid</span>
                                            </div>
                                            <div class="d-flex flex-row justify-content-between align-content-center"
                                                style="font-size: 16px !important;">
                                                <span>1.63 ETH</span>
                                                <span>0.33 wETH</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-sm-6" data-aos="fade-up">
                            <div class="background_color_two rounded-4 overflow-hidden">
                                <a href="#" id="LogosBox" data-bs-toggle="modal" data-bs-target="#discoverMore"
                                    class="two text-decoration-none text-light">
                                    <div>
                                        <img src="public/img/LogoSample/02/two-01.jpg"
                                            style="width: 100% !important;" alt="">
                                    </div>
                                    <div class="py-3 px-3 d-flex flex-column row-gap-3">
                                        <div class="d-flex flex-column">
                                            <span class="fs-5">Distant Galaxy</span>
                                            <div>
                                                <!-- <img src="public/img/img-creators/Avatar Placeholder-5.png" width="24" alt=""> -->
                                                <span style="font-size: 14px !important;">MoonDancer</span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column row-gap-1">
                                            <div class="d-flex flex-row justify-content-between align-content-center text-light-50"
                                                style="font-size: 14px !important;">
                                                <span>Price</span>
                                                <span>Highest Bid</span>
                                            </div>
                                            <div class="d-flex flex-row justify-content-between align-content-center"
                                                style="font-size: 16px !important;">
                                                <span>1.63 ETH</span>
                                                <span>0.33 wETH</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-sm-6" data-aos="fade-up">
                            <div class="background_color_two rounded-4 overflow-hidden">
                                <a href="#" id="LogosBox" data-bs-toggle="modal" data-bs-target="#discoverMore"
                                    class="three text-decoration-none text-light">
                                    <div>
                                        <img src="public/img/LogoSample/01/one-03.jpg"
                                            style="width: 100% !important;" alt="">
                                    </div>
                                    <div class="py-3 px-3 d-flex flex-column row-gap-3">
                                        <div class="d-flex flex-column">
                                            <span class="fs-5">Distant Galaxy</span>
                                            <div>
                                                <!-- <img src="public/img/img-creators/Avatar Placeholder-5.png" width="24" alt=""> -->
                                                <span style="font-size: 14px !important;">MoonDancer</span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column row-gap-1">
                                            <div class="d-flex flex-row justify-content-between align-content-center text-light-50"
                                                style="font-size: 14px !important;">
                                                <span>Price</span>
                                                <span>Highest Bid</span>
                                            </div>
                                            <div class="d-flex flex-row justify-content-between align-content-center"
                                                style="font-size: 16px !important;">
                                                <span>1.63 ETH</span>
                                                <span>0.33 wETH</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </main>
        <?php
       require_once(BASE_PATH . '/template/layouts/footer-EN.php');
       
       
       ?> 
       
        <a href="<?=url('') ?>" class="wrapper position-fixed">
            <div class="icon facebook">
                <span class="tooltip">PERSIAN</span>
                <span>Fa</span>
            </div>
        </a>

    </div>
 
   
</body>

</html>