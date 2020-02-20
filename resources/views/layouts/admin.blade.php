@include('admin.section.top-link')
<div class="page-wrapper">
@include('admin.section.header')
@include('admin.section.sidebar')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-content fade-in-up">
           @yield('content')
                <a class="adminca-banner" href="http://admincast.com/adminca/" target="_blank">
                    <div class="adminca-banner-ribbon"><i class="fa fa-trophy mr-2"></i>PREMIUM TEMPLATE</div>
                    <div class="wrap-1">
                        <div class="wrap-2">
                            <div>
                                <img src="./assets/img/adminca-banner/adminca-preview.jpg" style="height:160px;margin-top:50px;" />
                            </div>
                            <div class="color-white" style="margin-left:40px;">
                                <h1 class="font-bold">ADMINCA</h1>
                                <p class="font-16">Save your time, choose the best</p>
                                <ul class="list-unstyled">
                                    <li class="m-b-5"><i class="ti-check m-r-5"></i>High Quality Design</li>
                                    <li class="m-b-5"><i class="ti-check m-r-5"></i>Fully Customizable and Easy Code</li>
                                    <li class="m-b-5"><i class="ti-check m-r-5"></i>Bootstrap 4 and Angular 5+</li>
                                    <li class="m-b-5"><i class="ti-check m-r-5"></i>Best Build Tools: Gulp, SaSS, Pug...</li>
                                    <li><i class="ti-check m-r-5"></i>More layouts, pages, components</li>
                                </ul>
                            </div>
                        </div>
                        <div style="flex:1;">
                            <div class="d-flex justify-content-end wrap-3">
                                <div class="adminca-banner-b m-r-20">
                                    <img src="./assets/img/adminca-banner/bootstrap.png" style="width:40px;margin-right:10px;" />Bootstrap v4</div>
                                <div class="adminca-banner-b m-r-10">
                                    <img src="./assets/img/adminca-banner/angular.png" style="width:35px;margin-right:10px;" />Angular v5+</div>
                            </div>
                            <div class="dev-img">
                                <img src="./assets/img/adminca-banner/sprite.png" />
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>


    </div>
</div>
<!-- BEGIN THEME CONFIG PANEL-->
@include('admin.section.footer')
