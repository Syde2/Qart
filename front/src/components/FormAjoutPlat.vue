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
  <div class="fit">
    <div class="text-h5 text-center text-white"> Ajouter un Plat </div>

    <q-form @submit=AjouterPlat class="q-pa-md flex column q-gutter-md ">
      <q-input item-aligned  v-model="plat.nom" required label=" Nom de la recette" >
        <template v-slot:prepend>
          <q-icon name="restaurant" />
        </template>
      </q-input>
      <q-select item-aligned v-model='plat.categorie' label="Choisir une catégorie" :options=categoriesDisponibles option-label="nom"
        option-value="id" options-cover  popup-content-class="popupStyle" >

        <template v-slot:prepend>
          <q-icon name="menu_book" />
        </template>

      </q-select>
      <q-input item-aligned v-model="plat.imageUrl" label="Ajouter une image ? " clearable>
        <template v-slot:prepend>
          <q-icon name="image" />
        </template>
        <template v-slot:append>
          <q-avatar v-if="plat.imageUrl">
            <img :src=plat.imageUrl>
          </q-avatar>
          <q-skeleton v-else type="QAvatar"  animation="none"/>
        </template>
      </q-input>

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
