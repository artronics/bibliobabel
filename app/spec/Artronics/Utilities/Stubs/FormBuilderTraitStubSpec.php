<?php

namespace spec\Artronics\Utilities\Stubs;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FormBuilderTraitStubSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Artronics\Utilities\Stubs\FormBuilderTraitStub');
    }

    function it_shoud_wrap_given_html()
    {
        $this->wrap('<h1>Hello</h1>')->shouldReturn('<div><h1>Hello</h1></div>');

        $this->wrap('<h1>Hello</h1>',
            null,['alert-box','other']
        )->shouldReturn('<div alert-box other><h1>Hello</h1></div>');

        $this->wrap('<h1>Hello</h1>',
            ['class' => 'radius','id' => 'ID'],null
        )->shouldReturn('<div class="radius" id="ID"><h1>Hello</h1></div>');

        $this->wrap('<h1>Hello</h1>',
            ['class' => 'radius','id' => 'ID'],['alert-box','other']
        )->shouldReturn('<div alert-box other class="radius" id="ID"><h1>Hello</h1></div>');

    }

    function it_should_append_class_styles_to_current_class_attribute()
    {
        $this->applyClassStyles(['radius', 'primary'], ['class' => 'defaultClass'])->shouldReturn(
            ['class' => 'defaultClass radius primary']
        );

        $this->applyClassStyles(['radius', 'primary'])->shouldReturn(
            ['class' => 'radius primary']
        );

        $this->applyClassStyles(['radius', 'primary'], ['class' => 'defaultClass'],'-')->shouldReturn(
            ['class' => 'defaultClass-radius-primary']
        );

        $this->applyClassStyles(['radius', 'primary'],null,'-')->shouldReturn(
            ['class' => 'radius-primary']
        );
    }
}
