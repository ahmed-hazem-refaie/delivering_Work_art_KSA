<template>
  <div>
        <div class="loading-page">
            <div class="counter">
                <p>{{ $t("message.loading") }}</p>
                <h1>
                    0%


                </h1>
                <hr />
            </div>
        </div>
    <shopHeader></shopHeader>
    <appslider></appslider>
  </div>
</template>

<script>
import shopHeader from "../pagecomponents/ShopHeader";
import appslider from '../pagecomponents/Slider';

export default {
  components:{shopHeader,appslider}
}
</script>

<style>

</style>
