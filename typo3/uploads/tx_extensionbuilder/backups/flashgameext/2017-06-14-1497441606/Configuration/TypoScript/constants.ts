
plugin.tx_flashgameext_frontendflashgame {
    view {
        # cat=plugin.tx_flashgameext_frontendflashgame/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:flashgameext/Resources/Private/Templates/
        # cat=plugin.tx_flashgameext_frontendflashgame/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:flashgameext/Resources/Private/Partials/
        # cat=plugin.tx_flashgameext_frontendflashgame/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:flashgameext/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_flashgameext_frontendflashgame//a; type=string; label=Default storage PID
        storagePid =
    }
}
