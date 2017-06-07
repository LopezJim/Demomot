<?php

class List_action_index_cd9342455b2f102e1fcad7a4a9344dbfe1bdf045 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'main';
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
  'em' => 
  array (
    0 => 'TYPO3\\CMS\\Extensionmanager\\ViewHelpers',
  ),
));
}

/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<h1>';
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
$arguments1['key'] = 'installedExtensions';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext), ENT_QUOTES);

$output0 .= '</h1>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['section'] = NULL;
$arguments4['partial'] = NULL;
$arguments4['delegate'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$arguments4['default'] = NULL;
$arguments4['contentAs'] = NULL;
$arguments4['partial'] = 'List/UploadForm';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '

	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['name'] = NULL;
$arguments6['value'] = NULL;
$arguments6['property'] = NULL;
$arguments6['autofocus'] = NULL;
$arguments6['disabled'] = NULL;
$arguments6['maxlength'] = NULL;
$arguments6['readonly'] = NULL;
$arguments6['size'] = NULL;
$arguments6['placeholder'] = NULL;
$arguments6['pattern'] = NULL;
$arguments6['errorClass'] = 'f3-form-error';
$arguments6['class'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$arguments6['required'] = false;
$arguments6['type'] = 'text';
$arguments6['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['key'] = NULL;
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['htmlEscape'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$arguments8['key'] = 'extensionList.search';
$arguments6['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
$arguments6['id'] = 'Tx_Extensionmanager_extensionkey';
$array10 = array (
);$arguments6['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array10);
$arguments6['class'] = 'form-control';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
		</div>
	</form>
	<br>
	<div class="table-fit">
		<table id="typo3-extension-list" class="table table-striped table-hover typo3-extension-list">
		<thead>
			<tr>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['key'] = 'extensionList.header.title.update';

$output3 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext), ENT_QUOTES);

$output3 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['key'] = NULL;
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['key'] = 'extensionList.header.update';

$output3 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext), ENT_QUOTES);

$output3 .= '</th>
				<th title="';
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
$arguments15['key'] = 'extensionList.header.title.activate';

$output3 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext), ENT_QUOTES);

$output3 .= '">';
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
$arguments17['key'] = 'extensionList.header.activate';

$output3 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext), ENT_QUOTES);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['htmlEscape'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['key'] = 'extensionList.header.extensionName';

$output3 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext), ENT_QUOTES);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['key'] = NULL;
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['htmlEscape'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['key'] = 'extensionList.header.extensionKey';

$output3 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext), ENT_QUOTES);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['key'] = NULL;
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['htmlEscape'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['key'] = 'extensionList.header.extensionVersion';

$output3 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext), ENT_QUOTES);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['key'] = NULL;
$arguments25['id'] = NULL;
$arguments25['default'] = NULL;
$arguments25['htmlEscape'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['key'] = 'extensionList.header.extensionState';

$output3 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext), ENT_QUOTES);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['key'] = NULL;
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['htmlEscape'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['key'] = 'extensionList.header.extensionActions';

$output3 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext), ENT_QUOTES);

$output3 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
						<tr id="';
$array66 = array (
);
$output65 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extensionKey', $array66), ENT_QUOTES);

$output65 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$arguments67['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array70), ENT_QUOTES);
$array69['1'] = ' == -1';

$expression71 = function($context) {return (($context["node0"]) == -1);};
$arguments67['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);
$arguments67['then'] = 'insecure';

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['then'] = NULL;
$arguments72['else'] = NULL;
$arguments72['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array74 = array();
$array75 = array (
);$array74['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array75), ENT_QUOTES);
$array74['1'] = ' == -2';

$expression76 = function($context) {return (($context["node0"]) == -2);};
$arguments72['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression76(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)
					),
					$renderingContext
				);
$arguments72['then'] = 'outdated';

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output65 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.installed', $array80), ENT_QUOTES);

$expression81 = function($context) {return ($context["node0"]);};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
$arguments77['then'] = '';
$arguments77['else'] = 'inactive';

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output65 .= '">
					';
return $output65;
};
$arguments63 = array();

$output62 .= '';

$output62 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
						<tr id="';
$array85 = array (
);
$output84 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extensionKey', $array85), ENT_QUOTES);

$output84 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['then'] = NULL;
$arguments86['else'] = NULL;
$arguments86['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array88 = array();
$array89 = array (
);$array88['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.installed', $array89), ENT_QUOTES);

$expression90 = function($context) {return ($context["node0"]);};
$arguments86['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression90(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array88)
					),
					$renderingContext
				);
$arguments86['then'] = '';
$arguments86['else'] = 'inactive';

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output84 .= '">
					';
return $output84;
};
$arguments82 = array();
$arguments82['if'] = NULL;

$output62 .= '';

$output62 .= '
				';
return $output62;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject', $array60);

$expression61 = function($context) {return ($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression61(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
						<tr id="';
$array36 = array (
);
$output35 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extensionKey', $array36), ENT_QUOTES);

$output35 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['then'] = NULL;
$arguments37['else'] = NULL;
$arguments37['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array40), ENT_QUOTES);
$array39['1'] = ' == -1';

$expression41 = function($context) {return (($context["node0"]) == -1);};
$arguments37['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression41(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);
$arguments37['then'] = 'insecure';

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$arguments42['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array44 = array();
$array45 = array (
);$array44['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array45), ENT_QUOTES);
$array44['1'] = ' == -2';

$expression46 = function($context) {return (($context["node0"]) == -2);};
$arguments42['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression46(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)
					),
					$renderingContext
				);
$arguments42['then'] = 'outdated';

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output35 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$arguments47['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.installed', $array50), ENT_QUOTES);

$expression51 = function($context) {return ($context["node0"]);};
$arguments47['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);
$arguments47['then'] = '';
$arguments47['else'] = 'inactive';

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output35 .= '">
					';
return $output35;
};
$arguments33['__elseClosures'][] = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
						<tr id="';
$array53 = array (
);
$output52 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extensionKey', $array53), ENT_QUOTES);

$output52 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['then'] = NULL;
$arguments54['else'] = NULL;
$arguments54['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array56 = array();
$array57 = array (
);$array56['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.installed', $array57), ENT_QUOTES);

$expression58 = function($context) {return ($context["node0"]);};
$arguments54['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression58(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array56)
					),
					$renderingContext
				);
$arguments54['then'] = '';
$arguments54['else'] = 'inactive';

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output52 .= '">
					';
return $output52;
};

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['key'] = NULL;
$arguments126['id'] = NULL;
$arguments126['default'] = NULL;
$arguments126['htmlEscape'] = NULL;
$arguments126['arguments'] = NULL;
$arguments126['extensionName'] = NULL;
$arguments126['key'] = 'extensionList.updateDisabled';

$output125 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext), ENT_QUOTES);

$output125 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['identifier'] = NULL;
$arguments128['size'] = 'small';
$arguments128['overlay'] = NULL;
$arguments128['state'] = 'default';
$arguments128['alternativeMarkupIdentifier'] = NULL;
$arguments128['identifier'] = 'actions-system-extension-update';

$output125 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output125 .= '
								</span>
							';
return $output125;
};
$arguments123 = array();

$output122 .= '';

$output122 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['identifier'] = NULL;
$arguments145['size'] = 'small';
$arguments145['overlay'] = NULL;
$arguments145['state'] = 'default';
$arguments145['alternativeMarkupIdentifier'] = NULL;
$arguments145['identifier'] = 'actions-system-extension-update';

$output144 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output144 .= '
									';
return $output144;
};
$arguments133 = array();
$arguments133['action'] = NULL;
$arguments133['arguments'] = array (
);
$arguments133['controller'] = NULL;
$arguments133['extensionName'] = NULL;
$arguments133['pluginName'] = NULL;
$arguments133['pageUid'] = NULL;
$arguments133['pageType'] = 0;
$arguments133['noCache'] = false;
$arguments133['noCacheHash'] = false;
$arguments133['section'] = '';
$arguments133['format'] = '';
$arguments133['linkAccessRestrictedPages'] = false;
$arguments133['additionalParams'] = array (
);
$arguments133['absolute'] = false;
$arguments133['addQueryString'] = false;
$arguments133['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments133['addQueryStringMethod'] = NULL;
$arguments133['additionalAttributes'] = NULL;
$arguments133['data'] = NULL;
$arguments133['class'] = NULL;
$arguments133['dir'] = NULL;
$arguments133['id'] = NULL;
$arguments133['lang'] = NULL;
$arguments133['style'] = NULL;
$arguments133['title'] = NULL;
$arguments133['accesskey'] = NULL;
$arguments133['tabindex'] = NULL;
$arguments133['onclick'] = NULL;
$arguments133['name'] = NULL;
$arguments133['rel'] = NULL;
$arguments133['rev'] = NULL;
$arguments133['target'] = NULL;
$arguments133['action'] = 'updateCommentForUpdatableVersions';
$arguments133['class'] = 'btn btn-default';
// Rendering Array
$array135 = array();
$array135['data-action'] = 'update-extension';
$arguments133['additionalAttributes'] = $array135;
$arguments133['format'] = 'json';
$arguments133['controller'] = 'Download';
// Rendering Array
$array136 = array();
$array137 = array (
);$array136['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array137);
$array138 = array (
);$array136['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array138);
$array139 = array (
);$array136['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array139);
$arguments133['arguments'] = $array136;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['key'] = NULL;
$arguments140['id'] = NULL;
$arguments140['default'] = NULL;
$arguments140['htmlEscape'] = NULL;
$arguments140['arguments'] = NULL;
$arguments140['extensionName'] = NULL;
$arguments140['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array143);
$arguments140['arguments'] = $array142;
$arguments133['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output132 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output132 .= '
							';
return $output132;
};
$arguments130 = array();
$arguments130['if'] = NULL;

$output122 .= '';

$output122 .= '
						';
return $output122;
};
$arguments97 = array();
$arguments97['then'] = NULL;
$arguments97['else'] = NULL;
$arguments97['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['0'] = $renderingContext->getVariableProvider()->getByPath('extension.state', $array120);
$array119['1'] = ' == \'excludeFromUpdates\'';

$expression121 = function($context) {return (($context["node0"]) == 'excludeFromUpdates');};
$arguments97['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression121(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array119)
					),
					$renderingContext
				);
$arguments97['__thenClosure'] = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['key'] = NULL;
$arguments100['id'] = NULL;
$arguments100['default'] = NULL;
$arguments100['htmlEscape'] = NULL;
$arguments100['arguments'] = NULL;
$arguments100['extensionName'] = NULL;
$arguments100['key'] = 'extensionList.updateDisabled';

$output99 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext), ENT_QUOTES);

$output99 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['identifier'] = NULL;
$arguments102['size'] = 'small';
$arguments102['overlay'] = NULL;
$arguments102['state'] = 'default';
$arguments102['alternativeMarkupIdentifier'] = NULL;
$arguments102['identifier'] = 'actions-system-extension-update';

$output99 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output99 .= '
								</span>
							';
return $output99;
};
$arguments97['__elseClosures'][] = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['identifier'] = NULL;
$arguments117['size'] = 'small';
$arguments117['overlay'] = NULL;
$arguments117['state'] = 'default';
$arguments117['alternativeMarkupIdentifier'] = NULL;
$arguments117['identifier'] = 'actions-system-extension-update';

$output116 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= '
									';
return $output116;
};
$arguments105 = array();
$arguments105['action'] = NULL;
$arguments105['arguments'] = array (
);
$arguments105['controller'] = NULL;
$arguments105['extensionName'] = NULL;
$arguments105['pluginName'] = NULL;
$arguments105['pageUid'] = NULL;
$arguments105['pageType'] = 0;
$arguments105['noCache'] = false;
$arguments105['noCacheHash'] = false;
$arguments105['section'] = '';
$arguments105['format'] = '';
$arguments105['linkAccessRestrictedPages'] = false;
$arguments105['additionalParams'] = array (
);
$arguments105['absolute'] = false;
$arguments105['addQueryString'] = false;
$arguments105['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments105['addQueryStringMethod'] = NULL;
$arguments105['additionalAttributes'] = NULL;
$arguments105['data'] = NULL;
$arguments105['class'] = NULL;
$arguments105['dir'] = NULL;
$arguments105['id'] = NULL;
$arguments105['lang'] = NULL;
$arguments105['style'] = NULL;
$arguments105['title'] = NULL;
$arguments105['accesskey'] = NULL;
$arguments105['tabindex'] = NULL;
$arguments105['onclick'] = NULL;
$arguments105['name'] = NULL;
$arguments105['rel'] = NULL;
$arguments105['rev'] = NULL;
$arguments105['target'] = NULL;
$arguments105['action'] = 'updateCommentForUpdatableVersions';
$arguments105['class'] = 'btn btn-default';
// Rendering Array
$array107 = array();
$array107['data-action'] = 'update-extension';
$arguments105['additionalAttributes'] = $array107;
$arguments105['format'] = 'json';
$arguments105['controller'] = 'Download';
// Rendering Array
$array108 = array();
$array109 = array (
);$array108['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array109);
$array110 = array (
);$array108['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array110);
$array111 = array (
);$array108['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array111);
$arguments105['arguments'] = $array108;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['key'] = NULL;
$arguments112['id'] = NULL;
$arguments112['default'] = NULL;
$arguments112['htmlEscape'] = NULL;
$arguments112['arguments'] = NULL;
$arguments112['extensionName'] = NULL;
$arguments112['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array114 = array();
$array115 = array (
);$array114['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array115);
$arguments112['arguments'] = $array114;
$arguments105['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
							';
return $output104;
};

$output96 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
					';
return $output96;
};
$arguments91 = array();
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array93 = array();
$array94 = array (
);$array93['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateAvailable', $array94);

$expression95 = function($context) {return ($context["node0"]);};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = $renderChildrenClosure92;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output32 .= '
				</td>
				<td data-order="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments147 = array();
$arguments147['then'] = NULL;
$arguments147['else'] = NULL;
$arguments147['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array149 = array();
$array150 = array (
);$array149['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array150);

$expression151 = function($context) {return ($context["node0"]);};
$arguments147['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array149)
					),
					$renderingContext
				);
$arguments147['then'] = 'active';
$arguments147['else'] = 'inactive';

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output32 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments152 = array();
$arguments152['additionalAttributes'] = NULL;
$arguments152['data'] = NULL;
$arguments152['class'] = NULL;
$arguments152['dir'] = NULL;
$arguments152['id'] = NULL;
$arguments152['lang'] = NULL;
$arguments152['style'] = NULL;
$arguments152['title'] = NULL;
$arguments152['accesskey'] = NULL;
$arguments152['tabindex'] = NULL;
$arguments152['onclick'] = NULL;
$arguments152['name'] = NULL;
$arguments152['rel'] = NULL;
$arguments152['rev'] = NULL;
$arguments152['target'] = NULL;
$arguments152['extension'] = NULL;
$array154 = array (
);$arguments152['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array154);

$output32 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output32 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
						<img class="ext-icon" src="../';
$array161 = array (
);
$output160 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.siteRelPath', $array161), ENT_QUOTES);
$array162 = array (
);
$output160 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array162), ENT_QUOTES);

$output160 .= '" alt="';
$array163 = array (
);
$output160 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.title', $array163), ENT_QUOTES);

$output160 .= '" />
					';
return $output160;
};
$arguments155 = array();
$arguments155['then'] = NULL;
$arguments155['else'] = NULL;
$arguments155['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array157 = array();
$array158 = array (
);$array157['0'] = $renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array158);

$expression159 = function($context) {return ($context["node0"]);};
$arguments155['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression159(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array157)
					),
					$renderingContext
				);
$arguments155['__thenClosure'] = $renderChildrenClosure156;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output32 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$array171 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.title', $array171), ENT_QUOTES);
};
$arguments164 = array();
$arguments164['additionalAttributes'] = NULL;
$arguments164['data'] = NULL;
$arguments164['class'] = NULL;
$arguments164['dir'] = NULL;
$arguments164['id'] = NULL;
$arguments164['lang'] = NULL;
$arguments164['style'] = NULL;
$arguments164['title'] = NULL;
$arguments164['accesskey'] = NULL;
$arguments164['tabindex'] = NULL;
$arguments164['onclick'] = NULL;
$arguments164['name'] = NULL;
$arguments164['rel'] = NULL;
$arguments164['rev'] = NULL;
$arguments164['target'] = NULL;
$arguments164['extension'] = NULL;
$arguments164['forceConfiguration'] = true;
$arguments164['showDescription'] = false;
$array166 = array (
);$arguments164['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array166);
// Rendering Boolean node
// Rendering Array
$array167 = array();
$array167['0'] = 0;

$expression168 = function($context) {return ($context["node0"]);};
$arguments164['forceConfiguration'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression168(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array167)
					),
					$renderingContext
				);
// Rendering Boolean node
// Rendering Array
$array169 = array();
$array169['0'] = 1;

$expression170 = function($context) {return ($context["node0"]);};
$arguments164['showDescription'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression170(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array169)
					),
					$renderingContext
				);

$output32 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output32 .= '
				</td>
				<td>
					';
$array172 = array (
);
$output32 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extensionKey', $array172), ENT_QUOTES);

$output32 .= '
				</td>
				<td>
					';
$array173 = array (
);
$output32 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.version', $array173), ENT_QUOTES);

$output32 .= '
				</td>
				<td>
					<span class="label label-';
$array174 = array (
);
$output32 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.state', $array174), ENT_QUOTES);

$output32 .= '">';
$array175 = array (
);
$output32 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.state', $array175), ENT_QUOTES);

$output32 .= '</span>
				</td>
				<td>
					<div class="btn-group">
						';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['identifier'] = NULL;
$arguments186['size'] = 'small';
$arguments186['overlay'] = NULL;
$arguments186['state'] = 'default';
$arguments186['alternativeMarkupIdentifier'] = NULL;
$arguments186['identifier'] = 'actions-system-extension-configure';

$output185 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output185 .= '
							';
return $output185;
};
$arguments180 = array();
$arguments180['additionalAttributes'] = NULL;
$arguments180['data'] = NULL;
$arguments180['class'] = NULL;
$arguments180['dir'] = NULL;
$arguments180['id'] = NULL;
$arguments180['lang'] = NULL;
$arguments180['style'] = NULL;
$arguments180['title'] = NULL;
$arguments180['accesskey'] = NULL;
$arguments180['tabindex'] = NULL;
$arguments180['onclick'] = NULL;
$arguments180['name'] = NULL;
$arguments180['rel'] = NULL;
$arguments180['rev'] = NULL;
$arguments180['target'] = NULL;
$arguments180['extension'] = NULL;
$arguments180['forceConfiguration'] = true;
$arguments180['showDescription'] = false;
$arguments180['class'] = 'btn btn-default';
$array182 = array (
);$arguments180['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array182);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['key'] = NULL;
$arguments183['id'] = NULL;
$arguments183['default'] = NULL;
$arguments183['htmlEscape'] = NULL;
$arguments183['arguments'] = NULL;
$arguments183['extensionName'] = NULL;
$arguments183['key'] = 'extensionList.configure';
$arguments180['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output179 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['additionalAttributes'] = NULL;
$arguments188['data'] = NULL;
$arguments188['class'] = NULL;
$arguments188['dir'] = NULL;
$arguments188['id'] = NULL;
$arguments188['lang'] = NULL;
$arguments188['style'] = NULL;
$arguments188['title'] = NULL;
$arguments188['accesskey'] = NULL;
$arguments188['tabindex'] = NULL;
$arguments188['onclick'] = NULL;
$arguments188['name'] = NULL;
$arguments188['rel'] = NULL;
$arguments188['rev'] = NULL;
$arguments188['target'] = NULL;
$arguments188['extensionKey'] = NULL;
$arguments188['class'] = 'btn btn-default';
$array190 = array (
);$arguments188['extensionKey'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array190);

$output179 .= TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output179 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['additionalAttributes'] = NULL;
$arguments191['data'] = NULL;
$arguments191['class'] = NULL;
$arguments191['dir'] = NULL;
$arguments191['id'] = NULL;
$arguments191['lang'] = NULL;
$arguments191['style'] = NULL;
$arguments191['title'] = NULL;
$arguments191['accesskey'] = NULL;
$arguments191['tabindex'] = NULL;
$arguments191['onclick'] = NULL;
$arguments191['name'] = NULL;
$arguments191['rel'] = NULL;
$arguments191['rev'] = NULL;
$arguments191['target'] = NULL;
$arguments191['extension'] = NULL;
$arguments191['class'] = 'btn btn-default';
$array193 = array (
);$arguments191['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array193);

$output179 .= TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output179 .= '
							<span class="btn btn-default">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$output200 = '';

$output200 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['identifier'] = NULL;
$arguments201['size'] = 'small';
$arguments201['overlay'] = NULL;
$arguments201['state'] = 'default';
$arguments201['alternativeMarkupIdentifier'] = NULL;
$arguments201['identifier'] = 'actions-system-extension-download';

$output200 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output200 .= '
								';
return $output200;
};
$arguments194 = array();
$arguments194['action'] = NULL;
$arguments194['arguments'] = array (
);
$arguments194['controller'] = NULL;
$arguments194['extensionName'] = NULL;
$arguments194['pluginName'] = NULL;
$arguments194['pageUid'] = NULL;
$arguments194['pageType'] = 0;
$arguments194['noCache'] = false;
$arguments194['noCacheHash'] = false;
$arguments194['section'] = '';
$arguments194['format'] = '';
$arguments194['linkAccessRestrictedPages'] = false;
$arguments194['additionalParams'] = array (
);
$arguments194['absolute'] = false;
$arguments194['addQueryString'] = false;
$arguments194['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments194['addQueryStringMethod'] = NULL;
$arguments194['additionalAttributes'] = NULL;
$arguments194['data'] = NULL;
$arguments194['class'] = NULL;
$arguments194['dir'] = NULL;
$arguments194['id'] = NULL;
$arguments194['lang'] = NULL;
$arguments194['style'] = NULL;
$arguments194['title'] = NULL;
$arguments194['accesskey'] = NULL;
$arguments194['tabindex'] = NULL;
$arguments194['onclick'] = NULL;
$arguments194['name'] = NULL;
$arguments194['rel'] = NULL;
$arguments194['rev'] = NULL;
$arguments194['target'] = NULL;
$arguments194['action'] = 'downloadExtensionZip';
$arguments194['controller'] = 'Action';
// Rendering Array
$array196 = array();
$array197 = array (
);$array196['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array197);
$arguments194['arguments'] = $array196;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments198 = array();
$arguments198['key'] = NULL;
$arguments198['id'] = NULL;
$arguments198['default'] = NULL;
$arguments198['htmlEscape'] = NULL;
$arguments198['arguments'] = NULL;
$arguments198['extensionName'] = NULL;
$arguments198['key'] = 'extensionList.downloadzip';
$arguments194['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output179 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output179 .= '
							</span>
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['additionalAttributes'] = NULL;
$arguments203['data'] = NULL;
$arguments203['class'] = NULL;
$arguments203['dir'] = NULL;
$arguments203['id'] = NULL;
$arguments203['lang'] = NULL;
$arguments203['style'] = NULL;
$arguments203['title'] = NULL;
$arguments203['accesskey'] = NULL;
$arguments203['tabindex'] = NULL;
$arguments203['onclick'] = NULL;
$arguments203['name'] = NULL;
$arguments203['rel'] = NULL;
$arguments203['rev'] = NULL;
$arguments203['target'] = NULL;
$arguments203['extension'] = NULL;
$arguments203['class'] = 'btn btn-default';
$array205 = array (
);$arguments203['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array205);

$output179 .= TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output179 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['additionalAttributes'] = NULL;
$arguments206['data'] = NULL;
$arguments206['class'] = NULL;
$arguments206['dir'] = NULL;
$arguments206['id'] = NULL;
$arguments206['lang'] = NULL;
$arguments206['style'] = NULL;
$arguments206['title'] = NULL;
$arguments206['accesskey'] = NULL;
$arguments206['tabindex'] = NULL;
$arguments206['onclick'] = NULL;
$arguments206['name'] = NULL;
$arguments206['rel'] = NULL;
$arguments206['rev'] = NULL;
$arguments206['target'] = NULL;
$arguments206['extension'] = NULL;
$arguments206['class'] = 'btn btn-default';
$array208 = array (
);$arguments206['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array208);

$output179 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output179 .= '
						';
return $output179;
};
$arguments176 = array();
$arguments176['additionalAttributes'] = NULL;
$arguments176['data'] = NULL;
$arguments176['extension'] = NULL;
$array178 = array (
);$arguments176['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array178);

$output32 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output32 .= '
					</div>
				</td>
				</tr>
			';
return $output32;
};
$arguments29 = array();
$arguments29['each'] = NULL;
$arguments29['as'] = NULL;
$arguments29['key'] = NULL;
$arguments29['reverse'] = false;
$arguments29['iteration'] = NULL;
$array31 = array (
);$arguments29['each'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array31);
$arguments29['as'] = 'extension';
$arguments29['key'] = 'extensionKey';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output3 .= '
		</tbody>
	</table>
	</div>
';

return $output3;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output209 = '';

$output209 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments210 = array();
$arguments210['name'] = NULL;
$arguments210['name'] = 'main';

$output209 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext), ENT_QUOTES);

$output209 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$output214 = '';

$output214 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['key'] = NULL;
$arguments215['id'] = NULL;
$arguments215['default'] = NULL;
$arguments215['htmlEscape'] = NULL;
$arguments215['arguments'] = NULL;
$arguments215['extensionName'] = NULL;
$arguments215['key'] = 'installedExtensions';

$output214 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext), ENT_QUOTES);

$output214 .= '</h1>
';
return $output214;
};
$arguments212 = array();
$arguments212['name'] = NULL;
$arguments212['name'] = 'headline';

$output209 .= '';

$output209 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments220 = array();
$arguments220['section'] = NULL;
$arguments220['partial'] = NULL;
$arguments220['delegate'] = NULL;
$arguments220['arguments'] = array (
);
$arguments220['optional'] = false;
$arguments220['default'] = NULL;
$arguments220['contentAs'] = NULL;
$arguments220['partial'] = 'List/UploadForm';

$output219 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output219 .= '

	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments222 = array();
$arguments222['additionalAttributes'] = NULL;
$arguments222['data'] = NULL;
$arguments222['name'] = NULL;
$arguments222['value'] = NULL;
$arguments222['property'] = NULL;
$arguments222['autofocus'] = NULL;
$arguments222['disabled'] = NULL;
$arguments222['maxlength'] = NULL;
$arguments222['readonly'] = NULL;
$arguments222['size'] = NULL;
$arguments222['placeholder'] = NULL;
$arguments222['pattern'] = NULL;
$arguments222['errorClass'] = 'f3-form-error';
$arguments222['class'] = NULL;
$arguments222['dir'] = NULL;
$arguments222['id'] = NULL;
$arguments222['lang'] = NULL;
$arguments222['style'] = NULL;
$arguments222['title'] = NULL;
$arguments222['accesskey'] = NULL;
$arguments222['tabindex'] = NULL;
$arguments222['onclick'] = NULL;
$arguments222['required'] = false;
$arguments222['type'] = 'text';
$arguments222['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments224 = array();
$arguments224['key'] = NULL;
$arguments224['id'] = NULL;
$arguments224['default'] = NULL;
$arguments224['htmlEscape'] = NULL;
$arguments224['arguments'] = NULL;
$arguments224['extensionName'] = NULL;
$arguments224['key'] = 'extensionList.search';
$arguments222['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);
$arguments222['id'] = 'Tx_Extensionmanager_extensionkey';
$array226 = array (
);$arguments222['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array226);
$arguments222['class'] = 'form-control';

$output219 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output219 .= '
		</div>
	</form>
	<br>
	<div class="table-fit">
		<table id="typo3-extension-list" class="table table-striped table-hover typo3-extension-list">
		<thead>
			<tr>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['key'] = NULL;
$arguments227['id'] = NULL;
$arguments227['default'] = NULL;
$arguments227['htmlEscape'] = NULL;
$arguments227['arguments'] = NULL;
$arguments227['extensionName'] = NULL;
$arguments227['key'] = 'extensionList.header.title.update';

$output219 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext), ENT_QUOTES);

$output219 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['key'] = NULL;
$arguments229['id'] = NULL;
$arguments229['default'] = NULL;
$arguments229['htmlEscape'] = NULL;
$arguments229['arguments'] = NULL;
$arguments229['extensionName'] = NULL;
$arguments229['key'] = 'extensionList.header.update';

$output219 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext), ENT_QUOTES);

$output219 .= '</th>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['key'] = NULL;
$arguments231['id'] = NULL;
$arguments231['default'] = NULL;
$arguments231['htmlEscape'] = NULL;
$arguments231['arguments'] = NULL;
$arguments231['extensionName'] = NULL;
$arguments231['key'] = 'extensionList.header.title.activate';

$output219 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext), ENT_QUOTES);

$output219 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['key'] = NULL;
$arguments233['id'] = NULL;
$arguments233['default'] = NULL;
$arguments233['htmlEscape'] = NULL;
$arguments233['arguments'] = NULL;
$arguments233['extensionName'] = NULL;
$arguments233['key'] = 'extensionList.header.activate';

$output219 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext), ENT_QUOTES);

$output219 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments235 = array();
$arguments235['key'] = NULL;
$arguments235['id'] = NULL;
$arguments235['default'] = NULL;
$arguments235['htmlEscape'] = NULL;
$arguments235['arguments'] = NULL;
$arguments235['extensionName'] = NULL;
$arguments235['key'] = 'extensionList.header.extensionName';

$output219 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext), ENT_QUOTES);

$output219 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['key'] = NULL;
$arguments237['id'] = NULL;
$arguments237['default'] = NULL;
$arguments237['htmlEscape'] = NULL;
$arguments237['arguments'] = NULL;
$arguments237['extensionName'] = NULL;
$arguments237['key'] = 'extensionList.header.extensionKey';

$output219 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext), ENT_QUOTES);

$output219 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments239 = array();
$arguments239['key'] = NULL;
$arguments239['id'] = NULL;
$arguments239['default'] = NULL;
$arguments239['htmlEscape'] = NULL;
$arguments239['arguments'] = NULL;
$arguments239['extensionName'] = NULL;
$arguments239['key'] = 'extensionList.header.extensionVersion';

$output219 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext), ENT_QUOTES);

$output219 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['key'] = NULL;
$arguments241['id'] = NULL;
$arguments241['default'] = NULL;
$arguments241['htmlEscape'] = NULL;
$arguments241['arguments'] = NULL;
$arguments241['extensionName'] = NULL;
$arguments241['key'] = 'extensionList.header.extensionState';

$output219 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext), ENT_QUOTES);

$output219 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['key'] = NULL;
$arguments243['id'] = NULL;
$arguments243['default'] = NULL;
$arguments243['htmlEscape'] = NULL;
$arguments243['arguments'] = NULL;
$arguments243['extensionName'] = NULL;
$arguments243['key'] = 'extensionList.header.extensionActions';

$output219 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext), ENT_QUOTES);

$output219 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$output248 = '';

$output248 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
$output278 = '';

$output278 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
$output281 = '';

$output281 .= '
						<tr id="';
$array282 = array (
);
$output281 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extensionKey', $array282), ENT_QUOTES);

$output281 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments283 = array();
$arguments283['then'] = NULL;
$arguments283['else'] = NULL;
$arguments283['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array285 = array();
$array286 = array (
);$array285['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array286), ENT_QUOTES);
$array285['1'] = ' == -1';

$expression287 = function($context) {return (($context["node0"]) == -1);};
$arguments283['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression287(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array285)
					),
					$renderingContext
				);
$arguments283['then'] = 'insecure';

$output281 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments288 = array();
$arguments288['then'] = NULL;
$arguments288['else'] = NULL;
$arguments288['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array290 = array();
$array291 = array (
);$array290['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array291), ENT_QUOTES);
$array290['1'] = ' == -2';

$expression292 = function($context) {return (($context["node0"]) == -2);};
$arguments288['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression292(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array290)
					),
					$renderingContext
				);
$arguments288['then'] = 'outdated';

$output281 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output281 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments293 = array();
$arguments293['then'] = NULL;
$arguments293['else'] = NULL;
$arguments293['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array295 = array();
$array296 = array (
);$array295['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.installed', $array296), ENT_QUOTES);

$expression297 = function($context) {return ($context["node0"]);};
$arguments293['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression297(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array295)
					),
					$renderingContext
				);
$arguments293['then'] = '';
$arguments293['else'] = 'inactive';

$output281 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output281 .= '">
					';
return $output281;
};
$arguments279 = array();

$output278 .= '';

$output278 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$output300 = '';

$output300 .= '
						<tr id="';
$array301 = array (
);
$output300 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extensionKey', $array301), ENT_QUOTES);

$output300 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments302 = array();
$arguments302['then'] = NULL;
$arguments302['else'] = NULL;
$arguments302['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array304 = array();
$array305 = array (
);$array304['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.installed', $array305), ENT_QUOTES);

$expression306 = function($context) {return ($context["node0"]);};
$arguments302['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression306(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array304)
					),
					$renderingContext
				);
$arguments302['then'] = '';
$arguments302['else'] = 'inactive';

$output300 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);

$output300 .= '">
					';
return $output300;
};
$arguments298 = array();
$arguments298['if'] = NULL;

$output278 .= '';

$output278 .= '
				';
return $output278;
};
$arguments249 = array();
$arguments249['then'] = NULL;
$arguments249['else'] = NULL;
$arguments249['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array275 = array();
$array276 = array (
);$array275['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject', $array276);

$expression277 = function($context) {return ($context["node0"]);};
$arguments249['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression277(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array275)
					),
					$renderingContext
				);
$arguments249['__thenClosure'] = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
						<tr id="';
$array252 = array (
);
$output251 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extensionKey', $array252), ENT_QUOTES);

$output251 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['then'] = NULL;
$arguments253['else'] = NULL;
$arguments253['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array255 = array();
$array256 = array (
);$array255['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array256), ENT_QUOTES);
$array255['1'] = ' == -1';

$expression257 = function($context) {return (($context["node0"]) == -1);};
$arguments253['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression257(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array255)
					),
					$renderingContext
				);
$arguments253['then'] = 'insecure';

$output251 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments258 = array();
$arguments258['then'] = NULL;
$arguments258['else'] = NULL;
$arguments258['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array260 = array();
$array261 = array (
);$array260['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array261), ENT_QUOTES);
$array260['1'] = ' == -2';

$expression262 = function($context) {return (($context["node0"]) == -2);};
$arguments258['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression262(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array260)
					),
					$renderingContext
				);
$arguments258['then'] = 'outdated';

$output251 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext);

$output251 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments263 = array();
$arguments263['then'] = NULL;
$arguments263['else'] = NULL;
$arguments263['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array265 = array();
$array266 = array (
);$array265['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.installed', $array266), ENT_QUOTES);

$expression267 = function($context) {return ($context["node0"]);};
$arguments263['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression267(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array265)
					),
					$renderingContext
				);
$arguments263['then'] = '';
$arguments263['else'] = 'inactive';

$output251 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output251 .= '">
					';
return $output251;
};
$arguments249['__elseClosures'][] = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '
						<tr id="';
$array269 = array (
);
$output268 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extensionKey', $array269), ENT_QUOTES);

$output268 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['then'] = NULL;
$arguments270['else'] = NULL;
$arguments270['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array272 = array();
$array273 = array (
);$array272['0'] = htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.installed', $array273), ENT_QUOTES);

$expression274 = function($context) {return ($context["node0"]);};
$arguments270['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression274(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array272)
					),
					$renderingContext
				);
$arguments270['then'] = '';
$arguments270['else'] = 'inactive';

$output268 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext);

$output268 .= '">
					';
return $output268;
};

$output248 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output248 .= '
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
$output312 = '';

$output312 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$output338 = '';

$output338 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
$output341 = '';

$output341 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments342 = array();
$arguments342['key'] = NULL;
$arguments342['id'] = NULL;
$arguments342['default'] = NULL;
$arguments342['htmlEscape'] = NULL;
$arguments342['arguments'] = NULL;
$arguments342['extensionName'] = NULL;
$arguments342['key'] = 'extensionList.updateDisabled';

$output341 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext), ENT_QUOTES);

$output341 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments344 = array();
$arguments344['identifier'] = NULL;
$arguments344['size'] = 'small';
$arguments344['overlay'] = NULL;
$arguments344['state'] = 'default';
$arguments344['alternativeMarkupIdentifier'] = NULL;
$arguments344['identifier'] = 'actions-system-extension-update';

$output341 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext);

$output341 .= '
								</span>
							';
return $output341;
};
$arguments339 = array();

$output338 .= '';

$output338 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
$output348 = '';

$output348 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
$output360 = '';

$output360 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments361 = array();
$arguments361['identifier'] = NULL;
$arguments361['size'] = 'small';
$arguments361['overlay'] = NULL;
$arguments361['state'] = 'default';
$arguments361['alternativeMarkupIdentifier'] = NULL;
$arguments361['identifier'] = 'actions-system-extension-update';

$output360 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext);

$output360 .= '
									';
return $output360;
};
$arguments349 = array();
$arguments349['action'] = NULL;
$arguments349['arguments'] = array (
);
$arguments349['controller'] = NULL;
$arguments349['extensionName'] = NULL;
$arguments349['pluginName'] = NULL;
$arguments349['pageUid'] = NULL;
$arguments349['pageType'] = 0;
$arguments349['noCache'] = false;
$arguments349['noCacheHash'] = false;
$arguments349['section'] = '';
$arguments349['format'] = '';
$arguments349['linkAccessRestrictedPages'] = false;
$arguments349['additionalParams'] = array (
);
$arguments349['absolute'] = false;
$arguments349['addQueryString'] = false;
$arguments349['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments349['addQueryStringMethod'] = NULL;
$arguments349['additionalAttributes'] = NULL;
$arguments349['data'] = NULL;
$arguments349['class'] = NULL;
$arguments349['dir'] = NULL;
$arguments349['id'] = NULL;
$arguments349['lang'] = NULL;
$arguments349['style'] = NULL;
$arguments349['title'] = NULL;
$arguments349['accesskey'] = NULL;
$arguments349['tabindex'] = NULL;
$arguments349['onclick'] = NULL;
$arguments349['name'] = NULL;
$arguments349['rel'] = NULL;
$arguments349['rev'] = NULL;
$arguments349['target'] = NULL;
$arguments349['action'] = 'updateCommentForUpdatableVersions';
$arguments349['class'] = 'btn btn-default';
// Rendering Array
$array351 = array();
$array351['data-action'] = 'update-extension';
$arguments349['additionalAttributes'] = $array351;
$arguments349['format'] = 'json';
$arguments349['controller'] = 'Download';
// Rendering Array
$array352 = array();
$array353 = array (
);$array352['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array353);
$array354 = array (
);$array352['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array354);
$array355 = array (
);$array352['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array355);
$arguments349['arguments'] = $array352;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments356 = array();
$arguments356['key'] = NULL;
$arguments356['id'] = NULL;
$arguments356['default'] = NULL;
$arguments356['htmlEscape'] = NULL;
$arguments356['arguments'] = NULL;
$arguments356['extensionName'] = NULL;
$arguments356['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array358 = array();
$array359 = array (
);$array358['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array359);
$arguments356['arguments'] = $array358;
$arguments349['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output348 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext);

$output348 .= '
							';
return $output348;
};
$arguments346 = array();
$arguments346['if'] = NULL;

$output338 .= '';

$output338 .= '
						';
return $output338;
};
$arguments313 = array();
$arguments313['then'] = NULL;
$arguments313['else'] = NULL;
$arguments313['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array335 = array();
$array336 = array (
);$array335['0'] = $renderingContext->getVariableProvider()->getByPath('extension.state', $array336);
$array335['1'] = ' == \'excludeFromUpdates\'';

$expression337 = function($context) {return (($context["node0"]) == 'excludeFromUpdates');};
$arguments313['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression337(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array335)
					),
					$renderingContext
				);
$arguments313['__thenClosure'] = function() use ($renderingContext, $self) {
$output315 = '';

$output315 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments316 = array();
$arguments316['key'] = NULL;
$arguments316['id'] = NULL;
$arguments316['default'] = NULL;
$arguments316['htmlEscape'] = NULL;
$arguments316['arguments'] = NULL;
$arguments316['extensionName'] = NULL;
$arguments316['key'] = 'extensionList.updateDisabled';

$output315 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext), ENT_QUOTES);

$output315 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['identifier'] = NULL;
$arguments318['size'] = 'small';
$arguments318['overlay'] = NULL;
$arguments318['state'] = 'default';
$arguments318['alternativeMarkupIdentifier'] = NULL;
$arguments318['identifier'] = 'actions-system-extension-update';

$output315 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output315 .= '
								</span>
							';
return $output315;
};
$arguments313['__elseClosures'][] = function() use ($renderingContext, $self) {
$output320 = '';

$output320 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
$output332 = '';

$output332 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments333 = array();
$arguments333['identifier'] = NULL;
$arguments333['size'] = 'small';
$arguments333['overlay'] = NULL;
$arguments333['state'] = 'default';
$arguments333['alternativeMarkupIdentifier'] = NULL;
$arguments333['identifier'] = 'actions-system-extension-update';

$output332 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);

$output332 .= '
									';
return $output332;
};
$arguments321 = array();
$arguments321['action'] = NULL;
$arguments321['arguments'] = array (
);
$arguments321['controller'] = NULL;
$arguments321['extensionName'] = NULL;
$arguments321['pluginName'] = NULL;
$arguments321['pageUid'] = NULL;
$arguments321['pageType'] = 0;
$arguments321['noCache'] = false;
$arguments321['noCacheHash'] = false;
$arguments321['section'] = '';
$arguments321['format'] = '';
$arguments321['linkAccessRestrictedPages'] = false;
$arguments321['additionalParams'] = array (
);
$arguments321['absolute'] = false;
$arguments321['addQueryString'] = false;
$arguments321['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments321['addQueryStringMethod'] = NULL;
$arguments321['additionalAttributes'] = NULL;
$arguments321['data'] = NULL;
$arguments321['class'] = NULL;
$arguments321['dir'] = NULL;
$arguments321['id'] = NULL;
$arguments321['lang'] = NULL;
$arguments321['style'] = NULL;
$arguments321['title'] = NULL;
$arguments321['accesskey'] = NULL;
$arguments321['tabindex'] = NULL;
$arguments321['onclick'] = NULL;
$arguments321['name'] = NULL;
$arguments321['rel'] = NULL;
$arguments321['rev'] = NULL;
$arguments321['target'] = NULL;
$arguments321['action'] = 'updateCommentForUpdatableVersions';
$arguments321['class'] = 'btn btn-default';
// Rendering Array
$array323 = array();
$array323['data-action'] = 'update-extension';
$arguments321['additionalAttributes'] = $array323;
$arguments321['format'] = 'json';
$arguments321['controller'] = 'Download';
// Rendering Array
$array324 = array();
$array325 = array (
);$array324['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array325);
$array326 = array (
);$array324['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array326);
$array327 = array (
);$array324['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array327);
$arguments321['arguments'] = $array324;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments328 = array();
$arguments328['key'] = NULL;
$arguments328['id'] = NULL;
$arguments328['default'] = NULL;
$arguments328['htmlEscape'] = NULL;
$arguments328['arguments'] = NULL;
$arguments328['extensionName'] = NULL;
$arguments328['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array330 = array();
$array331 = array (
);$array330['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array331);
$arguments328['arguments'] = $array330;
$arguments321['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output320 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output320 .= '
							';
return $output320;
};

$output312 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output312 .= '
					';
return $output312;
};
$arguments307 = array();
$arguments307['then'] = NULL;
$arguments307['else'] = NULL;
$arguments307['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array309 = array();
$array310 = array (
);$array309['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateAvailable', $array310);

$expression311 = function($context) {return ($context["node0"]);};
$arguments307['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression311(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array309)
					),
					$renderingContext
				);
$arguments307['__thenClosure'] = $renderChildrenClosure308;

$output248 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);

$output248 .= '
				</td>
				<td data-order="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments363 = array();
$arguments363['then'] = NULL;
$arguments363['else'] = NULL;
$arguments363['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array365 = array();
$array366 = array (
);$array365['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array366);

$expression367 = function($context) {return ($context["node0"]);};
$arguments363['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression367(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array365)
					),
					$renderingContext
				);
$arguments363['then'] = 'active';
$arguments363['else'] = 'inactive';

$output248 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments363, $renderChildrenClosure364, $renderingContext);

$output248 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments368 = array();
$arguments368['additionalAttributes'] = NULL;
$arguments368['data'] = NULL;
$arguments368['class'] = NULL;
$arguments368['dir'] = NULL;
$arguments368['id'] = NULL;
$arguments368['lang'] = NULL;
$arguments368['style'] = NULL;
$arguments368['title'] = NULL;
$arguments368['accesskey'] = NULL;
$arguments368['tabindex'] = NULL;
$arguments368['onclick'] = NULL;
$arguments368['name'] = NULL;
$arguments368['rel'] = NULL;
$arguments368['rev'] = NULL;
$arguments368['target'] = NULL;
$arguments368['extension'] = NULL;
$array370 = array (
);$arguments368['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array370);

$output248 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext);

$output248 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure372 = function() use ($renderingContext, $self) {
$output376 = '';

$output376 .= '
						<img class="ext-icon" src="../';
$array377 = array (
);
$output376 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.siteRelPath', $array377), ENT_QUOTES);
$array378 = array (
);
$output376 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array378), ENT_QUOTES);

$output376 .= '" alt="';
$array379 = array (
);
$output376 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.title', $array379), ENT_QUOTES);

$output376 .= '" />
					';
return $output376;
};
$arguments371 = array();
$arguments371['then'] = NULL;
$arguments371['else'] = NULL;
$arguments371['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array373 = array();
$array374 = array (
);$array373['0'] = $renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array374);

$expression375 = function($context) {return ($context["node0"]);};
$arguments371['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression375(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array373)
					),
					$renderingContext
				);
$arguments371['__thenClosure'] = $renderChildrenClosure372;

$output248 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments371, $renderChildrenClosure372, $renderingContext);

$output248 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
$array387 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.title', $array387), ENT_QUOTES);
};
$arguments380 = array();
$arguments380['additionalAttributes'] = NULL;
$arguments380['data'] = NULL;
$arguments380['class'] = NULL;
$arguments380['dir'] = NULL;
$arguments380['id'] = NULL;
$arguments380['lang'] = NULL;
$arguments380['style'] = NULL;
$arguments380['title'] = NULL;
$arguments380['accesskey'] = NULL;
$arguments380['tabindex'] = NULL;
$arguments380['onclick'] = NULL;
$arguments380['name'] = NULL;
$arguments380['rel'] = NULL;
$arguments380['rev'] = NULL;
$arguments380['target'] = NULL;
$arguments380['extension'] = NULL;
$arguments380['forceConfiguration'] = true;
$arguments380['showDescription'] = false;
$array382 = array (
);$arguments380['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array382);
// Rendering Boolean node
// Rendering Array
$array383 = array();
$array383['0'] = 0;

$expression384 = function($context) {return ($context["node0"]);};
$arguments380['forceConfiguration'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression384(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array383)
					),
					$renderingContext
				);
// Rendering Boolean node
// Rendering Array
$array385 = array();
$array385['0'] = 1;

$expression386 = function($context) {return ($context["node0"]);};
$arguments380['showDescription'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression386(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array385)
					),
					$renderingContext
				);

$output248 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper::renderStatic($arguments380, $renderChildrenClosure381, $renderingContext);

$output248 .= '
				</td>
				<td>
					';
$array388 = array (
);
$output248 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extensionKey', $array388), ENT_QUOTES);

$output248 .= '
				</td>
				<td>
					';
$array389 = array (
);
$output248 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.version', $array389), ENT_QUOTES);

$output248 .= '
				</td>
				<td>
					<span class="label label-';
$array390 = array (
);
$output248 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.state', $array390), ENT_QUOTES);

$output248 .= '">';
$array391 = array (
);
$output248 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.state', $array391), ENT_QUOTES);

$output248 .= '</span>
				</td>
				<td>
					<div class="btn-group">
						';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
$output401 = '';

$output401 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments402 = array();
$arguments402['identifier'] = NULL;
$arguments402['size'] = 'small';
$arguments402['overlay'] = NULL;
$arguments402['state'] = 'default';
$arguments402['alternativeMarkupIdentifier'] = NULL;
$arguments402['identifier'] = 'actions-system-extension-configure';

$output401 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);

$output401 .= '
							';
return $output401;
};
$arguments396 = array();
$arguments396['additionalAttributes'] = NULL;
$arguments396['data'] = NULL;
$arguments396['class'] = NULL;
$arguments396['dir'] = NULL;
$arguments396['id'] = NULL;
$arguments396['lang'] = NULL;
$arguments396['style'] = NULL;
$arguments396['title'] = NULL;
$arguments396['accesskey'] = NULL;
$arguments396['tabindex'] = NULL;
$arguments396['onclick'] = NULL;
$arguments396['name'] = NULL;
$arguments396['rel'] = NULL;
$arguments396['rev'] = NULL;
$arguments396['target'] = NULL;
$arguments396['extension'] = NULL;
$arguments396['forceConfiguration'] = true;
$arguments396['showDescription'] = false;
$arguments396['class'] = 'btn btn-default';
$array398 = array (
);$arguments396['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array398);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments399 = array();
$arguments399['key'] = NULL;
$arguments399['id'] = NULL;
$arguments399['default'] = NULL;
$arguments399['htmlEscape'] = NULL;
$arguments399['arguments'] = NULL;
$arguments399['extensionName'] = NULL;
$arguments399['key'] = 'extensionList.configure';
$arguments396['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments399, $renderChildrenClosure400, $renderingContext);

$output395 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ConfigureExtensionViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output395 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments404 = array();
$arguments404['additionalAttributes'] = NULL;
$arguments404['data'] = NULL;
$arguments404['class'] = NULL;
$arguments404['dir'] = NULL;
$arguments404['id'] = NULL;
$arguments404['lang'] = NULL;
$arguments404['style'] = NULL;
$arguments404['title'] = NULL;
$arguments404['accesskey'] = NULL;
$arguments404['tabindex'] = NULL;
$arguments404['onclick'] = NULL;
$arguments404['name'] = NULL;
$arguments404['rel'] = NULL;
$arguments404['rev'] = NULL;
$arguments404['target'] = NULL;
$arguments404['extensionKey'] = NULL;
$arguments404['class'] = 'btn btn-default';
$array406 = array (
);$arguments404['extensionKey'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array406);

$output395 .= TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);

$output395 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$renderChildrenClosure408 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments407 = array();
$arguments407['additionalAttributes'] = NULL;
$arguments407['data'] = NULL;
$arguments407['class'] = NULL;
$arguments407['dir'] = NULL;
$arguments407['id'] = NULL;
$arguments407['lang'] = NULL;
$arguments407['style'] = NULL;
$arguments407['title'] = NULL;
$arguments407['accesskey'] = NULL;
$arguments407['tabindex'] = NULL;
$arguments407['onclick'] = NULL;
$arguments407['name'] = NULL;
$arguments407['rel'] = NULL;
$arguments407['rev'] = NULL;
$arguments407['target'] = NULL;
$arguments407['extension'] = NULL;
$arguments407['class'] = 'btn btn-default';
$array409 = array (
);$arguments407['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array409);

$output395 .= TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper::renderStatic($arguments407, $renderChildrenClosure408, $renderingContext);

$output395 .= '
							<span class="btn btn-default">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
$output416 = '';

$output416 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments417 = array();
$arguments417['identifier'] = NULL;
$arguments417['size'] = 'small';
$arguments417['overlay'] = NULL;
$arguments417['state'] = 'default';
$arguments417['alternativeMarkupIdentifier'] = NULL;
$arguments417['identifier'] = 'actions-system-extension-download';

$output416 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments417, $renderChildrenClosure418, $renderingContext);

$output416 .= '
								';
return $output416;
};
$arguments410 = array();
$arguments410['action'] = NULL;
$arguments410['arguments'] = array (
);
$arguments410['controller'] = NULL;
$arguments410['extensionName'] = NULL;
$arguments410['pluginName'] = NULL;
$arguments410['pageUid'] = NULL;
$arguments410['pageType'] = 0;
$arguments410['noCache'] = false;
$arguments410['noCacheHash'] = false;
$arguments410['section'] = '';
$arguments410['format'] = '';
$arguments410['linkAccessRestrictedPages'] = false;
$arguments410['additionalParams'] = array (
);
$arguments410['absolute'] = false;
$arguments410['addQueryString'] = false;
$arguments410['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments410['addQueryStringMethod'] = NULL;
$arguments410['additionalAttributes'] = NULL;
$arguments410['data'] = NULL;
$arguments410['class'] = NULL;
$arguments410['dir'] = NULL;
$arguments410['id'] = NULL;
$arguments410['lang'] = NULL;
$arguments410['style'] = NULL;
$arguments410['title'] = NULL;
$arguments410['accesskey'] = NULL;
$arguments410['tabindex'] = NULL;
$arguments410['onclick'] = NULL;
$arguments410['name'] = NULL;
$arguments410['rel'] = NULL;
$arguments410['rev'] = NULL;
$arguments410['target'] = NULL;
$arguments410['action'] = 'downloadExtensionZip';
$arguments410['controller'] = 'Action';
// Rendering Array
$array412 = array();
$array413 = array (
);$array412['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array413);
$arguments410['arguments'] = $array412;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments414 = array();
$arguments414['key'] = NULL;
$arguments414['id'] = NULL;
$arguments414['default'] = NULL;
$arguments414['htmlEscape'] = NULL;
$arguments414['arguments'] = NULL;
$arguments414['extensionName'] = NULL;
$arguments414['key'] = 'extensionList.downloadzip';
$arguments410['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext);

$output395 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments410, $renderChildrenClosure411, $renderingContext);

$output395 .= '
							</span>
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments419 = array();
$arguments419['additionalAttributes'] = NULL;
$arguments419['data'] = NULL;
$arguments419['class'] = NULL;
$arguments419['dir'] = NULL;
$arguments419['id'] = NULL;
$arguments419['lang'] = NULL;
$arguments419['style'] = NULL;
$arguments419['title'] = NULL;
$arguments419['accesskey'] = NULL;
$arguments419['tabindex'] = NULL;
$arguments419['onclick'] = NULL;
$arguments419['name'] = NULL;
$arguments419['rel'] = NULL;
$arguments419['rev'] = NULL;
$arguments419['target'] = NULL;
$arguments419['extension'] = NULL;
$arguments419['class'] = 'btn btn-default';
$array421 = array (
);$arguments419['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array421);

$output395 .= TYPO3\CMS\Extensionmanager\ViewHelpers\DownloadExtensionDataViewHelper::renderStatic($arguments419, $renderChildrenClosure420, $renderingContext);

$output395 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments422 = array();
$arguments422['additionalAttributes'] = NULL;
$arguments422['data'] = NULL;
$arguments422['class'] = NULL;
$arguments422['dir'] = NULL;
$arguments422['id'] = NULL;
$arguments422['lang'] = NULL;
$arguments422['style'] = NULL;
$arguments422['title'] = NULL;
$arguments422['accesskey'] = NULL;
$arguments422['tabindex'] = NULL;
$arguments422['onclick'] = NULL;
$arguments422['name'] = NULL;
$arguments422['rel'] = NULL;
$arguments422['rev'] = NULL;
$arguments422['target'] = NULL;
$arguments422['extension'] = NULL;
$arguments422['class'] = 'btn btn-default';
$array424 = array (
);$arguments422['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array424);

$output395 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper::renderStatic($arguments422, $renderChildrenClosure423, $renderingContext);

$output395 .= '
						';
return $output395;
};
$arguments392 = array();
$arguments392['additionalAttributes'] = NULL;
$arguments392['data'] = NULL;
$arguments392['extension'] = NULL;
$array394 = array (
);$arguments392['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array394);

$output248 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::renderStatic($arguments392, $renderChildrenClosure393, $renderingContext);

$output248 .= '
					</div>
				</td>
				</tr>
			';
return $output248;
};
$arguments245 = array();
$arguments245['each'] = NULL;
$arguments245['as'] = NULL;
$arguments245['key'] = NULL;
$arguments245['reverse'] = false;
$arguments245['iteration'] = NULL;
$array247 = array (
);$arguments245['each'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array247);
$arguments245['as'] = 'extension';
$arguments245['key'] = 'extensionKey';

$output219 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output219 .= '
		</tbody>
	</table>
	</div>
';
return $output219;
};
$arguments217 = array();
$arguments217['name'] = NULL;
$arguments217['name'] = 'content';

$output209 .= '';

$output209 .= '
';

return $output209;
}


}
#2993772525    105157    