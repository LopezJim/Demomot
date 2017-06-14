<?php

class layout_Default_37bd7c29ed2e8b257a0f518b35865bb00e008a47 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['section'] = 'headline';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

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
$arguments3['section'] = 'content';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

<div class="t3js-drag-uploader" data-target-folder="';
$array5 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('folderIdentifier', $array5), ENT_QUOTES);

$output0 .= '" data-progress-container="#typo3-filelist"
	 data-dropzone-trigger=".t3js-drag-uploader-trigger" data-dropzone-target=".t3js-module-body h1:first"
	 data-file-deny-pattern="';
$array6 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('fileDenyPattern', $array6), ENT_QUOTES);

$output0 .= '" data-max-file-size="';
$array7 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('maxFileSize', $array7), ENT_QUOTES);

$output0 .= '"
	></div>';

return $output0;
}


}
#2994620522    2891      