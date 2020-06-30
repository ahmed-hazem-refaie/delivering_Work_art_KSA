<template>
  <div>
      <appheader></appheader>
      <appslider></appslider>
      <appvideo></appvideo>
  </div>
</template>

<script>
import appheader from '../pagecomponents/Header'
import appslider from '../pagecomponents/Slider';
import appvideo from '../pagecomponents/HomeVideo';
export default {
    components:{appslider,appvideo,appheader}
}
</script>

<style>

</style>