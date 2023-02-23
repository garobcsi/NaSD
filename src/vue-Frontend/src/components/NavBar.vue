<template>
  <nav class="navbar navbar-expand-sm navbar-dark">
    <div class="container-fluid">
      <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <router-link class="nav-link" to="/">Főoldal</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/review">A játékról</router-link>
          </li>
        </ul>
        <div class="btn-group mx-2">
          <button class="btn btn-secondary btn-sm rounded-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="icofont-user-alt-3"></i>
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li v-if="logedin"><router-link class="dropdown-item" to="#">Profil</router-link></li>
            <li v-if="logedin"><hr class="dropdown-divider"></li>
            <li v-if="logedin"><router-link class="dropdown-item" to="#">Kijelentkezés</router-link></li>
            <li v-if="logedin == false"><router-link class="dropdown-item" to="/login">Bejelentkezés</router-link></li>
            <li v-if="logedin == false"><router-link class="dropdown-item" to="/registration">Regisztrálás</router-link></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: "NavBar",
  data(){
    return{
      "logedin" : false,

    }
  }
}
</script>

<style scoped>
.navbar{
  background-color: #052c65;
}
</style>