<?php 

namespace Nurmuhammet;

class File
{
    public static function exists($file) 
    {
        return file_exists($file);
    }

    public static function size($file) 
    {
        return filesize($file);
    }

    public static function name($file) 
    {
        return pathinfo($file, PATHINFO_FILENAME);
    }

    public static function extension($file) 
    {
        return pathinfo($file, PATHINFO_EXTENSION);
    }

    public static function delete($file) 
    {
        return static::exists($file) ? unlink($file) : false;
    }

    public static function lastUpdated($file) 
    {
        return filemtime($file);
    }

    public static function get($file) 
    {
        return static::exists($file) ? file_get_contents($file) : false;
    }

    public static function put($file, $data, $append = null) 
    {
        return ($append)
            ? file_put_contents($file, $data, FILE_APPEND | LOCK_EX)
            : file_put_contents($file, $data, LOCK_EX);
    }

    public static function append($file, $data) 
    {
        return static::put($file, $data, true);
    }

    public static function truncate($file) 
    {
        if (static::exists($file)){
            $fp = fopen($file, 'w');
            fclose($fp);

            return true;
        }

        return false;
    }

    public static function copy($file, $dest) 
    {
        $ext = static::extension($file);
        $name = static::name($file);

        $dest = $dest.'/'.$name.'.'.$ext;

        if (static::exists($dest)) {
            return 'File exists';
        }

        return (copy($file, $dest)) ? true : false;
    }

    public static function move($file, $dest) 
    {
        static::copy($file, $dest);
        static::delete($file);

        return true;
    }

    public static function rename($file, $dest) 
    {
        return rename($file, $dest);
    }

    public static function download($file, $dest) 
    {
        try {
            $url = $file;
            $ch = curl_init($url);
            $my_save_dir = $dest;
            $filename = basename($url);
            $complete_save_loc = $my_save_dir . $filename;
             
            $fp = fopen($complete_save_loc, 'wb');
             
            curl_setopt($ch, CURLOPT_FILE, $fp);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_exec($ch);
            curl_close($ch);
            fclose($fp);   
        } catch (\Exception $e) {
            throw new \Exception("Error Processing Request");
        }

        return true;
    }

    public static function upload($name, $dir) 
    {
        return ( move_uploaded_file($_FILES[$name]['tmp_name'], $dir . basename($_FILES[$name]['name'])) )
            ? true : false;
    }
}
