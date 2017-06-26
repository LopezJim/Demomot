<?php
namespace FlashGameExt\Flashgameext\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class UserTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \FlashGameExt\Flashgameext\Domain\Model\User
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \FlashGameExt\Flashgameext\Domain\Model\User();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getUseNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUseName()
        );

    }

    /**
     * @test
     */
    public function setUseNameForStringSetsUseName()
    {
        $this->subject->setUseName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'useName',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getUseFirstnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUseFirstname()
        );

    }

    /**
     * @test
     */
    public function setUseFirstnameForStringSetsUseFirstname()
    {
        $this->subject->setUseFirstname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'useFirstname',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getUsePseudoReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUsePseudo()
        );

    }

    /**
     * @test
     */
    public function setUsePseudoForStringSetsUsePseudo()
    {
        $this->subject->setUsePseudo('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'usePseudo',
            $this->subject
        );

    }
}
