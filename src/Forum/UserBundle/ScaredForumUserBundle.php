<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DLitvin
 * Date: 02.10.12
 * Time: 17:40
 * To change this template use File | Settings | File Templates.
 */
// src/Acme/UserBundle/AcmeUserBundle.php

namespace Forum\UserBundle;

    use Symfony\Component\HttpKernel\Bundle\Bundle;

    class ScaredForumUserBundle extends Bundle
    {
        public function getParent()
        {
            return 'FOSUserBundle';
        }
    }
