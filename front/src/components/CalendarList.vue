<script setup>
import { ref } from 'vue'
import { usePlatJourStore } from 'src/stores/platJour';
import { storeToRefs } from 'pinia';
import CalendarItem from './CalendarItem.vue'

const { plats } = storeToRefs(usePlatJourStore())


const mealList = [
  {
  id:0,
  repas : "Hello World",
  date: '26/01/2024'
},
{
  id:1,
  repas : "Omelette",
  date: '26/01/2024'
}

]
const splitterModel = 50

</script>

<template>
<div class="q-mx-md">
  <q-splitter v-model="splitterModel" horizontal>
    <template v-slot:before>
      <CalendarItem>
        <template #header>
          <q-icon name='wb_twilight' />
          <p class="text-h6 "> Midi </p>
        </template>

      </CalendarItem>
    </template>

    <template v-slot:after>
      <CalendarItem>
        <template #header>
          <q-icon name='sym_o_nights_stay' />
          <p class="text-h6 ">Soir </p>
        </template>
      </CalendarItem>
    </template>

  </q-splitter>

</div>

</template>
