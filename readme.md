# How to upload file in php
## simple uploader
In simple uploader file I have upload any file using php.

## complex uploader
In complex uploader I upload file which is only image. So I check uploaded file whether image or other file. If it's image i am allowing user to upload image otherwise I show user a error message.

## Multiple uploader
In php lot of built in function  actually sucks!. In case of multiple uploading we are getting abnormal array to make it work we first rearrange  whole `$_FILES['some_name']` array then upload using state above complex upload code. I encapsulate complex upload code into a function and for the multiple files I run foreach loop and call that complex upload code. It was smart & quick solution. Thanks