<?php

echo json_encode(array_merge([
    "retorno_servico" => "retorno",
    "servidor" => "app1"
], $_REQUEST));