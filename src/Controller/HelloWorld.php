<?php
/**
 * User: isliang
 * Date: 2020-02-05
 * Time: 10:53
 * Email: yesuhuangsi@163.com
 **/

namespace Jenkins\Controller;

class HelloWorld
{
    public function run($i)
    {
        if (!is_integer($i)) {
            return false;
        }

        if ($i > 0) {
            return 'positive';
        } else {
            return 'negative';
        }
    }
}
