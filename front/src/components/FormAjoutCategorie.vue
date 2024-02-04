<script setup>
import { ref, computed } from 'vue'
import { api } from 'src/boot/axios';
import { useCarteStore } from 'stores/carteStore.js'
import { storeToRefs } from 'pinia';
import { useQuasar } from 'quasar'
const $q = useQuasar()

const store = useCarteStore()

const nouvelleCategorie = ref({

})

const categoriesDisponibles = ref([{
}
])

function recupererCategories() {
  api.get('/categories.json')
    .then(res => categoriesDisponibles.value = res.data)

}

function AjouterCategorie() {
  api.post('/categories', nouvelleCategorie.value)
  .catch(err => {
    $q.notify({
      type:'negative',
      message: err.response.data['hydra:description'],
      icon: 'announcement'
        })
  } )
  .finally( ()=>nouvelleCategorie.value = {} )
}


recupererCategories()

</script>

<template>
  <div class="fit">
    <div class="text-h5 text-center text-white"> Ajouter une Catégorie </div>

    <q-form @submit=AjouterCategorie class="q-pa-md flex column q-gutter-md ">
      <q-input item-aligned  v-model="nouvelleCategorie.nom" required label=" Nom" >
        <template v-slot:prepend>
          <q-icon name="restaurant" />
        </template>
      </q-input>

      <q-input item-aligned v-model="nouvelleCategorie.illustration" label="Ajouter une illustration " clearable>
        <template v-slot:prepend>
          <q-icon name="image" />
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
