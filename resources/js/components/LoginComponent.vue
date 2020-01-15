<template>
    <div class="login-section clear-filter" id="login">
        <div class="content">
            <div class="container">
                <div class="col-md-4 ml-auto mr-auto">
                    <div class="card card-login card-plain">
                        <form class="form" method="" action="">
                            <div class="card-header text-center">
                                <div class="logo-container">
                                    <img src="/image/travelex-logo.png" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text">
                                              <i class="now-ui-icons users_circle-08"></i>
                                            </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text">
                                              <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                            </span>
                                    </div>
                                    <input type="password" placeholder="Password" class="form-control" />
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#pablo" class="btn btn-primary btn-round btn-lg btn-block">Login to Portal</a>
                                <div class="pull-left">
                                    <h6>
                                        <a href="#pablo" class="link"> Forgot Password</a>
                                    </h6>
                                </div>
                                <div class="pull-right">
                                    <h6>
                                        <a href="#pablo" class="link">Need Help?</a>
                                    </h6>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "LoginComponent"
    }
</script>

<style scoped>
    .login-section>div>.container{
        padding-top:15vh;
        padding-bottom:15vh;
    }
    .logo-container img{
        height:50px;
    }

</style>
