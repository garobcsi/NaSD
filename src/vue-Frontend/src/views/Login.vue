<template>
  <NavBar></NavBar>
  <div class="container-fluid body">
    <div class="row d-flex justify-content-center">
      <div class="col-10 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3">
        <form class="mt-5 p-3 rounded-4">
          <fieldset>
            <h2 class="text-center">Bejelentkezés</h2>
            <div v-show="loginSuccess" class="alert alert-success text-center" role="alert">
              Sikeres bejelenkezés !
            </div>
            <div v-show="loginError" class="alert alert-danger text-center" role="alert">
              Az email vagy a jelszó nem jó !
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email cím</label>
              <input :class="errorEmail? 'is-invalid': ''" v-model="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
              <div id="validationEmailEmpty" class="invalid-feedback">
                Ez a mezö nincs kitöltve!
              </div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Jelszó</label>
              <input :class="errorPassword? 'is-invalid': ''" v-model="password" type="password" class="form-control" id="password" placeholder="Jelszó">
              <div id="validationPasswordEmpty" class="invalid-feedback">
                Ez a mezö nincs kitöltve!
              </div>
            </div>
            <div class="d-flex justify-content-center">
              <button type="button" class="btn btn-primary " @click="login">Bejelentkezés</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>

</template>

<script>
import NavBar from "../components/NavBar.vue";
import {http} from "@/assets/http";
export default {
  name: "Login",
  components: {NavBar},
  data() {
    return {
      "email":"",
      "password": "",
      "errorEmail": false,
      "errorPassword":false,
      "loginError": false,
      "loginSuccess": false,
    }
  },
  methods: {
    async login() {
      localStorage.removeItem("BearerToken");
      if (!this.validate) return;
      let data = null;
      let error = null;
      const api = await http.post('/authenticate',{
        "email": this.email,
        "password": this.password
      }).then(x=>data =x).catch(x=>error= x);
      this.validateApi(data);

    },
    setToDefault() {
      this.errorEmail = false;
      this.errorPassword = false;
      this.loginSuccess = false;
      this.loginError = false;
    },
    validateApi(data){
      this.setToDefault();
      if (data === null || data === undefined) {
        this.loginError= true;
      }
      else {
        this.loginSuccess= true;
        localStorage.setItem("BearerToken",data.data.data.token);
      }
    }
  },
  computed : {
    validate() {
      if (this.email === "") {
        this.errorEmail = true;
        return false;
      }
      if (this.password === "") {
        this.errorPassword = true;
        return false;
      }
      return true;
    }
  },
  watch : {
    email() {
      this.errorEmail = false;
    },
    password() {
      this.errorPassword = false;
    }
  }
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