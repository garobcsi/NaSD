<template>
  <NavBar></NavBar>
  <div class="container-fluid body">
    <div class="row d-flex justify-content-center">
      <div class="col-10 col-sm-6 col-lg-4 col-xxl-2">
        <form class="mt-5 p-3 rounded-4">
          <fieldset>
            <legend class="text-center">Regisztráció</legend>
          <div v-show="successRegistration" class="alert alert-success text-center" role="alert">
            Sikeres regisztráció !
          </div>
            <div class="mb-3">
              <label for="InputEmail" class="form-label">Email cím</label>
              <input v-model="email" :class="errorEmail? 'is-invalid': ''" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Email">
              <div v-show="errorEmailEmpty" id="validationEmailEmpty" class="invalid-feedback">
                Az email nincs kitöltve !
              </div>
              <div v-show="errorEmailExists" id="validationEmailExists" class="invalid-feedback">
                Az email már használva van !
              </div>
              <div v-show="errorEmailIsWrong" id="validationEmailIsWrong" class="invalid-feedback">
                Ez a email rossz formátumú!
              </div>
            </div>
            <div class="mb-3">
              <label for="InputUsername" class="form-label">Felhasználónév</label>
              <input v-model="username" :class="errorUsername? 'is-invalid': ''" id="InputUsername" type="text" class="form-control" placeholder="Felhasználónév">
              <div id="validationEmailEmpty" class="invalid-feedback">
                A felhasználónév nincs kitöltve !
              </div>
            </div>
            <div class="mb-3">
              <label for="InputPassword1" class="form-label">Jelszó</label>
              <input v-model="password" :class="password !== passwordCopy || errorPassword? 'is-invalid': ''" type="password" class="form-control" id="InputPassword1" placeholder="Jelszó">
            </div>
            <div class="mb-3">
              <label for="InputPassword2" class="form-label">Jelszó megerősítése</label>
              <input v-model="passwordCopy" type="password" class="form-control" :class="password !== passwordCopy || errorPassword? 'is-invalid': ''" id="InputPassword2" placeholder="Jelszó megerősítése">
              <div id="validationPasswordSame" class="invalid-feedback">
                A jelszó nem ugyan az !
              </div>
            </div>
            <div class="d-flex justify-content-center">
              <button  type="button" class="btn btn-primary" @click="register">Regisztrálok</button>

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
  name: "Registration",
  components: {NavBar},
  data() {
    return {
      "email": "",
      "username" : "",
      "password" : "",
      "passwordCopy" : "",
      "errorEmail": false,
      "errorEmailEmpty" : false,
      "errorEmailExists" : false,
      "errorEmailIsWrong": false,
      "errorUsername": false,
      "errorPassword": false,
      "successRegistration" : false,
    }
  },
  methods : {
    async register() {
      if (!this.validate) return;
      let data = null;
      let error = null;
      const api = await http.post('/register',{
        "name": this.username,
        "email": this.email,
        "password": this.password
      }).then(x=>data =x).catch(x=>error = x);
      try {
        data = await data.data.data.message;
      }catch (error) {}
      try {
        error = await error.response.data.message;
      }catch (error) {}
      console.log(data);
      console.log(error);
      this.validateApi(error);
    },
    setToDefault() {
      this.errorEmail = false;
      this.errorEmailEmpty = false;
      this.errorEmailExists = false;
      this.errorEmailIsWrong = false;
      this.errorUsername = false;
      this.errorPassword = false;
      this.successRegistration = false;
    },
    validateApi(error) {
      this.setToDefault();
      if (error == null)  {
        this.email = "";
        this.username = "";
        this.password = "";
        this.passwordCopy = "";
        this.successRegistration = true;
        return;
      }
      if (error === "The email has already been taken.") {
        this.errorEmail = true;
        this.errorEmailExists = true;
        return;
      }
      if (error === "The email must be a valid email address.") {
        this.errorEmail = true;
        this.errorEmailIsWrong = true;
      }
    }
  },
  computed: {
    validate() {
      this.setToDefault();
      if (this.email === "") {
        this.errorEmail = true;
        this.errorEmailEmpty = true;
        return false;
      }
      if (this.username === "") {
        this.errorUsername = true;
        return false;
      }
      if (this.password !== this.passwordCopy || this.password === "" || this.passwordCopy ==="")
      {
        this.errorPassword = true;
        return false;
      }
      return true;
    },
  },
  watch: {
    email() {
      this.errorEmail = false;
      this.errorEmailEmpty = false;
      this.errorEmailExists = false;
      this.errorEmailIsWrong = false;
    },
    username() {
      this.errorUsername = false;
    },
    password() {
      this.errorPassword = false;
    },
    passwordCopy() {
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