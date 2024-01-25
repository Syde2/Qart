<script setup>

</script>

<template>
  <q-layout view="hHh lpR fFf">
    <q-header  class="bg-transparent">
      <q-toolbar>
        <q-toolbar-title>
          <q-btn class="text-h5"  flat  no-caps to="/">
            Qart
          </q-btn>
        </q-toolbar-title>
        <q-tabs dense inline-label>
          <q-route-tab to="/plats" label="Plats" no-caps icon="menu_book" />
          <q-route-tab to="/calendrier" label="Calendrier" no-caps icon="calendar_month" />
          <q-route-tab to="/reglages" label="Reglages" no-caps  icon="settings"/>
      </q-tabs>
      <q-space />
      </q-toolbar>

    </q-header>


    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

