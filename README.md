# Nosy Be Paradise Tour

## Introduction
**Nosy Be Paradise Tour** est un site web conçu pour une agence touristique spécialisée dans l'organisation d'excursions et de circuits à Nosy Be et dans les régions environnantes de Madagascar. Ce site offre une expérience immersive et informative pour les visiteurs, leur permettant de découvrir les services proposés, les circuits disponibles, et de s'abonner à une newsletter pour rester informés des dernières offres.

---

## Description
Le site met en avant une gamme complète de services touristiques, allant des excursions en catamaran aux transferts premium, en passant par des circuits personnalisés dans les parcs nationaux de Madagascar. Il est conçu pour répondre aux besoins des voyageurs individuels, des groupes, ainsi que des professionnels tels que les agences de voyages et les hôtels.

---

## Fonctionnalités clés
### 1. **Gestion des langues**
- Le site prend en charge plusieurs langues : anglais, français, italien et allemand.
- Les traductions sont gérées via le fichier `Language.php`.

### 2. **Circuits et excursions**
- Présentation détaillée des circuits touristiques, incluant des informations sur les parcs nationaux tels que Mantadia, Marojejy, et bien d'autres.
- Sections dédiées aux excursions en catamaran, bivouac, et transferts premium.

### 3. **Newsletter**
- Formulaire d'abonnement à la newsletter pour recevoir les dernières offres et actualités.

### 4. **Chatbot intégré**
- Un chatbot interactif basé sur l'API **Gemini** de Google Generative AI, permettant aux utilisateurs de poser des questions et d'obtenir des réponses instantanées.

### 5. **Administration**
- Gestion des utilisateurs, des messages, et des comptes via une interface dédiée pour les administrateurs.

### 6. **Animations et design moderne**
- Utilisation d'animations sur le défilement (AOS) et d'un design responsive pour une expérience utilisateur optimale.

---

## Implémentation de l'API Gemini
Le chatbot intégré utilise l'API **Gemini** de Google Generative AI pour fournir des réponses dynamiques et interactives. Voici comment il a été implémenté :
1. **Clé API** : Une clé API est utilisée pour authentifier les requêtes.
2. **Modèle utilisé** : Le modèle `gemini-1.5-flash` est configuré pour générer des réponses.
3. **Gestion des messages** :
   - Les messages sont stockés dans le `localStorage` pour conserver l'historique des conversations.
   - Les réponses sont générées via des appels à l'API et affichées dynamiquement dans l'interface utilisateur.
4. **Code source** : L'intégration est réalisée dans le fichier `header.php` avec des scripts JavaScript.

---

## Technologies utilisées
### Langages
- **PHP** : Pour la logique backend et le routage.
- **JavaScript** : Pour les interactions dynamiques et l'intégration du chatbot.
- **HTML/CSS** : Pour la structure et le design du site.

### Frameworks et bibliothèques
- **Bootstrap** : Pour le design responsive.
- **AOS (Animate on Scroll)** : Pour les animations.
- **Font Awesome** : Pour les icônes.
- **Google Generative AI** : Pour le chatbot.

---

## Prérequis
### Outils nécessaires
- **PHP** (version 7.4 ou supérieure)
- **Navigateur moderne** : Pour tester le site.
- **Serveur local** : Apache ou PHP intégré.

---

## Installation et démarrage
### Étapes pour démarrer le projet
1. Clonez le dépôt :
   ```bash
   git clone https://github.com/gaillardy/paradisetours.git
    ```

## Lancez le serveur PHP intégré :
    ```bash
    php -S localhost:8000 -t public
    ```

## Accédez au site via votre navigateur à l'adresse :
    ```
    http://localhost:8000
    ```
