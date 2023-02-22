<template>
  <NavBar></NavBar>
  <div class="container-fluid body">
    <div class="row">
      <div class="col">
        Index
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

<style scoped lang="scss">
.body{
  height: 100%;
  background-color: #bac7a7;
}
</style>