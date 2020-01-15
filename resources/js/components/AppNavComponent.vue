<template>
    <section class="app-alt-nav-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="content">
                        <div>
                            BDC
                        </div>
                        <a class="btn btn-outline-danger btn-icon btn-round" type="button">
                            <i class="now-ui-icons arrows-1_minimal-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="content">
                        <div>
                            Encasher
                        </div>
                        <a class="btn btn-outline-danger btn-icon btn-round" type="button">
                            <i class="now-ui-icons arrows-1_minimal-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="content">
                        <div>
                            Queue Ticket
                        </div>
                        <a class="btn btn-outline-danger btn-icon btn-round" type="button">
                            <i class="now-ui-icons arrows-1_minimal-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="content">
                        <div>
                            Invoices
                        </div>
                        <a class="btn btn-outline-danger btn-icon btn-round" type="button">
                            <i class="now-ui-icons arrows-1_minimal-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "AppNavComponent"
    }
</script>

<style scoped>
    section.app-alt-nav-section{
        padding-top:15px;
        padding-bottom:15px;

    }
    section.app-alt-nav-section .content{
        position: relative;
        padding:30px 50px 30px 10px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        background: #fff;
        -webkit-box-shadow:0px 0px 2px rgba(0,0,0,0.1);
        -moz-box-shadow: 0px 0px 2px rgba(0,0,0,0.1);
        box-shadow: 0px 0px 2px rgba(0,0,0,0.1);
        cursor: pointer;
    }
    section.app-alt-nav-section .content a{
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        margin:0px;
    }


</style>
