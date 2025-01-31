<?php

/*
 * OAuth2 Client Bundle
 * Copyright (c) KnpUniversity <http://knpuniversity.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KnpU\OAuth2ClientBundle\Security\Helper;

use Symfony\Component\HttpFoundation\Request;

trait PreviousUrlHelper
{
    /**
     * Returns the URL (if any) the user visited that forced them to login.
     *
     * @param Request $request
     * @param string  $providerKey
     *
     * @return string
     */
    public function getPreviousUrl(Request $request, $providerKey)
    {
        // if the user hit a secure page and start() was called, this was
        // the URL they were on, and probably where you want to redirect to
        return $request->getSession()->get('_security.'.$providerKey.'.target_path');
    }
}
