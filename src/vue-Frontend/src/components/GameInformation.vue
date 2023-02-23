<template>
  <div class="container-fluid d-flex justify-content-between body">
    <div class="col mt-1">
      <div class="progress" style="width: 3rem; height: 3rem; transform: rotate(-90deg)" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar" :style="{'width': food + '%', 'background-color': statusColor}"></div>
      </div>
        <i class="icofont-fork-and-knife"></i>
    </div>
    <div class="col"></div>
  </div>
</template>

<script>
export default {
  name: "GameInformation",
  data(){
    return{
      food:29,
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
  background-color: ;
}

</style>