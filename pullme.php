<?php
 
$GIT_BIN = '/usr/bin/git';
$REMOTE = 'origin';
$BRANCH = 'master';

header('Content-Type: text/plain');

system("$GIT_BIN fetch $REMOTE 2>&1; $GIT_BIN checkout -q $REMOTE/$BRANCH 2>&1; $GIT_BIN log -1 2>&1;");