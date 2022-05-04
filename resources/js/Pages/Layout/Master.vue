<template>
  <!--nav-->
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
        <a class="navbar-brand" href="#">Disscussion</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
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
                  <a class="dropdown-item" href="#">Action</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Another action</a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
            <!-- Icons -->
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="#">
                <i class="fas fa-shopping-cart"></i>
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
  <!--end nav-->
  <div class="container mt-3">
    <div class="row">
      <!--ask question-->
      <div class="col-md-4">
        <button class="btn btn-primary btn-lg btn-block">
          Ask New Question
        </button>

        <div class="card">
          <div class="card-header">All Tags</div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item">
                <a href="#">What is Html</a>
              </li>
              <li class="list-group-item">
                <a href="#">What is Css</a>
              </li>
              <li class="list-group-item">
                <a href="#">What is Js</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--end ask question-->

      <!-- question-->
      <div class="col-md-8">
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
              <span class="badge badge-white bg-danger me-2">Need fixed!</span>
              <span>What is HTML</span>
            </div>
            <div>
              <span class="badge badge-white bg-warning me-2">fixed</span>
              <span class="badge badge-white bg-danger me-2">delete</span>
            </div>
          </div>
          <div class="card-body">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Cupiditate vitae ut aperiam cum aut officia animi nostrum, aliquam
              ipsum, labore, fuga ea tenetur! Quaerat eligendi id commodi autem
              atque rem architecto quibusdam ullam nulla deserunt fugit hic
              maxime eaque consectetur nam, cumque non praesentium culpa
              suscipit consequatur inventore magni nihil ab vel! Veniam esse
              obcaecati, ea doloremque.
            </p>
            <div class="row d-flex align-items-center">
              <div class="col-md-8 p-2 d-flex">
                <div class="reactionBtn me-5">
                  <span class="me-2">like</span>
                  <span class="me-2">comment</span>
                  <span class="me-2">star</span>
                </div>
                <div class="tag ms-4">
                  <span class="badge badge-white bg-dark me-2">Android</span>
                  <span class="badge badge-white bg-dark me-2">Ios</span>
                  <span class="badge badge-white bg-dark me-2">Window</span>
                  <span class="badge badge-white bg-dark me-2">Mac</span>
                </div>
              </div>
              <div class="col-md-4 d-flex justify-content-end">
                <div>
                  <button class="btn btn-dark btn-sm">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>

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
              <span class="badge badge-white bg-danger me-2">Need fixed!</span>
              <span>What is HTML</span>
            </div>
            <div>
              <span class="badge badge-white bg-warning me-2">fixed</span>
              <span class="badge badge-white bg-danger me-2">delete</span>
            </div>
          </div>
          <div class="card-body">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Cupiditate vitae ut aperiam cum aut officia animi nostrum, aliquam
              ipsum, labore, fuga ea tenetur! Quaerat eligendi id commodi autem
              atque rem architecto quibusdam ullam nulla deserunt fugit hic
              maxime eaque consectetur nam, cumque non praesentium culpa
              suscipit consequatur inventore magni nihil ab vel! Veniam esse
              obcaecati, ea doloremque.
            </p>
            <div class="row d-flex align-items-center">
              <div class="col-md-8 p-2 d-flex">
                <div class="reactionBtn me-5">
                  <span class="me-2">like</span>
                  <span class="me-2">comment</span>
                  <span class="me-2">star</span>
                </div>
                <div class="tag ms-4">
                  <span class="badge badge-white bg-dark me-2">Android</span>
                  <span class="badge badge-white bg-dark me-2">Ios</span>
                  <span class="badge badge-white bg-dark me-2">Window</span>
                  <span class="badge badge-white bg-dark me-2">Mac</span>
                </div>
              </div>
              <div class="col-md-4 d-flex justify-content-end">
                <div>
                  <button class="btn btn-dark btn-sm">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>

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
              <span class="badge badge-white bg-danger me-2">Need fixed!</span>
              <span>What is HTML</span>
            </div>
            <div>
              <span class="badge badge-white bg-warning me-2">fixed</span>
              <span class="badge badge-white bg-danger me-2">delete</span>
            </div>
          </div>
          <div class="card-body">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Cupiditate vitae ut aperiam cum aut officia animi nostrum, aliquam
              ipsum, labore, fuga ea tenetur! Quaerat eligendi id commodi autem
              atque rem architecto quibusdam ullam nulla deserunt fugit hic
              maxime eaque consectetur nam, cumque non praesentium culpa
              suscipit consequatur inventore magni nihil ab vel! Veniam esse
              obcaecati, ea doloremque.
            </p>
            <div class="row d-flex align-items-center">
              <div class="col-md-8 p-2 d-flex">
                <div class="reactionBtn me-5">
                  <span class="me-2">like</span>
                  <span class="me-2">comment</span>
                  <span class="me-2">star</span>
                </div>
                <div class="tag ms-4">
                  <span class="badge badge-white bg-dark me-2">Android</span>
                  <span class="badge badge-white bg-dark me-2">Ios</span>
                  <span class="badge badge-white bg-dark me-2">Window</span>
                  <span class="badge badge-white bg-dark me-2">Mac</span>
                </div>
              </div>
              <div class="col-md-4 d-flex justify-content-end">
                <div>
                  <button class="btn btn-dark btn-sm">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end question-->
    </div>
  </div>
</template>

<script>
export default {
  name: "Master",
};
</script>

<style>
</style>
