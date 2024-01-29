<script setup>
import { ref, computed } from 'vue'
import { api } from 'src/boot/axios';
import { useCarteStore } from 'stores/carteStore.js'
import { storeToRefs } from 'pinia';

const store = useCarteStore()
const {nouveauRepas} = storeToRefs(store)
const repasDisponibles = ref()


function recupererPlats() {
  api.get('/plats.json')
    .then(res => repasDisponibles.value = res.data)

}
function ajouterRepas() {
  api.post('/calendriers', nouveauRepas.value)
}

recupererPlats()
</script>

<template>
  <div class="fit">
    <div class="text-h5 text-center text-white"> Ajouter un Repas </div>

    <q-form @submit=ajouterRepas class="q-pa-md flex column q-gutter-md ">

      <q-select item-aligned v-model='nouveauRepas.plat' label=" Selectionner un repas"
      :options=repasDisponibles option-label="nom"  option-value="id"
      options-cover  popup-content-class="popupStyle" >
        <template v-slot:prepend>
          <q-icon name="menu_book" />
        </template>

      </q-select>

      <q-btn type="submit" color="accent"  rounded label="Ajouter" class="q-py-md"  />


    </q-form>

  </div>
</template>

