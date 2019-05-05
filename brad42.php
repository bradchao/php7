<?php

if (mkdir("c:/brad/dir3")){
    echo "OK\n";
}else{
    echo "xx\n";
}
echo disk_free_space ( "c:/" );
unlink("c:/brad/dir3/ok.txt");
