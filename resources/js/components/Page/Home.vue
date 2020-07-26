<template>
    <div >
        <div class="loading-page">
            <div class="counter">
                <p>loading</p>
                <h1>
                    0%


                </h1>
                <hr />
            </div>
        </div>
        <appheader class="myhome" ></appheader>
        <appslider class="myhome" ></appslider>
        <appvideo class="myhome" ></appvideo>
    </div>
</template>

<script>

import $  from "jquery";
$(document).ready(function() {

  var counter = 0;
  var i = setInterval(function(){
      $(".loading-page .counter h1").html( counter + "%");
      $(".loading-page .counter hr").css("width", counter + "%");
      $(".loading-page .counter").css("background", "linear-gradient(to right, #f60d54 "+ counter + "%,#0d0d0d "+ counter+ "%)");


    $(".loading-page .counter h1.color").css("width", counter + "%");

    counter++;


    if(counter >= 100) {
                 counter = 0;
    $(".loading-page .counter h1").html( 0 + "%");
                $(".loading-page").remove()



    }
  }, 5);
});
import appheader from "../pagecomponents/Header";
import appslider from "../pagecomponents/Slider";
import appvideo from "../pagecomponents/HomeVideo";
export default {
    components: { appslider, appvideo, appheader }
};
</script>

<style >

.myhome{
    animation: animate_website 2s alternate;
}
@keyframes animate_website {
    0% {
        transform: scale(0)
    }

    100% {
        transform: scale(1)
    }
}

</style>
