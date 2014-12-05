<?php namespace Artronics\Utilities\Html;

use Illuminate\Html\FormBuilder as IlluminateFormBuilder;

class FoundationFormBuilder extends IlluminateFormBuilder implements FoundationFormBuilderInterface
{
    use FormbuilderTrait;

    /**
     * Create a form input field.
     *
     * @param  string $type
     * @param  string $name
     * @param  string $value
     * @param  array $options
     * @param null $labelValue
     * @return string
     */
    public function input($type, $name, $value = null, $options = array(),$labelValue = null)
    {
        if ( ! isset($options['name'])) $options['name'] = $name;

        // We will get the appropriate value for the given field. We will look for the
        // value in the session for the value in the old input data then we'll look
        // in the model instance if one is set. Otherwise we will just use empty.
        $id = $this->getIdAttribute($name, $options);

        if ( ! in_array($type, $this->skipValueTypes))
        {
            $value = $this->getValueAttribute($name, $value);
        }

        // Once we have the type, value, and ID we can merge them into the rest of the
        // attributes array so we can convert them into their HTML attribute format
        // when creating the HTML element. Then, we will return the entire input.
        $merge = compact('type', 'value', 'id');

        $options = array_merge($options, $merge);

        $html = '<input' . $this->attributes($options) . '>';

        return $this->labelWrapper($html ,$labelValue);
    }

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

    /**
     *
     * Shows error message
     * If there are more than one form you can assign a name to error bag for
     * that specific form. pass it as third argument
     * @param $errors
     * @param $name
     * @param null $errorBagName
     * @return string
     */
    public function showError($errors, $name, $errorBagName = null)
    {
        if (! is_null($errorBagName)) {
            if ($errors->$errorBagName->first($name) =='') return;
            else return "<small class=\"error\">{$errors->$errorBagName->first($name)}</small>";
        }
        else {
            if ($errors->first($name) =='') return;
            else return "<small class=\"error\">{$errors->first($name)}</small>";
        }

    }

    /**
     *
     * @param $html
     * @param $labelValue
     * @return string
     */
    private function labelWrapper($html, $labelValue)
    {
        if (is_null($labelValue)) return $html;
        return
            "<label>{$labelValue}
{$html}
</label>";
    }
}


