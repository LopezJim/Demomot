<?php
namespace FlashGameExt\Flashgameext\Controller;

/***
 *
 * This file is part of the "Flash Game Ext" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017
 *
 ***/

/**
 * PostController
 */
class PostController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * postRepository
     * 
     * @var \FlashGameExt\Flashgameext\Domain\Repository\PostRepository
     * @inject
     */
    protected $postRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $posts = $this->postRepository->findAll();
        $this->view->assign('posts', $posts);
    }

    /**
     * action show
     * 
     * @param \FlashGameExt\Flashgameext\Domain\Model\Post $post
     * @return void
     */
    public function showAction(\FlashGameExt\Flashgameext\Domain\Model\Post $post)
    {
        $this->view->assign('post', $post);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     * 
     * @param \FlashGameExt\Flashgameext\Domain\Model\Post $newPost
     * @return void
     */
    public function createAction(\FlashGameExt\Flashgameext\Domain\Model\Post $newPost)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->postRepository->add($newPost);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \FlashGameExt\Flashgameext\Domain\Model\Post $post
     * @ignorevalidation $post
     * @return void
     */
    public function editAction(\FlashGameExt\Flashgameext\Domain\Model\Post $post)
    {
        $this->view->assign('post', $post);
    }

    /**
     * action update
     * 
     * @param \FlashGameExt\Flashgameext\Domain\Model\Post $post
     * @return void
     */
    public function updateAction(\FlashGameExt\Flashgameext\Domain\Model\Post $post)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->postRepository->update($post);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \FlashGameExt\Flashgameext\Domain\Model\Post $post
     * @return void
     */
    public function deleteAction(\FlashGameExt\Flashgameext\Domain\Model\Post $post)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->postRepository->remove($post);
        $this->redirect('list');
    }
}
