<?php
if (file_exists("myfile1.txt")) echo "Размер файла: ".filesize("myfile.txt").' байт';
else echo "Файл не существует";

