<?php
namespace FlashGameExtOneT\Flashgameextonet\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class GameTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \FlashGameExtOneT\Flashgameextonet\Domain\Model\Game
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \FlashGameExtOneT\Flashgameextonet\Domain\Model\Game();
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

    /**
     * @test
     */
    public function getGamUploaderReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getGamUploader()
        );

    }

    /**
     * @test
     */
    public function setGamUploaderForStringSetsGamUploader()
    {
        $this->subject->setGamUploader('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'gamUploader',
            $this->subject
        );

    }
}
