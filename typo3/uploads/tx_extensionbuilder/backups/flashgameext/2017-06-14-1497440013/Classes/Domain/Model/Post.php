<?php
namespace FlashGameExt\Flashgameext\Domain\Model;

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
 * Post
 */
class Post extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * posDate
     * 
     * @var \DateTime
     */
    protected $posDate = null;

    /**
     * user
     * 
     * @var \FlashGameExt\Flashgameext\Domain\Model\User
     */
    protected $user = null;

    /**
     * game
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\FlashGameExt\Flashgameext\Domain\Model\Game>
     * @cascade remove
     */
    protected $game = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->game = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the posDate
     * 
     * @return \DateTime $posDate
     */
    public function getPosDate()
    {
        return $this->posDate;
    }

    /**
     * Sets the posDate
     * 
     * @param \DateTime $posDate
     * @return void
     */
    public function setPosDate(\DateTime $posDate)
    {
        $this->posDate = $posDate;
    }

    /**
     * Returns the user
     * 
     * @return \FlashGameExt\Flashgameext\Domain\Model\User $user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets the user
     * 
     * @param \FlashGameExt\Flashgameext\Domain\Model\User $user
     * @return void
     */
    public function setUser(\FlashGameExt\Flashgameext\Domain\Model\User $user)
    {
        $this->user = $user;
    }

    /**
     * Adds a Game
     * 
     * @param \FlashGameExt\Flashgameext\Domain\Model\Game $game
     * @return void
     */
    public function addGame(\FlashGameExt\Flashgameext\Domain\Model\Game $game)
    {
        $this->game->attach($game);
    }

    /**
     * Removes a Game
     * 
     * @param \FlashGameExt\Flashgameext\Domain\Model\Game $gameToRemove The Game to be removed
     * @return void
     */
    public function removeGame(\FlashGameExt\Flashgameext\Domain\Model\Game $gameToRemove)
    {
        $this->game->detach($gameToRemove);
    }

    /**
     * Returns the game
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\FlashGameExt\Flashgameext\Domain\Model\Game> $game
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * Sets the game
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\FlashGameExt\Flashgameext\Domain\Model\Game> $game
     * @return void
     */
    public function setGame(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $game)
    {
        $this->game = $game;
    }
}
