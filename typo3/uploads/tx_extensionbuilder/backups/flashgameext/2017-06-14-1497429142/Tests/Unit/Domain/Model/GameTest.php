<?php
namespace FlashGameExt\Flashgameext\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class GameTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \FlashGameExt\Flashgameext\Domain\Model\Game
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \FlashGameExt\Flashgameext\Domain\Model\Game();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getGamPathReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getGamPath()
        );

    }

    /**
     * @test
     */
    public function setGamPathForStringSetsGamPath()
    {
        $this->subject->setGamPath('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'gamPath',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getGamNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getGamName()
        );

    }

    /**
     * @test
     */
    public function setGamNameForStringSetsGamName()
    {
        $this->subject->setGamName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'gamName',
            $this->subject
        );

    }
}
