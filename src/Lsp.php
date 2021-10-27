<?php 

namespace LspFactory;

use Exception;

class Lsp
{
    /**
     * @throws Exception
     */
    public function setProvider(string $provider)
	{
		$providerClass = "LspFactory\\{$provider}\\Lsp";

		if (!class_exists($providerClass)) {
			throw new Exception("{$providerClass} not found.");
		}

		return new $providerClass($provider);
	}

}