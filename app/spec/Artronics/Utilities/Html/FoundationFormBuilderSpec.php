<?php

namespace spec\Artronics\Utilities\Html;

use Illuminate\Html\HtmlBuilder;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\MessageBag;
use Illuminate\Support\ViewErrorBag;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FoundationFormBuilderSpec extends ObjectBehavior
{
    function let(HtmlBuilder $htmlBuilder, UrlGenerator $urlGenerator)
    {
        $this->beConstructedWith($htmlBuilder, $urlGenerator,null);
    }
    function it_is_initializable()
    {
        $this->shouldHaveType('Artronics\Utilities\Html\FoundationFormBuilder');
    }

    function it_shows_a_foundation_alert()
    {
        $this->alert('salam',[
            'class' => 'alert radius',
            'id' => 'ID',
        ])->shouldReturn('<div data-alert class="alert radius alert-box" id="ID">salam<a href="#" class="close">&times;</a></div>');

        $this->alert('salam',[
                    'class' => 'alert radius alert-box'
                ])->shouldReturn('<div data-alert class="alert radius alert-box">salam<a href="#" class="close">&times;</a></div>');

        $this->alert('Hello'
        )->shouldReturn('<div data-alert class="alert-box">Hello<a href="#" class="close">&times;</a></div>');
    }

    function it_shows_error_messages()
    {
        $errorBag = new MessageBag(['email' => 'Email address should be valid']);
        $this->showError($errorBag,'email')->shouldReturn('<small class="error">Email address should be valid</small>');
    }


}
