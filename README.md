# TP3 - Les Formulaires en Symfony



## Description

Création d'un formulaire .



```


### 1. Créé 3 fichiers principaux

**ProductOrder.php** (DTO)

- Propriétés : quantity et color

- Valeurs par défaut : 1 et 'black'

**ProductOrderType.php** (Formulaire)

- Champ quantité : nombre entre 1 et 10

- Champ couleur : choix entre 3 couleurs

- Bouton "Add to Cart"

**ProductController.php** (Controller)

- Route /tp : affiche la page

- Traite le formulaire

- Affiche un message de confirmation

### 2. Créé 2 templates Twig

**base.html.twig**

- Template de base

- Charge Bootstrap 5.3.2

**product/index.html.twig**

- Affiche l'image du produit

- Affiche les informations

- Affiche le formulaire Symfony

### 3. Transformé le HTML en Symfony

**HTML de base :**

```html

<form method="post">

    <input type="number" name="quantity">

    <select name="color">...</select>

    <button>Submit</button>

</form>

```

**Symfony Twig :**

```twig

{{ form_start(form) }}

    {{ form_widget(form.quantity) }}

    {{ form_widget(form.color) }}

    {{ form_widget(form.submit) }}

{{ form_end(form) }}

```

