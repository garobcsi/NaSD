<template>
  <NavBar></NavBar>
  <div class="container-fluid body d-flex flex-column">
    <div class="container">
      <div class="row m-5">
        <h1 class="text-center">Neveld a saját Dominikod</h1>
      </div>
      <div class="row ">
        <div class="col">
          <h1 class="mb-4">Story</h1>
          <p>Egyik nap a Neuban kilógva az 5. óráról találkoztál az aulában Dominikkal, aki éppen a kávéját szürcsölgette. Mivel az előző óra alatt egy tamagochi-val játszottál, rádtámadt a zseniális ötlet: „Miért ne vigyem haza Dominikot és neveljem fel?”. Az isteni sugallatra hallgatva fogtad, zsebrekaptad a srácot és a suliból megszökve hazamentél.</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <h1 class="mb-4">Domi igényei</h1>
          <ul>
            <li>Jólakottság</li>
            <li>Egészség/jólét</li>
            <li>Jókedv</li>
            <li>Energia</li>
            <li>Tisztaság</li>
          </ul>
          <p>Idővel ezek csökkennek; ezeket Domi érdekében fenn kell tartanunk.</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <h1 class="mb-4">Domi állapotai (Hamarosan)</h1>
          <ul>
            <li>Éhség – ebben az állapotban nem tud lehet játszani és aludni, egy idő után elhalálozik</li>
            <li>Koszos – gyorsabban csökken a jókedve</li>
            <li>Fáradság – nem lehet játszani</li>
            <li>Betegség – néha Domi megbetegszik, ennek esélye játék és alvás után csökken (Étkezés is befolyásolja:  - egészséges étel csökkenti - egészségtelen étel növeli )</li>
            <li>Depresszió – alacsony jókedv(0%) esetén egy idő után elhalálozik</li>
          </ul>
          <p>Idővel ezek csökkennek; ezeket Domi érdekében fenn kell tartanunk.</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <h1 class="mb-4">Helyiségek (Hamarosan)</h1>
          <ul>
            <li>Konyha – itt lehet Domit megetetni, ezzel növelve a jóllakottságát</li>
            <li>Fürdőszoba – itt lehet Domit megtisztítani, tisztítás után megnő a jókedve</li>
            <li>Hálószoba – itt tud Domi pihenni, ez növeli az energiáját</li>
            <li>Játékszoba – itt tud Domival játszani, ez növeli a jókedvét, egészségét és a pénztárcáját, viszont csökkenti az energiáját, jóllakottságát és a tisztaságát. Alacsony energia esetén nem használható.</li>
            <li>Előszoba – itt lehet elmenni a városba</li>
            <ul id="masodikList">
              <li>Bolt – itt lehet Dominak bevásárolni dolgokat: étel, ruha dekoráció</li>
              <li>Orvos – ha Domi megbetegszik, itt lehet megtudni hogyan javíthatsz az 	állapotán, vagy több pénzért vehetsz orvosságot a gyors felépüléséhez</li>
            </ul>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import NavBar from "../components/NavBar.vue"
export default {
  name: "Review",
  components: {NavBar}
}
</script>

<style scoped>
.body{
  height: auto;
  margin-top: -56px;
  padding-top: 56px;
  background-color: #cfe2ff;
  padding-bottom: 3rem;
}
p,ul{
  font-size: 120%;
}
#masodikList{
  font-size: 90%;
}
</style>