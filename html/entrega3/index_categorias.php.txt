<?php
                                        require '/var/www/html/vendor/autoload.php';
                                        $uri="mongodb://localhost";
                                        $client= new MongoDB\Client($uri);
                                        $dbCategoriasHeader = $client->piñufle->Categorias->find();
                                        $categorias = array();
                                        foreach ($dbCategoriasHeader as $entryHeader) {
                                                $catHeader[ $entryHeader['_id']->__toString() ] = $entryHeader['name'];
                                        };


					echo json_encode($catHeader);

?>
