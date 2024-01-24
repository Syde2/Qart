<script setup>
import { ref, computed } from 'vue'
import { api } from 'src/boot/axios';
import { useCarteStore } from 'stores/carteStore.js'
import { storeToRefs } from 'pinia';

const store = useCarteStore()
const { plat } = storeToRefs(store)

const categoriesDisponibles = ref([{
}
])



function AjouterPlat() {
  api.post('/plats', plat.value)
}

function recupererCategories() {
  api.get('/categories.json')
    .then(res => categoriesDisponibles.value = res.data)

}



recupererCategories()



</script>

<template>
  <div class="wrapper">
    <div class="text-h6"> Ajouter un Plat </div>

    <q-form @submit=AjouterPlat class="flex column fit justify-center ">
      <q-input class="q-pa-sm"  v-model="plat.nom" required label=" Nom de la recette" >
        <template v-slot:prepend>
          <q-icon name="restaurant" />
        </template>
      </q-input>
      <q-select v-model='plat.categorie'  label="Choisir une catégorie" :options=categoriesDisponibles option-label="nom"
        option-value="id" options-cover class="q-pa-sm" >
        <template v-slot:prepend>
          <q-icon name="menu_book" />
        </template>
      </q-select>
      <q-input class="q-pa-sm" v-model="plat.imageUrl" label="Ajouter une image ? " clearable>
        <template v-slot:prepend>
          <q-icon name="image" />
        </template>
        <template v-slot:append>
          <q-avatar v-if="plat.imageUrl">
            <img :src=plat.imageUrl>
          </q-avatar>
          <q-skeleton v-else type="QAvatar" />
        </template>
      </q-input>



      <q-btn type="submit" label="Ajouter" flat  class="q-my-lg" />


    </q-form>


  </div>
</template>


<style></style>
