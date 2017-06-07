<?php

class Standard_action_index_6fba59e6c30d5c7548013e4497b2ac411700359f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<h1>
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
$arguments1['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:file_rename.php.pagetitle';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext), ENT_QUOTES);

$output0 .= '
</h1>
<div>
    <form action="';
$array3 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('moduleUrlTceFile', $array3), ENT_QUOTES);

$output0 .= '" method="post" name="editform" role="form">
        <div class="form-group">
            <input class="form-control" type="text" name="file[rename][0][target]" value="';
$array4 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('fileName', $array4), ENT_QUOTES);

$output0 .= '"
                   data-original="';
$array5 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('fileName', $array5), ENT_QUOTES);

$output0 .= '" style="width:384px;"/>
            <input type="hidden" name="file[rename][0][data]" value="';
$array6 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('fileIdentifier', $array6), ENT_QUOTES);

$output0 .= '"/>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
                <input type="hidden" name="file[rename][0][destination]" value="';
$array13 = array (
);
$output12 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('destination', $array13), ENT_QUOTES);

$output12 .= '"/>
                <input type="hidden" name="file[rename][0][conflictMode]" value="';
$array14 = array (
);
$output12 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('conflictMode', $array14), ENT_QUOTES);

$output12 .= '"/>
            ';
return $output12;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('destination', $array10);

$expression11 = function($context) {return ($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments7['__thenClosure'] = $renderChildrenClosure8;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
        </div>
        <div class="form-group">
            <input class="btn btn-primary t3js-submit-file-rename" type="submit"
                   value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['key'] = NULL;
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:file_rename.php.submit';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext), ENT_QUOTES);

$output0 .= '"/>
            <input class="btn btn-danger" type="submit"
                   value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['htmlEscape'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.cancel';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext), ENT_QUOTES);

$output0 .= '"
                   onclick="backToList(); return false;"/>
            <input type="hidden" name="redirect" value="';
$array19 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('returnUrl', $array19), ENT_QUOTES);

$output0 .= '"/>
        </div>
    </form>
</div>
';

return $output0;
}


}
#2993743042    6019      