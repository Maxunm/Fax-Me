#!/bin/bash

cd /var/www/html/uploads
f=$(ls)
lp -d DCPL2550DW -o fit-to-page $f
rm -f $f

