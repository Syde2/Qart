<script setup>
import DatePicker from 'components/DatePicker.vue'
import CalendarList from 'src/components/CalendarList.vue';
</script>

<template>
<q-page class="flex flex-center">
  <q-card class="container-large" >
    <q-card-section horizontal class="fit"   >
    <q-img class="col-4 gt-sm" src="repas_2.jpg" />
    <div class=" col-12 col-md-8 ">
       <DatePicker />
       <CalendarList />
    </div>

    </q-card-section>
  </q-card>

  </q-page>
</template>


