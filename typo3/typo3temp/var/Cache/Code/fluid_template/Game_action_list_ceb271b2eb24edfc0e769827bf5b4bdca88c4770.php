<?php

class Game_action_list_ceb271b2eb24edfc0e769827bf5b4bdca88c4770 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<h1>Listing for Game</h1>

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

<table  class="tx_flashgameextonet" >
	<tr>
		<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['htmlEscape'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['key'] = 'tx_flashgameextonet_domain_model_game.gam_path';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext), ENT_QUOTES);

$output0 .= '</th>
		<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['key'] = NULL;
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['htmlEscape'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['key'] = 'tx_flashgameextonet_domain_model_game.gam_name';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext), ENT_QUOTES);

$output0 .= '</th>
		<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['key'] = 'tx_flashgameextonet_domain_model_game.gam_uploader';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext), ENT_QUOTES);

$output0 .= '</th>
		<th> </th>
		<th> </th>
	</tr>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
		<tr>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= ' ';
$array18 = array (
);
$output17 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamPath', $array18), ENT_QUOTES);
return $output17;
};
$arguments13 = array();
$arguments13['action'] = NULL;
$arguments13['arguments'] = array (
);
$arguments13['controller'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['pluginName'] = NULL;
$arguments13['pageUid'] = NULL;
$arguments13['pageType'] = 0;
$arguments13['noCache'] = false;
$arguments13['noCacheHash'] = false;
$arguments13['section'] = '';
$arguments13['format'] = '';
$arguments13['linkAccessRestrictedPages'] = false;
$arguments13['additionalParams'] = array (
);
$arguments13['absolute'] = false;
$arguments13['addQueryString'] = false;
$arguments13['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments13['addQueryStringMethod'] = NULL;
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['name'] = NULL;
$arguments13['rel'] = NULL;
$arguments13['rev'] = NULL;
$arguments13['target'] = NULL;
$arguments13['action'] = 'show';
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array16);
$arguments13['arguments'] = $array15;

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= ' ';
$array24 = array (
);
$output23 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamName', $array24), ENT_QUOTES);
return $output23;
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
$arguments19['action'] = 'show';
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array22);
$arguments19['arguments'] = $array21;

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output12 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= ' ';
$array30 = array (
);
$output29 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamUploader', $array30), ENT_QUOTES);
return $output29;
};
$arguments25 = array();
$arguments25['action'] = NULL;
$arguments25['arguments'] = array (
);
$arguments25['controller'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['pluginName'] = NULL;
$arguments25['pageUid'] = NULL;
$arguments25['pageType'] = 0;
$arguments25['noCache'] = false;
$arguments25['noCacheHash'] = false;
$arguments25['section'] = '';
$arguments25['format'] = '';
$arguments25['linkAccessRestrictedPages'] = false;
$arguments25['additionalParams'] = array (
);
$arguments25['absolute'] = false;
$arguments25['addQueryString'] = false;
$arguments25['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments25['addQueryStringMethod'] = NULL;
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['class'] = NULL;
$arguments25['dir'] = NULL;
$arguments25['id'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$arguments25['name'] = NULL;
$arguments25['rel'] = NULL;
$arguments25['rev'] = NULL;
$arguments25['target'] = NULL;
$arguments25['action'] = 'show';
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array28);
$arguments25['arguments'] = $array27;

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output12 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments31 = array();
$arguments31['action'] = NULL;
$arguments31['arguments'] = array (
);
$arguments31['controller'] = NULL;
$arguments31['extensionName'] = NULL;
$arguments31['pluginName'] = NULL;
$arguments31['pageUid'] = NULL;
$arguments31['pageType'] = 0;
$arguments31['noCache'] = false;
$arguments31['noCacheHash'] = false;
$arguments31['section'] = '';
$arguments31['format'] = '';
$arguments31['linkAccessRestrictedPages'] = false;
$arguments31['additionalParams'] = array (
);
$arguments31['absolute'] = false;
$arguments31['addQueryString'] = false;
$arguments31['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments31['addQueryStringMethod'] = NULL;
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['class'] = NULL;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$arguments31['name'] = NULL;
$arguments31['rel'] = NULL;
$arguments31['rev'] = NULL;
$arguments31['target'] = NULL;
$arguments31['action'] = 'edit';
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array34);
$arguments31['arguments'] = $array33;

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output12 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments35 = array();
$arguments35['action'] = NULL;
$arguments35['arguments'] = array (
);
$arguments35['controller'] = NULL;
$arguments35['extensionName'] = NULL;
$arguments35['pluginName'] = NULL;
$arguments35['pageUid'] = NULL;
$arguments35['pageType'] = 0;
$arguments35['noCache'] = false;
$arguments35['noCacheHash'] = false;
$arguments35['section'] = '';
$arguments35['format'] = '';
$arguments35['linkAccessRestrictedPages'] = false;
$arguments35['additionalParams'] = array (
);
$arguments35['absolute'] = false;
$arguments35['addQueryString'] = false;
$arguments35['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments35['addQueryStringMethod'] = NULL;
$arguments35['additionalAttributes'] = NULL;
$arguments35['data'] = NULL;
$arguments35['class'] = NULL;
$arguments35['dir'] = NULL;
$arguments35['id'] = NULL;
$arguments35['lang'] = NULL;
$arguments35['style'] = NULL;
$arguments35['title'] = NULL;
$arguments35['accesskey'] = NULL;
$arguments35['tabindex'] = NULL;
$arguments35['onclick'] = NULL;
$arguments35['name'] = NULL;
$arguments35['rel'] = NULL;
$arguments35['rev'] = NULL;
$arguments35['target'] = NULL;
$arguments35['action'] = 'delete';
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array38);
$arguments35['arguments'] = $array37;

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output12 .= '</td>
		</tr>
	';
return $output12;
};
$arguments9 = array();
$arguments9['each'] = NULL;
$arguments9['as'] = NULL;
$arguments9['key'] = NULL;
$arguments9['reverse'] = false;
$arguments9['iteration'] = NULL;
$array11 = array (
);$arguments9['each'] = $renderingContext->getVariableProvider()->getByPath('games', $array11);
$arguments9['as'] = 'game';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
</table>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return 'New Game';
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
$arguments39['action'] = 'new';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output41 = '';

$output41 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['name'] = NULL;
$arguments42['name'] = 'Default';

$output41 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext), ENT_QUOTES);

$output41 .= '

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
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
<h1>Listing for Game</h1>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['queueIdentifier'] = NULL;
$arguments47['as'] = NULL;

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '

<table  class="tx_flashgameextonet" >
	<tr>
		<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['key'] = NULL;
$arguments49['id'] = NULL;
$arguments49['default'] = NULL;
$arguments49['htmlEscape'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['extensionName'] = NULL;
$arguments49['key'] = 'tx_flashgameextonet_domain_model_game.gam_path';

$output46 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext), ENT_QUOTES);

$output46 .= '</th>
		<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['key'] = NULL;
$arguments51['id'] = NULL;
$arguments51['default'] = NULL;
$arguments51['htmlEscape'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['key'] = 'tx_flashgameextonet_domain_model_game.gam_name';

$output46 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext), ENT_QUOTES);

$output46 .= '</th>
		<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['key'] = NULL;
$arguments53['id'] = NULL;
$arguments53['default'] = NULL;
$arguments53['htmlEscape'] = NULL;
$arguments53['arguments'] = NULL;
$arguments53['extensionName'] = NULL;
$arguments53['key'] = 'tx_flashgameextonet_domain_model_game.gam_uploader';

$output46 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext), ENT_QUOTES);

$output46 .= '</th>
		<th> </th>
		<th> </th>
	</tr>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
		<tr>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= ' ';
$array64 = array (
);
$output63 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamPath', $array64), ENT_QUOTES);
return $output63;
};
$arguments59 = array();
$arguments59['action'] = NULL;
$arguments59['arguments'] = array (
);
$arguments59['controller'] = NULL;
$arguments59['extensionName'] = NULL;
$arguments59['pluginName'] = NULL;
$arguments59['pageUid'] = NULL;
$arguments59['pageType'] = 0;
$arguments59['noCache'] = false;
$arguments59['noCacheHash'] = false;
$arguments59['section'] = '';
$arguments59['format'] = '';
$arguments59['linkAccessRestrictedPages'] = false;
$arguments59['additionalParams'] = array (
);
$arguments59['absolute'] = false;
$arguments59['addQueryString'] = false;
$arguments59['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments59['addQueryStringMethod'] = NULL;
$arguments59['additionalAttributes'] = NULL;
$arguments59['data'] = NULL;
$arguments59['class'] = NULL;
$arguments59['dir'] = NULL;
$arguments59['id'] = NULL;
$arguments59['lang'] = NULL;
$arguments59['style'] = NULL;
$arguments59['title'] = NULL;
$arguments59['accesskey'] = NULL;
$arguments59['tabindex'] = NULL;
$arguments59['onclick'] = NULL;
$arguments59['name'] = NULL;
$arguments59['rel'] = NULL;
$arguments59['rev'] = NULL;
$arguments59['target'] = NULL;
$arguments59['action'] = 'show';
// Rendering Array
$array61 = array();
$array62 = array (
);$array61['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array62);
$arguments59['arguments'] = $array61;

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= ' ';
$array70 = array (
);
$output69 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamName', $array70), ENT_QUOTES);
return $output69;
};
$arguments65 = array();
$arguments65['action'] = NULL;
$arguments65['arguments'] = array (
);
$arguments65['controller'] = NULL;
$arguments65['extensionName'] = NULL;
$arguments65['pluginName'] = NULL;
$arguments65['pageUid'] = NULL;
$arguments65['pageType'] = 0;
$arguments65['noCache'] = false;
$arguments65['noCacheHash'] = false;
$arguments65['section'] = '';
$arguments65['format'] = '';
$arguments65['linkAccessRestrictedPages'] = false;
$arguments65['additionalParams'] = array (
);
$arguments65['absolute'] = false;
$arguments65['addQueryString'] = false;
$arguments65['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments65['addQueryStringMethod'] = NULL;
$arguments65['additionalAttributes'] = NULL;
$arguments65['data'] = NULL;
$arguments65['class'] = NULL;
$arguments65['dir'] = NULL;
$arguments65['id'] = NULL;
$arguments65['lang'] = NULL;
$arguments65['style'] = NULL;
$arguments65['title'] = NULL;
$arguments65['accesskey'] = NULL;
$arguments65['tabindex'] = NULL;
$arguments65['onclick'] = NULL;
$arguments65['name'] = NULL;
$arguments65['rel'] = NULL;
$arguments65['rev'] = NULL;
$arguments65['target'] = NULL;
$arguments65['action'] = 'show';
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array68);
$arguments65['arguments'] = $array67;

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output58 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= ' ';
$array76 = array (
);
$output75 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamUploader', $array76), ENT_QUOTES);
return $output75;
};
$arguments71 = array();
$arguments71['action'] = NULL;
$arguments71['arguments'] = array (
);
$arguments71['controller'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['pluginName'] = NULL;
$arguments71['pageUid'] = NULL;
$arguments71['pageType'] = 0;
$arguments71['noCache'] = false;
$arguments71['noCacheHash'] = false;
$arguments71['section'] = '';
$arguments71['format'] = '';
$arguments71['linkAccessRestrictedPages'] = false;
$arguments71['additionalParams'] = array (
);
$arguments71['absolute'] = false;
$arguments71['addQueryString'] = false;
$arguments71['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments71['addQueryStringMethod'] = NULL;
$arguments71['additionalAttributes'] = NULL;
$arguments71['data'] = NULL;
$arguments71['class'] = NULL;
$arguments71['dir'] = NULL;
$arguments71['id'] = NULL;
$arguments71['lang'] = NULL;
$arguments71['style'] = NULL;
$arguments71['title'] = NULL;
$arguments71['accesskey'] = NULL;
$arguments71['tabindex'] = NULL;
$arguments71['onclick'] = NULL;
$arguments71['name'] = NULL;
$arguments71['rel'] = NULL;
$arguments71['rev'] = NULL;
$arguments71['target'] = NULL;
$arguments71['action'] = 'show';
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array74);
$arguments71['arguments'] = $array73;

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output58 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments77 = array();
$arguments77['action'] = NULL;
$arguments77['arguments'] = array (
);
$arguments77['controller'] = NULL;
$arguments77['extensionName'] = NULL;
$arguments77['pluginName'] = NULL;
$arguments77['pageUid'] = NULL;
$arguments77['pageType'] = 0;
$arguments77['noCache'] = false;
$arguments77['noCacheHash'] = false;
$arguments77['section'] = '';
$arguments77['format'] = '';
$arguments77['linkAccessRestrictedPages'] = false;
$arguments77['additionalParams'] = array (
);
$arguments77['absolute'] = false;
$arguments77['addQueryString'] = false;
$arguments77['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments77['addQueryStringMethod'] = NULL;
$arguments77['additionalAttributes'] = NULL;
$arguments77['data'] = NULL;
$arguments77['class'] = NULL;
$arguments77['dir'] = NULL;
$arguments77['id'] = NULL;
$arguments77['lang'] = NULL;
$arguments77['style'] = NULL;
$arguments77['title'] = NULL;
$arguments77['accesskey'] = NULL;
$arguments77['tabindex'] = NULL;
$arguments77['onclick'] = NULL;
$arguments77['name'] = NULL;
$arguments77['rel'] = NULL;
$arguments77['rev'] = NULL;
$arguments77['target'] = NULL;
$arguments77['action'] = 'edit';
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array80);
$arguments77['arguments'] = $array79;

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output58 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments81 = array();
$arguments81['action'] = NULL;
$arguments81['arguments'] = array (
);
$arguments81['controller'] = NULL;
$arguments81['extensionName'] = NULL;
$arguments81['pluginName'] = NULL;
$arguments81['pageUid'] = NULL;
$arguments81['pageType'] = 0;
$arguments81['noCache'] = false;
$arguments81['noCacheHash'] = false;
$arguments81['section'] = '';
$arguments81['format'] = '';
$arguments81['linkAccessRestrictedPages'] = false;
$arguments81['additionalParams'] = array (
);
$arguments81['absolute'] = false;
$arguments81['addQueryString'] = false;
$arguments81['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments81['addQueryStringMethod'] = NULL;
$arguments81['additionalAttributes'] = NULL;
$arguments81['data'] = NULL;
$arguments81['class'] = NULL;
$arguments81['dir'] = NULL;
$arguments81['id'] = NULL;
$arguments81['lang'] = NULL;
$arguments81['style'] = NULL;
$arguments81['title'] = NULL;
$arguments81['accesskey'] = NULL;
$arguments81['tabindex'] = NULL;
$arguments81['onclick'] = NULL;
$arguments81['name'] = NULL;
$arguments81['rel'] = NULL;
$arguments81['rev'] = NULL;
$arguments81['target'] = NULL;
$arguments81['action'] = 'delete';
// Rendering Array
$array83 = array();
$array84 = array (
);$array83['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array84);
$arguments81['arguments'] = $array83;

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output58 .= '</td>
		</tr>
	';
return $output58;
};
$arguments55 = array();
$arguments55['each'] = NULL;
$arguments55['as'] = NULL;
$arguments55['key'] = NULL;
$arguments55['reverse'] = false;
$arguments55['iteration'] = NULL;
$array57 = array (
);$arguments55['each'] = $renderingContext->getVariableProvider()->getByPath('games', $array57);
$arguments55['as'] = 'game';

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output46 .= '
</table>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return 'New Game';
};
$arguments85 = array();
$arguments85['action'] = NULL;
$arguments85['arguments'] = array (
);
$arguments85['controller'] = NULL;
$arguments85['extensionName'] = NULL;
$arguments85['pluginName'] = NULL;
$arguments85['pageUid'] = NULL;
$arguments85['pageType'] = 0;
$arguments85['noCache'] = false;
$arguments85['noCacheHash'] = false;
$arguments85['section'] = '';
$arguments85['format'] = '';
$arguments85['linkAccessRestrictedPages'] = false;
$arguments85['additionalParams'] = array (
);
$arguments85['absolute'] = false;
$arguments85['addQueryString'] = false;
$arguments85['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments85['addQueryStringMethod'] = NULL;
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['class'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$arguments85['name'] = NULL;
$arguments85['rel'] = NULL;
$arguments85['rev'] = NULL;
$arguments85['target'] = NULL;
$arguments85['action'] = 'new';

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output46 .= '
';
return $output46;
};
$arguments44 = array();
$arguments44['name'] = NULL;
$arguments44['name'] = 'main';

$output41 .= '';

$output41 .= '
';

return $output41;
}


}
#2997005217    29592     