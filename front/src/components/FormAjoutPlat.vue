<script setup>
import {ref} from 'vue'
import { api } from 'src/boot/axios';
const payload = ref({
  nom : '',
  imageUrl : '',
  categorie: ''
})

function AjouterPlat(){
  console.log('payload', payload.value)
api.post('/plats', payload.value)
}

</script>

<template>
  <q-form @submit = AjouterPlat>
    <q-input v-model="payload.nom" label="Nom" />
    <q-input v-model="payload.imageUrl" label="Illustration (url)" />
    <q-input v-model="payload.categorie" label="Categorie"  />
    <q-btn type="submit" label="ok" />
  </q-form>

</template>
