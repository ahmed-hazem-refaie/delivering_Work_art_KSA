<template>
  <div>
    <shopHeader></shopHeader>
    <appvideo></appvideo>
    <appslider></appslider>
    <review></review>
  </div>
</template>

<script>
import shopHeader from "../pagecomponents/ShopHeader";
import appslider from '../pagecomponents/Slider';
import appvideo from '../pagecomponents/ShopVideo';
import review from '../pagecomponents/Review';
export default {
  components:{shopHeader,appslider,appvideo,review}
}
</script>

<style>

</style>