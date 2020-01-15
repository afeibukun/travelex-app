<template>
    <div>
        <div class="page-header clear-filter">
            <div class="container">
                <div class="row flex-nowrap">
                    <div class="position-relative">
                        <div class="text-left text-section">
                            <h1 class="h1-seo text-white">Seamless Exchange</h1>
                            <a href="#login" class="btn btn-primary">Login To Portal</a>
                        </div>
                    </div>
                    <div>
                        <img src="/image/finance-exchange.png">
                    </div>
                </div>
            </div>
        </div>
        <login-component />
        <footer-component/>
    </div>
</template>

<script>
    import LoginComponent from '../components/LoginComponent';
    import FooterComponent from '../components/FooterComponent';

    export default{
        components: {LoginComponent, FooterComponent}
    }
</script>

<style scoped>
    .page-header{
        /*background-color: #f1eeee;*/
        background: linear-gradient(45deg,#3A0E43,#A75F4E);
        min-height:auto;
        border-bottom: 2px solid #da292f;
    }
    .page-header>.container{
        padding-top:15vh;
        padding-bottom:15vh;
    }
    .text-section{
        padding-top:33%;
    }
</style>

