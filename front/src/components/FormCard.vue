<script setup>
const lorem =  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'

</script>

<template>
  <div class="q-pa-md row items-start q-gutter-md">

    <q-card  bordered  style="width: 50vw; height: 50vh;">
      <q-card-section horizontal class="full-height" >

        <q-img class="col-4" src="repas.jpg" />
        <q-card-section class=" col-8 ">
          <slot />
        </q-card-section>

      </q-card-section>
    </q-card>

  </div>
</template>



<style  scoped>

.cardStyle{
  width: 50vw;
  height: 50vh;

}


</style>
