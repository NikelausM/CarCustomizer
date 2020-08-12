<p align="center"><img src="./images/screenshots/Lamborghini Logo.jpg" height="384" width="512"></p>

# Car Customizer

<h2 id="table-of-contents">Table of Contents</h2>

* [Introduction](#introduction)
* [Features](#features)
* [Screenshots](#screenshots)
* [Launch](#launch)
* [Technologies](#technologies)

<h2 id="introduction">Introduction</h2>

This is a prototype for the Car Customizer application built for [SENG 471 - Software Requirements Engineering](http://contacts.ucalgary.ca/info/cpsc/courses/w19/SENG471).

This prototype is meant to showcase a web application that [CADA](https://www.cada.ca/web/cada/) (Canadian Automobile Dealers Association) hypothetically requested. The application would allow a dealership customer to customize the non-functional features of their desired automobile.

Specifically, this prototype shows the interior and exterior automobile color selection functionality of the web application.

<h2 id="features">Features</h2>

- Visual model of automobile interior
- Visual model of automobile exterior
- Select interior color of automobile from color palette menu
    - Interior color of automobile changes to color selected
- Select exterior color of automobile from color palette menu
    - Exterior color of automobile changes to color selected

<h2 id="screenshots">Screenshots</h2>

### Opening home page
<p align="center"><img src="./images/screenshots/Main Page.PNG"></p>

### Opening the exterior color palette menu
<p align="center"><img src="./images/screenshots/Exterior Color Palette.PNG"></p>

### Opening the interior color palette menu
<p align="center"><img src="./images/screenshots/Interior Color Palette.PNG"></p>

### Changing the exterior and interior color
<p align="center"><img src="./images/screenshots/Main Page Colors Changed.PNG"></p>

<h2 id="launch">Launch</h2>

### Setup
To install dependencies, in root folder of project run:
```
composer install
```
Create .env file in root folder of project.

Update database connection information in .env file.

Generate APP_KEY in .env file by running:
```
php artisan key:generate
```
To create tables, run:
```
php artisan migrate:refresh
```
To seed database, run:
```
php artisan db:seed
```

### Serve Locally
To serve application locally (development server):
```
php artisan serve
```

<h2 id="technologies">Technologies</h2>

- [PHP 7.3.6](https://www.php.net)
- [Laravel PHP Web Framework 5.8.21](https://laravel.com)
- [HTML5](https://html.com/html5/)
- [CSS](https://developer.mozilla.org/en-US/docs/Glossary/CSS)

### Software Architecture Diagram
<p align="center"><img src="./images/screenshots/Software Architecture.PNG"></p>
