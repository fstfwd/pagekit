<?php

namespace Pagekit\Hello\Controller;

use Pagekit\Framework\Controller\Controller;

/**
 * @Route("/hello")
 * @Access(admin=true)
 */
class HelloController extends Controller
{
    /**
     * @View("hello/admin/index.razr.php")
     */
    public function indexAction()
    {
        return array('meta.title' => __('Hello'));
    }

    /**
     * @View("hello/admin/settings.razr.php")
     */
    public function settingsAction()
    {
        return array('meta.title' => __('Hello Settings'), 'config' => array());
    }

    /**
     * @Request()
     */
    public function saveSettingsAction()
    {
        $this('message')->success(__('Settings saved.'));

        return $this->redirect('@system/extensions/settings', array('name' => 'hello'));
    }
}