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
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getGame()
        );

    }

    /**
     * @test
     */
    public function setGameForObjectStorageContainingGameSetsGame()
    {
        $game = new \FlashGameExt\Flashgameext\Domain\Model\Game();
        $objectStorageHoldingExactlyOneGame = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneGame->attach($game);
        $this->subject->setGame($objectStorageHoldingExactlyOneGame);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneGame,
            'game',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addGameToObjectStorageHoldingGame()
    {
        $game = new \FlashGameExt\Flashgameext\Domain\Model\Game();
        $gameObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $gameObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($game));
        $this->inject($this->subject, 'game', $gameObjectStorageMock);

        $this->subject->addGame($game);
    }

    /**
     * @test
     */
    public function removeGameFromObjectStorageHoldingGame()
    {
        $game = new \FlashGameExt\Flashgameext\Domain\Model\Game();
        $gameObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $gameObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($game));
        $this->inject($this->subject, 'game', $gameObjectStorageMock);

        $this->subject->removeGame($game);

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
