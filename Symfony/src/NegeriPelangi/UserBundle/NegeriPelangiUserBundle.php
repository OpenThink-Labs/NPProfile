<?php

namespace NegeriPelangi\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class NegeriPelangiUserBundle extends Bundle
{
	public function getParent() {
		return 'FOSUserBundle' ;
	}
}
