
plugin.tx_etmlcontact_ada {
  view {
    # cat=plugin.tx_etmlcontact_ada/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:etml_contact/Resources/Private/Templates/
    # cat=plugin.tx_etmlcontact_ada/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:etml_contact/Resources/Private/Partials/
    # cat=plugin.tx_etmlcontact_ada/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:etml_contact/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_etmlcontact_ada//a; type=string; label=Default storage PID
    storagePid =
  }
}
