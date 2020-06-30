<template>
  <div>
      <appnavbar></appnavbar>
      <router-view></router-view>
      <appfooter></appfooter>
  </div>
</template>

<script>
import appnavbar from './Layout/Navbar';
import appfooter from './Layout/Footer';
export default {
    components:{appfooter,appnavbar}
    
}
</script>

<style>

</style>