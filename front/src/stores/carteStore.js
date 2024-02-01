import { defineStore } from "pinia";
import { date } from 'quasar'


export const useCarteStore = defineStore("carte", {
  state: () => {
    return {
      dateSelectionnee : new Date(),
      plats : [],
      nouveauRepas: {
        periode: "",
        plat: "",
      },
      nouveauPlat : {

      }
    };
  },

  getters: {
    dateFormattee : state =>  date.formatDate( state.dateSelectionnee, 'DD/MM/YYYY'),
    platsDuJour : state => state.plats.filter( plat => date.formatDate(plat.date, "DD/MM/YYYY") === date.formatDate(state.dateSelectionnee, "DD/MM/YYYY" )   ),
    midi() { return  this.platsDuJour.filter( plat => plat.periode === 'midi' ) },
    soir() { return  this.platsDuJour.filter( plat => plat.periode === 'soir' ) },


  },
  actions: {},
});
