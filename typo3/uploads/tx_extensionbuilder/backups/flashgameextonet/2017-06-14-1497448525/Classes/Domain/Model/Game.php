<?php
namespace FlashGameExtOneT\Flashgameextonet\Domain\Model;

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
 * Game
 */
class Game extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * gamPath
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $gamPath = '';

    /**
     * gamName
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $gamName = '';

    /**
     * useUploader
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $useUploader = '';

    /**
     * Returns the gamPath
     * 
     * @return string $gamPath
     */
    public function getGamPath()
    {
        return $this->gamPath;
    }

    /**
     * Sets the gamPath
     * 
     * @param string $gamPath
     * @return void
     */
    public function setGamPath($gamPath)
    {
        $this->gamPath = $gamPath;
    }

    /**
     * Returns the gamName
     * 
     * @return string $gamName
     */
    public function getGamName()
    {
        return $this->gamName;
    }

    /**
     * Sets the gamName
     * 
     * @param string $gamName
     * @return void
     */
    public function setGamName($gamName)
    {
        $this->gamName = $gamName;
    }

    /**
     * Returns the useUploader
     * 
     * @return string $useUploader
     */
    public function getUseUploader()
    {
        return $this->useUploader;
    }

    /**
     * Sets the useUploader
     * 
     * @param string $useUploader
     * @return void
     */
    public function setUseUploader($useUploader)
    {
        $this->useUploader = $useUploader;
    }
}
