<?php

class layout_main_layout_7468db08cfbd3539a742c2bd99d9402b583cf824 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div id="container">
    <div id="container_header_bg">
        <div id="container_header_top">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['section'] = NULL;
$arguments1['partial'] = NULL;
$arguments1['delegate'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['optional'] = false;
$arguments1['default'] = NULL;
$arguments1['contentAs'] = NULL;
$arguments1['partial'] = 'header_top';
$arguments1['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
        </div><!-- container_header_top -->
        <div id="header_mobile">
            <img src="fileadmin/templates/images/mobile.png" id="mobile_menu" alt="menu" title="menu" />
        </div>
        <div id="container_header_menu">
            <div id="header_menu">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['typoscriptObjectPath'] = NULL;
$arguments4['data'] = NULL;
$arguments4['currentValueKey'] = NULL;
$arguments4['table'] = '';
$arguments4['typoscriptObjectPath'] = 'lib.header_menu';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
            </div><!-- header_menu -->
        </div><!-- container_header_menu -->
    </div><!-- container_header_bg -->
    <div id="container_header_image">
        <div id="header_image">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['typoscriptObjectPath'] = NULL;
$arguments6['data'] = NULL;
$arguments6['currentValueKey'] = NULL;
$arguments6['table'] = '';
$arguments6['typoscriptObjectPath'] = 'lib.header_image';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
        </div><!-- header_image -->
    </div><!-- container_header_image -->
    <div id="container_breadcrumb">
        <div id="breadcrumb">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['typoscriptObjectPath'] = NULL;
$arguments8['data'] = NULL;
$arguments8['currentValueKey'] = NULL;
$arguments8['table'] = '';
$arguments8['typoscriptObjectPath'] = 'lib.breadcrumb';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
        </div><!-- breadcrumb -->
    </div><!-- container_breadcrumb -->
    <div id="container_content">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['section'] = NULL;
$arguments10['partial'] = NULL;
$arguments10['delegate'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['optional'] = false;
$arguments10['default'] = NULL;
$arguments10['contentAs'] = NULL;
$arguments10['section'] = 'content';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
    </div><!-- container_content -->
    <div id="container_footer">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['section'] = NULL;
$arguments12['partial'] = NULL;
$arguments12['delegate'] = NULL;
$arguments12['arguments'] = array (
);
$arguments12['optional'] = false;
$arguments12['default'] = NULL;
$arguments12['contentAs'] = NULL;
$arguments12['partial'] = 'footer';
$arguments12['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output0 .= '
    </div><!-- container_footer -->
</div><!-- container -->';

return $output0;
}


}
#2993742575    5559      