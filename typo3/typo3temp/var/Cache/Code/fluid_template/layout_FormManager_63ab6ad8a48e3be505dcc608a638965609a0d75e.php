<?php

class layout_FormManager_63ab6ad8a48e3be505dcc608a638965609a0d75e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
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
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['pageTitle'] = '';
$arguments1['loadExtJs'] = false;
$arguments1['loadExtJsTheme'] = true;
$arguments1['enableExtJsDebug'] = false;
$arguments1['loadJQuery'] = false;
$arguments1['includeCssFiles'] = NULL;
$arguments1['includeJsFiles'] = NULL;
$arguments1['addJsInlineLabels'] = NULL;
$arguments1['includeRequireJsModules'] = NULL;
$arguments1['jQueryNamespace'] = NULL;
$arguments1['addInlineSettings'] = NULL;
$array3 = array (
);$arguments1['includeCssFiles'] = $renderingContext->getVariableProvider()->getByPath('stylesheets', $array3);

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext), ENT_QUOTES);

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['queueIdentifier'] = NULL;
$arguments4['as'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['section'] = NULL;
$arguments6['partial'] = NULL;
$arguments6['delegate'] = NULL;
$arguments6['arguments'] = array (
);
$arguments6['optional'] = false;
$arguments6['default'] = NULL;
$arguments6['contentAs'] = NULL;
$arguments6['section'] = 'MainContent';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#2993742091    2918      