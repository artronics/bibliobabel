<?php

use Artronics\Utilities\Username;

function makeUsername($data)
{
    return Username::make($data);
}
/*function show_alert($message,array $attributes)
{
    return "<div data-alert class=\"alert-box alert radius\">
              {{$errors->first('credential')}}
              <a href="#" class="close">&times;</a>
            </div>";
}*/