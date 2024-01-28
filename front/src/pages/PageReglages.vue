<script setup>
import {ref} from 'vue'
import FormCard from 'src/components/FormCard.vue';
import FormAjoutCategorie from 'src/components/FormAjoutCategorie.vue';

const toggle = ref(false)
</script>

<template>
<q-page class="flex flex-center">
  <q-dialog square="false" full-width  v-model="toggle">
      <div class="flex flex-center">
        <FormCard>
          <FormAjoutCategorie />
        </FormCard>
      </div>
  </q-dialog>

    <q-btn @click="toggle = !toggle"  label="Creer une Catégorie"/>



</q-page>

</template>
