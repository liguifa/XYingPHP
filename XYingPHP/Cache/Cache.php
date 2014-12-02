<?php
class Cache
{
  public static function cache_start()
  {
    $_time=config::$system["cache_time"];
    $dir=APP_PATH.config::$system["cache_path"]."/";
    $cachefile = $dir.'/'.sha1($_SERVER['REQUEST_URI']).'.html';
    $cachetime = $_time;
    ob_start();
    if(file_exists($cachefile) && (time()-filemtime($cachefile) < $cachetime))
    {
      include($cachefile);
      ob_end_flush();
      exit;
    }
  }

  public function cache_end()
  {
    $_time=config::$system["cache_time"];
    $dir=APP_PATH."/".config::$system["cache_path"]."/";
    $cachefile = $dir.'/'.sha1($_SERVER['REQUEST_URI']).'.html';
    $fp = fopen($cachefile, 'w');
    fwrite($fp, ob_get_contents());
    fclose($fp);
    ob_end_flush();
  }
}
?> 