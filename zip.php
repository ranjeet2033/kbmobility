<?php
$zip = new ZipArchive();
$filename = 'C:/xampp/htdocs/infrovolt_deploy.zip';

if ($zip->open($filename, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== TRUE) {
    exit("Cannot open <$filename>\n");
}

$dir = 'C:/xampp/htdocs/infrovolt/';
$files = new RecursiveIteratorIterator(
    new RecursiveCallbackFilterIterator(
        new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS),
        function ($fileInfo, $key, $iterator) {
            $name = $fileInfo->getFilename();
            // Skip unnecessary folders
            if ($fileInfo->isDir() && in_array($name, ['node_modules', '.git', 'tests', 'storage/framework/cache'])) {
                return false;
            }
            return true;
        }
    )
);

foreach ($files as $name => $file) {
    if (!$file->isDir()) {
        $filePath = $file->getRealPath();
        // Skip the zip file itself and zip.php
        if (strpos($filePath, 'infrovolt_deploy.zip') !== false || strpos($filePath, 'zip.php') !== false) {
            continue;
        }
        $relativePath = substr($filePath, strlen(str_replace('/', '\\', $dir)));
        $zip->addFile($filePath, $relativePath);
    }
}

$zip->close();
echo "ZIP Created Successfully: $filename\n";
