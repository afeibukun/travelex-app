<template>
    <div>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-white navbar-custom fixed-top" color-on-scroll="400">
            <div class="container">
                <div class="navbar-translate">
                    <router-link class="navbar-brand" :to="{name: 'home'}" rel="tooltip" title="Travelex" data-placement="bottom" target="_blank">
                        <img src="/image/travelex-logo.png" />
                    </router-link>
                    <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar top-bar"></span>
                        <span class="navbar-toggler-bar middle-bar"></span>
                        <span class="navbar-toggler-bar bottom-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#login">
                                <i class="now-ui-icons users_single-02"></i>
                                <p>Sign In</p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
                                <i class="fa fa-ellipsis-v"></i>
                                <p>More</p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                                <a class="dropdown-item" href="#1">
                                    <i class="now-ui-icons business_chart-pie-36"></i> More 1
                                </a>
                                <a class="dropdown-item" target="_blank" href="#2">
                                    <i class="now-ui-icons design_bullet-list-67"></i> More 2
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="wrapper">
            <main class="padding-top-76">
                <router-view></router-view>
            </main>
        </div>
    </div>
</template>

<script>

    export default {
        name: "App"
    }
</script>

<style scoped>
    @import './../assets/css/theme-now-ui.css';
    @import './../assets/css/style.css';

    img{
        height:40px;
    }
    .navbar.navbar-custom{
        padding-top:10px !important;
        margin-bottom:0px;
    }
</style>
