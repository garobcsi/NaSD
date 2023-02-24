<template>
  <NavBar></NavBar>
  <div class="container-fluid body">
    <div class="d-flex justify-content-center">
      <div class="m-6 text-center">
        <h1 class="m-5">Neveld a saját Dominikod!</h1>
        <button type="button" class="btn btn-primary m-2"><router-link style="text-decoration: none; color: white" to="/registration">A játékról</router-link></button>
        
        <button type="button" class="btn btn-primary m-2"><router-link style="text-decoration: none; color: white" to="/registration">Regisztráció</router-link></button>
        <button type="button" class="btn btn-primary m-2"><router-link style="text-decoration: none; color: white" to="/login">Bejelentkezés</router-link></button>
      </div>
    </div>
  </div>
</template>

<script>
import NavBar from "../components/NavBar.vue"
export default {
  name: "Index",
  components: {NavBar}
}
</script>

<style scoped>
.body{
  height: 100%;
  background-color: #cfe2ff;
}
</style>