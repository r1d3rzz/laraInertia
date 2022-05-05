<template>
  <Master>
    <div class="editProfile">
      <div class="card">
        <div class="alert alert-warning text-center" v-if="success">
          {{ success }}
        </div>
        <div class="card-header">
          <b>{{ user.name }}</b>
        </div>
        <div class="card-body">
          <form @submit.prevent="updateProfile">
            <div class="mb-3 text-center">
              <img :src="/storage/ + user.image" width="200" alt="" />
            </div>
            <div class="mb-3">
              <label for="name">Name</label>
              <input
                type="text"
                v-model="form.name"
                id="name"
                class="form-control"
                :class="[errors.name ? 'border border-danger' : '']"
              />
              <small class="text-danger" v-if="errors">{{ errors.name }}</small>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input
                type="email"
                id="email"
                class="form-control"
                v-model="form.email"
                readonly
              />
            </div>

            <div class="mb-3">
              <label for="password">Password</label>
              <input
                type="password"
                id="password"
                class="form-control"
                :class="[errors.password ? 'border border-danger' : '']"
                v-model="form.password"
                placeholder="( optional )"
              />
              <small class="text-danger" v-if="errors">{{
                errors.password
              }}</small>
            </div>

            <div class="mb-3">
              <label for="image">Image</label>
              <input
                type="file"
                id="image"
                class="form-control"
                :class="[errors.image ? 'border border-danger' : '']"
                @input="form.image = $event.target.files[0]"
              />
              <small class="text-danger" v-if="errors">{{
                errors.image
              }}</small>
            </div>

            <div class="inputForm d-flex justify-content-end">
              <button class="btn btn-sm btn-primary" :disabled="isLoading">
                <div class="d-flex align-items-center">
                  <div
                    v-if="isLoading"
                    class="spinner-border spinner-grow-sm me-2"
                    role="status"
                  >
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  <div>
                    <span v-if="!isLoading">Update</span>
                    <span v-if="isLoading">Wait</span>
                  </div>
                </div>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </Master>
</template>

<script>
import { ref } from "@vue/reactivity";
import Master from "../Layout/Master";
import { usePage, useForm } from "@inertiajs/inertia-vue3";
import { computed, onUpdated } from "@vue/runtime-core";

export default {
  props: ["errors", "success"],
  components: { Master },
  setup() {
    let user = computed(() => usePage().props.value.auth_user);

    let isLoading = ref(false);

    const form = useForm({
      name: user.value.name,
      email: user.value.email,
      password: user.value.password,
      image: user.value.image,
    });

    let updateProfile = () => {
      isLoading = true;
      form.post("/profile/" + user.value.email + "/edit", (isLoading = false));
    };

    return { form, user, updateProfile, isLoading };
  },
};
</script>

<style>
</style>
