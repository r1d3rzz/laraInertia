<template>
  <div class="card mb-3">
    <div class="card-header bg-dark text-white d-flex justify-content-between">
      <div>
        <span
          v-if="question.is_fixed === 'false'"
          class="badge badge-white bg-danger me-2"
          >Need fixed!</span
        >
        <span
          v-if="question.is_fixed !== 'false'"
          class="badge badge-white bg-success me-2"
          >fixed</span
        >
        <span>{{ question.title }}</span>
      </div>
      <div>
        <span
          v-if="isOwn(question.user_id)"
          class="badge badge-white bg-warning me-2"
          >fixed</span
        >
        <span
          v-if="isOwn(question.user_id)"
          class="badge badge-white bg-danger me-2"
          >delete</span
        >
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
              <!--Like Btn-->
              <span class="me-2"
                ><i
                  v-if="!question.is_like"
                  class="far fa-heart text-danger me-1"
                  @click="like(question.id)"
                ></i>
                <i v-if="question.is_like" class="fas fa-heart"></i>
                <span class="ms-1" v-if="question.like_count">{{
                  question.like_count
                }}</span>
              </span>

              <!--Comment Btn-->
              <span class="me-2"
                ><i class="far fa-comment text-primary"></i>
                {{ question.comments.length }}
              </span>

              <!--Save Btn-->
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
import axios from "axios";
export default {
  props: ["question"],
  components: { Link },
  methods: {
    like(id) {
      this.question["is_like"] = true;
      this.question["like_count"] += 1;
      axios.get(`/question/like/${id}`).then((res) => {
        console.log(res.data);
      });
    },
    isOwn(question_id) {
      let authUserId = this.$page.props.auth_user.id;
      if (question_id === authUserId) {
        return true;
      }
      return false;
    },
  },
};
</script>

<style>
</style>
