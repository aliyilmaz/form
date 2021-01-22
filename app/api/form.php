<?php
$response = [];

if(isset($this->post['files'])){
    $response = $this->upload($this->post['files'], 'public/files');
}

if(isset($this->post['file'])){
    $response = $this->upload($this->post['file'], 'public/file');
}

if(isset($this->post['username'])){
    $response = $this->post;
}
$this->print_pre($response);