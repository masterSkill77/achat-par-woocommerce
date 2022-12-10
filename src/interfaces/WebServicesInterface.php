<?php

namespace PluginsTest\Interfaces;

interface WebServicesInterface
{
    public function send(array $data);

    public function register_to_log(array $data);
}
