# popin
plugin JQUERY popin pour ma librairie

# install

```
composer require veka-server/popin
```

Informer le framework que la lib est presente en editant le fichier config/plugin.php
```php
// ajouter la ligne dans le tableau retourné par le fichier
\VekaServer\Popin\Autoload::class
```

Ajouter les traductions au chargement de la page
```js
Popin.btn_valider = {{ "valider" | lang | json_encode | raw }};
Popin.btn_annuler = {{ "annuler" | lang | json_encode | raw }};
```

Ajouter la route de fontawesome => veka-server/fontawesome
```
Consulter le readme de veka-server/fontawesome
```

# utilisation
```js
Popin.alert(content, titre);
```
```js
Popin.confirm(content, titre, function(){
    // success
}, function(){
    // cancel
});
```
```js
Popin.dialog(content, titre, function(){
    // success
}, function(){
    // cancel
}, function(){
    // close 
});
```
