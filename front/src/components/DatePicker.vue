<script setup>
import { ref } from 'vue';

const dateSelectionnee = ref(new Date())


</script>

<template>
  <VDatePicker
    v-model="dateSelectionnee"
    color="indigo"
    nav-visibility="click"
    ref="datePicker"
    view="weekly"
    borderless
    expanded
    is-required
    style="border-radius: 0  20px 20px 0 ;"
  >

  <template #header-title	>
    <p class="text-h5 my-font text-primary"> Semaine {{ numeroSemaine }} </p>
  </template>

  <template #header-prev-button	>
  </template>

  <template #nav-prev-button	>
  </template>

  <template #header-next-button	>
  </template>

  <template #nav-next-button	>
  </template>

  </VDatePicker>


</template>

<style>

</style>
