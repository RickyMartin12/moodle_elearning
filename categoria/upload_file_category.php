<?php


    require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

    use League\Flysystem\Filesystem;
    use League\Flysystem\Adapter\Ftp\FtpAdapter as Adapter;


    $adapter = new League\Flysystem\Ftp\FtpAdapter(
        League\Flysystem\Ftp\FtpConnectionOptions::fromArray([
            'host' => 'ftp.interhub.org',
            'root' => '/',
            'username' => 'interhub',
            'password' => '+Kw[P~djRpuS',
        ])
    );
 
    $filesystem = new Filesystem($adapter);


    foreach ($_FILES as $key) {

        echo $key['name'];

        /*if($key['error'] == UPLOAD_ERR_OK ){
            $name = $key['name'];
            $temp = $key['tmp_name'];
            $size= ($key['size'] / 1000)."Kb";

                try {
                    $source = fopen($temp, 'r+');
                    $path = 'public_html/cat/'.$name;
                    $filesystem->writeStream($path, $source);
                    fclose($source);
                } catch (FilesystemError | UnableToWriteFile $exception) {
                    echo $exception->getMessage();
                }

                
        }else{
            echo $key['error'];
        }*/
    } 

?>