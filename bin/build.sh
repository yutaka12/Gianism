#!/usr/bin/env bash

set -e

# Build files
composer install --no-dev
npm install
npm run package
# Make Readme
echo 'Generate readme.'
curl -L https://raw.githubusercontent.com/fumikito/wp-readme/master/wp-readme.php | php
# Remove files
rm -rf node_modules
rm -rf tests
rm -rf bin
rm -rf phpcs.ruleset.xml
rm -rf phpunit.xml.dist
rm -rf phpdoc.xml
