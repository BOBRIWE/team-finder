#!/bin/bash

echo "Copying /vendor folder..."
docker cp teamfinder-composer:/var/www/vendor ./

echo "Copying composer.lock file (add it to git only if needed!)..."
docker cp teamfinder-composer:/var/www/composer.lock ./composer.lock