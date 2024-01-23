<script setup>
import {ref , computed} from 'vue'
import { api } from 'src/boot/axios';
import {useCarteStore} from 'stores/carteStore.js'
import { storeToRefs } from 'pinia';

const store = useCarteStore()
const { plat } = storeToRefs(store)

const categoriesDisponibles =ref([{
}
])



function AjouterPlat(){
  api.post('/plats', plat.value)
}

function recupererCategories(){
  api.get('/categories.json')
  .then(res=> categoriesDisponibles.value = res.data )

}



recupererCategories()



</script>

<template>
  <div class="wrapper">


  <q-form @submit = AjouterPlat>
    <q-input  v-model="plat.nom" label="Nom" />

    <q-input  v-model="plat.imageUrl" label="Illustration (url)" clearable
>
      <template v-slot:append>
          <q-avatar v-if="plat.imageUrl">
            <img :src=plat.imageUrl>
          </q-avatar>
          <q-skeleton v-else type="QAvatar" />
        </template>
    </q-input>

    <q-select
        v-model= 'plat.categorie'
        label="Catégorie"
        :options= categoriesDisponibles
        option-label="nom"
        option-value ="id"
        options-cover
        style="width: 250px">

    </q-select>
  </q-form>

</div>

</template>


<style>

</style>
