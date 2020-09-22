# Page de liste des commandes visibles par le professeur

- numéro de la commande
- son état général (non payée/payé/disponible/livrée)
- nom de l'étudiant
- prénom de l'étudiant
- navbar pour pour interagir avec la liste des livres de la comande (les titres des colonnes de la liste sont cliquable pour changer l'ordre d'affichage de la liste croissant/décroissant par défault les commandes en attente de payement sont affichées en haut de la liste )

  - nom du livre (alphabétique)
  - ISBN
  - numero des commandes
  - date des commandes
  - statut (et possibilité de le changer)
  - nombre commandé

- champ de remarque modifiable en ecrivant dedans
- valider les changements de la commande (et recapituler les changements de status des livres particulier, de la commander ainsi que le changement de commentaire) ou l'ajout de remarque à la commande

## Remarque supplémentaires

Pour chaque commande un overlay rouge (léger) pourra surligner les commandes en attente de payement, orange si elles sont payées mais pas encore disponniles et verte si elles sont disponnibles mais pas encore livrées, une fois livrée la commande pourra être sur un fond blanc, ainsi une information visuelle pourra facilement informer l'utilisateur du statut d'une commande facilement en plus de la colonne statut qui sera là surtout pour si l'utilisateur pésente une déficientce visuelle au niveau de la vision des couleurs.

Possibilité d'afficher l'état général de la commande dans un select coloré avec le non de l'état (rouge non payée/ orange payée mais pas encore disponible, verte disponible, blanche remise)
