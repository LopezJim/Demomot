<?php

class partial_Game_Properties_9e7fde07c20df017e55e4272e88c2306e1d4a020 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<table class="tx-flashgameextonet" >
	<tr>
		<td>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['key'] = 'tx_flashgameextonet_domain_model_game.gam_path';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext), ENT_QUOTES);

$output0 .= '
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>
			';
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
$arguments3['key'] = 'tx_flashgameextonet_domain_model_game.gam_name';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext), ENT_QUOTES);

$output0 .= '
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>
			';
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
$arguments5['key'] = 'tx_flashgameextonet_domain_model_game.gam_uploader';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext), ENT_QUOTES);

$output0 .= '
		</td>
		<td>
		</td>
	</tr>
</table>
';

return $output0;
}


}
#2994985122    3043      