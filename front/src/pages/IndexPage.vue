<script setup>
import {ref} from 'vue'
import { api } from 'src/boot/axios';

const listeRecettes = ref ([])

function chargementDesRecettes(){
  api.get('/recettes.json')
  .then((res)=>{
    listeRecettes.value = res.data
  } )

}

function testAJoutRecette(){
  const quantitesIngredients = {
        ingredient: {
          nom: "Oeuf"
        },
        quantite: 2,
        recette: '/api/recettes/1'
  }
  const recette ={
    nom: "Omelette ",
    illustration: "vide",
    lien: "vide",
    quantites : {
      ingredients : {
        nom: "Divers"
      },
      quantite: 1,
    }


  }
  api.post('/recettes', recette)

}


chargementDesRecettes()

</script>

<template>
  <q-page class="flex flex-center column">
    <ul v-for="each in listeRecettes" :key="each.id">
      <li>{{ each.nom }}</li>

    </ul>

    <button @click="testAJoutRecette">Test </button>

  </q-page>
</template>


