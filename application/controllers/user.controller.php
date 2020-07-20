<?php

namespace Inews;
/**
 * Description of user
 *
 * @author messo
 */
class UserController extends \F3il\Controller {

    public function __construct() {
        $this->setDefaultActionName('lister');
    }

    public function listerAction() {
        $page = \F3il\Page::getInstance();
        $page->setTemplate('application')
                ->setView('user-list');
        
        $page->titre = "utilisateurs";

        //$model = new \Inews\UserModel();

       // $page->utilisateurs = $model->lister();
        $page->render();
        $message = \F3il\Messenger::getMessage();
        if ($message != false) {
            \F3il\Messages::addMessage($message, 0);
        }
    }

}
