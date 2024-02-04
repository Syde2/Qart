<script setup>
import { ref } from 'vue'
import { api } from 'src/boot/axios';

const listePlats = ref([])
const columns = [
{ name: 'nom', label: 'Nom ', field: 'nom' },
{ name: 'categorie', label: 'Categorie ', field: row => row.categorie.nom },

]

function recupererPlats() {
  api.get('/plats')
    .then(res => listePlats.value = res.data["hydra:member"])
}

recupererPlats()


</script>


<template>
  <div v-if="listePlats.length" class="q-pa-md">
    <q-table flat bordered grid title="Plats" :rows="listePlats" :columns="columns" row-key="name" hide-header>
      <template v-slot:item="props">
        <div>
          <q-card flat bordered>
            <q-card-section class="text-center">
              {{ props.row.nom }}
            </q-card-section>
            <q-separator />
            <q-card-section class="flex flex-center" >
              {{ props.row.categorie.nom }}
            </q-card-section>
          </q-card>
        </div>
      </template>

    </q-table>
  </div>

  <div v-else>
    Aucun Plat
  </div>
</template>
