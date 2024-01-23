<script setup>
const lorem =  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'

</script>

<template>
  <div class="q-pa-md row items-start q-gutter-md">


    <q-card>
      <q-card-section>
        <div class="text-h6">Our Changing Planet</div>
        <div class="text-subtitle2">by John Doe</div>
      </q-card-section>

      <q-separator dark inset />

      <q-card-section>
        <slot></slot> <!-- slot outlet -->

      </q-card-section>
    </q-card>

  </div>
</template>



<style  scoped>
.my-card{
  max-width: 450px;

}

</style>
