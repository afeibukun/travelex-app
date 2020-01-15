<template>
    <div class="main-section">
        <app-nav-component />
        <section class="bdc-reg-section">
            <div class="container">
                <div class="row">
                    <app-title-component main-title="BDC Registration" icon-string="now-ui-icons business_bank"></app-title-component>
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
                                                    <label>BDC Name</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group no-border ">
                                                    <label>BDC Code</label>
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
                                            <div class="col-md-6">
                                                <div class="form-group no-border">
                                                    <label>Phone Number 1</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group no-border input-lg">
                                                    <label>Phone Number 2</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group no-border input-lg">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#pablo" class="btn btn-primary btn-round btn-lg">Create BDC</a>
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
    import AppNavComponent from '../../components/AppNavComponent'
    import FooterComponent from "../../components/FooterComponent";
    import AppTitleComponent from "../../components/AppTitleComponent";

    export default {
        name: "RegisterBdc",
        components: {AppTitleComponent, FooterComponent, AppNavComponent}
    }
</script>

<style scoped>

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

    .btn.btn-transparent{
        background: transparent;
        color:#000;
    }
    .main-section{
        background-color: #efefef;
    }
</style>
