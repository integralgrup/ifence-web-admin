@extends('layouts.main')

@section('content')
<?php 
$pageTitle = strip_tags($about->title);
$breadcrumbTitle = $about->title;
$breadcrumbImage = $about->image;
?>
    <main class="main-field">
    <!-- BREADCRUMB -->
    <?php
        $breadcrumbImage = $about->image ? $about->image : 'about-us-breadcrumb.jpg';
    ?>

<section class="breadcrumb w-full relative h-[525px] xl:h-[400px] lg:h-[350px] md:h-[300px]">
    <div class="image-wrapper relative w-full h-full">
        <img src="<?= asset(getFolder(['uploads_folder', 'images_folder'], $about->lang) ) . '/'. $breadcrumbImage ?>" alt="<?= $pageTitle ?>" width="1920" height="525" class="w-full h-full object-cover">
        <div class="overlay pointer-events-none absolute left-0 top-0 w-full h-full z-2 bg-[linear-gradient(180deg,_#2E475C_0%,_rgba(46,71,92,0.20)_100%)]"></div>
    </div>
    <div class="absolute w-full h-full z-3 left-0 bottom-0 flex items-end pb-[120px] 2xl:pb-[95px] xl:pb-[60px] lg:pb-[30px] md:pb-0">
        <div class="container max-w-[1640px]">
            <div class="flex min-md:items-center md:flex-col justify-between gap-[20px]">
                <h1 class="text-[64px] 2xl:text-[52px] xl:text-[40px] lg:text-[28px] md:text-[24px] leading-[80px] 2xl:leading-[70px] xl:leading-[60px] lg:leading-[40px] md:leading-[36px] font-normal text-white [&_span]:font-bold [&_span]:text-white reveal">About Us</h1>
                <div class="breadcrumb-area flex min-md:justify-end md:w-full reveal">
                    <div class="breadcrumb md:w-full relative py-[40px] pl-[100px] 2xl:pl-[60px] md:px-0 md:py-[20px] before:absolute before:left-0 before:md:-left-1/2 before:top-0 before:w-screen before:md:w-[calc(100vw+50%)] before:h-full before:bg-primary-main before:min-md:-skew-x-[30deg] before:rounded-[6px]">
                        <ul class="[&_li_+_li]:before:content-['/'] [&_li_+_li]:before:px-[20px] [&_li_+_li]:before:text-[18px] [&_li_+_li]:before:leading-[28px] [&_li_+_li]:before:font-bold [&_li_+_li]:before:text-white/60 flex items-center flex-wrap relative z-2">
                            <li class="inline-flex items-center">
                                <a href="index.php" class="block">
                                    <i class="icon-home text-[18px] md:text-[15px] leading-none h-[18px]  text-white"></i>
                                </a>
                            </li>

                            <li class="inline-flex items-center">
                                <a href="" class="block">
                                    <p class="text-[18px] md:text-[15px] leading-[28px] md:leading-[24px] font-bold text-white">About Us</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   

    <!-- CONTENT -->
    <section class="w-full">
        <section class="about-us py-[130px] 2xl:py-[100px] xl:py-[75px] lg:py-[60px] relative overflow-hidden">
            <div class="circle w-[861px] h-[455px] absolute top-0 right-0 rounded-b-full opacity-10 bg-[radial-gradient(50%_100%_at_50%_0%,_#00AE83_0%,_rgba(0,174,131,0.00)_100%)] pointer-events-none"></div>
            <div class="content relative z-4">
                <div class="container max-w-[1640px]">
                    <div class="flex flex-wrap">
                        <div class="w-2/5 md:w-full min-md:pr-[40px]">
                            <div class="flex flex-col gap-[80px] md:gap-[40px]">
                                <div class="text-editor flex flex-col gap-[40px] reveal">
                                    <h1>{!!  $about->title ?? '' !!}</h1>
                                    <p>{!!  $about->description ?? '' !!}</p>
                                </div>
                                <div class="certificates-slider overflow-hidden min-md:w-[calc(100%+100px)] reveal">
                                    <div class="swiper-wrapper items-center">
                                        <?php foreach ($certificates as $key => $item): ?>
                                            <div class="swiper-slide">
                                                <div class="item transition-all duration-450 grayscale opacity-50 min-lg:hover:opacity-100">
                                                    <img src="<?= asset( getFolder(['uploads_folder', 'images_folder'], $about->lang) . '/' . $item->image ) ?>" alt="Logo" width="131" height="60" class="w-full h-auto">
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-3/5 md:w-full min-md:pl-[40px] md:mt-[100px] sm:px-[30px]">
                            <div class="images flex flex-col items-center gap-[85px] 2xl:gap-[70px] xl:gap-[50px]">
                                <div class="flex xsm:flex-col items-end gap-[53px] xl:gap-[25px]">
                                    <div class="image-wrapper w-[439px] xl:w-[380px] sm:w-full h-[295px] sm:h-[195px] relative image-1">
                                        <div class="-skew-x-12 rounded-[20px] w-full h-full overflow-hidden grid place-items-center">
                                            <img src="<?= asset( getFolder(['uploads_folder', 'images_folder'], $about->lang) . '/' . $about->image ) ?>" alt="About Us" width="439" height="295" class="w-full h-full object-cover skew-x-12 scale-115 sm:scale-125"/>
                                        </div>
                                        <div class="absolute -skew-x-12 left-[-26px] top-[-26px] w-[180px] h-[195px] -z-[1] bg-[linear-gradient(180deg,_#00AE83_0%,_rgba(0,174,131,0.00)_100%)] rounded-[15px]"></div>
                                    </div>

                                    <div class="image-wrapper w-[301px] xl:w-[260px] sm:w-full h-[202px] sm:h-[195px] sm:hidden relative mb-[26px] sm:mb-0 image-2">
                                        <div class="-skew-x-12 rounded-[20px] w-full h-full overflow-hidden grid place-items-center">
                                            <img src="../assets/image/general/home-about-us-2.jpg" alt="About Us" width="301" height="202" class="w-full h-full object-cover skew-x-12 scale-115"/>
                                        </div>
                                        <div class="absolute -skew-x-12 right-[-26px] bottom-[-26px] w-[135px] h-[146px] -z-[1] bg-[linear-gradient(180deg,_#00AE83_0%,_rgba(0,174,131,0.00)_100%)] rounded-[15px]"></div>
                                    </div>
                                </div>

                                <div class="image-wrapper w-[464px] sm:w-full h-[295px] sm:h-[195px] sm:hidden relative mb-[26px] image-3">
                                    <div class="-skew-x-12 rounded-[20px] w-full h-full overflow-hidden grid place-items-center">
                                        <img src="<?= asset( getFolder(['uploads_folder', 'images_folder'], $about->lang) . '/' . $about->image ) ?>" alt="About Us" width="464" height="295" class="w-full h-full object-cover skew-x-12 scale-115"/>
                                    </div>
                                    <div class="absolute -skew-x-12 right-[-26px] bottom-[-26px] w-[180px] h-[195px] -z-[1] bg-[linear-gradient(180deg,_#5382A4_0%,_rgba(83,130,164,0.00)_100%)] rounded-[15px]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-us-tabs mb-[60px]">
            <div class="container max-w-[1640px] mb-[40px]">
                <div class="flex md:flex-col min-md:items-center justify-between gap-[20px]">
                    <div class="flex md:flex-col min-md:items-center w-full gap-[90px] xl:gap-[60px] lg:gap-[35px]">
                        <div class="text-editor w-3/4 reveal">
                            <h3>What We Are <span>Doing?</span></h3>
                        </div>
                        <div class="separator w-[1px] h-[76px] bg-black/10 md:hidden reveal"></div>
                        <div class="text-editor w-full max-w-full reveal">
                            <p>Our Ifence brand generally produces and assembles fence systems, door systems and wrought iron systems.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabs lg:hidden mb-[60px] bg-secondary-main py-[20px]">
                <div class="container max-w-[1640px]">
                    <div class="flex items-center h-full">
                        <div class="nav-buttons flex items-center gap-[10px] h-full mr-[60px] xl:mr-[40px] lg:hidden">
                            <div class="prev-tab group/nav w-[40px] aspect-square grid place-items-center h-full cursor-pointer pointer-events-none [&.active]:pointer-events-auto reveal" data-tab="0">
                                <i class="icon-arrow-left text-[20px] leading-none h-[20px] text-white/50 group-[&.active]/nav:text-white transition-all duration-450"></i>
                            </div>

                            <div class="next-tab group/nav w-[40px] aspect-square grid place-items-center h-full cursor-pointer pointer-events-none [&.active]:pointer-events-auto reveal active" data-tab="1">
                                <i class="icon-arrow-right text-[20px] leading-none h-[20px] text-white/50 group-[&.active]/nav:text-white transition-all duration-450"></i>
                            </div>
                        </div>
                        <?php foreach ($what_we_do as $key => $item): ?>
                            <div class="reveal">
                                <div class="tab cursor-pointer py-[10px] bg-transparent grid place-items-center transition-all duration-450 rounded-[8px] [&.active]:bg-primary-main group [&_div]:last:!border-r-0 whitespace-nowrap <?= $key == 0 ? 'active' : '' ?>" data-feature-id="<?= $key ?>">
                                    <div class="py-[10px] px-[50px] group-[&.active]:px-[20px] 2xl:px-[35px] group-[&.project-page]/project:2xl:px-[25px] 2xl:py-[10px] lg:px-[15px] border-0 !border-r border-solid border-r-white/20 group-[&.active]:border-transparent transition-all duration-450 flex items-center gap-[8px]">
                                        <p class="text-[18px] xl:text-[15px] leading-none tracking-[-0.18px] text-white/85 group-[&.active]:text-white transition-all duration-450"><?= $item->title ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="container max-w-[1640px]">
                <div class="custom-dropdown hidden lg:block w-full mb-[30px]">
                    <div class="dropdown relative group/dropdown">
                        <div class="placeholder flex items-center justify-between px-[25px] py-[15px] bg-primary-main cursor-pointer rounded-[9px] group-[&.active]/dropdown:rounded-b-none transition-all duration-450">
                            <span class="text-[18px] leading-normal font-medium text-white transition-all duration-450 placeholder-text">Fence Systems</span>
                            <i class="icon-angle-down text-[14px] text-white leading-none transition-all duration-450 group-[&.active]/dropdown:rotate-180"></i>
                        </div>
                        <div class="dropdown-list w-full bg-secondary-50 overflow-hidden rounded-[9px] group-[&.active]/dropdown:rounded-t-none absolute left-0 z-[20] transition-all duration-300 opacity-0 pointer-events-none group-[&.active]/dropdown:opacity-100 group-[&.active]/dropdown:pointer-events-auto">
                            <ul class="flex flex-col gap-[10px] overflow-hidden">
                                <?php foreach ($what_we_do as $key => $item): ?>
                                    <li class="tab cursor-pointer py-[10px] bg-transparent grid place-items-center transition-all duration-450 [&.active]:bg-primary-main group whitespace-nowrap rounded-[9px] group-[&.active]/dropdown:first:rounded-t-none <?= $key == 0 ? 'active' : '' ?>" data-feature-id="<?= $key ?>">
                                        <div class="py-[15px] px-[25px] 2xl:px-[15px] 2xl:py-[10px] xl:px-[5px] lg:px-[15px] group-[&.active]:border-transparent text-[17px] xl:text-[15px] leading-none tracking-[0.17px] text-paragraph transition-all duration-450 group-[&.active]:text-white group-[&.active]:font-bold"><?= $item->title ?></div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-area">
                <div class="container max-w-[1640px]">
                    <div class="image-area w-full h-[690px] sm:h-[400px] relative isolate reveal-big-content">
                        <img src="../assets/image/general/product-detail.jpg" alt="Product Detail" width="1440" height="690" class="w-full h-full object-cover rounded-[20px]">
                        <?php foreach ($what_we_do as $key => $item): ?>
                            <div class="dot-content absolute z-10 flex flex-col items-center gap-[20px] md:gap-[10px] cursor-pointer group [&.active]:z-[11] lg:!top-1/3 md:!top-[unset] md:bottom-[10px] md:translate-y-0 lg:!left-1/2 lg:-translate-y-1/2 lg:-translate-x-1/2 <?= $key == 0 ? 'active' : '' ?>" style="left: <?= $item->left ?>%; top: <?= $item->top ?>%;" data-dot-id="<?= $key ?>">
                                <div class="dot w-[56px] md:w-[40px] aspect-square bg-primary-main rounded-full grid place-items-center">
                                    <i class="icon-plus text-[20px] md:text-[16px] leading-none h-[20px] md:h-[16px] text-white"></i>
                                </div>
                                <div class="dot-description flex flex-col items-center text-center gap-[15px] bg-secondary-main/10 backdrop-blur-[15px] border border-solid border-primary-main rounded-[20px] p-[30px] sm:p-[20px] w-[380px] xs:w-[360px] min-md:absolute z-10 pointer-events-none min-md:translate-y-[120px] md:translate-y-[60px] opacity-0 transition-all duration-450 group-[&.active]:opacity-100 min-md:group-[&.active]:translate-y-[70px] md:group-[&.active]:translate-y-0 group-[&.active]:pointer-events-auto">
                                    <p class="text-[24px] lg:text-[20px] leading-[36px] text-white font-bold"><?= $item->title ?></p>
                                    <p class="text-[16px] leading-[19px] text-white/65"><?= $item->description ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="services py-[140px] xl:py-[90px] lg:py-[60px] relative overflow-hidden bg-secondary-50">
            <div class="absolute w-full h-full left-0 top-0 flex justify-between">
                <div class="h-full flex">
                    <img src="../assets/image/static/about-us-left-bg.png" alt="" width="751" height="1000" class="h-full w-auto -translate-x-[272px] opacity-35">
                    <div class="w-[124px] h-full bg-[linear-gradient(270deg,_#F5F7FA_0%,_rgba(245,247,250,0.00)_100%)]"></div>
                </div>

                <div class="h-full flex">
                    <div class="w-[124px] h-full bg-[linear-gradient(270deg,_#F5F7FA_0%,_rgba(245,247,250,0.00)_100%)]"></div>
                    <img src="../assets/image/static/about-us-right-bg.png" alt="" width="744" height="1000" class="h-full w-auto translate-x-[272px] opacity-35">
                </div>
            </div>
            <div class="content relative z-2">
                <div class="container max-w-[1640px]">
                    <div class="w-full flex flex-wrap items-end mb-[70px] xl:mb-[45px] lg:mb-[30px]">
                        <div class="w-full flex min-sm:items-center sm:flex-col justify-between gap-[20px]">
                            <div class="text-editor flex flex-col gap-[20px] reveal">
                                <h2>Our <span>Services</span></h2>
                            </div>
                            <div class="text-editor reveal">
                                <p>Our Ifence brand generally produces and assembles fence systems, door systems and wrought iron systems.</p>
                            </div>
                            <div class="nav-buttons flex items-center gap-[20px] md:ml-0 sm:hidden reveal">
                                <div class="service-prev group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full bg-transparent backdrop-blur-[5px] border-[3px] border-solid border-secondary-main/15 relative z-10 transition-all duration-450  [&.service-disabled]:pointer-events-none">
                                    <i class="icon-arrow-up md:-rotate-90 text-[20px] leading-none h-[20px] text-secondary-main transition-all duration-450 group-[&.service-disabled]/nav:text-secondary-main/60"></i>
                                    <svg width="70px" height="70px" viewBox="0 0 70 70" preserveAspectRatio="none" class="absolute left-[-3px] top-[-3px] md:scale-[0.7] md:left-[-13px] md:top-[-13px]">
                                        <circle class="[stroke-dasharray:301.59px_301.59px] [stroke-dashoffset:301.59px] transition-all duration-700 group-hover/nav:[stroke-dashoffset:0] ease-[cubic-bezier(.45,.05,.55,.95)] rotate-180 translate-y-full translate-x-full stroke-primary-main sm:hidden" cx="35" cy="35" r="33" stroke="white" stroke-width="3" fill="none" style="" />
                                    </svg>
                                </div>

                                <div class="service-next group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full bg-transparent backdrop-blur-[5px] border-[3px] border-solid border-secondary-main/15 relative z-10 transition-all duration-450  [&.service-disabled]:pointer-events-none">
                                    <i class="icon-arrow-down md:-rotate-90 text-[20px] leading-none h-[20px] text-secondary-main transition-all duration-450 group-[&.service-disabled]/nav:text-secondary-main/60"></i>
                                    <svg width="70px" height="70px" viewBox="0 0 70 70" preserveAspectRatio="none" class="absolute left-[-3px] top-[-3px] md:scale-[0.7] md:left-[-13px] md:top-[-13px]">
                                        <circle class="[stroke-dasharray:301.59px_301.59px] [stroke-dashoffset:301.59px] transition-all duration-700 group-hover/nav:[stroke-dashoffset:0] ease-[cubic-bezier(.45,.05,.55,.95)] rotate-180 translate-y-full translate-x-full stroke-primary-main sm:hidden" cx="35" cy="35" r="33" stroke="white" stroke-width="3" fill="none" style="" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex flex-wrap">
                        <div class="w-3/5 md:w-full pr-[60px] xl:pr-[30px] md:pr-0 md:order-2 sm:order-3"> ?>
                            <div class="reveal">
                                <div class="service-slider overflow-hidden h-[600px] xl:h-[500px] md:h-[300px] relative transition-all duration-450 [&.changed]:opacity-0 [&.changed]:translate-y-[50px]">
                                    <div class="swiper-wrapper rounded-[20px]">
                                        <?php foreach ($services as $key => $item):?>
                                            <div class="swiper-slide group/content rounded-[20px] overflow-hidden hidden [&.active]:block <?= $key == 0 ? 'active' : '' ?>" data-content-id="<?= $key ?>">
                                                <div class="item w-full h-full rounded-[20px] overflow-hidden">
                                                    <img src="<?= asset( getFolder(['uploads_folder', 'images_folder'], $item->lang) . '/' . $item->image ) ?>" alt="<?= $item->title ?>" class="w-full h-full object-cover rounded-[20px] overflow-hidden">
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="nav-buttons absolute z-2 bottom-[30px] left-1/2 -translate-x-1/2 flex gap-[12px]">
                                        <div class="service-container-prev cursor-pointer w-[52px] sm:w-[42px] h-[44px] sm:h-[34px] grid place-items-center rounded-full bg-primary-main backdrop-blur-[10px] transition-all duration-450 hover:min-sm:scale-110 hover:min-sm:translate-x-[-3px] [&.service-container-disabled]:bg-white/10 [&.service-container-disabled]:pointer-events-none">
                                            <i class="icon-arrow-left text-white text-[22px] sm:text-[19px] leading-none inline-block h-[22px] sm:h-[19px]"></i>
                                        </div>
                                        <div class="service-container-next cursor-pointer w-[52px] sm:w-[42px] h-[44px] sm:h-[34px] grid place-items-center rounded-full bg-primary-main backdrop-blur-[10px] transition-all duration-450 hover:min-sm:scale-110 hover:min-sm:translate-x-[3px] [&.service-container-disabled]:bg-white/10 [&.service-container-disabled]:pointer-events-none">
                                            <i class="icon-arrow-right text-white text-[22px] sm:text-[19px] leading-none inline-block h-[22px] sm:h-[19px]"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-2/5 md:w-full pl-[60px] xl:pl-[30px] md:pl-0 md:mb-[30px] md:order-1">
                            <div class="slide-area w-full h-full flex flex-col">
                                <div class="service-main-slider overflow-hidden md:pl-0 h-[calc(600px/3)] xl:h-[calc(500px/2)] md:h-auto reveal">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($services as $key => $item): ?>
                                            <div class="swiper-slide group/slide transition-all duration-450 opacity-0 [&.swiper-slide-active]:opacity-100" data-slide-id="<?= $key ?>">
                                                <div class="item w-full h-full flex flex-col justify-end gap-[30px] transition-all duration-450 group-[&.swiper-slide-active]/slide:">
                                                    <div class="flex items-center gap-[30px]">
                                                        <div class="number min-w-[60px] aspect-square rounded-full bg-transparent border-2 border-solid border-secondary-main/10 grid place-items-center transition-all duration-300 group-[&.swiper-slide-active]/slide:bg-primary-main group-[&.swiper-slide-active]/slide:border-primary-main">
                                                            <span class="text-[20px] md:text-[18px] leading-[30px] text-secondary-main/75 transition-all duration-300 font-semibold group-[&.swiper-slide-active]/slide:text-white">0<?= $key + 1 ?></span>
                                                        </div>
                                                        <p class="text-[48px] 2xl:text-[40px] xl:text-[30px] md:text-[20px] leading-[64px] xl:leading-[35px] text-secondary-main/75 transition-all duration-300 group-[&.swiper-slide-active]/slide:text-primary-main group-[&.swiper-slide-active]/slide:font-semibold"><?= $item->title ?></p>
                                                    </div>
                                                    <div class="w-full">
                                                        <p class="text-[20px] md:text-[18px] leading-[30px] text-secondary-main/85 line-clamp-3"><?= $item->description ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <div class="service-main-slider-next overflow-hidden md:pl-0 h-[calc(600px/3*2)] xl:h-[calc(500px/3*2)] md:hidden reveal">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($services as $key => $item): ?>
                                            <div class="swiper-slide group transition-all duration-450 opacity-0 [&.swiper-slide-active]:opacity-100 [&.swiper-slide-next]:opacity-100">
                                                <div class="item w-full flex flex-col transition-all duration-300 absolute top-1/2 -translate-y-1/2 group-[&.swiper-slide-next]:top-[20px] group-[&.swiper-slide-next]:xl:top-0 group-[&.swiper-slide-next]:translate-y-0 gap-[30px]">
                                                    <div class="flex items-center gap-[30px]">
                                                        <div class="number min-w-[60px] aspect-square rounded-full bg-transparent border-2 border-solid border-secondary-main/10 grid place-items-center">
                                                            <span class="text-[20px] md:text-[18px] leading-[30px] text-secondary-main/75 font-semibold">0<?= $key + 1 ?></span>
                                                        </div>
                                                        <p class="text-[48px] 2xl:text-[40px] xl:text-[30px] md:text-[20px] leading-[64px] xl:leading-[35px] text-secondary-main/75 "><?= $item->title ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-buttons flex items-center gap-[20px] md:ml-0 min-sm:hidden sm:mb-[30px] sm:order-2 ">
                            <div class="service-prev group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full bg-transparent backdrop-blur-[5px] border-[3px] border-solid border-secondary-main/15 relative z-10 transition-all duration-450  [&.service-disabled]:pointer-events-none">
                                <i class="icon-arrow-up md:-rotate-90 text-[20px] leading-none h-[20px] text-secondary-main transition-all duration-450 group-[&.service-disabled]/nav:text-secondary-main/60"></i>
                                <svg width="70px" height="70px" viewBox="0 0 70 70" preserveAspectRatio="none" class="absolute left-[-3px] top-[-3px] md:scale-[0.7] md:left-[-13px] md:top-[-13px]">
                                    <circle class="[stroke-dasharray:301.59px_301.59px] [stroke-dashoffset:301.59px] transition-all duration-700 group-hover/nav:[stroke-dashoffset:0] ease-[cubic-bezier(.45,.05,.55,.95)] rotate-180 translate-y-full translate-x-full stroke-primary-main sm:hidden" cx="35" cy="35" r="33" stroke="white" stroke-width="3" fill="none" style="" />
                                </svg>
                            </div>

                            <div class="service-next group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full bg-transparent backdrop-blur-[5px] border-[3px] border-solid border-secondary-main/15 relative z-10 transition-all duration-450  [&.service-disabled]:pointer-events-none">
                                <i class="icon-arrow-down md:-rotate-90 text-[20px] leading-none h-[20px] text-secondary-main transition-all duration-450 group-[&.service-disabled]/nav:text-secondary-main/60"></i>
                                <svg width="70px" height="70px" viewBox="0 0 70 70" preserveAspectRatio="none" class="absolute left-[-3px] top-[-3px] md:scale-[0.7] md:left-[-13px] md:top-[-13px]">
                                    <circle class="[stroke-dasharray:301.59px_301.59px] [stroke-dashoffset:301.59px] transition-all duration-700 group-hover/nav:[stroke-dashoffset:0] ease-[cubic-bezier(.45,.05,.55,.95)] rotate-180 translate-y-full translate-x-full stroke-primary-main sm:hidden" cx="35" cy="35" r="33" stroke="white" stroke-width="3" fill="none" style="" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mv w-full relative bg-cover bg-no-repeat bg-center pt-[170px] 2xl:pt-[140px] xl:pt-[90px] lg:pt-[60px] pb-[120px] xl:pb-[60px] lg:pb-[30px] h-[1000px] xl:h-[700px] md:h-auto" style="background-image: url(../assets/image/general/about-us-mv.jpg)">
            <div class="overlay absolute left-0 top-0 w-full h-full bg-[radial-gradient(48.81%_48.07%_at_48.72%_51.95%,_rgba(46,72,92,0.35)_0%,_#2E485C_100%)]"></div>
            <div class="content relative z-2 w-full h-full">
                <div class="container max-w-[1640px] h-full flex">
                    <div class="flex flex-col flex-grow h-full">
                        <div class="w-full">
                            <div class="w-1/2 md:w-full [&_.item]:before:md:hidden [&_.item]:after:md:hidden">
                                <div class="item w-full py-[80px] sm:py-[40px] px-[150px] xl:px-[75px] lg:px-[35px] xs:px-0 relative [&_:is(h1,h2,h3,h4,h5,h6)]:transition-all [&_:is(h1,h2,h3,h4,h5,h6)]:duration-300 [&_:is(h1,h2,h3,h4,h5,h6)]:hover:!font-extrabold before:absolute before:w-[125%] before:h-full before:top-0 before:left-0 before:skew-x-12 before:rounded-[20px] before:bg-[linear-gradient(90deg,_#40576A.3%,_rgba(0,174,131,0.00)_86.39%)] before:transition-all before:duration-450 hover:before:opacity-0 --- after:absolute after:w-[125%] after:h-full after:top-0 after:left-0 after:skew-x-12 after:rounded-[20px] after:bg-[linear-gradient(90deg,_#00AE83_9.3%,_rgba(0,174,131,0.00)_86.39%)] after:opacity-0 after:transition-all after:duration-450 hover:after:opacity-100">
                                    <div class="flex flex-col gap-[32px] xs:gap-[15px] text-editor w-full max-w-full relative z-2 reveal">
                                        <h3><?=$about->mission_title?></h3>
                                        <p><?=$about->mission_text?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex justify-end -translate-y-1/2 xl:-translate-y-full md:translate-y-0">
                            <div class="w-1/2 md:w-full [&_.item]:before:md:hidden [&_.item]:after:md:hidden">
                                <div class="item w-full py-[80px] sm:py-[40px] px-[150px] xl:px-[75px] lg:px-[35px] xs:px-0 relative [&_:is(h1,h2,h3,h4,h5,h6)]:transition-all [&_:is(h1,h2,h3,h4,h5,h6)]:duration-300 [&_:is(h1,h2,h3,h4,h5,h6)]:hover:!font-extrabold before:absolute before:w-[125%] before:translate-x-[-20%] before:h-full before:top-0 before:left-0 before:skew-x-12 before:rounded-[20px] before:bg-[linear-gradient(-90deg,_#40576A.3%,_rgba(0,174,131,0.00)_86.39%)] before:transition-all before:duration-450 hover:before:opacity-0 --- after:absolute after:w-[125%] after:translate-x-[-20%] after:h-full after:top-0 after:left-0 after:skew-x-12 after:rounded-[20px] after:bg-[linear-gradient(-90deg,_#00AE83_9.3%,_rgba(0,174,131,0.00)_86.39%)] after:opacity-0 after:transition-all after:duration-450 hover:after:opacity-100">
                                    <div class="flex flex-col gap-[32px] xs:gap-[15px] text-editor w-full max-w-full relative z-2 text-right xs:text-left reveal">
                                        <h3><?=$about->vision_title?></h3>
                                        <p><?=$about->vision_text?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="logo -translate-y-[150px] xl:-translate-y-[300px] md:hidden flex justify-center reveal">
                            <img src="../assets/image/trademark/logo-white.svg" alt="Logo" width="250" height="90" class="w-[205px] h-auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="other-brands w-full overflow-hidden mt-[120px] xl:mt-[90px] lg:mt-[60px] mb-[160px] 2xl:mb-[120px] xl:mb-[90px] lg:mb-[60px]">
            <div class="content">
                <div class="container max-w-[1640px]">
                    <div class="flex flex-col items-center">
                        <div class="text-editor w-full h-full text-center mb-[120px] 2xl:mb-[90px] xl:mb-[60px] lg:mb-[30px] reveal">
                            <h3>Other <strong>Brands</strong></h3>
                        </div>
                        <div class="w-full relative after:absolute after:right-[-30px] after:translate-x-1/2 after:top-0 after:w-[600px] after:h-[130px] after:bg-[linear-gradient(270deg,_#FFF_-1.7%,_rgba(255,255,255,0.00)_93.32%)] after:z-2 after:pointer-events-none">
                            <div class="flex flex-wrap w-full">
                                <div class="w-1/2 md:w-full pr-[50px] xl:pr-[25px] md:pr-0 md:order-2 md:mt-[60px] reveal-image flex items-center">
                                    <div class="image-wrapper w-full max-h-[600px] h-full sm:h-[320px] relative img-parent transition-all duration-450 delay-200 [&.changed]:translate-y-[10px] [&.changed]:opacity-0 md:scale-95 xs:scale-[.89]">
                                        <div class="-skew-x-12 rounded-[20px] w-full h-full overflow-hidden grid place-items-center">
                                            <img src="../assets/image/general/about-us-brands.jpg" alt="About Us" width="706" height="475" class="w-full h-full object-cover skew-x-12 scale-125 sm:scale-125 transition-all duration-450 delay-200" id="brand-image"/>
                                        </div>
                                        <div class="absolute -skew-x-12 left-[-26px] xs:left-[-15px] top-[-26px] xs:top-[-15px] w-[290px] xs:w-[260px] h-[314px] xs:h-[270px] -z-[1] bg-[linear-gradient(180deg,_#00AE83_0%,_rgba(0,174,131,0.00)_100%)] rounded-[15px]"></div>
                                    </div>
                                </div>
                                <div class="w-1/2 md:w-full pl-[100px] xl:pl-[50px] md:pl-0 md:order-1">
                                    <div class="flex flex-col w-full">
                                        <div class="brand-title-slider overflow-x-hidden w-full reveal">
                                            <div class="swiper-wrapper">
                                                <?php foreach ($brands as $key => $item): ?>
                                                    <div class="swiper-slide">
                                                        <div class="text-editor max-w-full gap-1">
                                                            <p style="text-transform: uppercase; color: black; font-weight: 500; font-size: 14px; letter-spacing: 3px;"><?= $item['url'] ?></p>
                                                            <h4><?=$item['title']?></h4>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <div class="brand-slider mb-[30px] px-[30px] relative reveal overflow-hidden">
                                            <span class="absolute left-0 top-0 z-3 w-[15%] h-full block bg-gradient-to-r from-white to-white/0 pointer-events-none"></span>
                                            <span class="absolute right-0 top-0 z-3 w-[15%] h-full block bg-gradient-to-l from-white to-white/0 pointer-events-none"></span>
                                            <div class="swiper-wrapper">
                                                <?php foreach ($brands as $key => $item): ?>
                                                    <div class="swiper-slide group transition-all duration-450 opacity-0 [&.swiper-slide-active]:opacity-100 [&.swiper-slide-active_+_.swiper-slide]:opacity-100 [&.swiper-slide-prev]:opacity-100 " data-id="<?= $key ?>">
                                                        <div class="item w-[300px] md:w-full py-[20px] h-[130px] xs:px-[20px]" data-website="https://<?= $item['link'] ?>" data-image="<?= asset( getFolder(['uploads_folder', 'brand_images_folder'], $item['lang']) .'/'. $item['slider_image']) ?>">
                                                            <img src="<?= asset( getFolder(['uploads_folder', 'brand_images_folder'], $item['lang']) .'/'. $item['image']) ?>" alt="Logo" width="277" height="82" class="w-full h-full scale-75 min-sm:grayscale min-sm:opacity-25 group-[&.swiper-slide-active]:scale-100 min-sm:group-[&.swiper-slide-active]:grayscale-0 min-sm:group-[&.swiper-slide-active]:opacity-100 transition-all duration-450">
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <div class="text-slider max-w-[550px] md:w-full overflow-hidden mb-[80px] xl:mb-[40px] sm:mb-[30px] reveal">
                                            <div class="swiper-wrapper">
                                                <?php foreach ($brands as $key => $item): ?>
                                                    <div class="swiper-slide">
                                                        <div class="item w-full">
                                                            <div class="text-editor w-full max-w-full">
                                                                <p><?= $item['description'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-[100px] xl:gap-[60px] lg:gap-[30px] md:gap-[20px]">
                                            <div class="nav-buttons flex items-center gap-[20px] xs:gap-[10px] md:ml-0 reveal-button-left">
                                                <div class="brand-prev group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full bg-transparent backdrop-blur-[5px] border-[3px] border-solid border-secondary-main/15 relative z-10 transition-all duration-450  [&.brand-disabled]:pointer-events-none">
                                                    <i class="icon-arrow-left text-[20px] leading-none h-[20px] text-secondary-main transition-all duration-450 group-[&.brand-disabled]/nav:text-secondary-main/60"></i>
                                                    <svg width="70px" height="70px" viewBox="0 0 70 70" preserveAspectRatio="none" class="absolute left-[-3px] top-[-3px] md:scale-[0.7] md:left-[-13px] md:top-[-13px]">
                                                        <circle class="[stroke-dasharray:301.59px_301.59px] [stroke-dashoffset:301.59px] transition-all duration-700 group-hover/nav:[stroke-dashoffset:0] ease-[cubic-bezier(.45,.05,.55,.95)] rotate-180 translate-y-full translate-x-full stroke-primary-main sm:hidden" cx="35" cy="35" r="33" stroke="white" stroke-width="3" fill="none" style="" />
                                                    </svg>
                                                </div>

                                                <div class="brand-next group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full bg-transparent backdrop-blur-[5px] border-[3px] border-solid border-secondary-main/15 relative z-10 transition-all duration-450  [&.brand-disabled]:pointer-events-none">
                                                    <i class="icon-arrow-right text-[20px] leading-none h-[20px] text-secondary-main transition-all duration-450 group-[&.brand-disabled]/nav:text-secondary-main/60"></i>
                                                    <svg width="70px" height="70px" viewBox="0 0 70 70" preserveAspectRatio="none" class="absolute left-[-3px] top-[-3px] md:scale-[0.7] md:left-[-13px] md:top-[-13px]">
                                                        <circle class="[stroke-dasharray:301.59px_301.59px] [stroke-dashoffset:301.59px] transition-all duration-700 group-hover/nav:[stroke-dashoffset:0] ease-[cubic-bezier(.45,.05,.55,.95)] rotate-180 translate-y-full translate-x-full stroke-primary-main sm:hidden" cx="35" cy="35" r="33" stroke="white" stroke-width="3" fill="none" style="" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div id="website-button" class="reveal-button-right">
                                                <?php
                                                $link = "#";
                                                $title = "Visit Website";
                                                $background = "bg-secondary-50 backdrop-blur-[15px]";
                                                $backgroundHover = "before:bg-primary-main";
                                                $textColor = "text-secondary-main";
                                                $textColorHover = "group-hover/button:min-md:text-white";
                                                
                                                ?>
                                                <a href="<?= $link ?>" class="main-button group/button inline-flex items-center sm:justify-between gap-[32px] lg:gap-[24px] xs:gap-[20px] w-fit sm:w-full max-h-[60px] py-[6px] pl-[50px] lg:pl-[25px] xs:pl-[15px] pr-[11px] relative transition-all duration-450 before:absolute before:-skew-x-12 before:rounded-[6px] before:z-3 before:right-0 before:top-0 before:w-0 before:h-full <?= $backgroundHover ?> before:transition-all before:duration-450 hover:before:min-md:w-full hover:before:min-md:right-auto hover:before:min-md:left-0">
                                                    <div class="absolute w-full h-full left-0 top-0 -skew-x-12 rounded-[6px] z-2 <?= $background ?>"></div>
                                                    <span class="text-[18px] md:text-[16px] leading-[24px] relative z-5 transition-all duration-450 whitespace-nowrap <?= $textColorHover ?>  <?= $textColor ?>"><?= $title ?></span>
                                                    <div class="py-[14px] px-[28px] xs:px-[20px] grid place-items-center relative z-5 before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-primary-main before:-skew-x-12 before:rounded-[6px] ---- after:absolute after:right-0 after:top-0 after:w-0 after:h-full after:bg-secondary-main after:transition-all after:duration-450 group-hover/button:after:delay-200 after:-skew-x-12 after:rounded-[6px] group-hover/button:after:min-md:w-full group-hover/button:after:min-md:right-auto group-hover/button:after:min-md:left-0">
                                                        <i class="icon-arrow-right text-[20px] xs:text-[18px] leading-none h-[20px] xs:h-[18px] text-white relative z-5 transition-all duration-450 delay-300"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</main>
@endsection