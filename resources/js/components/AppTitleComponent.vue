<template>
    <div class="content w-100">
        <div class="title section-title">
                            <span class="d-inline-block">
                                <i :class="iconString"></i>
                            </span>
            <h3 class="d-inline">{{ mainTitle }}</h3>
        </div>
    </div>
</template>

<script>
    export default {
        name: "AppTitleComponent",
        props:{
            iconString: String,
            mainTitle: String
        }
    }
</script>

<style scoped>
    .section-title span{
        padding: 10px;
        background-color: #222745;
        line-height: 12px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }
    .section-title span i{
        color: #fff;
    }
    .section-title {
        padding-bottom:10px;
        border-bottom: 1px solid;
        margin-bottom: 50px;
    }

</style>
