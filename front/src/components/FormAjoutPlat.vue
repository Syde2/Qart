<script setup>
import {ref} from 'vue'
import { api } from 'src/boot/axios';
import {useCarteStore} from 'stores/carteStore.js'
import { storeToRefs } from 'pinia';

const store = useCarteStore()
const { plat } = storeToRefs(store)

const categoriesDisponibles =ref([
])

function AjouterPlat(){
  api.post('/plats', payload.value)
}

function recupererCategories(){
  api.get('/categories.json')
  .then(res=> categoriesDisponibles.value = res.data )

}


recupererCategories()



</script>

<template>
  <q-form @submit = AjouterPlat>
    <q-input filled v-model="plat.nom" label="Nom" />
    <q-input filled v-model="plat.imageUrl" label="Illustration (url)" />
    <q-select
        filled
        v-model= plat
        label="Catégorie"
        :options= categoriesDisponibles
        option-label="nom"
        option-value ="id"
        style="width: 250px"


      />
    <q-btn type="submit" label="ok" />
  </q-form>


</template>
