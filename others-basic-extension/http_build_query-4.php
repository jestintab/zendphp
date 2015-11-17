<?php
#Example #4 Using http_build_query() with an object
class parentClass {
    public    $pub      = 'publicParent';
    protected $prot     = 'protectedParent';
    private   $priv     = 'privateParent';
    public    $pub_bar  = Null;
    protected $prot_bar = Null;
    private   $priv_bar = Null;

    public function __construct(){
        $this->pub_bar  = new childClass();
        $this->prot_bar = new childClass();
        $this->priv_bar = new childClass();
    }
}

class childClass {
    public    $pub  = 'publicChild';
    protected $prot = 'protectedChild';
    private   $priv = 'privateChild';
}

$parent = new parentClass();

echo "\n\n";
echo http_build_query($parent);
echo "\n\n";
$sStr = 'pub=publicParent&pub_bar%5Bpub%5D=publicChild';
echo rawurldecode($sStr); // 

echo "\n\n";
?>
