
<?php
class MySessionHandler implements SessionHandlerInterface
{
    public $ss = null;
    
    public function close() {
        
    }

    public function destroy($session_id) {
        unset($this->ss[$session_id]);
    }

    public function gc($maxlifetime) {
        
    }

    public function open($save_path, $name) {
        
    }

    public function read($session_id) {
        return $this->ss[$session_id];
    }

    public function write($session_id, $session_data) {
        $this->ss[$session_id] = $session_data; 
    }

// implement interfaces here
}

$handler = new MySessionHandler();
session_set_save_handler($handler, true);
session_start();

$session_id = md5('newsession-id');
$session_data =  array('name' => 'dhananjay', 'login' => true);

$handler->write($session_id, $session_data); 
$sRead = $handler->read($session_id);
echo "<pre>";
echo "File " . PHP_EOL;
print_r($sRead);

echo "Global " . PHP_EOL;
print_r($_SESSION[$session_id]);

$session_id2 = md5('newsession-id2');
$session_data =  array('name' => 'anupama', 'login' => false);

$handler->write($session_id2, $session_data); 
$sRead2 = $handler->read($session_id2);

echo "File 2" . PHP_EOL;
print_r($sRead2);

echo "Global " . PHP_EOL;
print_r($_SESSION[$session_id2]);

echo "Afer destroy: ";
echo "File " . PHP_EOL;
$handler->destroy($session_id);
$sRead = $handler->read($session_id);

print_r($handler);

print_r($sRead);
// proceed to set and retrieve values by key from $_SESSION
