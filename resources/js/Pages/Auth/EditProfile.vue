<template>
  <Master>
    <div class="editProfile">
      <div class="card">
        <div class="card-header">Edit Profile (User Name)</div>
        <div class="card-body">
          <div class="mb-3">
            <img :src="userImage" width="200" alt="" />
          </div>
          <div class="mb-3">
            <label for="name">Name</label>

            <input
              type="text"
              v-model="form.name"
              id="name"
              class="form-control"
            />
          </div>

          <div class="mb-3">
            <label for="email">Email</label>
            <input
              type="email"
              id="email"
              class="form-control"
              v-model="form.email"
            />
          </div>

          <div class="mb-3">
            <label for="password">Password</label>
            <input
              type="password"
              id="password"
              class="form-control"
              v-model="form.password"
            />
          </div>

          <div class="mb-3">
            <label for="image">Image</label>
            <input type="file" id="image" class="form-control" />
          </div>

          <div class="d-flex justify-content-end">
            <button class="btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </div>
  </Master>
</template>

<script>
import { ref } from "@vue/reactivity";
import Master from "../Layout/Master";
import { usePage, useForm } from "@inertiajs/inertia-vue3";
import { computed } from "@vue/runtime-core";

export default {
  components: { Master },
  setup() {
    const user = computed(() => usePage().props.value.auth_user);

    const form = useForm({
      name: user.value.name,
      email: user.value.email,
      password: null,
      image: null,
    });

    let userImage = "/storage/" + user.value.image;

    return { form, user, userImage };
  },
};
</script>

<style>
</style>
