<?php

Form::macro('myField', function($value) {    
    return "<input type='text' name='username' value='".$value."' >";
});