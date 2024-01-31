<script setup>
import { ref } from 'vue'
import {useCarteStore} from '../stores/carteStore.js'
import { storeToRefs } from 'pinia';
import CalendarItem from './CalendarItem.vue'
import FormAjoutItem from './FormAjoutItem.vue';
import { api } from 'src/boot/axios';

const store = useCarteStore()
const { plats, nouveauRepas, midi, soir } = storeToRefs(store )
const periode = ref('')
const splitterModel = ref(50)
const toggle = ref(false)
function addMeal(period ){
  periode.value = period
  nouveauRepas.value.periode =period
  toggle.value = true
}


function recupererPlats(){
  api.get('/calendriers.json')
   .then(res=> {
    plats.value = res.data
   } )



}
recupererPlats()




</script>

<template>
<div class="q-mx-md">
  <q-splitter v-model="splitterModel"  horizontal>

    <template v-slot:before>
      <CalendarItem plat="midi"  @add="()=>addMeal('midi')"  >
        <template #header>
          <div class="flex  flex-center q-gutter-x-sm">
            <q-icon size="sm" name='wb_twilight' />
            <span class="text-h6 "> Midi </span>
          </div>
        </template>
      </CalendarItem>
    </template>

    <template v-slot:after>
      <CalendarItem  plat="soir" @add="()=>addMeal('soir') ">
        <template #header>
          <div class="flex  flex-center q-gutter-x-sm">
            <q-icon size="sm" name='sym_o_nights_stay' />
            <p class="text-h6 ">Soir </p>
          </div>
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
