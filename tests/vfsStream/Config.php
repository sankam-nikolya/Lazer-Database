<?php

namespace vfsStream;

use org\bovigo\vfs\vfsStream;

trait Config {

    protected $root;

    protected function setUpFilesystem()
    {
        $this->root = vfsStream::setup('data');
        vfsStream::copyFromFileSystem('db');
    }
}
