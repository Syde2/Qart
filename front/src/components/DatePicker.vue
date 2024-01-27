<script setup>
import { ref } from 'vue';

const dateSelectionnee = ref(new Date())


</script>

<template>
  <VDatePicker
    v-model="dateSelectionnee"
    transparent
    color="primary"
    nav-visibility="click"
    ref="datePicker"
    view="weekly"
    borderless
    expanded
    is-required
  >

  <template #header-title	>
    <p class="text-h5 my-font text-primary"> Semaine {{ numeroSemaine }} </p>
  </template>



  </VDatePicker>


</template>

<style lang="scss">
.vc-prev, .vc-next{
  background-color: transparent;
}

.vc-title{
  background-color: transparent;
}

.vc-primary {
  --vc-accent-600: #6295ae;
}


</style>
