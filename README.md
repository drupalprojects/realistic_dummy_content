Realistic dummy content
=======================

This project is inspired by the Devel issue [Let's generate kick-ass demo content!](https://drupal.org/node/1748302), and aims to make it possible to use [Devel](https://drupal.org/project/devel)'s `devel_generate` to generate more realistic demo content.

Usage
-----

Enable this module and [Devel](https://drupal.org/project/devel)'s `devel_generate`. You will now see portraits used for profile pictures, and stock photos instead of the color blocks generated by `devel_generate`. All images included in this module are freely licensed (see the README.txt in the directories containing the images).

Extending this module
---------------------

This project contains two modules:

 * Realistic Dummy Content API (realistic\_dummy\_content\_api), which looks inside every enabled module for files which contain images or text, and replaces available fields.

 * Realistic Dummy Content (realistic\_dummy\_content), which replaces user pictures and node article images with portraits and stock photography. You can reproduce the `realistic_dummy_content/realistic_dummy_content` directory structure in your own modules for better control of the realistic dummy content you want to generate. If you don't want the example stock images that ship with this module, you can disable Realistic Dummy Content (realistic\_dummy\_content) and leave Realistic Dummy Content API (realistic\_dummy\_content\_api) enabled.

Issue queue
----------

See the [issue queue](https://drupal.org/project/issues/2253941?categories=All) if you have questions, bug reports or feature requests.

Docker integration
--------

To test this module you can run:

    ./scripts/test.sh

To create a development environment, you can run:

    ./scripts/dev.sh

For more information see [A quick intro to Docker for a Drupal project (Dcycle Project, Feb. 18, 2015)](http://dcycleproject.org/blog/91/quick-intro-docker-drupal-project). These scripts are meant to be used with [Docker](https://www.docker.com) and [CoreOS](https://coreos.com).

Continuous integration with Circle CI
-----

[CircleCI](https://circleci.com/gh/alberto56/realistic_dummy_content) is a continuous integration platform for Drupal projects. In [Continuous integration with Circle CI and Docker for your Drupal project (Dcycle project, Feb. 20, 2015)](http://dcycleproject.org/blog/92/continuous-integration-circle-ci-and-docker-your-drupal-project), I documented how and why I set up continuous integration with Circle CI and Docker for Realistic Dummy Content.

[See Circle CI status of the 7.x-1.x branch here](https://circleci.com/gh/alberto56/realistic_dummy_content/tree/7.x-1.x)

Sponsors
--------

 * [The Linux Foundation](http://www.linuxfoundation.org/) and [Dcycle](http://dcycleproject.org) (Current)
 * [CGI](http://cgi.com/) (Initial development)
