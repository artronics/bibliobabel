<?php namespace Artronics\Utilities\Html;


trait FormbuilderTrait
{

    /**
     * It generates a div tag with $html as content
     * $options are key value pairs however, $attributes are only value
     * <div "att1" "att2" "key1"="value1" "key2"="value2">$html</div>
     * @param $html
     * @param $options
     * @param null $attributes
     * @return string
     */
    public function wrap($html, $options = null, $attributes = null)
    {
        if (!is_null($attributes))
            $attributes = ' ' . implode(' ', $attributes);

        if (!is_null($options))
            $options = $this->attributes($options);

        return "<div{$attributes}{$options}>{$html}</div>";
    }

    /**
     * Adds defualt class for element. If user allready specified it, it'll
     * return options as it was before
     *
     *
     * @param $options
     * @param $defaultClass
     * @return mixed
     */
    public function applyDefaultClass($options, $defaultClass)
    {
        //If there is no class key inside options then
        //we simply build one and return
        if (!isset($options['class'])) {
            $options['class'] = $defaultClass;
            return $options;
        } else {
            //first lets see if user already specify default value
            //if so we'll return options as it was before
            $classes = explode(' ', $options['class']);

            foreach ($classes as $class)
                if ($class == $defaultClass) return $options;

            //otherwise we add default class at the end with a space as delimiter
            $options['class'] .= ' ' . $defaultClass;

            return $options;
        }
    }

    /**
     * It appends provided calssStyles to current option[class]
     *
     * @param $classStyles
     * @param null $options
     * @param string $delimiter
     * @return null
     */
    public function ApplyClassStyles($classStyles, $options = null, $delimiter = ' ')
    {
        if (!is_null($options['class']) & !is_null($classStyles))
            $options['class'] .= $delimiter . implode($delimiter, $classStyles);

        else
            $options['class'] = implode($delimiter, $classStyles);

        return $options;
    }

    //Codes below are part of Illuninate/Html/HtmlBuilder

    public function attributes($options)
    {
        $html = array();

        // For numeric keys we will assume that the key and the value are the same
        // as this will convert HTML attributes such as "required" to a correct
        // form like required="required" instead of using incorrect numerics.
        foreach ((array)$options as $key => $value) {
            $element = $this->attributeElement($key, $value);

            if (!is_null($element)) $html[] = $element;
        }

        return count($html) > 0 ? ' ' . implode(' ', $html) : '';
    }

    /**
     * Build a single attribute element.
     *
     * @param  string $key
     * @param  string $value
     * @return string
     */
    protected function attributeElement($key, $value)
    {
        if (is_numeric($key)) $key = $value;

        if (!is_null($value)) return $key . '="' . e($value) . '"';
    }
}
