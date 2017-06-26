<?php

class Game_action_list_5e64d98af330dbac201112c302c01a87bffd780e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<h1>Listes des jeux</h1>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['queueIdentifier'] = NULL;
$arguments1['as'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

<table  class="tx_flashgameextonet"  cellspacing="10" >
	<tr>
		<th><p>Jeu</p></th>
		<th><p>Auteur du post</p></th>
		<th> </th>
		<th> </th>
	</tr>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
		<tr>
			<td> <a href="';
$array7 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamPath', $array7), ENT_QUOTES);

$output6 .= '"> ';
$array8 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamName', $array8), ENT_QUOTES);

$output6 .= ' </a> </td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= ' ';
$array14 = array (
);
$output13 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamUploader', $array14), ENT_QUOTES);
return $output13;
};
$arguments9 = array();
$arguments9['action'] = NULL;
$arguments9['arguments'] = array (
);
$arguments9['controller'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['pluginName'] = NULL;
$arguments9['pageUid'] = NULL;
$arguments9['pageType'] = 0;
$arguments9['noCache'] = false;
$arguments9['noCacheHash'] = false;
$arguments9['section'] = '';
$arguments9['format'] = '';
$arguments9['linkAccessRestrictedPages'] = false;
$arguments9['additionalParams'] = array (
);
$arguments9['absolute'] = false;
$arguments9['addQueryString'] = false;
$arguments9['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments9['addQueryStringMethod'] = NULL;
$arguments9['additionalAttributes'] = NULL;
$arguments9['data'] = NULL;
$arguments9['class'] = NULL;
$arguments9['dir'] = NULL;
$arguments9['id'] = NULL;
$arguments9['lang'] = NULL;
$arguments9['style'] = NULL;
$arguments9['title'] = NULL;
$arguments9['accesskey'] = NULL;
$arguments9['tabindex'] = NULL;
$arguments9['onclick'] = NULL;
$arguments9['name'] = NULL;
$arguments9['rel'] = NULL;
$arguments9['rev'] = NULL;
$arguments9['target'] = NULL;
$arguments9['action'] = 'show';
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array12);
$arguments9['arguments'] = $array11;

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output6 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments15 = array();
$arguments15['action'] = NULL;
$arguments15['arguments'] = array (
);
$arguments15['controller'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['pluginName'] = NULL;
$arguments15['pageUid'] = NULL;
$arguments15['pageType'] = 0;
$arguments15['noCache'] = false;
$arguments15['noCacheHash'] = false;
$arguments15['section'] = '';
$arguments15['format'] = '';
$arguments15['linkAccessRestrictedPages'] = false;
$arguments15['additionalParams'] = array (
);
$arguments15['absolute'] = false;
$arguments15['addQueryString'] = false;
$arguments15['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments15['addQueryStringMethod'] = NULL;
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['name'] = NULL;
$arguments15['rel'] = NULL;
$arguments15['rev'] = NULL;
$arguments15['target'] = NULL;
$arguments15['action'] = 'edit';
// Rendering Array
$array17 = array();
$array18 = array (
);$array17['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array18);
$arguments15['arguments'] = $array17;

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output6 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments19 = array();
$arguments19['action'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['controller'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['pluginName'] = NULL;
$arguments19['pageUid'] = NULL;
$arguments19['pageType'] = 0;
$arguments19['noCache'] = false;
$arguments19['noCacheHash'] = false;
$arguments19['section'] = '';
$arguments19['format'] = '';
$arguments19['linkAccessRestrictedPages'] = false;
$arguments19['additionalParams'] = array (
);
$arguments19['absolute'] = false;
$arguments19['addQueryString'] = false;
$arguments19['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments19['addQueryStringMethod'] = NULL;
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$arguments19['name'] = NULL;
$arguments19['rel'] = NULL;
$arguments19['rev'] = NULL;
$arguments19['target'] = NULL;
$arguments19['action'] = 'delete';
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array22);
$arguments19['arguments'] = $array21;

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output6 .= '</td>
		</tr>
	';
return $output6;
};
$arguments3 = array();
$arguments3['each'] = NULL;
$arguments3['as'] = NULL;
$arguments3['key'] = NULL;
$arguments3['reverse'] = false;
$arguments3['iteration'] = NULL;
$array5 = array (
);$arguments3['each'] = $renderingContext->getVariableProvider()->getByPath('games', $array5);
$arguments3['as'] = 'game';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
</table>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return 'New Game';
};
$arguments23 = array();
$arguments23['action'] = NULL;
$arguments23['arguments'] = array (
);
$arguments23['controller'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['pluginName'] = NULL;
$arguments23['pageUid'] = NULL;
$arguments23['pageType'] = 0;
$arguments23['noCache'] = false;
$arguments23['noCacheHash'] = false;
$arguments23['section'] = '';
$arguments23['format'] = '';
$arguments23['linkAccessRestrictedPages'] = false;
$arguments23['additionalParams'] = array (
);
$arguments23['absolute'] = false;
$arguments23['addQueryString'] = false;
$arguments23['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments23['addQueryStringMethod'] = NULL;
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['class'] = NULL;
$arguments23['dir'] = NULL;
$arguments23['id'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$arguments23['name'] = NULL;
$arguments23['rel'] = NULL;
$arguments23['rev'] = NULL;
$arguments23['target'] = NULL;
$arguments23['action'] = 'new';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output25 = '';

$output25 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['name'] = NULL;
$arguments26['name'] = 'Default';

$output25 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext), ENT_QUOTES);

$output25 .= '

This Template is responsible for creating a table of domain objects.

If you modify this template, do not forget to change the overwrite settings
in /Configuration/ExtensionBuilder/settings.yaml:
  Resources:
    Private:
      Templates:
        List.html: keep

Otherwise your changes will be overwritten the next time you save the extension in the extension builder

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
<h1>Listes des jeux</h1>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['queueIdentifier'] = NULL;
$arguments31['as'] = NULL;

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '

<table  class="tx_flashgameextonet"  cellspacing="10" >
	<tr>
		<th><p>Jeu</p></th>
		<th><p>Auteur du post</p></th>
		<th> </th>
		<th> </th>
	</tr>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
		<tr>
			<td> <a href="';
$array37 = array (
);
$output36 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamPath', $array37), ENT_QUOTES);

$output36 .= '"> ';
$array38 = array (
);
$output36 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamName', $array38), ENT_QUOTES);

$output36 .= ' </a> </td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= ' ';
$array44 = array (
);
$output43 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamUploader', $array44), ENT_QUOTES);
return $output43;
};
$arguments39 = array();
$arguments39['action'] = NULL;
$arguments39['arguments'] = array (
);
$arguments39['controller'] = NULL;
$arguments39['extensionName'] = NULL;
$arguments39['pluginName'] = NULL;
$arguments39['pageUid'] = NULL;
$arguments39['pageType'] = 0;
$arguments39['noCache'] = false;
$arguments39['noCacheHash'] = false;
$arguments39['section'] = '';
$arguments39['format'] = '';
$arguments39['linkAccessRestrictedPages'] = false;
$arguments39['additionalParams'] = array (
);
$arguments39['absolute'] = false;
$arguments39['addQueryString'] = false;
$arguments39['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments39['addQueryStringMethod'] = NULL;
$arguments39['additionalAttributes'] = NULL;
$arguments39['data'] = NULL;
$arguments39['class'] = NULL;
$arguments39['dir'] = NULL;
$arguments39['id'] = NULL;
$arguments39['lang'] = NULL;
$arguments39['style'] = NULL;
$arguments39['title'] = NULL;
$arguments39['accesskey'] = NULL;
$arguments39['tabindex'] = NULL;
$arguments39['onclick'] = NULL;
$arguments39['name'] = NULL;
$arguments39['rel'] = NULL;
$arguments39['rev'] = NULL;
$arguments39['target'] = NULL;
$arguments39['action'] = 'show';
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array42);
$arguments39['arguments'] = $array41;

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output36 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments45 = array();
$arguments45['action'] = NULL;
$arguments45['arguments'] = array (
);
$arguments45['controller'] = NULL;
$arguments45['extensionName'] = NULL;
$arguments45['pluginName'] = NULL;
$arguments45['pageUid'] = NULL;
$arguments45['pageType'] = 0;
$arguments45['noCache'] = false;
$arguments45['noCacheHash'] = false;
$arguments45['section'] = '';
$arguments45['format'] = '';
$arguments45['linkAccessRestrictedPages'] = false;
$arguments45['additionalParams'] = array (
);
$arguments45['absolute'] = false;
$arguments45['addQueryString'] = false;
$arguments45['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments45['addQueryStringMethod'] = NULL;
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['name'] = NULL;
$arguments45['rel'] = NULL;
$arguments45['rev'] = NULL;
$arguments45['target'] = NULL;
$arguments45['action'] = 'edit';
// Rendering Array
$array47 = array();
$array48 = array (
);$array47['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array48);
$arguments45['arguments'] = $array47;

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output36 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments49 = array();
$arguments49['action'] = NULL;
$arguments49['arguments'] = array (
);
$arguments49['controller'] = NULL;
$arguments49['extensionName'] = NULL;
$arguments49['pluginName'] = NULL;
$arguments49['pageUid'] = NULL;
$arguments49['pageType'] = 0;
$arguments49['noCache'] = false;
$arguments49['noCacheHash'] = false;
$arguments49['section'] = '';
$arguments49['format'] = '';
$arguments49['linkAccessRestrictedPages'] = false;
$arguments49['additionalParams'] = array (
);
$arguments49['absolute'] = false;
$arguments49['addQueryString'] = false;
$arguments49['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments49['addQueryStringMethod'] = NULL;
$arguments49['additionalAttributes'] = NULL;
$arguments49['data'] = NULL;
$arguments49['class'] = NULL;
$arguments49['dir'] = NULL;
$arguments49['id'] = NULL;
$arguments49['lang'] = NULL;
$arguments49['style'] = NULL;
$arguments49['title'] = NULL;
$arguments49['accesskey'] = NULL;
$arguments49['tabindex'] = NULL;
$arguments49['onclick'] = NULL;
$arguments49['name'] = NULL;
$arguments49['rel'] = NULL;
$arguments49['rev'] = NULL;
$arguments49['target'] = NULL;
$arguments49['action'] = 'delete';
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array52);
$arguments49['arguments'] = $array51;

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output36 .= '</td>
		</tr>
	';
return $output36;
};
$arguments33 = array();
$arguments33['each'] = NULL;
$arguments33['as'] = NULL;
$arguments33['key'] = NULL;
$arguments33['reverse'] = false;
$arguments33['iteration'] = NULL;
$array35 = array (
);$arguments33['each'] = $renderingContext->getVariableProvider()->getByPath('games', $array35);
$arguments33['as'] = 'game';

$output30 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output30 .= '
</table>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return 'New Game';
};
$arguments53 = array();
$arguments53['action'] = NULL;
$arguments53['arguments'] = array (
);
$arguments53['controller'] = NULL;
$arguments53['extensionName'] = NULL;
$arguments53['pluginName'] = NULL;
$arguments53['pageUid'] = NULL;
$arguments53['pageType'] = 0;
$arguments53['noCache'] = false;
$arguments53['noCacheHash'] = false;
$arguments53['section'] = '';
$arguments53['format'] = '';
$arguments53['linkAccessRestrictedPages'] = false;
$arguments53['additionalParams'] = array (
);
$arguments53['absolute'] = false;
$arguments53['addQueryString'] = false;
$arguments53['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments53['addQueryStringMethod'] = NULL;
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['class'] = NULL;
$arguments53['dir'] = NULL;
$arguments53['id'] = NULL;
$arguments53['lang'] = NULL;
$arguments53['style'] = NULL;
$arguments53['title'] = NULL;
$arguments53['accesskey'] = NULL;
$arguments53['tabindex'] = NULL;
$arguments53['onclick'] = NULL;
$arguments53['name'] = NULL;
$arguments53['rel'] = NULL;
$arguments53['rev'] = NULL;
$arguments53['target'] = NULL;
$arguments53['action'] = 'new';

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output30 .= '
';
return $output30;
};
$arguments28 = array();
$arguments28['name'] = NULL;
$arguments28['name'] = 'main';

$output25 .= '';

$output25 .= '
';

return $output25;
}


}
#2997015142    19060     