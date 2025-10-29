@extends('layouts.main')

@section('content')
<?php 
$pageTitle = 'Products';
$breadcrumbTitle = 'Products';
//$breadcrumbImage = $menu->image;
?>

<main class="main-field header-space sub-page">
    
    <section class="filters container max-w-[1800px] pt-[50px] md:pt-[20px] mb-[115px] xl:mb-[75px] lg:mb-[50px]">
        <div class="container max-w-[1640px] py-[30px] bg-white rounded-[20px] shadow-[0px_4px_30px_0px_rgba(0,0,0,0.10)]">
            <div class="flex min-lg:items-center lg:flex-col justify-between gap-[80px] xl:gap-[40px] xs:gap-[20px]">
                <div class="flex min-lg:items-center lg:flex-wrap gap-[50px] xl:gap-[25px] lg:gap-0 w-full">
                    <div class="flex items-center gap-[18px] cursor-pointer mr-[50px] xl:mr-[25px] lg:w-full lg:mr-0 lg:mb-[20px] reveal">
                        <i class="icon-filter text-[35px] leading-none h-[35px] text-primary-main"></i>
                        <p class="text-[24px] xl:text-[20px] leading-[36px] font-bold text-secondary-main whitespace-nowrap">Product Filter</p>
                    </div>
                    <div class="custom-dropdown lg:w-1/2 lg:pr-[15px] xsm:p-0 xsm:w-full reveal">
                        <div class="dropdown relative group/dropdown whitespace-nowrap min-lg:min-w-[300px] min-lg:max-w-[300px] lg:w-full">
                            <div class="placeholder flex items-center justify-between gap-[50px] px-[30px] sm:px-[20px] py-[25px] xs:py-[15px] bg-secondary-50 cursor-pointer rounded-[10px] group-[&.active]/dropdown:rounded-b-none transition-all duration-450">
                                <span class="placeholder-text text-[18px] md:text-[16px] leading-[24px] text-secondary-main/80 transition-all duration-450">Product Categories</span>
                                <i class="icon-angle-down text-[12px] text-secondary-main/40 leading-none transition-all duration-450 group-[&.active]/dropdown:rotate-180 group-[&.active]/dropdown:text-secondary-main"></i>
                            </div>
                            <div class="dropdown-list w-full bg-secondary-50 overflow-hidden rounded-[9px] group-[&.active]/dropdown:rounded-t-none absolute left-0 z-[20] transition-all duration-300 opacity-0 pointer-events-none group-[&.active]/dropdown:opacity-100 group-[&.active]/dropdown:pointer-events-auto">
                                <ul class="flex flex-col gap-[10px] overflow-hidden">
                                    <?php foreach($categories as $category): ?>
                                        <li class="cursor-pointer py-[15px] px-[30px] bg-transparent transition-all duration-450 group/item hover:bg-black/15 group whitespace-nowrap" data-tab-id="<?= $category->id ?>">
                                            <div class="group-[&.active]:border-transparent transition-all duration-450">
                                                <p class="text text-[18px] md:text-[16px] leading-[24px] text-secondary-main/80 transition-all duration-450 group-hover/item:text-secondary-main group-[&.active]:text-white group-[&.active]:font-bold"><?= $category->title ?></p>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="[&_form]:w-full w-full lg:w-1/2 lg:pl-[15px] xsm:p-0 xsm:w-full xsm:mt-[20px] ">
                        <form action="" method="post">
                            <div class="form-group w-full relative reveal">
                                <input type="search" name="search" id="search" placeholder="Search in products..." class="w-full py-[23px] xs:py-[15px] px-[40px] sm:px-[20px] text-[18px] md:text-[16px] leading-[28px] text-secondary-main transition-all duration-450 placeholder-secondary-main/75 bg-secondary-50 border border-solid border-transparent focus:border-secondary-500 rounded-[10px]">
                                <button type="submit" class="absolute right-[7px] top-[7px] px-[39px] lg:px-[18px] py-[18px] xs:py-[10px] bg-primary-main rounded-[10px] transition-all duration-300 hover:brightness-125 !translate-y-0">
                                    <span class="text-[20px] xl:text-[18px] leading-[24px] font-semibold text-white lg:hidden">Search</span>
                                    <i class="icon-search text-[16px] leading-none h-[16px] text-white min-lg:hidden"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right flex min-lg:justify-end reveal">
                    <p class="cursor-pointer text-[18px] leading-[24px] text-secondary-main underline decoration-1 whitespace-nowrap">All Products</p>
                </div>
            </div>
        </div>
    </section>
    <section class="products relative overflow-hidden">
        <div class="container max-w-[1640px]">
            <div class="flex flex-col gap-[50px] lg:gap-[25px]">
                <div class="flex min-xsm:items-center xsm:flex-col justify-between gap-[20px]">
                    <div class="text-editor reveal">
                        <h1>All <span>Products</span></h1>
                    </div>
                    <div class="flex items-center gap-[16px]">
                        <p class="text-[24px] xl:text-[22px] md:text-[18px] leading-[24px] text-secondary-main reveal">Bulunan Ürün Sayısı:</p>
                        <span class="block text-[24px] xl:text-[22px] md:text-[18px] leading-[24px] text-white p-[5px] rounded-[5px] bg-primary-main reveal"><?= count($products) ?></span>
                    </div>
                </div>
                <div class="product-list grid grid-cols-2 gap-x-[40px] xl:gap-[30px] xsm:gap-[24px] xsm:grid-cols-1 gap-y-[70px] mb-[110px] xl:mb-[75px] lg:mb-[50px]">
                    <!-- Mobilde 4 adet iitem gösterilecek ve more butonu ile daha fazlası yüklenecek -->
                    <?php foreach ($products as $product): ?>
                        <div class="reveal-product-box">
                            <div class="item group/item bg-white relative overflow-hidden rounded-[20px] border border-solid border-transparent md:border-primary-main/10 transition-all duration-450 hover:min-md:border-primary-main hover:min-md:shadow-[0px_4px_30px_0px_rgba(0,0,0,0.10)] px-[60px] 2xl:px-[45px] lg:px-[30px] py-[50px] xl:py-[35px] flex min-md:items-center md:flex-col gap-[68px] 2xl:gap-[45px] lg:gap-[30px]">
                                <div class="min-w-[200px] max-w-[200px] lg:max-w-[160px] lg:min-w-[160px] md:max-w-full md:w-full flex flex-col gap-[21px]">
                                    <div class="product-card-slider overflow-hidden">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a href="product-detail.php" class="item block w-full h-[270px]">
                                                    <img src="<?= asset(getFolder(['uploads_folder', 'product_images_folder'], $product['lang']) . '/' . $product->image)?>" alt="<?=$product->alt?>" width="376" height="518" class="w-full h-full object-contain">
                                                </a>
                                            </div>
                                            <?php foreach ($product->images as $image): ?>
                                                <div class="swiper-slide">
                                                    <a href="product-detail.php" class="item block w-full h-[270px]">
                                                        <img src="<?= asset(getFolder(['uploads_folder', 'product_images_folder'], $product['lang']) . '/' . $image->image)?>" alt="Product" width="376" height="518" class="w-full h-full object-contain">
                                                    </a>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="product-card-slider-pagination flex items-center justify-center gap-[7px] [&_.swiper-pagination-bullet]:w-[11px] [&_.swiper-pagination-bullet]:h-[12px] [&_.swiper-pagination-bullet]:-skew-x-12 [&_.swiper-pagination-bullet]:bg-secondary-main/16 [&_.swiper-pagination-bullet.swiper-pagination-bullet-active]:bg-primary-main [&_.swiper-pagination-bullet]:rounded-[2px] [&_.swiper-pagination-bullet]:!m-0 [&_.swiper-pagination-bullet]:!opacity-100 [&_.swiper-pagination-bullet]:transition-all [&_.swiper-pagination-bullet]:duration-300"></div>
                                </div>
                                <div class="flex flex-col gap-[20px] xs:gap-[10px] w-full">
                                    <span class="text-[24px] lg:text-[20px] xs:text-[18px] leading-[36px] text-primary-main"><?php echo $product->category->title; ?></span>
                                    <div class="title">
                                        <a href="product-detail.php" class="flex items-center gap-[20px] transition-all duration-450 hover:min-md:translate-x-[20px]">
                                            <h3 class="text-[32px] xl:text-[28px] md:text-[22px] leading-[48px] xl:leading-[40px] md:leading-[30px] font-bold text-secondary-main line-clamp-2"><?= $product['title'] ?></h3>
                                        </a>
                                    </div>
                                    <p class="text-[20px] lg:text-[18px] xs:text-[17px] leading-[30px] text-secondary-main opacity-85 line-clamp-3 lg:line-clamp-2"><?= $product['description'] ?></p>
                                </div>
                                <a href="product-detail.php" class="block min-md:absolute right-[40px] bottom-[40px] min-md:opacity-0 min-md:translate-x-[60px] transition-all duration-450 group-hover/item:min-md:translate-x-0 group-hover/item:min-md:opacity-100">
                                    <div class="py-[14px] px-[28px] xs:px-[20px] grid place-items-center transition-all duration-300 z-5 relative before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-primary-main before:-skew-x-12 before:rounded-[6px] --- after:sm:hidden after:-skew-x-12 after:rounded-[6px] after:absolute after:right-0 after:top-0 after:bg-secondary-main after:w-0 after:h-full after:transition-all after:duration-300 after:z-2 hover:after:w-full hover:after:right-auto hover:after:left-0">
                                        <i class="icon-arrow-right text-[20px] xs:text-[18px] leading-none h-[20px] xs:h-[18px] text-white relative z-5 transition-all duration-450 delay-300"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach?>
                </div>
                <div class="more-area w-full grid place-items-center mb-[160px] 2xl:mb-[120px] xl:mb-[80px] lg:mb-[60px]">
                    <div class="reveal-product-box">
                        <a href="#" class="block text-[20px] md:text-[18px] leading-[30px] text-white rounded-full px-[50px] py-[20px] bg-primary-main transition-all duration-300 hover:brightness-125">More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection

<!-- script --> 
@section('script') 

@endsection