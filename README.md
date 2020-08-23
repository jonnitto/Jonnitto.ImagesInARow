[![Latest stable version]][packagist] [![Total downloads]][packagist] [![License]][packagist] [![GitHub forks]][fork] [![Donate Paypal]][paypal] [![Wishlist amazon]][amazon] [![GitHub stars]][stargazers] [![GitHub watchers]][subscription] [![GitHub followers]][followers] [![Follow Jon on Twitter]][twitter]

# Jonnitto.ImagesInARow

### This package helps put images nicley in a row:

![Images in a row]

**In the new Neos UI, you can even faster generate the rows:**
![node template example]

## Installation

Most of the time you have to make small adjustments to a package (e.g. configuration in Settings.yaml). Because of that, it is important to add the corresponding package to the composer from your theme package. Mostly this is the site packages located under Packages/Sites/. To install it correctly go to your theme package (e.g.Packages/Sites/Foo.Bar) and run following command:

```bash
composer require jonnitto/imagesinarow --no-update
```

The --no-update command prevent the automatic update of the dependencies. After the package was added to your theme composer.json, go back to the root of the Neos installation and run composer update. Et voilà! Your desired package is now installed correctly.

[packagist]: https://packagist.org/packages/jonnitto/imagesinarow
[latest stable version]: https://poser.pugx.org/jonnitto/imagesinarow/v/stable
[total downloads]: https://poser.pugx.org/jonnitto/imagesinarow/downloads
[license]: https://poser.pugx.org/jonnitto/imagesinarow/license
[github forks]: https://img.shields.io/github/forks/jonnitto/Jonnitto.ImagesInARow.svg?style=social&label=Fork
[donate paypal]: https://img.shields.io/badge/Donate-PayPal-yellow.svg
[wishlist amazon]: https://img.shields.io/badge/Wishlist-Amazon-yellow.svg
[amazon]: https://www.amazon.de/hz/wishlist/ls/2WPGORAVYF39B?&sort=default
[paypal]: https://www.paypal.me/Jonnitto/20eur
[github stars]: https://img.shields.io/github/stars/jonnitto/Jonnitto.ImagesInARow.svg?style=social&label=Stars
[github watchers]: https://img.shields.io/github/watchers/jonnitto/Jonnitto.ImagesInARow.svg?style=social&label=Watch
[github followers]: https://img.shields.io/github/followers/jonnitto.svg?style=social&label=Follow
[follow jon on twitter]: https://img.shields.io/twitter/follow/jonnitto.svg?style=social&label=Follow
[twitter]: https://twitter.com/jonnitto
[fork]: https://github.com/jonnitto/Jonnitto.ImagesInARow/fork
[stargazers]: https://github.com/jonnitto/Jonnitto.ImagesInARow/stargazers
[subscription]: https://github.com/jonnitto/Jonnitto.ImagesInARow/subscription
[followers]: https://github.com/jonnitto/followers
[license]: LICENSE
[images in a row]: https://user-images.githubusercontent.com/4510166/33304401-e0986e48-d408-11e7-86c4-02bcd24d74cd.jpg
[node template example]: https://user-images.githubusercontent.com/4510166/34143857-2a05c18e-e48f-11e7-9379-e9b5f0950369.gif
