    <?php
        spl_autoload_register('Loader');

        function Loader($name){
            $path = 'classes/';
            $ext = '.php';
            $fullPath = $path.$name.$ext;

            if(!file_exists($fullPath)){
                return false;
            }
            include_once $fullPath;
        }

    ?>
