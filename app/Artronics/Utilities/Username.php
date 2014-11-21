<?php namespace Artronics\Utilities;


class Username
{
    private  static $length=10;
    public static function make(array $data)
    {
        /*
         * if user name consists of unicode character this method
         * do not replace them
         * todo: check if there is no problem with our database
         */
        $name=$data['name'];
        //replacing all white spaces
        return preg_replace('/\s+/', '-', $name);

    }

    /**
     * @return int
     */
    public static function getLength()
    {
        return self::$length;
    }

    /**
     * @param int $length
     */
    public static function setLength($length)
    {
        self::$length = $length;
    }
}
