import { defineStore } from 'pinia';

export const useCarteStore = defineStore('carte', {
  state: () => {
    return{
    plats: {
    },
    nouveauRepas : {

      periode:'',
      plat: ''
    }
  }
  },


  getters: {
    // payload: (state) => {
    //   state.plat.categorie = state.categorie
    //   return state.plat
    // },


  },
  actions: {

  },
});
