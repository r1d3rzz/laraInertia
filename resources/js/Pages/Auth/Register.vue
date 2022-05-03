<template>
  <div class="register container mt-5">
    <div class="col-md-6 mx-auto">
      <div class="card shadow-lg">
        <div class="card-header">Register User</div>
        <div class="card-body">
          <form @submit.prevent="register">
            <div class="form-group mb-3">
              <label for="name">Name</label>
              <input
                type="text"
                :class="[
                  'form-control',
                  errors.name ? 'border border-danger' : '',
                ]"
                id="name"
                v-model="form.name"
              />
              <small class="text-danger">{{ errors.name }}</small>
            </div>

            <div class="form-group mb-3">
              <label for="email">Email</label>
              <input
                type="email"
                :class="[
                  'form-control',
                  errors.name ? 'border border-danger' : '',
                ]"
                id="email"
                v-model="form.email"
              />
              <small class="text-danger">{{ errors.email }}</small>
            </div>

            <div class="form-group mb-3">
              <label for="password">Password</label>
              <input
                type="password"
                :class="[
                  'form-control',
                  errors.name ? 'border border-danger' : '',
                ]"
                id="password"
                v-model="form.password"
              />
              <small class="text-danger">{{ errors.password }}</small>
            </div>

            <div class="form-group mb-3">
              <label for="image">Choose Image</label>
              <input
                type="file"
                :class="[
                  'form-control',
                  errors.name ? 'border border-danger' : '',
                ]"
                id="image"
                @input="form.image = $event.target.files[0]"
              />
              <small class="text-danger">{{ errors.image }}</small>
            </div>

            <div class="d-flex justify-content-end">
              <button
                class="btn btn-sm btn-primary d-flex align-items-center"
                :disabled="isLoading"
              >
                <div
                  v-if="isLoading"
                  class="spinner-border spinner-grow-sm me-2"
                  role="status"
                >
                  <span class="visually-hidden">Loading...</span>
                </div>
                <div v-if="!isLoading">Register</div>
                <div v-if="isLoading">wait</div>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { useForm } from "@inertiajs/inertia-vue3";
import { ref } from "@vue/reactivity";

export default {
  name: "Register",
  props: ["errors"],
  setup() {
    let isLoading = ref(false);
    const form = useForm({
      name: null,
      email: null,
      password: null,
      image: null,
    });

    let register = () => {
      isLoading.value = true;
      form.post("/register", (isLoading.value = false));
    };

    return { form, register, isLoading };
  },
};
</script>

<style>
</style>
