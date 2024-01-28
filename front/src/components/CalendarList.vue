<script setup>
import CalendarItemBefore from './CalendarItemBefore.vue';
import CalendarItemAfter from './CalendarItemAfter.vue';

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
const props = defineProps({
  plat : Object
})
</script>

<template>
<div class="q-mx-md">
  <q-splitter v-model="splitterModel" horizontal>
    <template v-slot:before>
      <CalendarItemBefore />
    </template>

    <template v-slot:after>
      <CalendarItemAfter :plat="props.plat" />
    </template>

  </q-splitter>

</div>

</template>
