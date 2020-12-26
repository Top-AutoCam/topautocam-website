<?php
$targetFolder = '/home/dqzgnpzy/topautocam/storage/app/public';
$linkFolder   = '/home/dqzgnpzy/public_html/storage';
symlink($targetFolder,$linkFolder);
echo 'Symlink process successfully completed';
