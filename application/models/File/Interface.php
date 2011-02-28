<?php
interface File
{
    public function __construct($fs_path);

    public function isFile();

    public function getFilename();

    public function getSize();

    public function getExtension();

    public function getHumanSize();

    public function copy($dir);

    public function move($dir);

    public function delete();

    public function getLocation();

    public function getFSLocation();

}
