<template>
  <div class="home">
    <Master>
      <!--user login alert-->
      <div class="alert alert-warning text-center" v-if="success">
        {{ success }}
      </div>
      <!--end user login alert-->

      <div v-for="question in questions" :key="question.id">
        <AllQuestion :question="question" />
      </div>
    </Master>
  </div>
</template>

<script>
import AllQuestion from "./AllQuestion";
import Master from "./Layout/Master";
import { Link } from "@inertiajs/inertia-vue3";

export default {
  props: ["success", "questions"],
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
