<?php
require_once "vendor/autoload.php";
 
use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Ftp\FtpAdapter as Adapter;
 
if (isset($_POST['submit'])) {
    $adapter = new League\Flysystem\Ftp\FtpAdapter(
        League\Flysystem\Ftp\FtpConnectionOptions::fromArray([
            'host' => 'ftp.interhub.org',
            'root' => '/',
            'username' => 'interhub',
            'password' => '+Kw[P~djRpuS',
        ])
    );
 
    $filesystem = new Filesystem($adapter);
 
    try {
        $source = fopen($_FILES['image']['tmp_name'], 'r+');
        $path = 'public_html/cat/'.$_FILES['image']['name'];
        $filesystem->writeStream($path, $source);
        fclose($source);
        echo "File uploaded successfully.";
    } catch (FilesystemError | UnableToWriteFile $exception) {
        echo $exception->getMessage();
    }
}
?>
 
<form method="post" enctype="multipart/form-data">
    <p><input type="file" name="image" /></p>
    <input type="submit" name="submit" value="Submit">
</form>