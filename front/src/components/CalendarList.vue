<script setup>
import CalendarListItem from './CalendarListItem.vue';
import {ref} from 'vue'
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
</script>

<template>
<q-list class="q-pa-lg ">
  <q-slide-item v-for="each in mealList" :key="each.id" :id="each.id"
        @right="e => onRight(e, each.id)" right-color="negative" class="q-my-sm shadow-4"
        style="border: 1px solid rgb(173, 170, 170); border-radius: 5px;">
        <CalendarListItem :repas=" each.repas" />
        <template v-slot:right>
          <q-icon name="delete" />
          <span class="text-overline"> Supprimer l'activité </span>
        </template>
  </q-slide-item>
</q-list>
</template>
