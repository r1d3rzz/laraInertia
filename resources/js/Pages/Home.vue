<template>
  <div class="home">
    <Master>
      <Link href="/logout">Logout</Link>
    </Master>
  </div>
</template>

<script>
import Master from "./Layout/Master";
import { Link } from "@inertiajs/inertia-vue3";
export default {
  name: "Home",
  components: {
    Master,
    Link,
  },
};
</script>

<style>
</style>
