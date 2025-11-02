@extends('layouts.main')

@section('content')

<?php $pageTitle = 'İletişim';?>

<main class="main-field sub-page">
    <!-- BREADCRUMB -->
    
    <!-- CONTENT -->
    <?php $social = [
        [
            'link' => 'https://facebook.com',
            'icon' => 'facebook'
        ],
        [
            'link' => 'https://x.com',
            'icon' => 'x'
        ],
        [
            'link' => 'https://linkedin.com',
            'icon' => 'linkedin'
        ],
        [
            'link' => 'https://youtube.com',
            'icon' => 'youtube'
        ],
        [
            'link' => 'https://instagram.com',
            'icon' => 'instagram'
        ],
    ]; ?>
    <section class="contact-page w-full relative md:flex md:flex-col md:pt-[130px] xsm:pt-[100px]">
        <div class="min-md:absolute left-0 top-0 w-full h-full min-lg:h-screen md:aspect-video md:h-auto !hidden">
            <!--            min-md:translate-x-1/3 max-w-[1640px]-->
            <div class="w-full h-full">
                <div id="map"
                    class="reveal [&_.gm-style_iframe_+_div]:!border-0 w-full h-full min-md:absolute left-0 overflow-hidden">
                </div>
            </div>
            <!--            <div class="overlay w-full h-full absolute left-0 top-0 bg-[radial-gradient(50.7%_90.72%_at_78.96%_80%,_rgba(255,255,255,0.00)_0%,_#FFF_100%)] pointer-events-none md:hidden"></div>-->
        </div>
        <div
            class="container max-w-[1640px] relative z-2 pt-[150px] pb-[100px] md:pt-0 md:pb-[20px] h-full min-md:pointer-events-none md:order-2">
            <div class="breadcrumb-area flex min-md:justify-end md:w-full z-2 md:px-0 md:order-3">
                <div
                    class="breadcrumb md:w-full relative py-[40px] pl-[100px] 2xl:pl-[60px] md:px-0 md:py-[20px] reveal before:absolute before:left-0 before:md:-left-1/2 before:top-0 before:w-screen before:md:w-[calc(100vw+50%)] before:h-full before:bg-primary-main before:min-md:-skew-x-[30deg] before:rounded-[6px]">
                    <ul
                        class="md:w-full [&_li_+_li]:before:content-['/'] [&_li_+_li]:before:px-[20px] [&_li_+_li]:before:text-[18px] [&_li_+_li]:before:leading-[28px] [&_li_+_li]:before:font-bold [&_li_+_li]:before:text-white/60 flex items-center flex-wrap relative z-2">
                        <li class="inline-flex items-center">
                            <a href="index.php" class="block">
                                <i class="icon-home text-[18px] md:text-[15px] leading-none h-[18px]  text-white"></i>
                            </a>
                        </li>

                        <li class="inline-flex items-center">
                            <a href="" class="block">
                                <h1
                                    class="text-[18px] md:text-[15px] leading-[28px] md:leading-[24px] font-bold text-white">
                                    <?= $pageTitle ?>
                                </h1>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-1/3 md:w-full relative z-2 pointer-events-auto min-md:translate-y-[-110px] md:pt-[30px]">
                <div class="contact-tabs flex flex-col gap-[20px] md:gap-[10px] md:relative">
                    <?php 
                    foreach ($offices as $key => $item): ?>
                        <div class="tab reveal cursor-pointer group/tab will-change-[height] [&.active]:overflow-hidden pb-[15px] md:pb-[30px] min-md:border-0 min-md:!border-b min-md:border-solid min-md:border-b-secondary-main/10 last:!border-b-0 last:pb-0 <?= $key == 0 ? 'active' : '' ?> "
                            data-id="<?= $key ?>">
                            <h2
                                class="title text-[30px] xl:text-[26px] md:text-[20px] xs:text-[18px] leading-[48px] xl:leading-[32px] text-secondary-main/75 opacity-65 transition-all duration-450 xsm:flex xsm:items-center group-[&.active]/tab:text-secondary-main group-[&.active]/tab:opacity-100">
                                <?= $item['title'] ?>
                            </h2>
                            <ul
                                class="flex flex-col gap-[20px] min-md:h-0 overflow-hidden opacity-0 translate-y-[15px] group-[&.active]/tab:h-auto group-[&.active]/tab:opacity-100 group-[&.active]/tab:translate-y-0 group-[&.active]/tab:min-md:pt-[15px] md:py-[20px] md:pointer-events-none group-[&.active]/tab:md:pointer-events-auto transition-all duration-450 md:absolute md:left-0">
                                <li class="flex items-center gap-[22px] xs:gap-[15px] cursor-auto">
                                    <i
                                        class="icon-phone text-primary-main text-[18px]  xs:text-[16px]leading-none inline-block h-[18px] xs:h-[16px]"></i>
                                    <a href="tel:<?= $item['phone'] ?>"
                                        class="text-[20px] md:text-[16px] leading-[30px] text-secondary-main/75 transition-all duration-300 hover:translate-x-[5px] hover:text-secondary-main"><?= $item['phone'] ?></a>
                                </li>
                                <li class="flex items-center gap-[22px] xs:gap-[15px] cursor-auto">
                                    <i
                                        class="icon-at text-primary-main text-[18px] xs:text-[16px] leading-none inline-block h-[18px] xs:h-[16px]"></i>
                                    <a href="mailto:<?= $item['email'] ?>"
                                        class="text-[20px] md:text-[16px] leading-[30px] text-secondary-main/75 transition-all duration-300 hover:translate-x-[5px] hover:text-secondary-main"><?= $item['email'] ?></a>
                                </li>
                                <li class="flex items-center gap-[22px] xs:gap-[15px] cursor-auto">
                                    <i
                                        class="icon-direct text-primary-main text-[18px] xs:text-[16px] leading-none inline-block h-[18px] xs:h-[16px]"></i>
                                    <a href="<?= $item['link'] ?>" target="_blank"
                                        class="text-[20px] md:text-[16px] leading-[30px] text-secondary-main/75 transition-all duration-300 hover:translate-x-[5px] hover:text-secondary-main"><?= $item['address'] ?></a>
                                </li>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <div class="section contact-page w-full pt-[25px]">
        <div class="content w-full">
            <div class="container max-w-[1640px]">
                <div class="flex flex-wrap">
                    <div
                        class="form-area grid grid-cols-2 md:grid-cols-1 items-center gap-[90px] lg:gap-[50px] md:gap-[20px] relative w-full pt-[160px] 2xl:pt-[120px] xl:pt-[85px] lg:pt-[50px] md:pt-[30px] pb-[190px] 2xl:pb-[140px] xl:pb-[100px] lg:pb-[60px] md:pb-[30px] px-[60px] lg:px-[30px] md:px-0 before:absolute lg:before:hidden before:-z-[1] before:top-0 before:left-1/2 before:-translate-x-1/2 before:md:left-[-30px] before:rounded-[60px] before:bg-white before:h-full before:w-[90vw] before:shadow-[0px_4px_30px_0px_rgba(0,0,0,0.10)] min-lg:mb-[80px]">
                        <div>

                            <div>
                                <div
                                    class="w-full flex flex-col items-center gap-[60px] 2xl:gap-[50px] xl:gap-[30px] md:gap-[25px]">
                                    <div class="flex flex-col w-full items-center gap-[30px] lg:gap-[20px]">
                                        <div
                                            class="contact-gallery-slider overflow-hidden w-full reveal-big-content md:hidden">
                                            <div class="swiper-wrapper">
                                                <?php for ($s = 0; $s <= 3; $s++): ?>
                                                    <div class="swiper-slide">
                                                        <div
                                                            class="item w-full h-[600px] xl:h-[450px] lg:h-[400px] sm:h-[320px] rounded-[70px] sm:rounded-[35px] overflow-hidden isolate">
                                                            <img src="../assets/image/general/contact.jpg" alt="Offer"
                                                                width="740" height="550" class="w-full h-full object-cover">
                                                        </div>
                                                    </div>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                        <div
                                            class="reveal contact-gallery-slider-pagination flex items-center justify-center gap-[7px] [&_.swiper-pagination-bullet]:w-[11px] [&_.swiper-pagination-bullet]:h-[12px] [&_.swiper-pagination-bullet]:-skew-x-12 [&_.swiper-pagination-bullet]:bg-secondary-main/16 [&_.swiper-pagination-bullet.swiper-pagination-bullet-active]:bg-primary-main [&_.swiper-pagination-bullet]:rounded-[2px] [&_.swiper-pagination-bullet]:!m-0 [&_.swiper-pagination-bullet]:!opacity-100 [&_.swiper-pagination-bullet]:transition-all [&_.swiper-pagination-bullet]:duration-300">
                                        </div>
                                    </div>
                                    <div
                                        class="social-media md:!hidden flex items-center gap-[45px] xl:gap-[30px] lg:gap-[20px]">
                                        <p class="text-[18px] leading-[24px] font-medium text-secondary-main reveal">
                                            Social
                                            Media</p>
                                        <ul
                                            class="flex items-center gap-[20px] [&_i]:hover:[&_a]:text-primary-main [&_i]:hover:[&_p]:text-primary-main">
                                            <?php foreach ($social as $key => $item) { ?>
                                                <li class="reveal relative">
                                                    <a href="<?= $item['link'] ?>" target="_blank"
                                                        class="group flex items-center reveal">
                                                        <i
                                                            class="icon-<?= $item['icon'] ?> text-[22px] leading-none h-[22px] inline-block transition-all duration-450 text-secondary-main/20 group-hover:text-primary-main"></i>
                                                        <div
                                                            class="tooltip md:hidden absolute left-1/2 -translate-x-1/2 opacity-0 rounded-full group-hover:opacity-100 -translate-y-[100px] group-hover:-translate-y-[45px] bg-primary-main transition-all duration-450 grid place-items-center py-[10px] px-[20px]">
                                                            <div
                                                                class="absolute left-1/2 top-full -translate-x-1/2 !border-l-[10px] !border-r-[10px] border-solid border-0 border-t-[9px] border-t-primary-main border-l-transparent border-r-transparent">
                                                            </div>
                                                            <span
                                                                class="text-[14px] leading-none font-medium text-white h-max capitalize"><?= $item['icon'] ?></span>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-full px-[60px] xl:px-[30px] md:p-0 md:order-1 md:mb-[30px]">
                                <div
                                    class="social-media min-md:!hidden flex items-center gap-[45px] xl:gap-[30px] lg:gap-[20px] mb-[30px]">
                                    <p class="text-[18px] leading-[24px] font-medium text-secondary-main reveal">Social
                                        Media
                                    </p>
                                    <ul
                                        class="flex items-center gap-[20px] [&_i]:hover:[&_a]:text-primary-main [&_i]:hover:[&_p]:text-primary-main">
                                        <?php foreach ($social as $key => $item) { ?>
                                            <li class="reveal relative">
                                                <a href="<?= $item['link'] ?>" target="_blank"
                                                    class="group flex items-center reveal">
                                                    <i
                                                        class="icon-<?= $item['icon'] ?> text-[22px] leading-none h-[22px] inline-block transition-all duration-450 text-secondary-main/20 group-hover:text-primary-main"></i>
                                                    <div
                                                        class="tooltip md:hidden absolute left-1/2 -translate-x-1/2 opacity-0 rounded-full group-hover:opacity-100 -translate-y-[100px] group-hover:-translate-y-[45px] bg-primary-main transition-all duration-450 grid place-items-center py-[10px] px-[20px]">
                                                        <div
                                                            class="absolute left-1/2 top-full -translate-x-1/2 !border-l-[10px] !border-r-[10px] border-solid border-0 border-t-[9px] border-t-primary-main border-l-transparent border-r-transparent">
                                                        </div>
                                                        <span
                                                            class="text-[14px] leading-none font-medium text-white h-max capitalize"><?= $item['icon'] ?></span>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div>
                            <div>
                                <div class="text-editor w-full max-w-full mb-[70px] md:mb-[25px] reveal">
                                    <h2>Contact <span>Form</span></h2>
                                </div>
                                <form action="#" method="post" id="career-form" enctype="multipart/form-data">
                                    <div
                                        class="grid grid-cols-2 gap-y-[15px] gap-x-[30px] sm:gap-y-[30px] xs:gap-y-[12px]">
                                        <div class="form-group sm:col-span-2 reveal">
                                            <div class="w-full relative flex flex-col group/item">
                                                <input type="text" name="name" id="name" required minlength="2"
                                                    class="order-2 w-full border-[0] !border-b border-solid border-b-secondary-main/16 group-hover/item:border-b-primary-main placeholder-secondary-main/35 peer text-[20px] text-primary-main pb-[16px] transition-all duration-300 [&_~_div]:focus:w-full [&_~_div]:focus:right-auto [&_~_div]:focus:left-0 [&_~_label]:focus:text-primary-main">
                                                <label for="name"
                                                    class="order-1 mb-[5px] block text-[18px] text-secondary-main/75 peer-focus:text-primary-main transition-all duration-300 pointer-events-none translate-y-[40px] peer-focus:!translate-y-0">Name</label>
                                                <div
                                                    class="order-3 after absolute z-2 right-0 bottom-0 w-0 h-[1px] bg-primary-main transition-all duration-500">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group  sm:col-span-2 reveal">
                                            <div class="w-full relative flex flex-col group/item">
                                                <input type="text" name="surname" id="surname" required minlength="2"
                                                    class="order-2 w-full border-[0] !border-b border-solid border-b-secondary-main/16 group-hover/item:border-b-primary-main placeholder-secondary-main/35 peer text-[20px] text-primary-main pb-[16px] transition-all duration-300 [&_~_div]:focus:w-full [&_~_div]:focus:right-auto [&_~_div]:focus:left-0 [&_~_label]:focus:text-primary-main">
                                                <label for="surname"
                                                    class="order-1 mb-[5px] block text-[18px] text-secondary-main/75 peer-focus:text-primary-main transition-all duration-300 pointer-events-none translate-y-[40px] peer-focus:!translate-y-0">Surname</label>
                                                <div
                                                    class="order-3 after absolute z-2 right-0 bottom-0 w-0 h-[1px] bg-primary-main transition-all duration-500">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group  sm:col-span-2 reveal">
                                            <div class="w-full relative flex flex-col group/item">
                                                <input type="email" name="email" id="email" required minlength="5"
                                                    class="order-2 w-full border-[0] !border-b border-solid border-b-secondary-main/16 group-hover/item:border-b-primary-main placeholder-secondary-main/35 peer text-[19px] text-primary-main pb-[16px] transition-all duration-300 [&_~_div]:focus:w-full [&_~_div]:focus:right-auto [&_~_div]:focus:left-0 [&_~_label]:focus:text-primary-main">
                                                <label for="email"
                                                    class="order-1 mb-[5px] block text-[18px] text-secondary-main/75 peer-focus:text-primary-main transition-all duration-300 pointer-events-none translate-y-[40px] peer-focus:!translate-y-0">E-Mail</label>
                                                <div
                                                    class="order-3 after absolute z-2 right-0 bottom-0 w-0 h-[1px] bg-primary-main transition-all duration-500">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group sm:col-span-2 reveal">
                                            <div class="w-full relative flex flex-col group/item">
                                                <input type="text" name="phone" id="phone" required minlength="5"
                                                    class="order-2 w-full border-[0] !border-b border-solid border-b-secondary-main/16 group-hover/item:border-b-primary-main placeholder-secondary-main/35 peer text-[20px] text-primary-main pb-[16px] transition-all duration-300 [&_~_div]:focus:w-full [&_~_div]:focus:right-auto [&_~_div]:focus:left-0 [&_~_label]:focus:text-primary-main">
                                                <label for="phone"
                                                    class="order-1 mb-[5px] block text-[18px] text-secondary-main/75 peer-focus:text-primary-main transition-all duration-300 pointer-events-none translate-y-[40px] peer-focus:!translate-y-0">Phone</label>
                                                <div
                                                    class="order-3 after absolute z-2 right-0 bottom-0 w-0 h-[1px] bg-primary-main transition-all duration-500">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group  col-span-2 reveal">
                                            <div class="w-full relative flex flex-col group/item">
                                                <textarea name="message" id="message" required minlength="5"
                                                    class="order-2 w-full resize-none border-[0] !border-b border-solid border-b-secondary-main/16 group-hover/item:border-b-primary-main placeholder-secondary-main/35 peer text-[20px] text-primary-main pb-[71px] transition-all duration-300 [&_~_div]:focus:w-full [&_~_div]:focus:right-auto [&_~_div]:focus:left-0 [&_~_label]:focus:text-primary-main"></textarea>
                                                <label for="message"
                                                    class="order-1 mb-[5px] block text-[18px] text-secondary-main/75 peer-focus:text-primary-main transition-all duration-300 pointer-events-none translate-y-[40px] peer-focus:!translate-y-0">Message</label>
                                                <div
                                                    class="order-3 after absolute z-2 right-0 bottom-0 w-0 h-[1px] bg-primary-main transition-all duration-500">
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="form-el group/form relative flex items-center gap-[20px] md:col-span-2 xs:py-[12px] mt-[50px] xl:mt-[25px] ml-[15px] reveal">
                                            <!-- error için bu div'e class="error" eklenecek -->
                                            <input type="checkbox" id="app-form-checkbox"
                                                class="peer cursor-pointer absolute left-0 top-0 w-full h-full opacity-0 z-10">
                                            <div
                                                class="box relative shrink-0 w-[21px] rounded-[3px] aspect-square duration-300 before:absolute before:duration-450 peer-checked:before:!opacity-100 peer-checked:before:!scale-100 before:scale-0 before:rounded-[2px] before:opacity-0 before:left-[50%] before:top-[50%] before:translate-x-[-50%] before:translate-y-[-50%] before:w-[40%] before:h-[40%] before:bg-primary-main border border-solid border-[#333333]/25 peer-hover:bg-primary-400/10 peer-hover:border-primary-400/50 peer-checked:!border-primary-main group-[&.error]/form:border-red-500">
                                            </div>
                                            <label for="app-form-checkbox"
                                                class=" leading-normal duration-300 text-[15px] text-secondary-main font-light tracking-[-0.15px]">
                                                I have read and accept the <a href="#popup-gdpr"
                                                    class="inline-block relative z-20 text-secondary-main font-bold duration-300 decoration decoration-secondary-main underline"
                                                    data-fancybox="">Clarification Text.</a>
                                            </label>
                                        </div>

                                        <div
                                            class="form-group flex justify-end md:col-span-2 md:justify-start mt-[50px] xl:mt-[25px] md:my-0 mr-[51px] xl:mr-0 reveal">
                                            <button type="submit"
                                                class="main-button group/button inline-flex items-center sm:justify-between gap-[32px] lg:gap-[24px] xs:gap-[20px] w-fit sm:w-full max-h-[60px] py-[6px] pl-[50px] lg:pl-[25px] xs:pl-[15px] pr-[11px] relative transition-all duration-450 before:absolute before:-skew-x-12 before:rounded-[6px] before:z-3 before:right-0 before:top-0 before:w-0 before:h-full before:bg-primary-main before:transition-all before:duration-450 hover:before:min-md:w-full hover:before:min-md:right-auto hover:before:min-md:left-0">
                                                <div
                                                    class="absolute w-full h-full left-0 top-0 -skew-x-12 rounded-[6px] z-2 bg-secondary-50 backdrop-blur-[15px]">
                                                </div>
                                                <span
                                                    class="text-[18px] md:text-[16px] leading-[24px] relative z-5 transition-all duration-450 whitespace-nowrap group-hover/button:min-md:text-white text-secondary-main">Send</span>
                                                <div
                                                    class="py-[14px] px-[28px] xs:px-[20px] grid place-items-center relative z-5 before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-primary-main before:-skew-x-12 before:rounded-[6px] ---- after:absolute after:right-0 after:top-0 after:w-0 after:h-full after:bg-secondary-main after:transition-all after:duration-450 group-hover/button:after:delay-200 after:-skew-x-12 after:rounded-[6px] group-hover/button:after:min-md:w-full group-hover/button:after:min-md:right-auto group-hover/button:after:min-md:left-0">
                                                    <i
                                                        class="icon-arrow-right text-[20px] xs:text-[18px] leading-none h-[20px] xs:h-[18px] text-white relative z-5 transition-all duration-450 delay-300"></i>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
<script>
    // Contact tab
    const contactTabs = document.querySelectorAll(".contact-tabs .tab")
    if (contactTabs) {
        function contactTab(ev, title, ul, titleRect) {
            for (let i = 0; i < contactTabs.length; i++) {
                contactTabs[i].classList.remove("active")
                if (window.innerWidth < 1024) {
                    contactTabs[i].style.height = `${titleRect.height}px`
                }
            }

            ev.currentTarget.classList.add("active")
            if (window.innerWidth < 1024) {
                ev.currentTarget.style.height = `${title.clientHeight + ul.clientHeight}px`

            }
        }

        contactTabs.forEach((tab, index) => {
            let ul = tab.querySelector("ul"),
                ulRect = ul.getBoundingClientRect(),
                tabRect = tab.getBoundingClientRect(),
                title = tab.querySelector(".title"),
                titleRect = title.getBoundingClientRect()

            if (window.innerWidth < 1024) {
                tab.style.height = `${titleRect.height}px`
                if (index === 0) {
                    tab.style.height = `${title.clientHeight + ul.clientHeight}px`
                }
            }

            setTimeout(() => {
                tab.classList.add("md:transition-all", "md:duration-700", "[&.active]:md:delay-300")
                ul.classList.add("group-[&.active]/tab:md:delay-500")
            }, 300)

            tab.addEventListener("click", (e) => {
                contactTab(e, title, ul, titleRect)
            })
        })
    }

    // Location List
    window.locations = [
        /* Buraya tab miktarı kadar lokasyon girebilirsiniz ve konum, zoom, url ve marker özelliklerini değiştirebilirsiniz. */
        {
            latLng: { lat: 41.06938256380666, lng: 28.827924637822406 },
            zoom: 15,
            marker: `<a href="https://maps.google.com" target="_blank" class="group/pin relative group flex items-center justify-center">
                    <i class="icon-location-pin text-[45px] leading-none text-primary-main animate-markerBounce relative after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:w-[41px] after:h-[8px] after:rounded-full after:opacity-25 after:bg-[radial-gradient(50%_50%_at_50%_50%,_#2E485C_0%,_rgba(46,72,92,0.00)_100%)]"></i>
                    <div class="absolute top-full bg-primary-main rounded-full px-[12px] py-[10px] text-[15px] text-white whitespace-nowrap text-center opacity-0 translate-y-[20px] transition-all duration-450 min-lg:group-hover/pin:opacity-100 min-lg:group-hover/pin:translate-y-0">Yol Tarifi Al</div>
                </a>`
        },
        {
            latLng: { lat: 40.90972609407845, lng: 29.203708883725817 },
            zoom: 15,
            marker: `<a href="https://maps.google.com" target="_blank" class="group/pin relative group flex items-center justify-center">
                    <i class="icon-location-pin text-[45px] leading-none text-primary-main animate-markerBounce relative after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:w-[41px] after:h-[8px] after:rounded-full after:opacity-25 after:bg-[radial-gradient(50%_50%_at_50%_50%,_#2E485C_0%,_rgba(46,72,92,0.00)_100%)]"></i>
                    <div class="absolute top-full bg-primary-main rounded-full px-[12px] py-[10px] text-[15px] text-white whitespace-nowrap text-center opacity-0 translate-y-[20px] transition-all duration-450 min-lg:group-hover/pin:opacity-100 min-lg:group-hover/pin:translate-y-0">Yol Tarifi Al</div>
                </a>`
        },

        {
            latLng: { lat: 41.06938256380666, lng: 28.827924637822406 },
            zoom: 15,
            marker: `<a href="https://maps.google.com" target="_blank" class="group/pin relative group flex items-center justify-center">
                    <i class="icon-location-pin text-[45px] leading-none text-primary-main animate-markerBounce relative after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:w-[41px] after:h-[8px] after:rounded-full after:opacity-25 after:bg-[radial-gradient(50%_50%_at_50%_50%,_#2E485C_0%,_rgba(46,72,92,0.00)_100%)]"></i>
                    <div class="absolute top-full bg-primary-main rounded-full px-[12px] py-[10px] text-[15px] text-white whitespace-nowrap text-center opacity-0 translate-y-[20px] transition-all duration-450 min-lg:group-hover/pin:opacity-100 min-lg:group-hover/pin:translate-y-0">Yol Tarifi Al</div>
                </a>`
        },

        {
            latLng: { lat: 40.90972609407845, lng: 29.203708883725817 },
            zoom: 15,
            marker: `<a href="https://maps.google.com" target="_blank" class="group/pin relative group flex items-center justify-center">
                    <i class="icon-location-pin text-[45px] leading-none text-primary-main animate-markerBounce relative after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:w-[41px] after:h-[8px] after:rounded-full after:opacity-25 after:bg-[radial-gradient(50%_50%_at_50%_50%,_#2E485C_0%,_rgba(46,72,92,0.00)_100%)]"></i>
                    <div class="absolute top-full bg-primary-main rounded-full px-[12px] py-[10px] text-[15px] text-white whitespace-nowrap text-center opacity-0 translate-y-[20px] transition-all duration-450 min-lg:group-hover/pin:opacity-100 min-lg:group-hover/pin:translate-y-0">Yol Tarifi Al</div>
                </a>`
        },

        {
            latLng: { lat: 41.06938256380666, lng: 28.827924637822406 },
            zoom: 15,
            marker: `<a href="https://maps.google.com" target="_blank" class="group/pin relative group flex items-center justify-center">
                    <i class="icon-location-pin text-[45px] leading-none text-primary-main animate-markerBounce relative after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:w-[41px] after:h-[8px] after:rounded-full after:opacity-25 after:bg-[radial-gradient(50%_50%_at_50%_50%,_#2E485C_0%,_rgba(46,72,92,0.00)_100%)]"></i>
                    <div class="absolute top-full bg-primary-main rounded-full px-[12px] py-[10px] text-[15px] text-white whitespace-nowrap text-center opacity-0 translate-y-[20px] transition-all duration-450 min-lg:group-hover/pin:opacity-100 min-lg:group-hover/pin:translate-y-0">Yol Tarifi Al</div>
                </a>`
        },

        {
            latLng: { lat: 41.06938256380666, lng: 28.827924637822406 },
            zoom: 15,
            marker: `<a href="https://maps.google.com" target="_blank" class="group/pin relative group flex items-center justify-center">
                    <i class="icon-location-pin text-[45px] leading-none text-primary-main animate-markerBounce relative after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:w-[41px] after:h-[8px] after:rounded-full after:opacity-25 after:bg-[radial-gradient(50%_50%_at_50%_50%,_#2E485C_0%,_rgba(46,72,92,0.00)_100%)]"></i>
                    <div class="absolute top-full bg-primary-main rounded-full px-[12px] py-[10px] text-[15px] text-white whitespace-nowrap text-center opacity-0 translate-y-[20px] transition-all duration-450 min-lg:group-hover/pin:opacity-100 min-lg:group-hover/pin:translate-y-0">Yol Tarifi Al</div>
                </a>`
        },

        {
            latLng: { lat: 40.90972609407845, lng: 29.203708883725817 },
            zoom: 15,
            marker: `<a href="https://maps.google.com" target="_blank" class="group/pin relative group flex items-center justify-center">
                    <i class="icon-location-pin text-[45px] leading-none text-primary-main animate-markerBounce relative after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:w-[41px] after:h-[8px] after:rounded-full after:opacity-25 after:bg-[radial-gradient(50%_50%_at_50%_50%,_#2E485C_0%,_rgba(46,72,92,0.00)_100%)]"></i>
                    <div class="absolute top-full bg-primary-main rounded-full px-[12px] py-[10px] text-[15px] text-white whitespace-nowrap text-center opacity-0 translate-y-[20px] transition-all duration-450 min-lg:group-hover/pin:opacity-100 min-lg:group-hover/pin:translate-y-0">Yol Tarifi Al</div>
                </a>`
        },
    ];

    // Generate Map Function
    function generateMap(i) {
        window.latLng = locations[i].latLng
        window.mapZoom = locations[i].zoom;

        window.mapMarker = document.createElement('div');
        mapMarker.className = 'map-marker block !pointer-events-auto relative z-30';
        mapMarker.innerHTML = locations[i].marker;
    }
    generateMap(0)

    // Map Change
    let mapButtons = document.querySelectorAll('.contact-page .contact-tabs .tab');
    mapButtons.forEach(button => {
        button.addEventListener('click', () => {
            let i = button.getAttribute('data-id');
            if (i == null) return;
            generateMap(i)
            initMap()
        })
    })
</script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxycU6lO2UWtUA4BZDIfXrSVyYVqQ0wRM&callback=initMap&libraries=marker&v=beta"
    defer=""></script>
@endsection

@section('scripts')




@endsection