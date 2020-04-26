<?php

namespace Jcode\Singleton;

class LogSingleton {
    
    /** @var self $instancia Instância da classe de logs */
    protected static $instance;
    
    private function __construct(){}
    
    private function __clone(){}
    
    private function __wakeup(){}
    
    public function gravarLog(array $data){
        
        $filename = 'logs.txt';
        
        $previousLogs = [];
        
        if(filesize($filename) > 0){
            $contentFile = file_get_contents($filename);
            
            $previousLogs = json_decode($contentFile, true);
        }
        
        $previousLogs[] = $data;
        
        $file = fopen($filename,'w');
        
        fwrite($file, json_encode($previousLogs));
        
        fclose($file);
        
    }
    
    public static function getInstance():self
    {
        if(empty(self::$instance)){
            self::$instance = new self();
        }
        
        return self::$instance;
    }
    
}

?>

