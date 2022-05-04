<template>
  <Master>
    <div class="editProfile">
      <div class="card">
        <div class="card-header">Edit Profile (User Name)</div>
        <div class="card-body">
          <div class="mb-3">
            <label for="name">Name</label>
            <input
              type="text"
              value="user name"
              id="name"
              class="form-control"
            />
          </div>

          <div class="mb-3">
            <label for="email">Email</label>
            <input
              type="email"
              value="user email"
              id="email"
              class="form-control"
            />
          </div>

          <div class="mb-3">
            <label for="password">Password</label>
            <input type="text" id="password" class="form-control" />
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
import Master from "../Layout/Master";
export default {
  components: { Master },
};
</script>

<style>
</style>
