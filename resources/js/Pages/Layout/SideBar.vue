<template>
  <div class="col-md-4">
    <button class="btn btn-primary btn-lg btn-block">Ask New Question</button>

    <div class="card">
      <div class="card-header">All Tags</div>
      <div class="card-body">
        <ul class="list-group">
          <li
            class="list-group-item"
            v-for="tag in $page.props.tag"
            :key="tag.id"
          >
            <Link href="#">{{ tag.name }}</Link>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
  name: "SideBar",
  components: { Link },
};
</script>

<style>
</style>
