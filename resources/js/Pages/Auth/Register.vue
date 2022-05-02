<template>
  <div class="register container mt-5">
    <div class="col-md-4 offset-4">
      <div class="card">
        <div class="card-header">Register User</div>
        <div class="card-body">
          <form action="">
            <div class="form-group mb-3">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" />
            </div>

            <div class="form-group mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" />
            </div>

            <div class="form-group mb-3">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" />
            </div>

            <div class="form-group mb-3">
              <label for="image">Choose Image</label>
              <input type="file" class="form-control" id="image" />
            </div>

            <div class="d-flex justify-content-end">
              <button class="btn btn-sm btn-danger">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Register",
};
</script>

<style>
</style>
