<template>
    <div class="main-section">
        <app-nav-component />
        <section class="bdc-reg-section">
            <div class="container">
                <div class="row">
                    <app-title-component icon-string="now-ui-icons business_bank" main-title="BDC"></app-title-component>
                </div>
                <div class="row">
                    <div class="content w-100 mb-5">
                        <div class="bdc-details bg-white shadow-sm p-3">
                            <p>
                                <strong>Name</strong>
                                <span>Bureau Du Change XYZ</span>
                            </p>
                            <p>
                                <strong>Code</strong>
                                <span>12345690BDCXYZ</span>
                            </p>
                            <p>
                                <strong>Email</strong>
                                <span>clarke@xyzbdc.tvx</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <app-title-component icon-string="now-ui-icons business_badge" main-title="Encasher Registration"></app-title-component>
                </div>
                <div class="row">
                    <div class="content w-100">
                        <div class="form-container">
                            <div class="card card-plain">
                                <form class="form" method="" action="">
                                    <div class="card-header text-center">
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group no-border">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group no-border ">
                                                    <label>Phone Number</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group no-border input-lg">
                                                    <label>Address</label>
                                                    <textarea type="text" class="form-control" placeholder="">
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group no-border input-lg">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="encasher-add-image-section">
                                            <div class="image-container text-center">
                                                <div class="d-inline-block">
                                                    <img src="/image/simple-avatar.png" />
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>Update Encasher Image</p>
                                            </div>
                                        </div>

                                        <div class="encasher-add-biometric-section py-5 border-sm ">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="biometric-container text-md-right">
                                                        <div class="d-inline-block">
                                                            <img src="/image/fingerprint.png" />
                                                            <p class="m-0 text-center">Left</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="biometric-container text-md-left">
                                                        <div class="d-inline-block">
                                                            <img src="/image/fingerprint.png" />
                                                            <p class="m-0 text-center color-theme">Right</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <p>Retrieve Encasher Biometrics Data</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#pablo" class="btn btn-primary btn-round btn-lg">Store Encasher Details</a>
                                        <a href="#pablo" class="btn btn-transparent btn-round btn-lg">Cancel</a>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer-component />
    </div>
</template>

<script>
    import AppNavComponent from '../../../components/AppNavComponent'
    import FooterComponent from "../../../components/FooterComponent";
    import AppTitleComponent from "../../../components/AppTitleComponent";

    export default {
        name: "RegisterBdc",
        components: {AppTitleComponent, FooterComponent, AppNavComponent}
    }
</script>

<style scoped>
    .bdc-details {
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }
    .bdc-details strong{
        color: #fff;
        display: inline-block;
        width: 60px;
        background-color: #da292f;
        padding: 2px 5px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }

    .form-container {
        background-color: #fff;
        margin: 0px 5px 20px 5px;
        padding: 10px;
        -webkit-box-shadow: 0px 0px 4px rgba(0,0,0,0.1);
        -moz-box-shadow: 0px 0px 4px rgba(0,0,0,0.1);
        box-shadow: 0px 0px 4px rgba(0,0,0,0.1);
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
    }
    .image-container>div{
        background-color:#efefef;
        opacity: .6;
        -webkit-border-radius: 300px;
        -moz-border-radius: 300px;
        border-radius: 300px;
        overflow: hidden;
    }
    .image-container img{
        height:200px;
        opacity: 0.4;
    }
    .biometric-container>div{
        background-color:#efefef;
        opacity: .6;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        overflow: hidden;
    }

    .biometric-container img{
        height:200px;
    }
    .btn.btn-transparent{
        background: transparent;
        color:#000;
    }
    .main-section{
        background-color: #efefef;
    }
</style>
