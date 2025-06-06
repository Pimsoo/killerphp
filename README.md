## A quoi ça sert?

Quelques lignes de PHP qui datent d'une dizaine d'année, je n'arrivais pas "nettoyer" un dossier en FTP pour une raison que j'ignore, et je voulais faire place nette avant de réinstaller un wordpress tout propre.

## Remarque de sécurité

Ce genre de code (suppression récursive de dossiers via PHP, appelé sur "./") peut être très dangereux (risque de tout effacer).
Il ne doit jamais être exposé sur un serveur web sans contrôle strict, ni utilisé sans sauvegarde/test.
