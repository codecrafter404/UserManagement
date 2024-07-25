<?php
namespace Sandstorm\UserManagement\Controller;
use Neos\Flow\Mvc\Controller\ActionController;
use Neos\Fusion\View\FusionView;

class TestController extends ActionController
{

    public function testAction(): string {
        $out = $this->renderFusion();
        return $out;
    }
    private  function renderFusion(): string {
        $this->view = new FusionView();
        $this->view->setControllerContext($this->controllerContext);
        $this->view->setFusionPathPatterns([
            'resource://Neos.Fusion/Private/Fusion/Root.fusion',
            'resource://Sandstorm.UserManagement/Private/Fusion/Root.fusion'
        ]);
        $this->view->setFusionPath('sandstormUserManagement');
        $this->view->assign('test', 'hello world!');

        $out = $this->view->render();
        return $out;
    }

}
