<template>
  <div class="home">
    <Master>
      <div v-for="item in 5" :key="item">
        <AllQuestion />
      </div>
    </Master>
  </div>
</template>

<script>
import AllQuestion from "./AllQuestion";
import Master from "./Layout/Master";
import { Link } from "@inertiajs/inertia-vue3";

export default {
  name: "Home",
  components: {
    AllQuestion,
    Master,
    Link,
  },
};
</script>

<style>
</style>
