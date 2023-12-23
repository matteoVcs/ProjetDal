# Architechture d'un DAL
### Mattéo Vocanson
## Utilisation
- mettre le projet dans le dossier www de wamp/xamp ou autre serveur local (PHP 7.4)
- modifier le fichier "Settings.json" qui se trouve a la racine du projet, y mettre ses paramètres (le CredentialPath de base est deux dossier avant la racine du projet pour sortir du server)

- les requêtes sont à envoyer sur les urls:
```
http://localhost/API/AddRecord/

http://localhost/API/UpdateRecord/

http://localhost/API/DeleteRecord/

http://localhost/API/SelectRecord/
```
## Exemple de requetes

(Pour tout les exemples, il est possible de rajouter des colonnes/valeurs a la suites des autres)
- Pour AddRecord
```json
{
  "table": "nomDeLaTable",
  "record": {
    "colonne": "valeur",
    "colonne2": "valeur2"
  }
}
```
- Pour UpdateRecord (record = nouvelle valeur, filter = ancienne valeur)
```json
{
  "table": "nomDeLaTable",
  "record": {
    "colonne": "valeur",
    "colonne2": "valeur2"
  },
  "filter": {
    "colonne": "valeur",
    "colonne2": "valeur2"
  }
}
```
- Pour DeleteRecord
```json
{
  "table": "nomDeLaTable",
  "filter": {
    "colonne": "valeurAFiltrer",
    "colonne2": "filtreAFiltrer2"
  }
}
```
- Pour SelectRecord (out = list des colonnes a selectionner, filter = list des colonnes/filtres)
```json
{
  "table": "NomDeLaTable",
  "out": ["select1", "select2"],
  "filter": {
    "colonne": "filtre",
    "colonne2": "filtre2"
  }
}
```
(si besoin est j'ai mis a disposition la db que j'ai utilisé pour les tests bien que très basique, elle peut faire gagner du temps, ainsi que les requetes avec valeurs pour mes test, ils sont dans le fichier /API/leurs_fichiers_respectifs, en commentaire tout en bas des fichiers ex: requetes pour AddRecord dans API/AddRecord.php)