<?php

/**
 * No Object
 *
 * It's a Not Only Object that will return what it's value if it has value, but
 * returns NULL if no property or no method found on this object. In an ordinary
 * object you will get an error when calling a property that doesn't exist, that
 * is why this repo was created, to resolve that problem.
 *
 * @package No Object
 * @author Fiko Borizqy <fiko@dr.com>
 * @license MIT
 * @license https://choosealicense.com/licenses/mit/
 * @see https://github.com/fikoborizqy/object
 */

namespace Borizqy\NoObject;

use stdClass;

/**
 * No Object Instance
 *
 * Base object, so when getting undefined property or undefined method,
 * is will automatically return null value.
 *
 * @access public
 */
class NoObject extends stdClass
{

    /**
     * No Object constructor - Decide variables that will be stored on this 
     * object.
     * 
     * @param Array $array  Variables in an array that will be stored on object
     */
    public function __construct(Array $array = [])
    {
        foreach($array as $key => $val) {
            $this->$key = $val;
        }
    }



    /**
     * Controls if calling undefined method. If undefined mehod called, then
     * it will return null.
     * 
     * @param String    $method     Method name that will be check and called
     * @param Arrays    $params     All parameters on a method
     */
    public function __call($method, $params = [])
    {
        if(method_exists($this, $method)) {
            return call_user_func_array([$this, $method], $params);
        } else {
            return NULL;
        }
    }



    /**
     * Controls if calling undefined property. If undefined
     * mehod called, then it will return null.
     * 
     * @param String    $var    variable / property name
     */
    public function __get($var)
    {
        if (isset($this->$var)) {
            return $this->$var;
        } else {
            return NULL;
        }
    }
}
