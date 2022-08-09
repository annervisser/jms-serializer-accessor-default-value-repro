#!/usr/bin/env bash

set -ev

composer require jms/serializer:3.17.1

php test.php > output-3.17.1.json

composer require jms/serializer:3.18.0

php test.php > output-3.18.0.json
