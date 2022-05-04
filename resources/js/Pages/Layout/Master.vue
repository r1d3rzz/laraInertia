<template>
  <!--nav-->
  <Navbar />
  <!--end nav-->

  <div class="container mt-3">
    <div class="row">
      <!--side bar-->
      <SideBar />
      <!--end side bar-->

      <!-- question-->
      <div class="col-md-8">
        <slot />
      </div>
      <!-- end question-->
    </div>
  </div>
</template>

<script>
import SideBar from "./SideBar";
import Navbar from "./Navbar";
export default {
  components: {
    SideBar,
    Navbar,
  },
  name: "Master",
};
</script>

<style>
</style>
