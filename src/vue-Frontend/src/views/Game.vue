<template>
  <NavBar></NavBar>
  <GameInformation
      :food="food" :energy="energy" :clean="clean" :mood="mood" :health="health" :money="money"
  ></GameInformation>
  <div class="container-fluid body d-flex justify-content-center">
    <div class="d-flex flex-column" style="width: 100%">
      <div class="d-flex justify-content-between">
        <div></div>
        <img src="../../public/Névtelen-1.png" alt="Dominik" style="height: 40rem; width: auto">
        <div>
          <button @click="addMoney" class="btn btn-dark p-1 mx-1" style="width: 6rem; height: 4rem; margin-top: 3rem;"><i class="icofont-money-bag" style="font-size: 2rem"></i></button>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <button @click="addFood" class="btn btn-dark p-1 mx-1" style="width: 6rem; height: 4rem; margin-top: 3rem;"><i class="icofont-fork-and-knife" style="font-size: 2rem"></i></button>
        <button @click="addHealth" class="btn btn-dark p-1 mx-1" style="width: 6rem; height: 4rem; margin-top: 3rem;"><i class="icofont-ui-add" style="font-size: 2rem"></i></button>
        <button @click="addEnergy" class="btn btn-dark p-1 mx-1" style="width: 6rem; height: 4rem; margin-top: 3rem;"><i class="icofont-flash" style="font-size: 2rem"></i></button>
      </div>
    </div>
  </div>
</template>

<script>
import NavBar from "../components/NavBar.vue"
import GameInformation from "../components/GameInformation.vue";
export default {
  data(){
      return{
        food:0,
        energy:0,
        clean:70,
        mood:50,
        health:0,
        money:2000,
      }
    },
  methods:{
    addFood(){
      if(this.food <= 90 && this.money >= 100){
        this.food += 10;
        this.money -= 100;
        this.addMood()
      }
    },
    addHealth(){
      if(this.health <= 90 && this.money >= 100){
        this.health += 10;
        this.money -= 100;
        this.addMood()
      }
    },
    addMood(){
      if(this.food >= 60 && this.energy >= 50 && this.health >= 89){
        this.mood = 100
      }else {
        this.mood = 50
      }
    },
    addEnergy(){
      if(this.energy <= 90 && this.money >= 100){
        this.energy += 10;
        this.money -= 100;
      }
    },
    addMoney(){
      if(this.money <= 1_000_000_000){
        this.money += 100;
        this.addMood()
      }
    },
  },
  name: "Game",
  components: {NavBar, GameInformation }
}
</script>

<style scoped>
.body{
  height: 100vh;
  background-color: #cfe2ff;
}
</style>