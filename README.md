Jonnitto.ImagesInARow
=====================

[![Latest Stable Version](https://poser.pugx.org/jonnitto/imagesinarow/v/stable)](https://packagist.org/packages/jonnitto/imagesinarow)
[![Total Downloads](https://poser.pugx.org/jonnitto/imagesinarow/downloads)](https://packagist.org/packages/jonnitto/imagesinarow)
[![License](https://poser.pugx.org/jonnitto/imagesinarow/license)](https://packagist.org/packages/jonnitto/imagesinarow)


Put images nicley in a row:  
![Images in a row](https://user-images.githubusercontent.com/4510166/33304401-e0986e48-d408-11e7-86c4-02bcd24d74cd.jpg)

Installation
------------
Most of the time you have to make small adjustments to a package (e.g. configuration in Settings.yaml). Because of that, it is important to add the corresponding package to the composer from your theme package. Mostly this is the site packages located under Packages/Sites/. To install it correctly go to your theme package (e.g.Packages/Sites/Foo.Bar) and run following command:
```
composer require jonnitto/imagesinarow --no-update
```
The --no-update command prevent the automatic update of the dependencies. After the package was added to your theme composer.json, go back to the root of the Neos installation and run composer update. Et voilà! Your desired package is now installed correctly.

License
-------

Licensed under MIT, see [LICENSE](LICENSE)
