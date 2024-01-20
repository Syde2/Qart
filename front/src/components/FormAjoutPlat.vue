<script setup>
import {ref} from 'vue'
import { api } from 'src/boot/axios';
const payload = ref({
  nom : '',
  imageUrl : '',
  Categories : {
    nom : ''

  }
})

function AjouterPlat(){
  console.log('payload', payload.value)
api.post('/plats', payload.value)
}
function testPostCategorie(){
  api.post('/categories', {
    nom: "Test"
  })

}
</script>

<template>
  <q-form @submit = AjouterPlat>
    <q-input v-model="payload.nom" label="Nom" />
    <q-input v-model="payload.imageUrl" label="Illustration (url)" />
    <q-input v-model="payload.Categories.nom" label="Categorie"  />
    <q-btn type="submit" label="ok" />
  </q-form>

  <q-btn @click="testPostCategorie" label="test" />

</template>
