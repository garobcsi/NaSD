<template>
  <NavBar></NavBar>
  <GameInformation></GameInformation>
</template>

<script>
import NavBar from "../components/NavBar.vue"
import GameInformation from "../components/GameInformation.vue";
export default {
  name: "Game",
  components: {NavBar, GameInformation }

}
</script>

<style scoped>

</style>