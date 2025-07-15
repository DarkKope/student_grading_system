<?php
namespace Fernandez\Gs\core;

interface Crud {
    public function create ();
    public function read();
    public function update();
    public function delete();
}
