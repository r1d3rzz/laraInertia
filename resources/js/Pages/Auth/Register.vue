<template>
  <div class="register container mt-5">
    <div class="col-md-4 offset-4">
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
                @input="form.avatar = $event.target.files[0]"
              />
              <small class="text-danger">{{ errors.avatar }}</small>
            </div>

            <div class="d-flex justify-content-end">
              <button class="btn btn-sm btn-primary">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { useForm } from "@inertiajs/inertia-vue3";

export default {
  name: "Register",
  props: ["errors"],
  setup() {
    const form = useForm({
      name: null,
      email: null,
      password: null,
      avatar: null,
    });

    let register = () => {
      form.post("/register");
    };

    return { form, register };
  },
};
</script>

<style>
</style>
