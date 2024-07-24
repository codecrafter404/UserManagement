<?php
namespace Sandstorm\UserManagement\Controller;
use Neos\Flow\Mvc\Controller\ActionController;
use Neos\Fusion\View\FusionView;

class TestController extends ActionController
{

    public function testAction(): void {
        $this->view = new FusionView();
        $this->view->setControllerContext($this->controllerContext);
        $this->view->setFusionPathPatterns([
            'resource://Neos.Fusion/Private/Fusion/Root.fusion',
            'resource://Sandstorm.UserManagement/Private/Fusion/Root.fusion'
        ]);
        $this->view->setFusionPath('<Sandstorm.UserManagement:Test>');

        // assign the props here
        $this->view->assign('test', 'hello world!');

        $this->view->render();
    }

}
