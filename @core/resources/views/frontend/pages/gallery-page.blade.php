@extends('frontend.frontend-page-master')
@section('site-title')
    Gallery
@endsection
@section('page-title')
    Gallery
@endsection
@section('style')
    <style>
        /*.our-store-area-wrapper .our-store-item-wrap .col-lg-3{*/
        /*    margin-bottom: 30px;*/
        /*}*/
        .our-stor-isotop-btn-wrapper #our-stor-btn-list-category li{
            font-size: 40px;
        }
    </style>
@endsection
@section('page-meta-data')
    <meta name="description" content="">
    <meta name="tags" content="">
@endsection
@php
   $categoriesName = [
       'men_clothes' => "Men's Clothes",
       'women_clothes' => "Men's Clothes",
       'men_suits' => "Men's suits",
       'bottoms_jumpsuits' => "Bottoms & Jumpsuits",
       'tops' => "Tops",
       'jackets' => "Jackets",
   ];
   $galaries = [];
   $dirs = array_filter(glob('assets/uploads/media-uploader/*'), 'is_dir');
   rsort($dirs);
   foreach($dirs as $dir)
   {
       $path = explode('/', $dir);
       $cate = $path[count($path) - 1];
       $galaries[$cate] = [];
       $subDirs = array_filter(glob($dir.'/*'), 'is_dir');
       foreach($subDirs as $subDir)
       {
           $subPath = explode('/', $subDir);
           $subCate = $subPath[count($subPath) - 1];
           $images = glob( $subDir . '/*.{jpg,jpeg,png,gif,JPG,PNG,JPEG,GIF}', GLOB_BRACE);
           $galaries[$cate][$subCate] = $images;
       }
   }
   $cateListHTML = "";
   $cateHTML = "";
   $url = config('app.app_url');
   foreach($galaries as $caterory => $subCate){
       $subCateHTML = "";
       $cateSlug = create_slug(str_replace("'", "", $caterory));
       $cateListHTML.= "<li data-cate='".$cateSlug."' data-type='category' class='". ("women_clothes" == $cateSlug ? 'active' : '') ."'>".$categoriesName[$caterory]."</li>";
       $subCateListHTML = "";
       $subCateListHTML .= "<ul class='our-stor-btn-list' id='our-stor-btn-list-sub-category'>";
       $i = 1;
       foreach($subCate as $subCateName => $cate){
           $x = 1;
           $slug = create_slug(str_replace("'", "", $subCateName));
           $subCateListHTML.= "<li data-cate='".$slug."' data-type='sub-category' class='our-stor-btn-list ".($x == 1 ? 'active' : '')."'>".$categoriesName[$subCateName]."</li>";
           $imageHTML = "";
           foreach($cate as $image){
               $url = config('app.url') ."/". $image;
                   $imageHTML.= "<div class='col-sm-6 col-md-4 col-lg-3'>
                                   <div class='single-new-popular-dress-item style-02'>
                                       <div class='img-box bg-color-off-white'>
                                               <span class='tag-box-new top-right flex-column'></span>
                                               <span class='product-bg-img bg-position-bottom'
                                                       style='background-image: url(".$url."); background-size: cover'
                                                       data-width='100%' data-height='380'>
                                               </span>
                                       </div>
                                   </div>
                              </div>";
               $x++;
           }
           $subCateHTML.= "<div class='row product_filter_section_sub-category ". ($i == 1 ? '' : "d-none") ."' id='product_filter_section_sub-category_".$slug."'>
                               ".$imageHTML."
                           </div>";
           $i++;
       }
       $subCateListHTML.="</ul>";
       $cateHTML.= "<div class='row our-store-item-wrap product_filter_section_category ". ("women_clothes" == $cateSlug ? '' : 'd-none') ."' id='product_filter_section_category_".$cateSlug."'>
               <div class='container custom-container-1618 filter-two-main-container'>
               <div class='row justify-content-center'>
                   <div class='col-lg-12'>
                       <div class='our-stor-isotop-btn-wrapper' style='text-align: left'>
                           {$subCateListHTML}
                       </div>
                   </div>
               </div>
               <div class='our-store-item-wrap product-filter-style-two-product-wrapper' data-item-limit='8'>
                   <div class='filter-style-block-preloader lds-ellipsis'>
                       <div></div>
                       <div></div>
                       <div></div>
                       <div></div>
                   </div>
                   {$subCateHTML}
                   ";

       $cateHTML .= "</div>
               </div>
           </div>";
   };
@endphp
@section('content')
    <div class="our-store-area-wrapper" data-padding-top="20px" data-padding-bottom="20px">
    <div class="contact-section padding-bottom-120">
        <div class="container custom-container-1618">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="our-stor-isotop-btn-wrapper">
                        <ul class="our-stor-btn-list" id="our-stor-btn-list-category">
                            {!! $cateListHTML !!}
                        </ul>
                    </div>
                </div>
            </div>
            {!! $cateHTML !!}
        </div>
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <style>
            .lds-ellipsis {
                display: inline-block;
                position: fixed;
                width: 80px;
                height: 80px;
                left: 50vw;
                top: 40vh;
                z-index: 50;
                display: none;
            }

            .lds-ellipsis div {
                position: absolute;
                top: 33px;
                width: 13px;
                height: 13px;
                border-radius: 50%;
                background: var(--main-color-one);
                animation-timing-function: cubic-bezier(0, 1, 1, 0);
            }

            .lds-ellipsis div:nth-child(1) {
                left: 8px;
                animation: lds-ellipsis1 0.6s infinite;
            }

            .lds-ellipsis div:nth-child(2) {
                left: 8px;
                animation: lds-ellipsis2 0.6s infinite;
            }

            .lds-ellipsis div:nth-child(3) {
                left: 32px;
                animation: lds-ellipsis2 0.6s infinite;
            }

            .lds-ellipsis div:nth-child(4) {
                left: 56px;
                animation: lds-ellipsis3 0.6s infinite;
            }

            @keyframes lds-ellipsis1 {
                0% {
                    transform: scale(0);
                }
                100% {
                    transform: scale(1);
                }
            }

            @keyframes lds-ellipsis3 {
                0% {
                    transform: scale(1);
                }
                100% {
                    transform: scale(0);
                }
            }

            @keyframes lds-ellipsis2 {
                0% {
                    transform: translate(0, 0);
                }
                100% {
                    transform: translate(24px, 0);
                }
            }
        </style>
    </div>
    </div>

@endsection

