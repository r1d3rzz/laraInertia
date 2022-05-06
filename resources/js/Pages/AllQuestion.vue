<template>
  <div class="card mb-3">
    <div class="card-header bg-dark text-white d-flex justify-content-between">
      <div>
        <span class="badge badge-white bg-danger me-2">Need fixed!</span>
        <span>{{ question.title }}</span>
      </div>
      <div>
        <span class="badge badge-white bg-warning me-2">fixed</span>
        <span class="badge badge-white bg-danger me-2">delete</span>
      </div>
    </div>
    <div class="card-body">
      <p>
        {{ question.description }}
      </p>
      <div class="row">
        <div
          class="col-md p-2 d-flex justify-content-between align-items-center"
        >
          <div>
            <span class="me-3">
              <span class="me-2"
                ><i class="far fa-heart text-danger me-1"></i>
                <span v-if="question.like.length">{{
                  question.like.length
                }}</span>
              </span>
              <span class="me-2"
                ><i class="far fa-comment text-primary"></i>
                {{ question.comments.length }}
              </span>
              <span class="me-2"
                ><i class="far fa-star text-warning"></i>
              </span>
            </span>

            <span class="d-block d-lg-inline">
              <span
                class="badge badge-white bg-dark me-2"
                v-for="tag in question.tags"
                :key="tag"
                >{{ tag.name }}</span
              >
            </span>
          </div>
          <div>
            <Link class="btn btn-dark btn-sm" href="/question/detail"
              >View</Link
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
  props: ["question"],
  components: { Link },
};
</script>

<style>
</style>
