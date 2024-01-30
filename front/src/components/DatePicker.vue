<script setup>
import { ref, watch } from 'vue';
import {useCarteStore} from '../stores/carteStore.js'
import { storeToRefs } from 'pinia';


const dateSelectionnee = ref(new Date())
const { nouveauRepas } = storeToRefs(useCarteStore())

watch(dateSelectionnee, ()=>{
  nouveauRepas.value.date = dateSelectionnee.value
}, {immediate:true} )


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
