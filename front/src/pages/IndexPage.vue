<script setup>
import {ref} from 'vue'
import { api } from 'src/boot/axios';
import FormAjoutPlat from 'src/components/FormAjoutPlat.vue'
import FormCard from 'src/components/FormCard.vue';
</script>

<template>
  <q-page class="flex flex-center column">
    <FormCard>
      <FormAjoutPlat class="full-height "/>
    </FormCard>



  </q-page>
</template>


