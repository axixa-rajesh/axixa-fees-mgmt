<pre>
<?php 
if($_SERVER['HTTP_HOST']=='localhost'){
    define('ROOT','http://localhost/batch8.00A/mvc/');
    define('HOSTNAME','localhost');
    define('USERNAME','root');
    define('PASSWORD','');
    define('DBNAME','feesmgmt');
}else{
    define('ROOT','https://axixatechnologies.com/fees/');
    define('HOSTNAME','localhost');
    define('USERNAME','root');
    define('PASSWORD','');
    define('DBNAME','');

}
define('ASSETS',ROOT.'assets/');
define('CSS',ASSETS.'css/');
define('JS',ASSETS.'js/');
define('IMAGES',ASSETS.'images/');
define('UIMAGES','assets/images/');

define('PLUGINS',ASSETS.'plugins');
define('DIST',ASSETS.'dist/');

?>
</pre>