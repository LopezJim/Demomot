
plugin.tx_flashgameextonet_frontendflashgameext {
    view {
        # cat=plugin.tx_flashgameextonet_frontendflashgameext/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:flashgameextonet/Resources/Private/Templates/
        # cat=plugin.tx_flashgameextonet_frontendflashgameext/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:flashgameextonet/Resources/Private/Partials/
        # cat=plugin.tx_flashgameextonet_frontendflashgameext/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:flashgameextonet/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_flashgameextonet_frontendflashgameext//a; type=string; label=Default storage PID
        storagePid =
    }
}
