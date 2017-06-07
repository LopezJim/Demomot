<?php

class ViewModule_action_show_54d418feeba70dd949d319410e86e4beec620fd3 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'DocHeader';
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
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<div id="resizeable">
		<iframe src="';
$array1 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('url', $array1), ENT_QUOTES);

$output0 .= '" width="100%" height="100%" id="tx_viewpage_iframe" frameborder="0" border="0"></iframe>
	</div>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output2 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['name'] = NULL;
$arguments3['name'] = 'DocHeader';

$output2 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext), ENT_QUOTES);

$output2 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
	<div id="resizeable">
		<iframe src="';
$array8 = array (
);
$output7 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('url', $array8), ENT_QUOTES);

$output7 .= '" width="100%" height="100%" id="tx_viewpage_iframe" frameborder="0" border="0"></iframe>
	</div>
';
return $output7;
};
$arguments5 = array();
$arguments5['name'] = NULL;
$arguments5['name'] = 'Content';

$output2 .= '';

return $output2;
}


}
#2993756227    2508      