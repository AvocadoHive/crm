<html>
    <head>
        <title>Dashboard | Avocado Hive</title>

        {{-- use dashboard global css --}}
        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

        @yield ('styles')

        {{-- Google fonts --}}
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;700&display=swap" rel="stylesheet">
        
        {{-- use font awesome --}}
        <script src="https://kit.fontawesome.com/28b5b7d92f.js" crossorigin="anonymous"></script>


    </head>
    <body>
        <div class="d-main-base-content">
            <div class="d-main-content-inner">
                <div class="d-dashboard-header">
                    <div class="d-logo-here">
                        <img src="{{ URL::to('/') }}/images/logo.png" alt="">
                    </div>
                    <div class="d-head-ops">
                        <div class="d-content-header">
                            {{-- <div class="left-header-part">
                                <div class="d-breadcrumbs">
                                    @yield ('breadcrumbs')
                                </div>
                            </div> --}}
                            <div class="right-header-part">
                                <div class="d-search-part"><input type="text" placeholder="Search Here"></div>
                                <div class="d-login-user">Hi Arphie!</div>
                                <div class="d-site-settings"><a href="#"><i class="fa-solid fa-gears"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-main-navs">
                    
                    <div class="d-meain-menu">
                        <ul>
                            <li><a href="/dashboard"><i class="fa-solid fa-gauge"></i> Dashboard</a></li>
                            <li><a href="/dashboard/client"><i class="fa-solid fa-person-half-dress"></i> Clients</a></li>
                            <li><a href="/dashboard/applicants"><i class="fa-solid fa-person-half-dress"></i> Applicants</a></li>
                            <li><a href="#"><i class="fa-solid fa-screwdriver-wrench"></i> Settings</a></li>
                        </ul>
                    </div>
                </div>
                <div class="d-main-content">
                    <div class="d-content-main">
                        @yield ('content')
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        @yield ('scripts')
    </body>
</html>