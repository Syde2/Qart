<script setup>
import { ref, computed } from 'vue'
import { api } from 'src/boot/axios';
import { useCarteStore } from 'stores/carteStore.js'
import { storeToRefs } from 'pinia';

const store = useCarteStore()
const { nouveauPlat } = storeToRefs(store)

const categoriesDisponibles = ref([{
}
])



function AjouterPlat() {
  api.post('/plats', nouveauPlat.value)
}

function recupererCategories() {
  api.get('/categories.json')
    .then(res => categoriesDisponibles.value = res.data)

}



recupererCategories()



</script>

<template>
  <div class="fit">
    <div class="text-h5 text-center text-white"> Ajouter un Plat </div>

    <q-form @submit=AjouterPlat class="q-pa-md flex column q-gutter-md ">

      <q-input item-aligned  v-model="nouveauPlat.nom" required label=" Nom du Plat" >
        <template v-slot:prepend>
          <q-icon name="restaurant" />
        </template>
      </q-input>
      <q-select item-aligned v-model='nouveauPlat.categorie' label="Catégorie" :options=categoriesDisponibles option-label="nom"
        option-value="id" options-cover  popup-content-class="popupStyle text-capitalize text-center">

        <template v-slot:prepend>
          <q-icon name="menu_book" />
        </template>

      </q-select>



      <q-btn type="submit" color="accent"  rounded label="Ajouter" class="q-py-md"  />


    </q-form>

  </div>
</template>

<style >
.popupStyle{
  background: rgba(255, 255, 255, .2);
  backdrop-filter: blur(20px);
  border-radius: 20px;
}
</style>
