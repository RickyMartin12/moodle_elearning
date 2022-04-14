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


    $path="https://interhub.org/cat/";//server path
    foreach ($_FILES as $key) {
        if($key['error'] == UPLOAD_ERR_OK ){
            $name = $key['name'];
            $temp = $key['tmp_name'];
            $size= ($key['size'] / 1000)."Kb";
            /*move_uploaded_file($temp, $path . $name);
            echo "
                <div>
                    <h12><strong>File Name: $name</strong></h2><br />
                    <h12><strong>Size: $size</strong></h2><br />
                    <hr>
                </div>
                ";*/

                $source = fopen($temp, 'r+');
                $path = 'public_html/cat/'.$name;
                $filesystem->writeStream($path, $source);
                fclose($source);
        }else{
            echo $key['error'];
        }
    } 

?>