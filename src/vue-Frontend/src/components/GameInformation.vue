<template>
  <div class="container-fluid d-flex justify-content-between body">
    <div class="col m-2">
      <div class="row">
        <div class="col">
          <div class="progress statusbox border border-dark" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar percentstatus" :style="{'width': food + '%', 'background-color': statusColor}"></div>
            <i class="icofont-fork-and-knife  position-absolute top-50 start-50 translate-middle icon" ></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col"></div>
  </div>
</template>
<script>
export default {
  name: "GameInformation",
  data(){
    return{
      food:10,
      energy:50,
      clean:50,
      mood:50,
      health:50,
      money:100,
    }
  },
  computed:{
    statusColor(){
      if (this.food < 30){
        return "#e35d6a"
      }
      else if (this.food < 60){
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
.body{
  background-color: #9ec5fe;
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
  transform: rotate(90deg);
  z-index: auto;

}
</style>