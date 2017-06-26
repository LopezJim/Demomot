<?php
namespace FlashGameExt\Flashgameext\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class PostTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \FlashGameExt\Flashgameext\Domain\Model\Post
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \FlashGameExt\Flashgameext\Domain\Model\Post();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPosDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getPosDate()
        );

    }

    /**
     * @test
     */
    public function setPosDateForDateTimeSetsPosDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setPosDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'posDate',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getGameReturnsInitialValueForGame()
    {
        self::assertEquals(
            null,
            $this->subject->getGame()
        );

    }

    /**
     * @test
     */
    public function setGameForGameSetsGame()
    {
        $gameFixture = new \FlashGameExt\Flashgameext\Domain\Model\Game();
        $this->subject->setGame($gameFixture);

        self::assertAttributeEquals(
            $gameFixture,
            'game',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getUserReturnsInitialValueForUser()
    {
        self::assertEquals(
            null,
            $this->subject->getUser()
        );

    }

    /**
     * @test
     */
    public function setUserForUserSetsUser()
    {
        $userFixture = new \FlashGameExt\Flashgameext\Domain\Model\User();
        $this->subject->setUser($userFixture);

        self::assertAttributeEquals(
            $userFixture,
            'user',
            $this->subject
        );

    }
}
