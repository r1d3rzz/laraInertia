<template>
  <div class="login">
    <div class="container login">
      <div class="row">
        <div class="col-md-8 mx-auto my-5">
          <div class="card shadow-lg">
            <div class="card-header">Login</div>
            <div class="card-body">
              <form @submit.prevent="login">
                <div class="inputFrom mb-3">
                  <label for="email">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    :class="[errors.email ? 'border border-danger' : '']"
                    id="email"
                    v-model="form.email"
                  />
                  <small class="text-danger">{{ errors.email }}</small>
                </div>

                <div class="inputFrom mb-3">
                  <label for="password">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    :class="[errors.password ? 'border border-danger' : '']"
                    id="password"
                    v-model="form.password"
                  />
                  <small class="text-danger">{{ errors.password }}</small>
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
                        <span v-if="!isLoading">Login</span>
                        <span v-if="isLoading">Wait</span>
                      </div>
                    </div>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { ref } from "@vue/reactivity";
import { useForm } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
export default {
  name: "Login",
  props: ["errors"],
  setup() {
    let isLoading = ref(false);

    const form = useForm({
      email: null,
      password: null,
    });

    let login = () => {
      isLoading.value = true;
      form.post("/login", (isLoading.value = false));
    };

    return { form, isLoading, login };
  },
};
</script>

<style>
</style>
