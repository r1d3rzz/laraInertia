<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <Link class="navbar-brand" href="/">Discussion</Link>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <Link class="nav-link active" aria-current="page" href="/"
              >Home</Link
            >
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"
              >All Question</a
            >
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"
              >Answered Questions</a
            >
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"
              >Unanswered Questions</a
            >
          </li>
        </ul>
        <form class="d-flex input-group w-auto me-5">
          <ul class="navbar-nav d-flex flex-row">
            <!-- Icon dropdown -->
            <li class="nav-item me-3 me-lg-0 dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fas fa-user"></i>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="#">Welcome User Name</a>
                </li>
                <li>
                  <Link class="dropdown-item" href="/profile/edit"
                    >Edit Profile</Link
                  >
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <Link class="dropdown-item" href="/logout">Logout</Link>
                </li>
              </ul>
            </li>
            <!-- Icons -->
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="#">
                <i class="fab fa-facebook"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
          </ul>
        </form>
      </div>
    </div>
  </nav>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
  name: "Navbar",
  components: { Link },
};
</script>

<style>
</style>
