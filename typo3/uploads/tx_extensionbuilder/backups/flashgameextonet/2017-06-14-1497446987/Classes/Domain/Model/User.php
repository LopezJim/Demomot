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
 * User
 */
class User extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * useName
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $useName = '';

    /**
     * useFirstname
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $useFirstname = '';

    /**
     * usePseudo
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $usePseudo = '';

    /**
     * Returns the useName
     * 
     * @return string $useName
     */
    public function getUseName()
    {
        return $this->useName;
    }

    /**
     * Sets the useName
     * 
     * @param string $useName
     * @return void
     */
    public function setUseName($useName)
    {
        $this->useName = $useName;
    }

    /**
     * Returns the useFirstname
     * 
     * @return string $useFirstname
     */
    public function getUseFirstname()
    {
        return $this->useFirstname;
    }

    /**
     * Sets the useFirstname
     * 
     * @param string $useFirstname
     * @return void
     */
    public function setUseFirstname($useFirstname)
    {
        $this->useFirstname = $useFirstname;
    }

    /**
     * Returns the usePseudo
     * 
     * @return string $usePseudo
     */
    public function getUsePseudo()
    {
        return $this->usePseudo;
    }

    /**
     * Sets the usePseudo
     * 
     * @param string $usePseudo
     * @return void
     */
    public function setUsePseudo($usePseudo)
    {
        $this->usePseudo = $usePseudo;
    }
}
