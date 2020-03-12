# Book a book
L’objectif de cette application est permettre à monsieur Spirlet de gérer ses réservations et achats de livres par les étudiants. La gestion de ces réservations est un besoin récurrent d’année en année. Il sera donc utile de contextualiser tout ce qui suit selon l’année scolaire.

Monsieur Spirlet devra pouvoir se créer un compte, s’identifier et s’authentifier. Ses besoins sont :

- gérer son compte (changer son mot de passe) ;
- gérer des étudiants (ajout, modification, suppression) concernés par les achats pour une année donnée. Les informations qui caractérisent un étudiant sont le nom, le prénom et l’adresse email scolaire. L’ajout initial peut éventuellement être réalisé à partir d’un CSV ;
- gérer une liste des livres (ajout, modification, suppression) proposés aux étudiants pour une année donnée. Le titre de l’ouvrage est la seule information utile dans cette application ;
- envoyer un email à tous les étudiants une fois qu’il estime avoir constitué les listes de manière complète ;
- pour chaque étudiant, indiquer le statut des paiements et des livraisons ;

Les étudiants sont également des utilisateurs de l’application. Il leur est permis de réaliser une seule action sur le site : cocher les livres qu’ils souhaitent dans la liste constituée par monsieur Spirlet. Pour s’identifier auprès de l’application, les étudiants utiliseront un lien envoyé par monsieur Spirlet par email. 

Monsieur Spirlet souhaite visualiser la liste d’un coup d’œil. L’accueil de ce projet sera donc un dashboard, une sorte de feuille Excel indiquant le statut de chaque étudiant/livre

Étudiant | livre 1 | livre 2 | livre 3
---------|---------|---------|--------
Nom prénom | réservé | réservé | réservé
Nom prénom | payé | payé | payé
Nom prénom | emporté | emporté | emporté
