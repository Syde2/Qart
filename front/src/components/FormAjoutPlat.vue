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
const stringOptions =ref([
  'Google', 'Facebook', 'Twitter', 'Apple', 'Oracle'
])

function AjouterPlat(){
api.post('/plats', payload.value)
}

api.get('/plats')

function createValue(val,done){
  console.log('val', val)
  stringOptions.value.push(val)
done(val)
}


</script>

<template>
  <q-form @submit = AjouterPlat>
    <q-input filled v-model="payload.nom" label="Nom" />
    <q-input filled v-model="payload.imageUrl" label="Illustration (url)" />
    <q-select
        filled
        clearable
        v-model="payload.categorie.nom"
        label="Simple select"
        :options="stringOptions"
        style="width: 250px"
        use-input
        @new-value="createValue"


      />
    <q-btn type="submit" label="ok" />
  </q-form>


</template>
