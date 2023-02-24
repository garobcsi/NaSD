<template>
  <div class="container-fluid d-flex flex-column flex-sm-row justify-content-between body-gameinfo">
    <div class="d-flex justify-content-center">
        <div class="status-item">
          <div class="progress statusbox border border-dark" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar percentstatus" :style="{'width': food + '%', 'background-color': statusColorFood}"></div>
            <i class="icofont-fork-and-knife position-absolute icon" ></i>
          </div>
        </div>
        <div class="status-item">
          <div class="progress statusbox border border-dark" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar percentstatus" :style="{'width': health + '%', 'background-color': statusColorHealth}"></div>
            <i class="icofont-ui-add position-absolute icon" ></i>
          </div>
        </div>
        <div class="status-item">
          <div class="progress statusbox border border-dark" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar percentstatus" :style="{'width': mood + '%', 'background-color': statusColorMood}"></div>
            <i class="icofont-slightly-smile position-absolute icon" ></i>
          </div>
        </div>
        <div class="status-item">
          <div class="progress statusbox border border-dark" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar percentstatus" :style="{'width': energy + '%', 'background-color': statusColorEnergy}"></div>
            <i class="icofont-flash position-absolute icon" ></i>
          </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
      <div class="text-sm-end text-center" id="money">
        {{money}}<i class="icofont-money-bag"></i>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props:{
    food: Number,
    energy: Number,
    clean: Number,
    mood: Number,
    health: Number,
    money: Number,
  },
  name: "GameInformation",
  // data(){
  //   return{
  //     food:15,
  //     energy:90,
  //     clean:50,
  //     mood:50,
  //     health:80,
  //     money:100,
  //   }
  // },
  computed:{
    statusColorFood(){
      if (this.food < 30){
        return "#e35d6a"
      }
      else if (this.food < 60){
        return "#fd9843"
      }
      else {
        return "#479f76"
      }
    },
    statusColorHealth(){
      if (this.health < 30){
        return "#e35d6a"
      }
      else if (this.health < 60){
        return "#fd9843"
      }
      else {
        return "#479f76"
      }
    },
    statusColorMood(){
      if (this.mood < 30){
        return "#e35d6a"
      }
      else if (this.mood < 60){
        return "#fd9843"
      }
      else {
        return "#479f76"
      }
    },
    statusColorEnergy(){
      if (this.energy < 30){
        return "#e35d6a"
      }
      else if (this.energy < 60){
        return "#fd9843"
      }
      else {
        return "#479f76"
      }
    }
  }
}

</script>

<style scoped>
.body-gameinfo{
  background-color: #cfe2ff;
}
.statusbox{
  width: 4rem;
  height: 4rem;
  transform: rotate(-90deg);
  padding: 0;
  background-color: white;
}
.icon{
  font-size: 2rem;
  transform: translate(50% ,50%) rotate(90deg);
  z-index: auto;
}
.status-item{
  padding: 0;
  margin-top: 0.5rem;
  margin-left: 0.5rem;
  width: 4rem;
  height: 4rem;
}
#money{
  font-size: 2rem;
  height: 4rem;
}
</style>