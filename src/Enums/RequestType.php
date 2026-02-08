<?php

namespace XmlBlade\LaravelHtmx\Enums;

enum RequestType: string
{
    case GET = 'get';
    case POST = 'post';
    case DELETE = 'delete';
    case PATCH = 'patch';
    case PUT = 'put';
}
