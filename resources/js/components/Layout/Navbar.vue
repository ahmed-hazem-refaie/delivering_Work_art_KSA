<template>
    <nav class="navbar navbar-expand-lg navbar-light px-3 sticky-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/"><img class="logo-ecs" src="//cdn.shopify.com/s/files/1/3000/4362/t/109/assets/logo-ecs.png?v=2452931808056810559" width="32px" alt=""></a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav  mx-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <router-link to="/">
                        <a class="nav-link">Home <span class="sr-only">(current)</span></a>
                    </router-link>
                    
                </li>
                <li class="nav-item">
                    <router-link to="/shop">
                        <a class="nav-link">Shop Art</a>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/about">
                        <a class="nav-link">About Us</a>
                    </router-link>
                </li>
                <!-- <li class="nav-item">
                    <router-link to="/payment">
                        <a class="nav-link">Payment</a>
                    </router-link>
                </li> -->
            </ul>
        </div>
            <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
            <button class="nav-btns"> <img src="//cdn.shopify.com/s/files/1/3000/4362/t/109/assets/nav_icons_bag.svg?v=8412811641524949656" alt="Shopping Cart" width="33px"> <span>0</span> </button>
    </nav>
</template>

<script>
export default {

}
</script>

<style>

</style>