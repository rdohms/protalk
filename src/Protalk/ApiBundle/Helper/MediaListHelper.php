<?php

namespace Protalk\ApiBundle\Helper;

use Protalk\ApiBundle\Helper\CMMIDataAbstract;

class MediaListHelper extends CMMIDataAbstract
{
    /**
     * Mapping specifically for media list items
     *
     * @var array
     */
    protected $mapping = array(
        'title' => 'title',
        'content'   => 'content'
    );
}