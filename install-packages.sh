#!/usr/bin/env bash

cd /vagrant

composer install

cd public

bower install
