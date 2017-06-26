<?php
namespace FlashGameExtOneT\Flashgameextonet\Domain\Model;

/***
 *
 * This file is part of the "Flash Game Ext One T" Extension for TYPO3 CMS.
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
     * gamUploader
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $gamUploader = '';

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
     * Returns the gamUploader
     * 
     * @return string $gamUploader
     */
    public function getGamUploader()
    {
        return $this->gamUploader;
    }

    /**
     * Sets the gamUploader
     * 
     * @param string $gamUploader
     * @return void
     */
    public function setGamUploader($gamUploader)
    {
        $this->gamUploader = $gamUploader;
    }
}
