<?php namespace Artronics\Utilities\Html;

use Illuminate\Html\FormBuilder as IlluminateFormBuilder;

class FoundationFormBuilder extends IlluminateFormBuilder implements FormBuilderInterface
{
    use FormbuilderTrait;

    /**
     * Creates Foundation alert
     *
     * @param $message
     * @param array $options
     * @internal param array $classStyles
     * @return string
     */
    public function alert($message, array $options=array())
    {
        //Default attribute for alert
        $attributes = ['data-alert'];

        //Dfault Class for alert
        $defaultClass = 'alert-box';

        $options = $this->applyDefaultClass($options, $defaultClass);

        //Builds html wrapper
        $html="{$message}<a href=\"#\" class=\"close\">&times;</a>";

        //Wraps it with div
        $result = $this->wrap($html,$options, $attributes);

        return $result;
    }
}


