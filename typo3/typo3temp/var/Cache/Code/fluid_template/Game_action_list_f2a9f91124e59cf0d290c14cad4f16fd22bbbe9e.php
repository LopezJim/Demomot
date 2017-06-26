<?php

class Game_action_list_f2a9f91124e59cf0d290c14cad4f16fd22bbbe9e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
			<td> <a href="';
$array13 = array (
);
$output12 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamPath', $array13), ENT_QUOTES);

$output12 .= '"> ';
$array14 = array (
);
$output12 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamName', $array14), ENT_QUOTES);

$output12 .= ' </a> </td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= ' ';
$array20 = array (
);
$output19 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamPath', $array20), ENT_QUOTES);
return $output19;
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
$arguments15['action'] = 'show';
// Rendering Array
$array17 = array();
$array18 = array (
);$array17['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array18);
$arguments15['arguments'] = $array17;

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output12 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= ' ';
$array26 = array (
);
$output25 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamName', $array26), ENT_QUOTES);
return $output25;
};
$arguments21 = array();
$arguments21['action'] = NULL;
$arguments21['arguments'] = array (
);
$arguments21['controller'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['pluginName'] = NULL;
$arguments21['pageUid'] = NULL;
$arguments21['pageType'] = 0;
$arguments21['noCache'] = false;
$arguments21['noCacheHash'] = false;
$arguments21['section'] = '';
$arguments21['format'] = '';
$arguments21['linkAccessRestrictedPages'] = false;
$arguments21['additionalParams'] = array (
);
$arguments21['absolute'] = false;
$arguments21['addQueryString'] = false;
$arguments21['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments21['addQueryStringMethod'] = NULL;
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['name'] = NULL;
$arguments21['rel'] = NULL;
$arguments21['rev'] = NULL;
$arguments21['target'] = NULL;
$arguments21['action'] = 'show';
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array24);
$arguments21['arguments'] = $array23;

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output12 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= ' ';
$array32 = array (
);
$output31 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamUploader', $array32), ENT_QUOTES);
return $output31;
};
$arguments27 = array();
$arguments27['action'] = NULL;
$arguments27['arguments'] = array (
);
$arguments27['controller'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['pluginName'] = NULL;
$arguments27['pageUid'] = NULL;
$arguments27['pageType'] = 0;
$arguments27['noCache'] = false;
$arguments27['noCacheHash'] = false;
$arguments27['section'] = '';
$arguments27['format'] = '';
$arguments27['linkAccessRestrictedPages'] = false;
$arguments27['additionalParams'] = array (
);
$arguments27['absolute'] = false;
$arguments27['addQueryString'] = false;
$arguments27['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments27['addQueryStringMethod'] = NULL;
$arguments27['additionalAttributes'] = NULL;
$arguments27['data'] = NULL;
$arguments27['class'] = NULL;
$arguments27['dir'] = NULL;
$arguments27['id'] = NULL;
$arguments27['lang'] = NULL;
$arguments27['style'] = NULL;
$arguments27['title'] = NULL;
$arguments27['accesskey'] = NULL;
$arguments27['tabindex'] = NULL;
$arguments27['onclick'] = NULL;
$arguments27['name'] = NULL;
$arguments27['rel'] = NULL;
$arguments27['rev'] = NULL;
$arguments27['target'] = NULL;
$arguments27['action'] = 'show';
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array30);
$arguments27['arguments'] = $array29;

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output12 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments33 = array();
$arguments33['action'] = NULL;
$arguments33['arguments'] = array (
);
$arguments33['controller'] = NULL;
$arguments33['extensionName'] = NULL;
$arguments33['pluginName'] = NULL;
$arguments33['pageUid'] = NULL;
$arguments33['pageType'] = 0;
$arguments33['noCache'] = false;
$arguments33['noCacheHash'] = false;
$arguments33['section'] = '';
$arguments33['format'] = '';
$arguments33['linkAccessRestrictedPages'] = false;
$arguments33['additionalParams'] = array (
);
$arguments33['absolute'] = false;
$arguments33['addQueryString'] = false;
$arguments33['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments33['addQueryStringMethod'] = NULL;
$arguments33['additionalAttributes'] = NULL;
$arguments33['data'] = NULL;
$arguments33['class'] = NULL;
$arguments33['dir'] = NULL;
$arguments33['id'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['title'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$arguments33['name'] = NULL;
$arguments33['rel'] = NULL;
$arguments33['rev'] = NULL;
$arguments33['target'] = NULL;
$arguments33['action'] = 'edit';
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array36);
$arguments33['arguments'] = $array35;

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output12 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments37 = array();
$arguments37['action'] = NULL;
$arguments37['arguments'] = array (
);
$arguments37['controller'] = NULL;
$arguments37['extensionName'] = NULL;
$arguments37['pluginName'] = NULL;
$arguments37['pageUid'] = NULL;
$arguments37['pageType'] = 0;
$arguments37['noCache'] = false;
$arguments37['noCacheHash'] = false;
$arguments37['section'] = '';
$arguments37['format'] = '';
$arguments37['linkAccessRestrictedPages'] = false;
$arguments37['additionalParams'] = array (
);
$arguments37['absolute'] = false;
$arguments37['addQueryString'] = false;
$arguments37['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments37['addQueryStringMethod'] = NULL;
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$arguments37['name'] = NULL;
$arguments37['rel'] = NULL;
$arguments37['rev'] = NULL;
$arguments37['target'] = NULL;
$arguments37['action'] = 'delete';
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array40);
$arguments37['arguments'] = $array39;

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

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
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return 'New Game';
};
$arguments41 = array();
$arguments41['action'] = NULL;
$arguments41['arguments'] = array (
);
$arguments41['controller'] = NULL;
$arguments41['extensionName'] = NULL;
$arguments41['pluginName'] = NULL;
$arguments41['pageUid'] = NULL;
$arguments41['pageType'] = 0;
$arguments41['noCache'] = false;
$arguments41['noCacheHash'] = false;
$arguments41['section'] = '';
$arguments41['format'] = '';
$arguments41['linkAccessRestrictedPages'] = false;
$arguments41['additionalParams'] = array (
);
$arguments41['absolute'] = false;
$arguments41['addQueryString'] = false;
$arguments41['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments41['addQueryStringMethod'] = NULL;
$arguments41['additionalAttributes'] = NULL;
$arguments41['data'] = NULL;
$arguments41['class'] = NULL;
$arguments41['dir'] = NULL;
$arguments41['id'] = NULL;
$arguments41['lang'] = NULL;
$arguments41['style'] = NULL;
$arguments41['title'] = NULL;
$arguments41['accesskey'] = NULL;
$arguments41['tabindex'] = NULL;
$arguments41['onclick'] = NULL;
$arguments41['name'] = NULL;
$arguments41['rel'] = NULL;
$arguments41['rev'] = NULL;
$arguments41['target'] = NULL;
$arguments41['action'] = 'new';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output43 = '';

$output43 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['name'] = NULL;
$arguments44['name'] = 'Default';

$output43 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext), ENT_QUOTES);

$output43 .= '

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
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
<h1>Listing for Game</h1>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['queueIdentifier'] = NULL;
$arguments49['as'] = NULL;

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '

<table  class="tx_flashgameextonet" >
	<tr>
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
$arguments51['key'] = 'tx_flashgameextonet_domain_model_game.gam_path';

$output48 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext), ENT_QUOTES);

$output48 .= '</th>
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
$arguments53['key'] = 'tx_flashgameextonet_domain_model_game.gam_name';

$output48 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext), ENT_QUOTES);

$output48 .= '</th>
		<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['key'] = NULL;
$arguments55['id'] = NULL;
$arguments55['default'] = NULL;
$arguments55['htmlEscape'] = NULL;
$arguments55['arguments'] = NULL;
$arguments55['extensionName'] = NULL;
$arguments55['key'] = 'tx_flashgameextonet_domain_model_game.gam_uploader';

$output48 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext), ENT_QUOTES);

$output48 .= '</th>
		<th> </th>
		<th> </th>
	</tr>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
		<tr>
			<td> <a href="';
$array61 = array (
);
$output60 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamPath', $array61), ENT_QUOTES);

$output60 .= '"> ';
$array62 = array (
);
$output60 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamName', $array62), ENT_QUOTES);

$output60 .= ' </a> </td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= ' ';
$array68 = array (
);
$output67 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamPath', $array68), ENT_QUOTES);
return $output67;
};
$arguments63 = array();
$arguments63['action'] = NULL;
$arguments63['arguments'] = array (
);
$arguments63['controller'] = NULL;
$arguments63['extensionName'] = NULL;
$arguments63['pluginName'] = NULL;
$arguments63['pageUid'] = NULL;
$arguments63['pageType'] = 0;
$arguments63['noCache'] = false;
$arguments63['noCacheHash'] = false;
$arguments63['section'] = '';
$arguments63['format'] = '';
$arguments63['linkAccessRestrictedPages'] = false;
$arguments63['additionalParams'] = array (
);
$arguments63['absolute'] = false;
$arguments63['addQueryString'] = false;
$arguments63['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments63['addQueryStringMethod'] = NULL;
$arguments63['additionalAttributes'] = NULL;
$arguments63['data'] = NULL;
$arguments63['class'] = NULL;
$arguments63['dir'] = NULL;
$arguments63['id'] = NULL;
$arguments63['lang'] = NULL;
$arguments63['style'] = NULL;
$arguments63['title'] = NULL;
$arguments63['accesskey'] = NULL;
$arguments63['tabindex'] = NULL;
$arguments63['onclick'] = NULL;
$arguments63['name'] = NULL;
$arguments63['rel'] = NULL;
$arguments63['rev'] = NULL;
$arguments63['target'] = NULL;
$arguments63['action'] = 'show';
// Rendering Array
$array65 = array();
$array66 = array (
);$array65['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array66);
$arguments63['arguments'] = $array65;

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output60 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= ' ';
$array74 = array (
);
$output73 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamName', $array74), ENT_QUOTES);
return $output73;
};
$arguments69 = array();
$arguments69['action'] = NULL;
$arguments69['arguments'] = array (
);
$arguments69['controller'] = NULL;
$arguments69['extensionName'] = NULL;
$arguments69['pluginName'] = NULL;
$arguments69['pageUid'] = NULL;
$arguments69['pageType'] = 0;
$arguments69['noCache'] = false;
$arguments69['noCacheHash'] = false;
$arguments69['section'] = '';
$arguments69['format'] = '';
$arguments69['linkAccessRestrictedPages'] = false;
$arguments69['additionalParams'] = array (
);
$arguments69['absolute'] = false;
$arguments69['addQueryString'] = false;
$arguments69['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments69['addQueryStringMethod'] = NULL;
$arguments69['additionalAttributes'] = NULL;
$arguments69['data'] = NULL;
$arguments69['class'] = NULL;
$arguments69['dir'] = NULL;
$arguments69['id'] = NULL;
$arguments69['lang'] = NULL;
$arguments69['style'] = NULL;
$arguments69['title'] = NULL;
$arguments69['accesskey'] = NULL;
$arguments69['tabindex'] = NULL;
$arguments69['onclick'] = NULL;
$arguments69['name'] = NULL;
$arguments69['rel'] = NULL;
$arguments69['rev'] = NULL;
$arguments69['target'] = NULL;
$arguments69['action'] = 'show';
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array72);
$arguments69['arguments'] = $array71;

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output60 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= ' ';
$array80 = array (
);
$output79 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('game.gamUploader', $array80), ENT_QUOTES);
return $output79;
};
$arguments75 = array();
$arguments75['action'] = NULL;
$arguments75['arguments'] = array (
);
$arguments75['controller'] = NULL;
$arguments75['extensionName'] = NULL;
$arguments75['pluginName'] = NULL;
$arguments75['pageUid'] = NULL;
$arguments75['pageType'] = 0;
$arguments75['noCache'] = false;
$arguments75['noCacheHash'] = false;
$arguments75['section'] = '';
$arguments75['format'] = '';
$arguments75['linkAccessRestrictedPages'] = false;
$arguments75['additionalParams'] = array (
);
$arguments75['absolute'] = false;
$arguments75['addQueryString'] = false;
$arguments75['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments75['addQueryStringMethod'] = NULL;
$arguments75['additionalAttributes'] = NULL;
$arguments75['data'] = NULL;
$arguments75['class'] = NULL;
$arguments75['dir'] = NULL;
$arguments75['id'] = NULL;
$arguments75['lang'] = NULL;
$arguments75['style'] = NULL;
$arguments75['title'] = NULL;
$arguments75['accesskey'] = NULL;
$arguments75['tabindex'] = NULL;
$arguments75['onclick'] = NULL;
$arguments75['name'] = NULL;
$arguments75['rel'] = NULL;
$arguments75['rev'] = NULL;
$arguments75['target'] = NULL;
$arguments75['action'] = 'show';
// Rendering Array
$array77 = array();
$array78 = array (
);$array77['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array78);
$arguments75['arguments'] = $array77;

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output60 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return 'Edit';
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
$arguments81['action'] = 'edit';
// Rendering Array
$array83 = array();
$array84 = array (
);$array83['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array84);
$arguments81['arguments'] = $array83;

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output60 .= '</td>
			<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return 'Delete';
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
$arguments85['action'] = 'delete';
// Rendering Array
$array87 = array();
$array88 = array (
);$array87['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array88);
$arguments85['arguments'] = $array87;

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output60 .= '</td>
		</tr>
	';
return $output60;
};
$arguments57 = array();
$arguments57['each'] = NULL;
$arguments57['as'] = NULL;
$arguments57['key'] = NULL;
$arguments57['reverse'] = false;
$arguments57['iteration'] = NULL;
$array59 = array (
);$arguments57['each'] = $renderingContext->getVariableProvider()->getByPath('games', $array59);
$arguments57['as'] = 'game';

$output48 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output48 .= '
</table>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return 'New Game';
};
$arguments89 = array();
$arguments89['action'] = NULL;
$arguments89['arguments'] = array (
);
$arguments89['controller'] = NULL;
$arguments89['extensionName'] = NULL;
$arguments89['pluginName'] = NULL;
$arguments89['pageUid'] = NULL;
$arguments89['pageType'] = 0;
$arguments89['noCache'] = false;
$arguments89['noCacheHash'] = false;
$arguments89['section'] = '';
$arguments89['format'] = '';
$arguments89['linkAccessRestrictedPages'] = false;
$arguments89['additionalParams'] = array (
);
$arguments89['absolute'] = false;
$arguments89['addQueryString'] = false;
$arguments89['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments89['addQueryStringMethod'] = NULL;
$arguments89['additionalAttributes'] = NULL;
$arguments89['data'] = NULL;
$arguments89['class'] = NULL;
$arguments89['dir'] = NULL;
$arguments89['id'] = NULL;
$arguments89['lang'] = NULL;
$arguments89['style'] = NULL;
$arguments89['title'] = NULL;
$arguments89['accesskey'] = NULL;
$arguments89['tabindex'] = NULL;
$arguments89['onclick'] = NULL;
$arguments89['name'] = NULL;
$arguments89['rel'] = NULL;
$arguments89['rev'] = NULL;
$arguments89['target'] = NULL;
$arguments89['action'] = 'new';

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output48 .= '
';
return $output48;
};
$arguments46 = array();
$arguments46['name'] = NULL;
$arguments46['name'] = 'main';

$output43 .= '';

$output43 .= '
';

return $output43;
}


}
#2997010179    30304     