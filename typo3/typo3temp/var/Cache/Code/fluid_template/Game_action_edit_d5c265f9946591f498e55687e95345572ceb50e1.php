<?php

class Game_action_edit_d5c265f9946591f498e55687e95345572ceb50e1 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<h1>Modifier le jeu</h1>

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

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['section'] = NULL;
$arguments3['partial'] = NULL;
$arguments3['delegate'] = NULL;
$arguments3['arguments'] = array (
);
$arguments3['optional'] = false;
$arguments3['default'] = NULL;
$arguments3['contentAs'] = NULL;
$arguments3['partial'] = 'FormErrors';
// Rendering Array
$array5 = array();
$array6 = array (
);$array5['object'] = $renderingContext->getVariableProvider()->getByPath('Game', $array6);
$arguments3['arguments'] = $array5;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['section'] = NULL;
$arguments11['partial'] = NULL;
$arguments11['delegate'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['optional'] = false;
$arguments11['default'] = NULL;
$arguments11['contentAs'] = NULL;
$arguments11['partial'] = 'Game/FormFields';
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array14);
$arguments11['arguments'] = $array13;

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['name'] = NULL;
$arguments15['value'] = NULL;
$arguments15['property'] = NULL;
$arguments15['disabled'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['value'] = 'Sauvegarder';

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output10 .= '
';
return $output10;
};
$arguments7 = array();
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['action'] = NULL;
$arguments7['arguments'] = array (
);
$arguments7['controller'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['pluginName'] = NULL;
$arguments7['pageUid'] = NULL;
$arguments7['object'] = NULL;
$arguments7['pageType'] = 0;
$arguments7['noCache'] = false;
$arguments7['noCacheHash'] = false;
$arguments7['section'] = '';
$arguments7['format'] = '';
$arguments7['additionalParams'] = array (
);
$arguments7['absolute'] = false;
$arguments7['addQueryString'] = false;
$arguments7['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments7['addQueryStringMethod'] = 'GET';
$arguments7['fieldNamePrefix'] = NULL;
$arguments7['actionUri'] = NULL;
$arguments7['objectName'] = NULL;
$arguments7['hiddenFieldClassName'] = NULL;
$arguments7['enctype'] = NULL;
$arguments7['method'] = NULL;
$arguments7['name'] = NULL;
$arguments7['onreset'] = NULL;
$arguments7['onsubmit'] = NULL;
$arguments7['target'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['action'] = 'update';
$arguments7['name'] = 'game';
$array9 = array (
);$arguments7['object'] = $renderingContext->getVariableProvider()->getByPath('game', $array9);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output17 = '';

$output17 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['name'] = NULL;
$arguments18['name'] = 'Default';

$output17 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext), ENT_QUOTES);

$output17 .= '

This template displays a EDIT form for the current domain object.

If you modify this template, do not forget to change the overwrite settings
in /Configuration/ExtensionBuilder/settings.yaml:
  Resources:
    Private:
      Templates:
        Edit.html: keep

Otherwise your changes will be overwritten the next time you save the extension in the extension builder

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
<h1>Modifier le jeu</h1>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['queueIdentifier'] = NULL;
$arguments23['as'] = NULL;

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['section'] = NULL;
$arguments25['partial'] = NULL;
$arguments25['delegate'] = NULL;
$arguments25['arguments'] = array (
);
$arguments25['optional'] = false;
$arguments25['default'] = NULL;
$arguments25['contentAs'] = NULL;
$arguments25['partial'] = 'FormErrors';
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['object'] = $renderingContext->getVariableProvider()->getByPath('Game', $array28);
$arguments25['arguments'] = $array27;

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output22 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['section'] = NULL;
$arguments33['partial'] = NULL;
$arguments33['delegate'] = NULL;
$arguments33['arguments'] = array (
);
$arguments33['optional'] = false;
$arguments33['default'] = NULL;
$arguments33['contentAs'] = NULL;
$arguments33['partial'] = 'Game/FormFields';
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['game'] = $renderingContext->getVariableProvider()->getByPath('game', $array36);
$arguments33['arguments'] = $array35;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['name'] = NULL;
$arguments37['value'] = NULL;
$arguments37['property'] = NULL;
$arguments37['disabled'] = NULL;
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$arguments37['value'] = 'Sauvegarder';

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output32 .= '
';
return $output32;
};
$arguments29 = array();
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['action'] = NULL;
$arguments29['arguments'] = array (
);
$arguments29['controller'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['pluginName'] = NULL;
$arguments29['pageUid'] = NULL;
$arguments29['object'] = NULL;
$arguments29['pageType'] = 0;
$arguments29['noCache'] = false;
$arguments29['noCacheHash'] = false;
$arguments29['section'] = '';
$arguments29['format'] = '';
$arguments29['additionalParams'] = array (
);
$arguments29['absolute'] = false;
$arguments29['addQueryString'] = false;
$arguments29['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments29['addQueryStringMethod'] = 'GET';
$arguments29['fieldNamePrefix'] = NULL;
$arguments29['actionUri'] = NULL;
$arguments29['objectName'] = NULL;
$arguments29['hiddenFieldClassName'] = NULL;
$arguments29['enctype'] = NULL;
$arguments29['method'] = NULL;
$arguments29['name'] = NULL;
$arguments29['onreset'] = NULL;
$arguments29['onsubmit'] = NULL;
$arguments29['target'] = NULL;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['action'] = 'update';
$arguments29['name'] = 'game';
$array31 = array (
);$arguments29['object'] = $renderingContext->getVariableProvider()->getByPath('game', $array31);

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output22 .= '
';
return $output22;
};
$arguments20 = array();
$arguments20['name'] = NULL;
$arguments20['name'] = 'main';

$output17 .= '';

$output17 .= '
';

return $output17;
}


}
#2997039172    11806     