# Qart 
### Quasar made application ' a la carte'

#### Fonctionnalités
- Gestion des repas de la famille sur un planning partagée
- Base de données de plats / recettes à agencer sur le planning pour prévoir les
repas de la famille.
- Gestion des ingrédients associées aux recette pour établir une liste de courses
- Possiblité d'ajouter de nouvelles idées recette
- Gestion de catégorie de repas 
- Fonction remplissage automatique du menu


#### Ecrans

- ``Planning Semaine`` Plat Midi et Soir Clic vers fiche du Plat. Poss de planifier un plat, Poss de supprimer un plat prévu. Option compléter Auto. Remplir les vides.

- ``Fiche Plat`` Card avec Illustration, Ingrédients (indicateur disponible), lien vers recette > Popup Dialog ? 

- ``Page Options`` : Définir le nombre de repas par jour. Comment gérer les périodes de vacances/autres ou 2 repas maison ? 

- Page ``Ajouter une Recette`` à la Base de donnée : Formulaire , Quantité par personne pour chaque Ingrédient. Catégorie pour eviter repétition. 

- Page ``Livre de Recettes`` Parcourir les recettes, CRUD, Planifier la recette (Nb de Personne), 

- Page ``Planifier une Recette``Accessible depuis Livre recete ou Planning Semaine, 
formulaire avec recette, date, midi ou soir, nb personnes. 


- Page ``Liste Courses`` qui reprend tous les ingrédients associés aux repas planifiés

- Page ``Ingrédients`` qui reprend tous les ingrédients recensés avec poss de préciser une quantité en stock (déduite de la quantité liste courses)

#### Base de Données


```

 +---------------------+       +------------------------+
|      Recette       |       |       Ingredient      |
+---------------------+       +------------------------+
| id_recette (PK)     |       | id_ingredient (PK)     |
| nom_recette         |       | nom_ingredient         |
| instructions        |       +------------------------+
+---------------------+       |
  |                         |
  |                         |
  |                         |
  |                         |
  |                         |
  |                         |
  v                         v
+------------------------+    +--------------------------+
| QuantitesIngredients  |    |          Stock           |
+------------------------+    +--------------------------+
| id_recette (FK, PK)   |    | id_ingredient (FK, PK)   |
| id_ingredient (FK)    |    | quantite_en_stock         |
| quantite_par_personne |    +--------------------------+
+------------------------+
  |
  |
  v
+------------------------+
|       Recettes         |
+------------------------+
| id_recette (PK)        |
| nom_recette            |
| instructions           |
+------------------------+
```

- La table Recettes a une relation OneToMany avec la table QuantitesIngredients (une recette peut avoir plusieurs quantités d'ingrédients).
- La table Ingredients a une relation OneToMany avec la table QuantitesIngredients (un ingrédient peut apparaître dans plusieurs recettes avec différentes quantités).
- La table QuantitesIngredients a des relations ManyToOne avec les tables Recettes et Ingredients (chaque ligne de quantité fait référence à une recette et un ingrédient spécifiques).
- La table Stock a une relation OneToOne avec la table Ingredients (chaque ingrédient a une quantité en stock unique).

#### MVP - POC 

Ajouter des recettes à un calendrier hebdomadaire

