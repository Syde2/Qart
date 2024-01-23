import { defineStore } from 'pinia';

export const useCarteStore = defineStore('carte', {
  state: () => ({
    plat: {
      categorie:{
        nom:'chargement'
      }
    }

  }),


  getters: {
    // payload: (state) => {
    //   state.plat.categorie = state.categorie
    //   return state.plat
    // },


  },
  actions: {

  },
});
