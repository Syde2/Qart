<script setup>
import {ref} from 'vue'
import { api } from 'src/boot/axios';
const payload = ref({
  nom : '',
  imageUrl : '',
  categorie : {
    nom : ''
  }
})

function AjouterPlat(){
api.post('/plats', payload.value)
}

api.get('/plats')


</script>

<template>
  <q-form @submit = AjouterPlat>
    <q-input v-model="payload.nom" label="Nom" />
    <q-input v-model="payload.imageUrl" label="Illustration (url)" />
    <q-input v-model="payload.categorie.nom" label="Categorie"  />
    <q-btn type="submit" label="ok" />
  </q-form>


</template>
