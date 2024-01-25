<script setup>
import {ref} from 'vue'
import FormAjoutPlat from 'src/components/FormAjoutPlat.vue'
import FormCard from 'src/components/FormCard.vue';

const alert =ref(false)

</script>
<template>

<q-page class="flex flex-center">

  <q-dialog square="false" full-width  v-model="alert">
      <div class="flex flex-center">

        <FormCard>
      <FormAjoutPlat />
    </FormCard>

      </div>

    </q-dialog>

    <q-btn @click="alert = !alert"  label="toggle"/>



</q-page>
</template>
