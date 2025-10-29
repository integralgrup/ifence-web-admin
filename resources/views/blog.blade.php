@extends('layouts.main')


@section('content')
<?php $pageTitle = 'Haberler'; ?>
<main class="main-field header-space sub-page">
  
    <section class="main-area w-full overflow-hidden md:pt-[30px]">
        <div class="container max-w-[1640px] mb-[30px] md:mb-0">
            <div class="flex flex-wrap">
                <div class="w-1/2 md:w-full pr-[80px] 2xl:pr-[55px] xl:pr-[25px] md:pr-0 md:mb-[30px] md:order-1">
                    <div class="breadcrumb-area min-md:!hidden flex min-md:justify-end md:w-full mb-[20px]">
                        <div class="breadcrumb md:w-full relative py-[40px] pl-[100px] 2xl:pl-[60px] md:px-0 md:py-[20px] reveal before:absolute before:left-0 before:md:-left-1/2 before:top-0 before:w-screen before:md:w-[calc(100vw+50%)] before:h-full before:bg-primary-main before:min-md:-skew-x-[30deg] before:rounded-[6px]">
                            <ul class="[&_li_+_li]:before:content-['/'] [&_li_+_li]:before:px-[20px] [&_li_+_li]:before:text-[18px] [&_li_+_li]:before:leading-[28px] [&_li_+_li]:before:font-bold [&_li_+_li]:before:text-white/60 flex items-center flex-wrap relative z-2">
                                <li class="inline-flex items-center">
                                    <a href="index.php" class="block">
                                        <i class="icon-home text-[18px] md:text-[15px] leading-none h-[18px]  text-white"></i>
                                    </a>
                                </li>

                                <li class="inline-flex items-center">
                                    <a href="news.php" class="block">
                                        <h1 class="text-[18px] md:text-[15px] leading-[28px] md:leading-[24px] font-bold text-white">News</h1>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-image-area w-full lg:h-full flex items-center md:flex-col-reverse gap-[70px] 2xl:gap-[35px] md:gap-[20px]">
                        <div class="news-page-image-slider overflow-hidden md:w-full lg:h-full rounded-r-[20px] reveal-image">
                            <div class="swiper-wrapper">
                                <?php for ($i = 0; $i <= 6; $i++): ?>
                                    <div class="swiper-slide group">
                                        <div class="item w-full h-[680px] xl:h-[500px] lg:h-full md:h-[320px] rounded-r-[20px] md:rounded-[20px] overflow-hidden">
                                            <img src="../assets/image/general/blog.jpg" alt="News" width="858" height="680" class="w-full h-full object-cover">
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 md:w-full pl-[80px] 2xl:pl-[55px] xl:pl-[25px] md:p-0 md:order-1 relative">
                    <div class="flex flex-col h-full w-full">
                        <div class="breadcrumb-area md:!hidden flex min-md:justify-end md:w-full mb-[20px] md:mb-0 absolute lg:static right-0 md:order-3">
                            <div class="breadcrumb md:w-full relative py-[40px] pl-[100px] 2xl:pl-[60px] md:px-0 md:py-[20px] reveal before:absolute before:left-0 before:md:-left-1/2 before:top-0 before:w-screen before:md:w-[calc(100vw+50%)] before:h-full before:bg-primary-main before:min-md:-skew-x-[30deg] before:rounded-[6px]">
                                <ul class="[&_li_+_li]:before:content-['/'] [&_li_+_li]:before:px-[20px] [&_li_+_li]:before:text-[18px] [&_li_+_li]:before:leading-[28px] [&_li_+_li]:before:font-bold [&_li_+_li]:before:text-white/60 flex items-center flex-wrap relative z-2">
                                    <li class="inline-flex items-center">
                                        <a href="index.php" class="block">
                                            <i class="icon-home text-[18px] md:text-[15px] leading-none h-[18px]  text-white"></i>
                                        </a>
                                    </li>

                                    <li class="inline-flex items-center">
                                        <a href="news.php" class="block">
                                            <h1 class="text-[18px] md:text-[15px] leading-[28px] md:leading-[24px] font-bold text-white">News</h1>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-page-slider h-full md:h-auto overflow-hidden md:order-1 [&_*]:will-change-[transform]">
                            <div class="swiper-wrapper">
                                <?php for ($i = 0; $i <= 6; $i++): ?>
                                    <div class="swiper-slide">
                                        <div class="flex flex-col justify-end h-full gap-[20px] pb-[50px] xl:pb-[25px] md:pb-0">
                                            <time class="flex items-center gap-[10px] <?= $i == 0 ? 'reveal' : '' ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                                    <path d="M3.72515 0.553314C3.72515 1.11786 3.2675 1.57551 2.70296 1.57551C1.48889 1.57551 0.5 2.56453 0.5 3.77964V11.2958C0.5 12.511 1.48889 13.5 2.70293 13.5H11.297C12.5111 13.5 13.5 12.511 13.5 11.2958V3.77964C13.5 2.56453 12.5111 1.57551 11.297 1.57551C10.7325 1.57551 10.2749 1.11787 10.2749 0.553342V0.546875C10.2749 0.520768 10.2538 0.5 10.2282 0.5C10.2027 0.5 10.1816 0.520769 10.1816 0.546875C10.1816 1.11498 9.72107 1.57551 9.15297 1.57551H4.84705C4.27895 1.57551 3.81842 1.11498 3.81842 0.546875C3.81842 0.520769 3.79734 0.5 3.77179 0.5C3.74623 0.5 3.72515 0.520768 3.72515 0.546875V0.553314ZM10.2749 2.69143C10.2749 2.1269 10.7325 1.66926 11.297 1.66926C12.461 1.66926 13.4067 2.61575 13.4067 3.77964C13.4067 4.34432 12.949 4.80207 12.3843 4.80207H1.61569C1.05102 4.80207 0.593264 4.34432 0.593264 3.77964C0.593264 2.61575 1.53901 1.66926 2.70293 1.66926C3.26747 1.66926 3.72513 2.12691 3.72513 2.69146V3.23567C3.72513 3.26178 3.74621 3.28254 3.77176 3.28254C3.79731 3.28254 3.81839 3.26177 3.81839 3.23567C3.81839 2.37057 4.51969 1.66926 5.3848 1.66926H8.6152C9.48031 1.66926 10.1816 2.37057 10.1816 3.23567C10.1816 3.26177 10.2027 3.28254 10.2282 3.28254C10.2538 3.28254 10.2749 3.26178 10.2749 3.23567V2.69143ZM11.297 13.4062H2.70296C1.53901 13.4062 0.593264 12.4598 0.593264 11.2958C0.593264 7.76047 3.46611 4.89582 7 4.89582C10.5339 4.89582 13.4067 7.76047 13.4067 11.2958C13.4067 12.4598 12.461 13.4062 11.297 13.4062ZM9.64408 7.54688C9.64408 7.57298 9.66516 7.59375 9.69071 7.59375H10.7657C10.7913 7.59375 10.8124 7.57298 10.8124 7.54688C10.8124 7.52077 10.7913 7.5 10.7657 7.5H9.69071C9.66517 7.5 9.64408 7.52078 9.64408 7.54688ZM3.1876 7.54688C3.1876 7.57298 3.20868 7.59375 3.23423 7.59375H4.30926C4.33481 7.59375 4.35589 7.57298 4.35589 7.54688C4.35589 7.52077 4.33481 7.5 4.30926 7.5H3.23423C3.20869 7.5 3.1876 7.52078 3.1876 7.54688ZM6.41895 7.54688C6.41895 7.57298 6.44003 7.59375 6.46559 7.59375H7.54062C7.56617 7.59375 7.58725 7.57298 7.58725 7.54688C7.58725 7.52077 7.56617 7.5 7.54062 7.5H6.46559C6.44004 7.5 6.41895 7.52078 6.41895 7.54688ZM9.64408 10.7734C9.64408 10.7995 9.66516 10.8203 9.69071 10.8203H10.7657C10.7913 10.8203 10.8124 10.7995 10.8124 10.7734C10.8124 10.7473 10.7913 10.7266 10.7657 10.7266H9.69071C9.66517 10.7266 9.64408 10.7473 9.64408 10.7734ZM3.1876 10.7734C3.1876 10.7995 3.20868 10.8203 3.23423 10.8203H4.30926C4.33481 10.8203 4.35589 10.7995 4.35589 10.7734C4.35589 10.7473 4.33481 10.7266 4.30926 10.7266H3.23423C3.20869 10.7266 3.1876 10.7473 3.1876 10.7734ZM6.41895 10.7734C6.41895 10.7995 6.44003 10.8203 6.46559 10.8203H7.54062C7.56617 10.8203 7.58725 10.7995 7.58725 10.7734C7.58725 10.7473 7.56617 10.7266 7.54062 10.7266H6.46559C6.44004 10.7266 6.41895 10.7473 6.41895 10.7734Z" stroke="#00AE83"/>
                                                </svg>
                                                <span class="text-[16px] leading-[26px] text-secondary-main/75 tracking-[-0.16px]">30.08.2023</span>
                                            </time>
                                            <p class="text-[48px] 2xl:text-[40px] xl:text-[30px] md:text-[20px] leading-[64px] xl:leading-[35px] text-secondary-main font-semibold mb-[20px] sm:mb-0 line-clamp-3 <?= $i == 0 ? 'reveal' : '' ?>">Our Ifence brand generally produces and assembles fence systems, door systems and</p>
                                            <p class="text-[20px] md:text-[18px] leading-[30px] text-secondary-main/75 mb-[50px] xl:mb-[35px] sm:mb-0 line-clamp-3 <?= $i == 0 ? 'reveal' : '' ?>">Our Ifence brand generally produces and assembles fence systems, door systems and wrought iron Our Ifence brand generally produces and assembles fence systems, door.</p>
                                            <div class="<?= $i == 0 ? 'reveal-button-left' : '' ?>">
                                                <?php
                                                    $link = "news-detail.php";
                                                    $title = "Read More";
                                                    $background = "bg-secondary-50 backdrop-blur-[15px]";
                                                    $backgroundHover = "before:bg-primary-main translate-x-[5px]";
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
                                <?php endfor; ?>
                            </div>
                        </div>
                        <div class="nav-buttons md:order-2 z-10 flex items-center min-md:justify-end gap-[20px] md:gap-[15px] absolute md:static right-[100px] 2xl:right-[60px] xl:right-[30px] md:right-0 bottom-[50px] 2xl:bottom-[25px] md:my-[30px] reveal-button-right">
                            <div class="news-prev group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full bg-transparent backdrop-blur-[5px] border-[3px] border-solid border-[#2E485C]/15 relative z-10 transition-all duration-450  [&.news-disabled]:pointer-events-none">
                                <i class="icon-arrow-left text-[20px] leading-none h-[20px] text-secondary-main transition-all duration-450 group-[&.news-disabled]/nav:text-secondary-main/60 group-[&.news-disabled]/nav:md:text-secondary-main/60"></i>
                                <svg width="70px" height="70px" viewBox="0 0 70 70" preserveAspectRatio="none" class="absolute left-[-3px] top-[-3px] md:scale-[0.7] md:left-[-13px] md:top-[-13px]">
                                    <circle class="[stroke-dasharray:301.59px_301.59px] [stroke-dashoffset:301.59px] transition-all duration-700 group-hover/nav:[stroke-dashoffset:0] ease-[cubic-bezier(.45,.05,.55,.95)] rotate-180 translate-y-full translate-x-full stroke-primary-main sm:hidden" cx="35" cy="35" r="33" stroke="white" stroke-width="3" fill="none" style="" />
                                </svg>
                            </div>

                            <div class="news-next group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full bg-transparent backdrop-blur-[5px] border-[3px] border-solid border-[#2E485C]/15 relative z-10 transition-all duration-450  [&.news-disabled]:pointer-events-none">
                                <i class="icon-arrow-right text-[20px] leading-none h-[20px] text-secondary-main transition-all duration-450 group-[&.news-disabled]/nav:text-secondary-main/60 group-[&.news-disabled]/nav:md:text-secondary-main/60"></i>
                                <svg width="70px" height="70px" viewBox="0 0 70 70" preserveAspectRatio="none" class="absolute left-[-3px] top-[-3px] md:scale-[0.7] md:left-[-13px] md:top-[-13px]">
                                    <circle class="[stroke-dasharray:301.59px_301.59px] [stroke-dashoffset:301.59px] transition-all duration-700 group-hover/nav:[stroke-dashoffset:0] ease-[cubic-bezier(.45,.05,.55,.95)] rotate-180 translate-y-full translate-x-full stroke-primary-main sm:hidden" cx="35" cy="35" r="33" stroke="white" stroke-width="3" fill="none" style="" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="news-tabs-area bg-secondary-main py-[20px] mb-[70px] xl:mb-[30px] flex flex-col">
            <div class="container max-w-[1640px] md:order-2 md:mt-[20px]">
                <div class="flex min-md:items-center md:flex-col justify-center gap-[20px] ">
                    <div class="flex items-center h-full lg:hidden">
                        <?php $tabs = ['All News', 'Events', 'Blog', 'Us in the Press',]; foreach ($tabs as $key => $item): ?>
                            <div class="reveal [&_div]:last:!border-r-">
                                <div class="tab cursor-pointer py-[10px] bg-transparent grid place-items-center transition-all duration-450 rounded-[8px] [&.active]:bg-primary-main group0 whitespace-nowrap <?= $key == 0 ? 'active' : '' ?>" data-tab-id="<?= $key ?>">
                                    <div class="py-[17px] px-[45px] 2xl:px-[35px] 2xl:py-[10px] lg:px-[15px] border-0 !border-r border-solid border-r-white/20 group-[&.active]:border-transparent transition-all duration-450 flex items-center gap-[8px]">
                                        <p class="text-[18px] xl:text-[15px] leading-none tracking-[-0.18px] text-white/85 group-[&.active]:text-white transition-all duration-450"><?= $item ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-area w-full [&_form]:w-full">
                        <form action="" method="post">
                            <div class="form-group flex min-md:justify-end relative md:w-full reveal-button-right">
                                <input type="search" id="search" name="search" placeholder="Search in news..." class="text-[18px] leading-[28px] placeholder-white/75 text-white transition-all duration-450 pr-[40px]">
                                <button type="submit" class="w-[35px] aspect-square absolute right-0 !translate-y-0 transition-all duration-450 hover:scale-110">
                                    <i class="icon-search text-white text-[21px] leading-none h-[21px]"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container max-w-[1640px]">
                <div class="custom-dropdown hidden lg:block w-full">
                    <div class="dropdown relative group/dropdown">
                        <div class="placeholder flex items-center justify-between px-[25px] py-[15px] bg-primary-main cursor-pointer rounded-[9px] group-[&.active]/dropdown:rounded-b-none transition-all duration-450">
                            <span class="text-[18px] leading-normal font-medium text-white transition-all duration-450 placeholder-text">All News</span>
                            <i class="icon-angle-down text-[14px] text-white leading-none transition-all duration-450 group-[&.active]/dropdown:rotate-180"></i>
                        </div>
                        <div class="dropdown-list w-full bg-secondary-50 rounded-[9px] group-[&.active]/dropdown:rounded-t-none absolute left-0 z-[20] transition-all duration-300 opacity-0 pointer-events-none group-[&.active]/dropdown:opacity-100 group-[&.active]/dropdown:pointer-events-auto">
                            <ul class="flex flex-col gap-[10px] overflow-hidden">
                                <?php foreach ($tabs as $key => $item): ?>
                                    <li class="tab cursor-pointer py-[10px] bg-transparent grid place-items-center transition-all duration-450 [&.active]:bg-primary-main group whitespace-nowrap rounded-[9px] group-[&.active]/dropdown:first:rounded-t-none <?= $key == 0 ? 'active' : '' ?>" data-tab-id="<?= $key ?>">
                                        <div class="py-[15px] px-[25px] 2xl:px-[15px] 2xl:py-[10px] xl:px-[5px] lg:px-[15px] group-[&.active]:border-transparent text-[17px] xl:text-[15px] leading-none tracking-[0.17px] text-paragraph transition-all duration-450 group-[&.active]:text-white group-[&.active]:font-bold"><?= $item ?></div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container max-w-[1640px] mb-[160px] 2xl:mb-[120px] xl:mb-[90px] lg:mb-[60px]">
            <div class="news-list w-full grid grid-cols-3 lg:grid-cols-2 xsm:grid-cols-1 gap-[65px] xl:gap-[35px] lg:gap-[24px]">
                <?php $news = [
                    [
                        'title' => 'Our Ifence brand generally produces and assembles fence systems, door systems and',
                        'date' => '30.08.2023',
                        'description' => 'Our Ifence brand generally produces and assembles fence systems, door systems and wrought iron systems.',
                        'image' => 'news-page-1.jpg',
                        'id' => '1'
                    ],

                    [
                        'title' => 'Our Ifence brand generally produces and assembles fence systems, door systems and',
                        'date' => '30.08.2023',
                        'description' => 'Our Ifence brand generally produces and assembles fence systems, door systems and wrought iron systems.',
                        'image' => 'news-page-2.jpg',
                        'id' => '1'
                    ],

                    [
                        'title' => 'Our Ifence brand generally produces and assembles fence systems, door systems and',
                        'date' => '30.08.2023',
                        'description' => 'Our Ifence brand generally produces and assembles fence systems, door systems and wrought iron systems.',
                        'image' => 'news-page-3.jpg',
                        'id' => '2'
                    ],

                    [
                        'title' => 'Our Ifence brand generally produces and assembles fence systems, door systems and',
                        'date' => '30.08.2023',
                        'description' => 'Our Ifence brand generally produces and assembles fence systems, door systems and wrought iron systems.',
                        'image' => 'news-page-4.jpg',
                        'id' => '2'
                    ],

                    [
                        'title' => 'Our Ifence brand generally produces and assembles fence systems, door systems and',
                        'date' => '30.08.2023',
                        'description' => 'Our Ifence brand generally produces and assembles fence systems, door systems and wrought iron systems.',
                        'image' => 'news-page-5.jpg',
                        'id' => '3'
                    ],

                    [
                        'title' => 'Our Ifence brand generally produces and assembles fence systems, door systems and',
                        'date' => '30.08.2023',
                        'description' => 'Our Ifence brand generally produces and assembles fence systems, door systems and wrought iron systems.',
                        'image' => 'news-page-6.jpg',
                        'id' => '3'
                    ],
                ]; foreach ($news as $key => $item): ?>
                    <a href="news-detail.php" class="item w-full relative rounded-[10px] h-[550px] group transition-all duration-450 hidden [&.active]:block active" data-content-id="<?= $item['id'] ?>">
                        <div class="reveal-product-box w-full h-full">
                            <div class="image-wrapper relative w-full h-full rounded-[10px] overflow-hidden">
                                <img src="../assets/image/general/<?= $item['image'] ?>" alt="<?= $item['title'] ?>" width="503" height="547" class="w-full h-full object-cover transition-all duration-450 min-lg:group-hover:scale-110">
                                <div class="overlay absolute pointer-events-auto left-0 bottom-0 w-full h-full bg-[linear-gradient(180deg,_rgba(46,71,92,0.00)_0%,_rgba(46,71,92,0.70)_100%)] z-2 transition-all duration-450 group-hover:opacity-0"></div>
                                <div class="overlay absolute pointer-events-auto left-0 bottom-0 w-full h-full bg-[linear-gradient(180deg,_rgba(46,71,92,0.00)_0%,_#2E475C_100%)] z-2 transition-all duration-450 opacity-0 group-hover:opacity-100"></div>
                            </div>
                            <div class="content absolute z-3 w-full h-full left-0 bottom-0 flex items-end overflow-hidden">
                                <div class="flex flex-col gap-[20px] p-[40px] xl:p-[25px]">
                                    <div class="top w-full flex flex-col gap-[20px] transition-all duration-450 min-lg:translate-y-[100px] will-change-[transform] group-hover:min-lg:translate-y-0">
                                        <time class="flex items-center gap-[10px]">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.70296 1.07551C2.99136 1.07551 3.22515 0.841716 3.22515 0.553314V0.546875C3.22515 0.244836 3.46988 0 3.77179 0C4.07369 0 4.31842 0.244836 4.31842 0.546875C4.31842 0.838833 4.5551 1.07551 4.84705 1.07551H9.15297C9.44493 1.07551 9.68161 0.838833 9.68161 0.546875C9.68161 0.244836 9.92634 0 10.2282 0C10.5301 0 10.7749 0.244836 10.7749 0.546875V0.553342C10.7749 0.841728 11.0087 1.07551 11.297 1.07551C12.7875 1.07551 14 2.28859 14 3.77964V11.2958C14 12.7869 12.7875 14 11.297 14H2.70293C1.21254 14 0 12.7869 0 11.2958V3.77964C0 2.28859 1.21254 1.07551 2.70296 1.07551ZM11.297 2.16926C11.0087 2.16926 10.7749 2.40305 10.7749 2.69143V3.23567C10.7749 3.53771 10.5301 3.78254 10.2282 3.78254C9.92634 3.78254 9.68161 3.53771 9.68161 3.23567C9.68161 2.64671 9.20416 2.16926 8.6152 2.16926H5.3848C4.79584 2.16926 4.31839 2.64671 4.31839 3.23567C4.31839 3.53771 4.07366 3.78254 3.77176 3.78254C3.46985 3.78254 3.22513 3.53771 3.22513 3.23567V2.69146C3.22513 2.40306 2.99133 2.16926 2.70293 2.16926C1.81536 2.16926 1.09326 2.89168 1.09326 3.77964C1.09326 4.06817 1.32716 4.30207 1.61569 4.30207H12.3843C12.6728 4.30207 12.9067 4.06817 12.9067 3.77964C12.9067 2.89168 12.1846 2.16926 11.297 2.16926ZM2.70296 12.9062H11.297C12.1846 12.9062 12.9067 12.1838 12.9067 11.2958C12.9067 8.03735 10.2585 5.39582 7 5.39582C3.74151 5.39582 1.09326 8.03735 1.09326 11.2958C1.09326 12.1838 1.81536 12.9062 2.70296 12.9062ZM9.14408 7.54688C9.14408 7.84891 9.38881 8.09375 9.69071 8.09375H10.7657C11.0676 8.09375 11.3124 7.84891 11.3124 7.54688C11.3124 7.24484 11.0676 7 10.7657 7H9.69071C9.38883 7 9.14408 7.24484 9.14408 7.54688ZM2.6876 7.54688C2.6876 7.84891 2.93232 8.09375 3.23423 8.09375H4.30926C4.61117 8.09375 4.85589 7.84891 4.85589 7.54688C4.85589 7.24484 4.61117 7 4.30926 7H3.23423C2.93235 7 2.6876 7.24484 2.6876 7.54688ZM5.91895 7.54688C5.91895 7.84891 6.16368 8.09375 6.46559 8.09375H7.54062C7.84252 8.09375 8.08725 7.84891 8.08725 7.54688C8.08725 7.24484 7.84252 7 7.54062 7H6.46559C6.16371 7 5.91895 7.24484 5.91895 7.54688ZM9.14408 10.7734C9.14408 11.0755 9.38881 11.3203 9.69071 11.3203H10.7657C11.0676 11.3203 11.3124 11.0755 11.3124 10.7734C11.3124 10.4714 11.0676 10.2266 10.7657 10.2266H9.69071C9.38883 10.2266 9.14408 10.4714 9.14408 10.7734ZM2.6876 10.7734C2.6876 11.0755 2.93232 11.3203 3.23423 11.3203H4.30926C4.61117 11.3203 4.85589 11.0755 4.85589 10.7734C4.85589 10.4714 4.61117 10.2266 4.30926 10.2266H3.23423C2.93235 10.2266 2.6876 10.4714 2.6876 10.7734ZM5.91895 10.7734C5.91895 11.0755 6.16368 11.3203 6.46559 11.3203H7.54062C7.84252 11.3203 8.08725 11.0755 8.08725 10.7734C8.08725 10.4714 7.84252 10.2266 7.54062 10.2266H6.46559C6.16371 10.2266 5.91895 10.4714 5.91895 10.7734Z" fill="white"/>
                                            </svg>
                                            <span class="text-[16px] leading-[26px] text-white tracking-[-0.16px]"><?= $item['date'] ?></span>
                                        </time>
                                        <p class="text-[24px] xl:text-[22px] md:text-[20px] leading-[36px] text-white font-bold line-clamp-3"><?= $item['title'] ?></p>
                                    </div>
                                    <div class="bottom flex items-end w-full gap-[20px] transition-all duration-450 min-lg:opacity-0 min-lg:translate-y-[100px] will-change-[height,transform] group-hover:min-lg:opacity-100 group-hover:min-lg:translate-y-0">
                                        <p class="text-[18px] md:text-[16px] leading-[24px] text-white/75 line-clamp-3"><?= $item['description'] ?></p>
                                        <div class="py-[14px] px-[28px] xs:px-[20px] grid place-items-center transition-all duration-300 relative group-hover/item:min-md:delay-150 z-5 before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-primary-main before:-skew-x-12 before:rounded-[6px] before:transition-all before:duration-300 after:-skew-x-12 after:rounded-[6px] after:absolute after:right-0 after:top-0 after:bg-secondary-main after:w-0 after:h-full after:transition-all after:duration-300 after:z-2 hover:after:w-full hover:after:right-auto hover:after:left-0">
                                            <i class="icon-arrow-right text-[20px] xs:text-[18px] leading-none h-[20px] xs:h-[18px] text-white relative z-5 transition-all duration-450 delay-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="more-area w-full grid place-items-center mt-[90px] 2xl:mt-[80px] xl:mt-[50px] lg:mt-[35px]">
                <div class="reveal-product-box">
                    <a href="#" class="block text-[20px] md:text-[18px] leading-[30px] text-white rounded-full px-[50px] py-[20px] bg-primary-main transition-all duration-300 hover:brightness-125">More</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection 