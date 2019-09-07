# Strapped - WordPress theme skeleton project

[![Build Status](https://travis-ci.org/htmlcenterhq/strapped.svg?branch=master)](https://travis-ci.org/htmlcenterhq/strapped)

## About

Strapped is a WordPress theme skeleton project based on the WordPress developer productivity best practices and [Bootstrap 4 UI toolkit](https://getbootstrap.com/). Skeleton project provides WordPress developers with the strong automation and productivity practices.

You can use Strapped theme as single standalone WordPress theme, or as a parent theme for multiple WordPress projects. [Strapped](https://www.htmlcenter.com/themes/strapped) includes tools like Gulp, Npm, Sass, Composer and Docker. It helps you build Wordpress projects faster and reduces number of code bugs.

## Basic Features

- Combines Bootstrap 4 HTML/CSS/JS files with simple and powerful WordPress skelethon project.
- Tools to automate management of JS / CSS / SASS dependencies.
- Tools for continuous integration setup to speedup the testing and developer productivity.
- Integrated Docker for local Wordpress theme testing and development. 

## Usage

### Npm

This theme is using [npm](https://www.npmjs.com/) to manage its source dependencies (Bootstrap 4 , Font Awesome). To download all the dependency source code use

    npm install

### Composer

Composer is used to manage libraries for PHP code queslity and Wordpress coding standards. In order to install all relevant composer dependencies make sure you have [composer installed on development machine](https://getcomposer.org/doc/00-intro.md). And run the following

    composer install
    ./test.sh

### Gulp

Gulp is used as a task manager for working with source files, setting up the project and building the Strapped theme for distribution. Few of the commands supported by Strapped

    gulp dist
    gulp compile-sass

## License

Strapped WordPress theme by [htmlcenter.com](https://www.htmlcenter.com). Copyright 2019

Strapped theme is distributed under the terms of the [GNU GPL version 2](http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html). By contributing to this open source project, you agree that all your contributions will be licensed under this license.
