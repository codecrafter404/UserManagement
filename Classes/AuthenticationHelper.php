<?php

namespace Sandstorm\UserManagement\EelHelper;
use Neos\Eel\ProtectedContextAwareInterface;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Security\Context as SecurityContext;

class AuthenticationHelper implements ProtectedContextAwareInterface {

    /**
     * @Flow\Inject
     * @var SecurityContext
     */
    protected $securityContext;

    /**
     * Check wheather an user is authenticated against an specific authenticationprovider
     *
     * @param string $authenticationProviderName
     * @return boolean
     */
    public function isAuthenticated(string $authenticationProviderName): bool{
        $activeTokens = $this->securityContext->getAuthenticationTokens();
        foreach ($activeTokens as $token) {
            if ($token->getAuthenticationProviderName() === $authenticationProviderName && $token->isAuthenticated()) {
                return true;
            }
        }
        return false;
    }


    /**
     * All methods are considered safe
     *
     * @param string $methodName
     * @return boolean
     */
    public function allowsCallOfMethod($methodName):bool
    {
        return true;
    }
}
