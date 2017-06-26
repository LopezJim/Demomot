<?php

class Standard_action_index_5a5031fc8345c491ea993ceb5cec898523dee892 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'main_layout';
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
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<div id="content">
	<div id="content_main">
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
$arguments1['typoscriptObjectPath'] = 'lib.content_social';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$array5 = array (
);return $renderingContext->getVariableProvider()->getByPath('content_main', $array5);
};
$arguments3 = array();
$arguments3['value'] = NULL;

$output0 .= isset($arguments3['value']) ? $arguments3['value'] : $renderChildrenClosure4();

$output0 .= '
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
$arguments6['typoscriptObjectPath'] = 'lib.content_message_ad';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
	</div>
    <div id="content_column_1">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$array10 = array (
);return $renderingContext->getVariableProvider()->getByPath('content_column_1', $array10);
};
$arguments8 = array();
$arguments8['value'] = NULL;

$output0 .= isset($arguments8['value']) ? $arguments8['value'] : $renderChildrenClosure9();

$output0 .= '
    </div>
    <div id="content_column_2">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$array13 = array (
);return $renderingContext->getVariableProvider()->getByPath('content_column_2', $array13);
};
$arguments11 = array();
$arguments11['value'] = NULL;

$output0 .= isset($arguments11['value']) ? $arguments11['value'] : $renderChildrenClosure12();

$output0 .= '
    </div>
    <div class="clearer"></div>
</div>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output14 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['name'] = NULL;
$arguments15['name'] = 'main_layout';

$output14 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext), ENT_QUOTES);

$output14 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
<div id="content">
	<div id="content_main">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['typoscriptObjectPath'] = NULL;
$arguments20['data'] = NULL;
$arguments20['currentValueKey'] = NULL;
$arguments20['table'] = '';
$arguments20['typoscriptObjectPath'] = 'lib.content_social';

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$array24 = array (
);return $renderingContext->getVariableProvider()->getByPath('content_main', $array24);
};
$arguments22 = array();
$arguments22['value'] = NULL;

$output19 .= isset($arguments22['value']) ? $arguments22['value'] : $renderChildrenClosure23();

$output19 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['typoscriptObjectPath'] = NULL;
$arguments25['data'] = NULL;
$arguments25['currentValueKey'] = NULL;
$arguments25['table'] = '';
$arguments25['typoscriptObjectPath'] = 'lib.content_message_ad';

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output19 .= '
	</div>
    <div id="content_column_1">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$array29 = array (
);return $renderingContext->getVariableProvider()->getByPath('content_column_1', $array29);
};
$arguments27 = array();
$arguments27['value'] = NULL;

$output19 .= isset($arguments27['value']) ? $arguments27['value'] : $renderChildrenClosure28();

$output19 .= '
    </div>
    <div id="content_column_2">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$array32 = array (
);return $renderingContext->getVariableProvider()->getByPath('content_column_2', $array32);
};
$arguments30 = array();
$arguments30['value'] = NULL;

$output19 .= isset($arguments30['value']) ? $arguments30['value'] : $renderChildrenClosure31();

$output19 .= '
    </div>
    <div class="clearer"></div>
</div>
';
return $output19;
};
$arguments17 = array();
$arguments17['name'] = NULL;
$arguments17['name'] = 'content';

$output14 .= '';

return $output14;
}


}
#2997005268    7067      