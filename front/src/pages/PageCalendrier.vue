<script setup>
import DatePicker from 'components/DatePicker.vue'
import CalendarList from 'src/components/CalendarList.vue';
</script>

<template>
<q-page class="flex flex-center">
  <q-card class="container-large"  >
    <q-card-section horizontal  >
    <q-img class="col-4" src="repas_2.jpg" />
    <q-card-section class=" col-8 ">
       <DatePicker />
       <CalendarList />

    </q-card-section>

  </q-card-section>

  </q-card>

  </q-page>
</template>


