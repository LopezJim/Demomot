<?php

class Standard_action_Module_de5f93028bdbf55d61b5765554624af56e3d4b70 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="module" data-module-id="';
$array1 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('moduleId', $array1), ENT_QUOTES);

$output0 .= '" data-module-name="';
$array2 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('moduleName', $array2), ENT_QUOTES);

$output0 .= '">
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$array18 = array (
);return $renderingContext->getVariableProvider()->getByPath('formTag', $array18);
};
$arguments16 = array();
$arguments16['value'] = NULL;

$output15 .= isset($arguments16['value']) ? $arguments16['value'] : $renderChildrenClosure17();

$output15 .= '
		';
return $output15;
};
$arguments13 = array();

$output12 .= '';

$output12 .= '
	';
return $output12;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('formTag', $array10);

$expression11 = function($context) {return ($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$array8 = array (
);return $renderingContext->getVariableProvider()->getByPath('formTag', $array8);
};
$arguments6 = array();
$arguments6['value'] = NULL;

$output5 .= isset($arguments6['value']) ? $arguments6['value'] : $renderChildrenClosure7();

$output5 .= '
		';
return $output5;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
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
$arguments25['partial'] = 'DocHeader';
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['docHeader'] = $renderingContext->getVariableProvider()->getByPath('docHeader', $array28);
$arguments25['arguments'] = $array27;

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
	';
return $output24;
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['0'] = $renderingContext->getVariableProvider()->getByPath('docHeader.enabled', $array22);

$expression23 = function($context) {return ($context["node0"]);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
$arguments19['__thenClosure'] = $renderChildrenClosure20;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '
	<div class="module-body t3js-module-body">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['queueIdentifier'] = NULL;
$arguments29['as'] = NULL;
$array31 = array (
);$arguments29['queueIdentifier'] = $renderingContext->getVariableProvider()->getByPath('flashMessageQueueIdentifier', $array31);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$array34 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array34);
};
$arguments32 = array();
$arguments32['value'] = NULL;

$output0 .= isset($arguments32['value']) ? $arguments32['value'] : $renderChildrenClosure33();

$output0 .= '
	</div>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return '
			</form>
		';
};
$arguments41 = array();

$output40 .= '';

$output40 .= '
	';
return $output40;
};
$arguments35 = array();
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$arguments35['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['0'] = $renderingContext->getVariableProvider()->getByPath('formTag', $array38);

$expression39 = function($context) {return ($context["node0"]);};
$arguments35['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments35['__thenClosure'] = function() use ($renderingContext, $self) {
return '
			</form>
		';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output0 .= '
</div>
';

return $output0;
}


}
#2994619421    7709      