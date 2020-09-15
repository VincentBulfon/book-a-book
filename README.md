# Book a book
L’objectif de cette application est permettre à monsieur Spirlet de gérer ses réservations et achats de livres par les étudiants. La gestion de ces réservations est un besoin récurrent d’année en année. Il sera donc utile de contextualiser tout ce qui suit selon l’année scolaire.

Les besoins de monsieur Spirlet sont : 

- gérer son compte (changer son mot de passe, son email, son avatar éventuel) ;
- gérer une liste des livres (ajout, modification, suppression) proposés aux étudiants pour une année donnée. Pour chaque ouvrage, il faut idéalement fournir le titre ; l(es) auteur(s) ; détails d’édition (texte libre), la maison d’édition ; l’ISBN ; le prix public ; le prix proposé et une image de la couverture ;
- pour chaque étudiant, indiquer le statut des paiements et des livraisons. De ces indications résultent des notifications. Voici un exemple de scénario : Un étudiant a commandé 6 livres sur les 12 disponibles en tout et a effectué son paiement. Pour les 6 livres concernés, monsieur Spirlet doit pouvoir noter que le paiement a été fait par l’étudiant. De même, lorsque monsieur Spirlet reçoit les livres, il note « disponible » dans la colonne concernée et l’étudiant reçoit alors une notification. De même, quand il vient emporter ses commandes, monsieur Spirlet peut changer le statut de « disponible » vers « emporté » et l’étudiant reçoit alors une notification. 

ALTERNATIVE : Il fait toutes les modifs dans son dashboard, quand il a fini il clique sur un bouton genre « Valider et envoyer les notifications » et chaque étudiant reçoit une seule notification pour tous les changements qui le concernent, et plus une notification par changement. 

Les étudiants sont également des utilisateurs de l’application. Un étudiant s’inscrit lui-même dans l’application. Il doit fournir son nom, son prénom et son email. L’email doit être vérifié. Sur l’application, les étudiants peuvent constituer une commande (attention, ils peuvent commander un même livre en plusieurs exemplaires) et voir les statuts associés à leur commande. Monsieur Spirlet reçoit des notifications lorsqu’un nouvel étudiant s’inscrit sur l’application et lorsqu’un étudiant a constitué sa commande.

Les statuts possible pour un couple livre/étudiant sont : 

- n/a (pas concerné par une commande)
- commandé (nombre)
- payé
- disponible
- livré

Monsieur Spirlet souhaite visualiser la liste d’un coup d’œil. L’accueil de ce projet sera donc un dashboard, une sorte de feuille Excel indiquant le statut de chaque étudiant/livre. Naturellement, ceci doit aussi pouvoir être utilisé sur un téléphone, ce qui présente un défi intéressant en terme d’adaptabilité du design.
Chaque changement de statut doit être associé à un timestamp et ce dernier doit être visible dans l’interface. On pourrait imaginer d’ailleurs de voir le détail d’une commande d’étudiant avec tout son historique.
