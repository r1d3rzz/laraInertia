<template>
  <Master>
    <div class="card">
      <div class="card-header">
        <div class="card mb-3">
          <div
            class="
              card-header
              bg-dark
              text-white
              d-flex
              justify-content-between
            "
          >
            <div>
              <span
                class="badge badge-white bg-danger me-2"
                v-if="question.is_fixed === 'false'"
                >Need fixed!</span
              >
              <span
                class="badge badge-white bg-success me-2"
                v-if="question.is_fixed !== 'false'"
                >fixed</span
              >
              <span class="d-block d-md-inline">{{ question.title }}</span>
            </div>

            <div v-if="isOwn(question.user_id)">
              <span class="badge badge-white bg-warning me-2">fixed</span>
              <span class="badge badge-white bg-danger me-2">delete</span>
            </div>
          </div>
          <div class="card-body">
            <div class="my-3">
              <div
                class="
                  col-md
                  p-2
                  d-sm-block d-md-flex
                  justify-content-between
                  align-items-center
                "
              >
                <div>
                  <span class="me-2"
                    ><i
                      v-if="!question.is_like"
                      class="far fa-heart text-danger me-2"
                    ></i>
                    <i
                      v-if="question.is_like"
                      class="fas fa-heart text-danger me-2"
                    ></i>
                    <span v-if="question.like.length">
                      {{ question.like.length }}
                    </span>
                  </span>
                  <span class="me-2"
                    ><i class="far fa-comment text-primary me-2"></i>
                    <span v-if="question.comments.length">
                      {{ question.comments.length }}
                    </span>
                  </span>
                  <span class="me-2"
                    ><i class="far fa-star text-warning"></i>
                  </span>
                </div>

                <div>
                  <span
                    class="badge badge-white bg-dark me-2"
                    v-for="tag in question.tags"
                    :key="tag"
                    >{{ tag.name }}</span
                  >
                </div>
              </div>
            </div>

            <p>
              {{ question.description }}
            </p>
          </div>
        </div>

        <!--comments-->
        <div class="mt-">
          <h5 class="text-muted mb-3">
            Comments ({{ question.comments.length }})
          </h5>
          <div v-for="comment in question.comments" :key="comment.id">
            <div class="card mb-3">
              <div class="card-header bg-dark text-white">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <img
                      :src="/storage/ + comment.user.image"
                      width="50"
                      class="rounded-circle me-3"
                      alt=""
                    />
                    <span>{{ comment.user.name }}</span>
                  </div>
                  <div>{{ comment.date }}</div>
                </div>
              </div>
              <div class="card-body">
                {{ comment.comment }}
              </div>
            </div>
          </div>
        </div>
        <!--emd comments-->
      </div>
    </div>
  </Master>
</template>

<script>
import Master from "./Layout/Master";
export default {
  props: ["question"],
  components: { Master },
  name: "QuestionDetail",

  methods: {
    isOwn(id) {
      let authUserId = this.$page.props.auth_user.id;
      if (id === authUserId) {
        return true;
      }
      return false;
    },
  },
};
</script>

<style>
</style>
