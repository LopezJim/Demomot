<?php
namespace FlashGameExt\Flashgameext\Tests\Unit\Controller;

/**
 * Test case.
 */
class GameControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \FlashGameExt\Flashgameext\Controller\GameController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\FlashGameExt\Flashgameext\Controller\GameController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllGamesFromRepositoryAndAssignsThemToView()
    {

        $allGames = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $gameRepository = $this->getMockBuilder(\FlashGameExt\Flashgameext\Domain\Repository\GameRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $gameRepository->expects(self::once())->method('findAll')->will(self::returnValue($allGames));
        $this->inject($this->subject, 'gameRepository', $gameRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('games', $allGames);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenGameToView()
    {
        $game = new \FlashGameExt\Flashgameext\Domain\Model\Game();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('game', $game);

        $this->subject->showAction($game);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenGameToGameRepository()
    {
        $game = new \FlashGameExt\Flashgameext\Domain\Model\Game();

        $gameRepository = $this->getMockBuilder(\FlashGameExt\Flashgameext\Domain\Repository\GameRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $gameRepository->expects(self::once())->method('add')->with($game);
        $this->inject($this->subject, 'gameRepository', $gameRepository);

        $this->subject->createAction($game);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenGameToView()
    {
        $game = new \FlashGameExt\Flashgameext\Domain\Model\Game();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('game', $game);

        $this->subject->editAction($game);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenGameInGameRepository()
    {
        $game = new \FlashGameExt\Flashgameext\Domain\Model\Game();

        $gameRepository = $this->getMockBuilder(\FlashGameExt\Flashgameext\Domain\Repository\GameRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $gameRepository->expects(self::once())->method('update')->with($game);
        $this->inject($this->subject, 'gameRepository', $gameRepository);

        $this->subject->updateAction($game);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenGameFromGameRepository()
    {
        $game = new \FlashGameExt\Flashgameext\Domain\Model\Game();

        $gameRepository = $this->getMockBuilder(\FlashGameExt\Flashgameext\Domain\Repository\GameRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $gameRepository->expects(self::once())->method('remove')->with($game);
        $this->inject($this->subject, 'gameRepository', $gameRepository);

        $this->subject->deleteAction($game);
    }
}
