<template>
  <div class="home">
    <Link href="/logout">Logout</Link>
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
  name: "Home",
  components: { Link },
};
</script>

<style>
</style>
