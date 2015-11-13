Dummy image driver for Behat-ScreenshotExtension
=========================
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/tkotosz/behat-screenshot-image-driver-dummy/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/tkotosz/behat-screenshot-image-driver-dummy/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/tkotosz/behat-screenshot-image-driver-dummy/badges/build.png?b=master)](https://scrutinizer-ci.com/g/tkotosz/behat-screenshot-image-driver-dummy/build-status/master)
[![Build Status](https://travis-ci.org/tkotosz/behat-screenshot-image-driver-dummy.svg?branch=master)](https://travis-ci.org/tkotosz/behat-screenshot-image-driver-dummy)

This package is an image driver for the [bex/behat-screenshot](https://github.com/elvetemedve/behat-screenshot) behat extension which is just an example to show how an image driver should look like. So it only returns a dummy image url.

Installation
------------

Install by adding to your `composer.json`:

```bash
composer require --dev bex/behat-screenshot-image-driver-dummy
```

Configuration
-------------

Enable the image driver in the Behat-ScreenshotExtension's config in `behat.yml` like this:

```yml
default:
  extensions:
    Bex\Behat\ScreenshotExtension:
      active_image_drivers: dummy
```

Usage
-----

When you run behat and a step fails then the Behat-ScreenshotExtension will automatically take the screenshot and will pass it to the image driver, which will return the dummy image url. So you will see something like this:

```bash
  Scenario:                           # features/feature.feature:2
    Given I have a step               # FeatureContext::passingStep()
    When I have a failing step        # FeatureContext::failingStep()
      Error (Exception)
Screenshot has been taken. Open image at https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png
    Then I should have a skipped step # FeatureContext::skippedStep()
```