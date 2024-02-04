<script setup>
import {ref} from 'vue'
import FormAjoutPlat from 'src/components/FormAjoutPlat.vue'
import FormCard from 'src/components/FormCard.vue';
import ListPlats from 'src/components/ListPlats.vue';

const alert =ref(false)

</script>
<template>

<q-page class="flex flex-center column">

  <ListPlats />


  <q-dialog   v-model="alert">
      <div class="flex flex-center">
        <FormCard>
          <FormAjoutPlat />
        </FormCard>
      </div>
  </q-dialog>

    <q-btn @click="alert = !alert"  label="Ajouter un plat"/>



</q-page>
</template>
