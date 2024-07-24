<?php
namespace Sandstorm\UserManagement\Controller;

use Neos\Error\Messages\Error;
use Neos\Error\Messages\Message;
use Neos\Flow\I18n\Translator;
use Neos\Flow\Mvc\Controller\ControllerContext;
use Neos\Flow\Mvc\Controller\ActionController;
use Neos\Flow\Security\Exception\AuthenticationRequiredException;
use Sandstorm\UserManagement\Domain\Service\RedirectTargetServiceInterface;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Exception;
use Neos\Flow\Mvc\ActionRequest;
use Neos\Flow\Security\Authentication\Controller\AbstractAuthenticationController;
use Neos\Flow\Core\Bootstrap;
use Neos\Fusion\Core\Runtime;
use Psr\Http\Message\UriFactoryInterface;


class TestController extends ActionController
{

    /**
     * Bootstrap for retrieving the current HTTP request
     *
     * @Flow\Inject
     * @var Runtime
     */
    protected $fusionRuntime;

    /**
     * @param string $result
     */
    public function renderAction(): string
    {
       $fusionPath = 'Sandstorm.UserManagement:SomeDocument';
        $output = $this->fusionRuntime->render($fusionPath);
        return $output;
    }
}
