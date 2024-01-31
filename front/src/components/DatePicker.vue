<script setup>
import {useCarteStore} from '../stores/carteStore.js'
import { storeToRefs } from 'pinia';

const store = useCarteStore()
const { dateSelectionnee, nouveauRepas } = storeToRefs(store)
</script>

<template>
  <VDatePicker
    v-model="dateSelectionnee"
    mode="date"
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
    <p class="text-h5 my-font text-primary"> Semaine </p>
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
