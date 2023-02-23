<template>
  <NavBar></NavBar>
  <div class="container-fluid body">
    <div class="row d-flex justify-content-center">
      <div class="col-10 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3">
        <form class="mt-5 p-3 rounded-4">
          <fieldset>
            <legend class="text-center">Regisztráció</legend>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email cím</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Felhasználónév</label>
              <input type="text" class="form-control" placeholder="Felhasználónév">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Jelszó</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Jelszó">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Jelszó megerősítése</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Jelszó megerősítése">
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-primary ">Regisztrálok</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import NavBar from "../components/NavBar.vue";
export default {
  name: "Registration",
  components: {NavBar}
}
</script>

<style scoped>
.body{
  height: 100%;
  margin-top: -56px;
  padding-top: 56px;
  background-color: #6ea8fe;
}
form{
  background-color: white;
}
</style>