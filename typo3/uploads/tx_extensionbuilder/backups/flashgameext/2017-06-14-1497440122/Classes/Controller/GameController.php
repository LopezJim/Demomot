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
 * GameController
 */
class GameController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * gameRepository
     * 
     * @var \FlashGameExt\Flashgameext\Domain\Repository\GameRepository
     * @inject
     */
    protected $gameRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $games = $this->gameRepository->findAll();
        $this->view->assign('games', $games);
    }

    /**
     * action show
     * 
     * @param \FlashGameExt\Flashgameext\Domain\Model\Game $game
     * @return void
     */
    public function showAction(\FlashGameExt\Flashgameext\Domain\Model\Game $game)
    {
        $this->view->assign('game', $game);
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
     * @param \FlashGameExt\Flashgameext\Domain\Model\Game $newGame
     * @return void
     */
    public function createAction(\FlashGameExt\Flashgameext\Domain\Model\Game $newGame)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->gameRepository->add($newGame);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \FlashGameExt\Flashgameext\Domain\Model\Game $game
     * @ignorevalidation $game
     * @return void
     */
    public function editAction(\FlashGameExt\Flashgameext\Domain\Model\Game $game)
    {
        $this->view->assign('game', $game);
    }

    /**
     * action update
     * 
     * @param \FlashGameExt\Flashgameext\Domain\Model\Game $game
     * @return void
     */
    public function updateAction(\FlashGameExt\Flashgameext\Domain\Model\Game $game)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->gameRepository->update($game);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \FlashGameExt\Flashgameext\Domain\Model\Game $game
     * @return void
     */
    public function deleteAction(\FlashGameExt\Flashgameext\Domain\Model\Game $game)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->gameRepository->remove($game);
        $this->redirect('list');
    }
}
