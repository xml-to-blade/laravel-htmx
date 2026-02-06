<?php

namespace XmlBlade\LaravelHtmx\Enums;

enum SwapAttribute: string
{
    case INNER_HTML = 'innerHTML';
    case OUTER_HTML = 'outerHTML';
    case TEXT_CONTENT = 'textContent';
    case BEFORE_BEGIN = 'beforebegin';
    case AFTER_BEGIN = 'afterbegin';
    case BEFORE_END = 'beforeend';
    case AFTER_END = 'afterend';
    case DELETE = 'delete';
    case NONE = 'none';
}
