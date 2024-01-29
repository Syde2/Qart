<script setup>
import { ref } from 'vue'
import {useCarteStore} from '../stores/carteStore.js'
import { storeToRefs } from 'pinia';
import CalendarItem from './CalendarItem.vue'
import FormAjoutItem from './FormAjoutItem.vue';
import { api } from 'src/boot/axios';

const { repas } = storeToRefs(useCarteStore() )
const periode = ref('')
const splitterModel = 50
const toggle = ref(false)
function addMeal(period ){
  console.log("MEAL", period)
  periode.value = period
  toggle.value = true
}

function recupererPlats(){
  api.get('/calendrier.json')
  .then((res)=> repas.value = res.value )
}
recupererPlats()

</script>

<template>
<div class="q-mx-md">
  <q-splitter v-model="splitterModel" horizontal>

    <template v-slot:before>
      <CalendarItem :plat=repas[1] @add="()=>addMeal('midi')"  >
        <template #header>
          <q-icon name='wb_twilight' />
          <p class="text-h6 "> Midi </p>
        </template>
      </CalendarItem>
    </template>

    <template v-slot:after>
      <CalendarItem  @add="()=>addMeal('soir') ">
        <template #header>
          <q-icon name='sym_o_nights_stay' />
          <p class="text-h6 ">Soir </p>
        </template>
      </CalendarItem >
    </template>
  </q-splitter>

  <q-dialog v-model="toggle">
    <div class="container">
      <FormAjoutItem />
    </div>
  </q-dialog>
</div>

</template>
