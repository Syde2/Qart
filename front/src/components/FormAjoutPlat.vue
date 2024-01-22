<script setup>
import {ref} from 'vue'
import { api } from 'src/boot/axios';
import {useMealStore} from 'stores/mealStore'
import { storeToRefs } from 'pinia';

const mealStore = useMealStore()
const {plat,categorie,payload } = storeToRefs(mealStore)

const stringOptions =ref([
])

function AjouterPlat(){
api.post('/plats', payload.value)
}

function recupererCategories(){
  api.get('/categories.json')
  .then(res=> stringOptions.value = res.data )

}

recupererCategories()

function createValue(val,done){
  console.log('val', val)
  stringOptions.value.push(val)
  categorie.value.nom = val
done(val)
}


</script>

<template>
  <q-form @submit = AjouterPlat>
    <q-input filled v-model="plat.nom" label="Nom" />
    <q-input filled v-model="plat.imageUrl" label="Illustration (url)" />
    <q-select
        filled
        clearable
        v-model="categorie"
        label="Simple select"
        :options="stringOptions"
        option-label="nom"
        option-value ="id"
        style="width: 250px"
        use-input
        @new-value="createValue"


      />
    <q-btn type="submit" label="ok" />
  </q-form>


</template>
