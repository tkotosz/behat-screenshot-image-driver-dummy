<?php

namespace spec\Bex\Behat\ScreenshotExtension\Driver;

use Bex\Behat\ScreenshotExtension\Driver\Service\UploadPieApi;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class DummySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Bex\Behat\ScreenshotExtension\Driver\Dummy');
    }

    function it_should_return_the_dummy_image_url()
    {
        $dummyUrl = 'http://docs.behat.org/en/v2.5/_static/img/logo.png';
        $this->upload(Argument::any(), Argument::any())->shouldReturn($dummyUrl);
    }
}