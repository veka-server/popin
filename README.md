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
# utilisation
```js
Popin.alert(content, titre);

Popin.confirm(content, titre, function(){
    // success
}, function(){
    // cancel
});

Popin.dialog(content, titre, function(){
    // success
}, function(){
    // cancel
}, function(){
    // close 
});
```
