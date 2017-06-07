<?php

class partial_header_top_f0c11786b15c02d2a81e43cffd6c5b2ca13ab091 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div id="header_top">
    <div id="header_top_left">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['typoscriptObjectPath'] = NULL;
$arguments1['data'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$arguments1['typoscriptObjectPath'] = 'lib.header_top_left';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    </div><!-- header_top_left -->
    <div id="header_top_right">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['typoscriptObjectPath'] = NULL;
$arguments3['data'] = NULL;
$arguments3['currentValueKey'] = NULL;
$arguments3['table'] = '';
$arguments3['typoscriptObjectPath'] = 'lib.header_top_right';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
    </div><!-- header_top_right -->
    <div class="clearer"></div>
</div>';

return $output0;
}


}
#2993742575    2259      