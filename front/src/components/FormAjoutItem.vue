<script setup>
import { ref, computed } from 'vue'
import { api } from 'src/boot/axios';
import { useCarteStore } from 'stores/carteStore.js'
import { storeToRefs } from 'pinia';
import { useQuasar } from 'quasar'

const emit = defineEmits(['success'])

const store = useCarteStore()
const {nouveauRepas, plats } = storeToRefs(store)
const repasDisponibles = ref()
const $q = useQuasar()



function recupererPlats() {
  api.get('/plats')
    .then(res => repasDisponibles.value = res.data["hydra:member"])

}

function ajouterRepas() {
  nouveauRepas.value.date = store.dateSelectionnee
  api.post('/calendriers', nouveauRepas.value)
  .catch(err => {
    $q.notify(err)
    return
  })
  .then(() => emit("success") )
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

