
plugin.tx_etmlcontact_ada {
  view {
    templateRootPaths.0 = EXT:etml_contact/Resources/Private/Templates/
    templateRootPaths.1 = plugin.tx_etmlcontact_ada.view.templateRootPath
    partialRootPaths.0 = EXT:etml_contact/Resources/Private/Partials/
    partialRootPaths.1 = plugin.tx_etmlcontact_ada.view.partialRootPath
    layoutRootPaths.0 = EXT:etml_contact/Resources/Private/Layouts/
    layoutRootPaths.1 = plugin.tx_etmlcontact_ada.view.layoutRootPath
  }
  persistence {
    storagePid = plugin.tx_etmlcontact_ada.persistence.storagePid
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_etmlcontact._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-etml-contact table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-etml-contact table th {
        font-weight:bold;
    }

    .tx-etml-contact table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
