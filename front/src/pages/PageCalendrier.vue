<script setup>
import {ref} from 'vue'
import DatePicker from 'components/DatePicker.vue'
import CalendarList from 'src/components/CalendarList.vue';
import { api } from 'src/boot/axios';

const plats = ref()


const recupererPlats= ()=>{
  api.get('/plats')
  .then(res => plats.value = res.data)
}

recupererPlats()


</script>

<template>
<q-page class="flex flex-center">
  <q-card class="container-large">
    <q-card-section horizontal  >
    <q-img class="col-4" src="repas_2.jpg" />
    <div class=" col-8">
       <DatePicker />
       <CalendarList />
    </div>

  </q-card-section>

  </q-card>

  </q-page>
</template>


