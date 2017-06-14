<?php

class FormManager_action_index_169b91967ca19d1c4b2207a0dba352b800526cfd extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'FormManager';
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
 * section MainContent
 */
public function section_186817d730a4234a5cb5db37d7099a3440fc5dea(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

	<script type="text/javascript">
		require([\'';
$array1 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('dynamicRequireJsModules.app', $array1), ENT_QUOTES);

$output0 .= '\', \'';
$array2 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('dynamicRequireJsModules.viewModel', $array2), ENT_QUOTES);

$output0 .= '\'], function (formManagerApp, viewModel) {
			var FORMMANAGER_APP = formManagerApp.getInstance(
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$array5 = array (
);return $renderingContext->getVariableProvider()->getByPath('formManagerAppInitialData', $array5);
};
$arguments3 = array();
$arguments3['value'] = NULL;
$arguments3['keepQuotes'] = false;
$arguments3['encoding'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= ',
				viewModel
			).run();
		});
	</script>
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['key'] = NULL;
$arguments6['id'] = NULL;
$arguments6['default'] = NULL;
$arguments6['htmlEscape'] = NULL;
$arguments6['arguments'] = NULL;
$arguments6['extensionName'] = NULL;
$arguments6['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.headline';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext), ENT_QUOTES);

$output0 .= '</h1>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output199 = '';

$output199 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
$output202 = '';

$output202 .= '
			<div class="panel panel-space panel-default recordlist">
				<div class="panel-heading">
					<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['key'] = NULL;
$arguments203['id'] = NULL;
$arguments203['default'] = NULL;
$arguments203['htmlEscape'] = NULL;
$arguments203['arguments'] = NULL;
$arguments203['extensionName'] = NULL;
$arguments203['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_existing_forms';

$output202 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext), ENT_QUOTES);

$output202 .= '</span>
				</div>
				<div class="collapse in">
					<div class="table-fit">
						<table id="forms" class="table table-striped table-hover">
							<thead>
								<tr>
									<th nowrap="nowrap" class="col-icon"><a class="btn btn-default" data-identifier="newForm" href="#">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments205 = array();
$arguments205['identifier'] = NULL;
$arguments205['size'] = 'small';
$arguments205['overlay'] = NULL;
$arguments205['state'] = 'default';
$arguments205['alternativeMarkupIdentifier'] = NULL;
$arguments205['identifier'] = 'actions-add';

$output202 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output202 .= '</a></th>
									<th nowrap="nowrap" class="col-title col-responsive">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['key'] = NULL;
$arguments207['id'] = NULL;
$arguments207['default'] = NULL;
$arguments207['htmlEscape'] = NULL;
$arguments207['arguments'] = NULL;
$arguments207['extensionName'] = NULL;
$arguments207['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.form_name';

$output202 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext), ENT_QUOTES);

$output202 .= '</th>
									<th nowrap="nowrap" class="col-control"></th>
									<th nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments209 = array();
$arguments209['key'] = NULL;
$arguments209['id'] = NULL;
$arguments209['default'] = NULL;
$arguments209['htmlEscape'] = NULL;
$arguments209['arguments'] = NULL;
$arguments209['extensionName'] = NULL;
$arguments209['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.location';

$output202 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext), ENT_QUOTES);

$output202 .= '</th>
									<th nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments211 = array();
$arguments211['key'] = NULL;
$arguments211['id'] = NULL;
$arguments211['default'] = NULL;
$arguments211['htmlEscape'] = NULL;
$arguments211['arguments'] = NULL;
$arguments211['extensionName'] = NULL;
$arguments211['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.references';

$output202 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext), ENT_QUOTES);

$output202 .= '</th>
								</tr>
							</thead>
							<tbody>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
								<tr>
									<td nowrap="nowrap" class="col-icon">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$output235 = '';

$output235 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments236 = array();
$arguments236['key'] = NULL;
$arguments236['id'] = NULL;
$arguments236['default'] = NULL;
$arguments236['htmlEscape'] = NULL;
$arguments236['arguments'] = NULL;
$arguments236['extensionName'] = NULL;
$arguments236['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output235 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext), ENT_QUOTES);

$output235 .= ' ';
$array238 = array (
);
$output235 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.identifier', $array238), ENT_QUOTES);

$output235 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments239 = array();
$arguments239['identifier'] = NULL;
$arguments239['size'] = 'small';
$arguments239['overlay'] = NULL;
$arguments239['state'] = 'default';
$arguments239['alternativeMarkupIdentifier'] = NULL;
$arguments239['identifier'] = 'overlay-missing';

$output235 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output235 .= '
												</span>
											';
return $output235;
};
$arguments233 = array();

$output232 .= '';

$output232 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$output243 = '';

$output243 .= '
												<span title="id=';
$array244 = array (
);
$output243 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.identifier', $array244), ENT_QUOTES);

$output243 .= '" data-toggle="tooltip" data-placement="right">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments245 = array();
$arguments245['identifier'] = NULL;
$arguments245['size'] = 'small';
$arguments245['overlay'] = NULL;
$arguments245['state'] = 'default';
$arguments245['alternativeMarkupIdentifier'] = NULL;
$arguments245['identifier'] = 'content-elements-mailform';

$output243 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output243 .= '
												</span>
											';
return $output243;
};
$arguments241 = array();
$arguments241['if'] = NULL;

$output232 .= '';

$output232 .= '
										';
return $output232;
};
$arguments217 = array();
$arguments217['then'] = NULL;
$arguments217['else'] = NULL;
$arguments217['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array229 = array();
$array230 = array (
);$array229['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array230);

$expression231 = function($context) {return ($context["node0"]);};
$arguments217['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression231(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array229)
					),
					$renderingContext
				);
$arguments217['__thenClosure'] = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments220 = array();
$arguments220['key'] = NULL;
$arguments220['id'] = NULL;
$arguments220['default'] = NULL;
$arguments220['htmlEscape'] = NULL;
$arguments220['arguments'] = NULL;
$arguments220['extensionName'] = NULL;
$arguments220['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output219 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext), ENT_QUOTES);

$output219 .= ' ';
$array222 = array (
);
$output219 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.identifier', $array222), ENT_QUOTES);

$output219 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments223 = array();
$arguments223['identifier'] = NULL;
$arguments223['size'] = 'small';
$arguments223['overlay'] = NULL;
$arguments223['state'] = 'default';
$arguments223['alternativeMarkupIdentifier'] = NULL;
$arguments223['identifier'] = 'overlay-missing';

$output219 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output219 .= '
												</span>
											';
return $output219;
};
$arguments217['__elseClosures'][] = function() use ($renderingContext, $self) {
$output225 = '';

$output225 .= '
												<span title="id=';
$array226 = array (
);
$output225 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.identifier', $array226), ENT_QUOTES);

$output225 .= '" data-toggle="tooltip" data-placement="right">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['identifier'] = NULL;
$arguments227['size'] = 'small';
$arguments227['overlay'] = NULL;
$arguments227['state'] = 'default';
$arguments227['alternativeMarkupIdentifier'] = NULL;
$arguments227['identifier'] = 'content-elements-mailform';

$output225 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output225 .= '
												</span>
											';
return $output225;
};

$output216 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output216 .= '
									</td>
									<td nowrap="nowrap" class="col-title col-responsive">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$output263 = '';

$output263 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$output266 = '';

$output266 .= '
													<div>';
$array267 = array (
);
$output266 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array267), ENT_QUOTES);

$output266 .= '</div>
												';
return $output266;
};
$arguments264 = array();

$output263 .= '';

$output263 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$output270 = '';

$output270 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
$array278 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array278), ENT_QUOTES);
};
$arguments271 = array();
$arguments271['action'] = NULL;
$arguments271['arguments'] = array (
);
$arguments271['controller'] = NULL;
$arguments271['extensionName'] = NULL;
$arguments271['pluginName'] = NULL;
$arguments271['pageUid'] = NULL;
$arguments271['pageType'] = 0;
$arguments271['noCache'] = false;
$arguments271['noCacheHash'] = false;
$arguments271['section'] = '';
$arguments271['format'] = '';
$arguments271['linkAccessRestrictedPages'] = false;
$arguments271['additionalParams'] = array (
);
$arguments271['absolute'] = false;
$arguments271['addQueryString'] = false;
$arguments271['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments271['addQueryStringMethod'] = NULL;
$arguments271['additionalAttributes'] = NULL;
$arguments271['data'] = NULL;
$arguments271['class'] = NULL;
$arguments271['dir'] = NULL;
$arguments271['id'] = NULL;
$arguments271['lang'] = NULL;
$arguments271['style'] = NULL;
$arguments271['title'] = NULL;
$arguments271['accesskey'] = NULL;
$arguments271['tabindex'] = NULL;
$arguments271['onclick'] = NULL;
$arguments271['name'] = NULL;
$arguments271['rel'] = NULL;
$arguments271['rev'] = NULL;
$arguments271['target'] = NULL;
$arguments271['controller'] = 'FormEditor';
$arguments271['action'] = 'index';
// Rendering Array
$array273 = array();
$array274 = array (
);$array273['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array274);
$arguments271['arguments'] = $array273;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments275 = array();
$arguments275['key'] = NULL;
$arguments275['id'] = NULL;
$arguments275['default'] = NULL;
$arguments275['htmlEscape'] = NULL;
$arguments275['arguments'] = NULL;
$arguments275['extensionName'] = NULL;
$arguments275['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments271['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);
// Rendering Array
$array277 = array();
$array277['toggle'] = 'tooltip';
$array277['placement'] = 'right';
$arguments271['data'] = $array277;

$output270 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext);

$output270 .= '
												';
return $output270;
};
$arguments268 = array();
$arguments268['if'] = NULL;

$output263 .= '';

$output263 .= '
										';
return $output263;
};
$arguments247 = array();
$arguments247['then'] = NULL;
$arguments247['else'] = NULL;
$arguments247['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array260 = array();
$array261 = array (
);$array260['0'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array261);

$expression262 = function($context) {return ($context["node0"]);};
$arguments247['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression262(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array260)
					),
					$renderingContext
				);
$arguments247['__thenClosure'] = function() use ($renderingContext, $self) {
$output249 = '';

$output249 .= '
													<div>';
$array250 = array (
);
$output249 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array250), ENT_QUOTES);

$output249 .= '</div>
												';
return $output249;
};
$arguments247['__elseClosures'][] = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$array259 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array259), ENT_QUOTES);
};
$arguments252 = array();
$arguments252['action'] = NULL;
$arguments252['arguments'] = array (
);
$arguments252['controller'] = NULL;
$arguments252['extensionName'] = NULL;
$arguments252['pluginName'] = NULL;
$arguments252['pageUid'] = NULL;
$arguments252['pageType'] = 0;
$arguments252['noCache'] = false;
$arguments252['noCacheHash'] = false;
$arguments252['section'] = '';
$arguments252['format'] = '';
$arguments252['linkAccessRestrictedPages'] = false;
$arguments252['additionalParams'] = array (
);
$arguments252['absolute'] = false;
$arguments252['addQueryString'] = false;
$arguments252['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments252['addQueryStringMethod'] = NULL;
$arguments252['additionalAttributes'] = NULL;
$arguments252['data'] = NULL;
$arguments252['class'] = NULL;
$arguments252['dir'] = NULL;
$arguments252['id'] = NULL;
$arguments252['lang'] = NULL;
$arguments252['style'] = NULL;
$arguments252['title'] = NULL;
$arguments252['accesskey'] = NULL;
$arguments252['tabindex'] = NULL;
$arguments252['onclick'] = NULL;
$arguments252['name'] = NULL;
$arguments252['rel'] = NULL;
$arguments252['rev'] = NULL;
$arguments252['target'] = NULL;
$arguments252['controller'] = 'FormEditor';
$arguments252['action'] = 'index';
// Rendering Array
$array254 = array();
$array255 = array (
);$array254['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array255);
$arguments252['arguments'] = $array254;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['key'] = NULL;
$arguments256['id'] = NULL;
$arguments256['default'] = NULL;
$arguments256['htmlEscape'] = NULL;
$arguments256['arguments'] = NULL;
$arguments256['extensionName'] = NULL;
$arguments256['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments252['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);
// Rendering Array
$array258 = array();
$array258['toggle'] = 'tooltip';
$array258['placement'] = 'right';
$arguments252['data'] = $array258;

$output251 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output251 .= '
												';
return $output251;
};

$output216 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output216 .= '
									</td>
									<td nowrap="nowrap" class="col-control">
										<div class="btn-group" role="group">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
$output298 = '';

$output298 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
$output301 = '';

$output301 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments302 = array();
$arguments302['key'] = NULL;
$arguments302['id'] = NULL;
$arguments302['default'] = NULL;
$arguments302['htmlEscape'] = NULL;
$arguments302['arguments'] = NULL;
$arguments302['extensionName'] = NULL;
$arguments302['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output301 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext), ENT_QUOTES);

$output301 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments304 = array();
$arguments304['identifier'] = NULL;
$arguments304['size'] = 'small';
$arguments304['overlay'] = NULL;
$arguments304['state'] = 'default';
$arguments304['alternativeMarkupIdentifier'] = NULL;
$arguments304['identifier'] = 'actions-open';

$output301 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext);

$output301 .= '</button>
												';
return $output301;
};
$arguments299 = array();

$output298 .= '';

$output298 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
$output308 = '';

$output308 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments315 = array();
$arguments315['identifier'] = NULL;
$arguments315['size'] = 'small';
$arguments315['overlay'] = NULL;
$arguments315['state'] = 'default';
$arguments315['alternativeMarkupIdentifier'] = NULL;
$arguments315['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);
};
$arguments309 = array();
$arguments309['action'] = NULL;
$arguments309['arguments'] = array (
);
$arguments309['controller'] = NULL;
$arguments309['extensionName'] = NULL;
$arguments309['pluginName'] = NULL;
$arguments309['pageUid'] = NULL;
$arguments309['pageType'] = 0;
$arguments309['noCache'] = false;
$arguments309['noCacheHash'] = false;
$arguments309['section'] = '';
$arguments309['format'] = '';
$arguments309['linkAccessRestrictedPages'] = false;
$arguments309['additionalParams'] = array (
);
$arguments309['absolute'] = false;
$arguments309['addQueryString'] = false;
$arguments309['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments309['addQueryStringMethod'] = NULL;
$arguments309['additionalAttributes'] = NULL;
$arguments309['data'] = NULL;
$arguments309['class'] = NULL;
$arguments309['dir'] = NULL;
$arguments309['id'] = NULL;
$arguments309['lang'] = NULL;
$arguments309['style'] = NULL;
$arguments309['title'] = NULL;
$arguments309['accesskey'] = NULL;
$arguments309['tabindex'] = NULL;
$arguments309['onclick'] = NULL;
$arguments309['name'] = NULL;
$arguments309['rel'] = NULL;
$arguments309['rev'] = NULL;
$arguments309['target'] = NULL;
$arguments309['controller'] = 'FormEditor';
$arguments309['action'] = 'index';
// Rendering Array
$array311 = array();
$array312 = array (
);$array311['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array312);
$arguments309['arguments'] = $array311;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments313 = array();
$arguments313['key'] = NULL;
$arguments313['id'] = NULL;
$arguments313['default'] = NULL;
$arguments313['htmlEscape'] = NULL;
$arguments313['arguments'] = NULL;
$arguments313['extensionName'] = NULL;
$arguments313['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments309['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);
$arguments309['class'] = 'btn btn-default form-record-open';

$output308 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output308 .= '
												';
return $output308;
};
$arguments306 = array();
$arguments306['if'] = NULL;

$output298 .= '';

$output298 .= '
											';
return $output298;
};
$arguments279 = array();
$arguments279['then'] = NULL;
$arguments279['else'] = NULL;
$arguments279['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array295 = array();
$array296 = array (
);$array295['0'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array296);

$expression297 = function($context) {return ($context["node0"]);};
$arguments279['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression297(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array295)
					),
					$renderingContext
				);
$arguments279['__thenClosure'] = function() use ($renderingContext, $self) {
$output281 = '';

$output281 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments282 = array();
$arguments282['key'] = NULL;
$arguments282['id'] = NULL;
$arguments282['default'] = NULL;
$arguments282['htmlEscape'] = NULL;
$arguments282['arguments'] = NULL;
$arguments282['extensionName'] = NULL;
$arguments282['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output281 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext), ENT_QUOTES);

$output281 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments284 = array();
$arguments284['identifier'] = NULL;
$arguments284['size'] = 'small';
$arguments284['overlay'] = NULL;
$arguments284['state'] = 'default';
$arguments284['alternativeMarkupIdentifier'] = NULL;
$arguments284['identifier'] = 'actions-open';

$output281 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);

$output281 .= '</button>
												';
return $output281;
};
$arguments279['__elseClosures'][] = function() use ($renderingContext, $self) {
$output286 = '';

$output286 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments293 = array();
$arguments293['identifier'] = NULL;
$arguments293['size'] = 'small';
$arguments293['overlay'] = NULL;
$arguments293['state'] = 'default';
$arguments293['alternativeMarkupIdentifier'] = NULL;
$arguments293['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);
};
$arguments287 = array();
$arguments287['action'] = NULL;
$arguments287['arguments'] = array (
);
$arguments287['controller'] = NULL;
$arguments287['extensionName'] = NULL;
$arguments287['pluginName'] = NULL;
$arguments287['pageUid'] = NULL;
$arguments287['pageType'] = 0;
$arguments287['noCache'] = false;
$arguments287['noCacheHash'] = false;
$arguments287['section'] = '';
$arguments287['format'] = '';
$arguments287['linkAccessRestrictedPages'] = false;
$arguments287['additionalParams'] = array (
);
$arguments287['absolute'] = false;
$arguments287['addQueryString'] = false;
$arguments287['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments287['addQueryStringMethod'] = NULL;
$arguments287['additionalAttributes'] = NULL;
$arguments287['data'] = NULL;
$arguments287['class'] = NULL;
$arguments287['dir'] = NULL;
$arguments287['id'] = NULL;
$arguments287['lang'] = NULL;
$arguments287['style'] = NULL;
$arguments287['title'] = NULL;
$arguments287['accesskey'] = NULL;
$arguments287['tabindex'] = NULL;
$arguments287['onclick'] = NULL;
$arguments287['name'] = NULL;
$arguments287['rel'] = NULL;
$arguments287['rev'] = NULL;
$arguments287['target'] = NULL;
$arguments287['controller'] = 'FormEditor';
$arguments287['action'] = 'index';
// Rendering Array
$array289 = array();
$array290 = array (
);$array289['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array290);
$arguments287['arguments'] = $array289;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments291 = array();
$arguments291['key'] = NULL;
$arguments291['id'] = NULL;
$arguments291['default'] = NULL;
$arguments291['htmlEscape'] = NULL;
$arguments291['arguments'] = NULL;
$arguments291['extensionName'] = NULL;
$arguments291['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments287['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);
$arguments287['class'] = 'btn btn-default form-record-open';

$output286 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);

$output286 .= '
												';
return $output286;
};

$output216 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext);

$output216 .= '
											<a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array317 = array (
);
$output216 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array317), ENT_QUOTES);

$output216 .= '" data-form-name="';
$array318 = array (
);
$output216 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array318), ENT_QUOTES);

$output216 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments319 = array();
$arguments319['key'] = NULL;
$arguments319['id'] = NULL;
$arguments319['default'] = NULL;
$arguments319['htmlEscape'] = NULL;
$arguments319['arguments'] = NULL;
$arguments319['extensionName'] = NULL;
$arguments319['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output216 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext), ENT_QUOTES);

$output216 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments321 = array();
$arguments321['identifier'] = NULL;
$arguments321['size'] = 'small';
$arguments321['overlay'] = NULL;
$arguments321['state'] = 'default';
$arguments321['alternativeMarkupIdentifier'] = NULL;
$arguments321['identifier'] = 't3-form-icon-duplicate';

$output216 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output216 .= '</a>
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
$output339 = '';

$output339 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure341 = function() use ($renderingContext, $self) {
$output342 = '';

$output342 .= '
													<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array343 = array (
);
$output342 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array343), ENT_QUOTES);

$output342 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments344 = array();
$arguments344['key'] = NULL;
$arguments344['id'] = NULL;
$arguments344['default'] = NULL;
$arguments344['htmlEscape'] = NULL;
$arguments344['arguments'] = NULL;
$arguments344['extensionName'] = NULL;
$arguments344['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output342 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext), ENT_QUOTES);

$output342 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments346 = array();
$arguments346['identifier'] = NULL;
$arguments346['size'] = 'small';
$arguments346['overlay'] = NULL;
$arguments346['state'] = 'default';
$arguments346['alternativeMarkupIdentifier'] = NULL;
$arguments346['identifier'] = 'actions-edit-delete';

$output342 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);

$output342 .= '</a>
												';
return $output342;
};
$arguments340 = array();

$output339 .= '';

$output339 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
$output350 = '';

$output350 .= '
													<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments351 = array();
$arguments351['key'] = NULL;
$arguments351['id'] = NULL;
$arguments351['default'] = NULL;
$arguments351['htmlEscape'] = NULL;
$arguments351['arguments'] = NULL;
$arguments351['extensionName'] = NULL;
$arguments351['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output350 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext), ENT_QUOTES);

$output350 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments353 = array();
$arguments353['identifier'] = NULL;
$arguments353['size'] = 'small';
$arguments353['overlay'] = NULL;
$arguments353['state'] = 'default';
$arguments353['alternativeMarkupIdentifier'] = NULL;
$arguments353['identifier'] = 'actions-edit-delete';

$output350 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output350 .= '</button>
												';
return $output350;
};
$arguments348 = array();
$arguments348['if'] = NULL;

$output339 .= '';

$output339 .= '
											';
return $output339;
};
$arguments323 = array();
$arguments323['then'] = NULL;
$arguments323['else'] = NULL;
$arguments323['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array336 = array();
$array337 = array (
);$array336['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array337);

$expression338 = function($context) {return ($context["node0"]);};
$arguments323['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression338(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array336)
					),
					$renderingContext
				);
$arguments323['__thenClosure'] = function() use ($renderingContext, $self) {
$output325 = '';

$output325 .= '
													<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array326 = array (
);
$output325 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array326), ENT_QUOTES);

$output325 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments327 = array();
$arguments327['key'] = NULL;
$arguments327['id'] = NULL;
$arguments327['default'] = NULL;
$arguments327['htmlEscape'] = NULL;
$arguments327['arguments'] = NULL;
$arguments327['extensionName'] = NULL;
$arguments327['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output325 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext), ENT_QUOTES);

$output325 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments329 = array();
$arguments329['identifier'] = NULL;
$arguments329['size'] = 'small';
$arguments329['overlay'] = NULL;
$arguments329['state'] = 'default';
$arguments329['alternativeMarkupIdentifier'] = NULL;
$arguments329['identifier'] = 'actions-edit-delete';

$output325 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext);

$output325 .= '</a>
												';
return $output325;
};
$arguments323['__elseClosures'][] = function() use ($renderingContext, $self) {
$output331 = '';

$output331 .= '
													<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['key'] = NULL;
$arguments332['id'] = NULL;
$arguments332['default'] = NULL;
$arguments332['htmlEscape'] = NULL;
$arguments332['arguments'] = NULL;
$arguments332['extensionName'] = NULL;
$arguments332['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output331 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext), ENT_QUOTES);

$output331 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments334 = array();
$arguments334['identifier'] = NULL;
$arguments334['size'] = 'small';
$arguments334['overlay'] = NULL;
$arguments334['state'] = 'default';
$arguments334['alternativeMarkupIdentifier'] = NULL;
$arguments334['identifier'] = 'actions-edit-delete';

$output331 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext);

$output331 .= '</button>
												';
return $output331;
};

$output216 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output216 .= '
										</div>
									</td>
									<td nowrap="nowrap">';
$array355 = array (
);
$output216 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array355), ENT_QUOTES);

$output216 .= '</td>
									<td nowrap="nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
$output367 = '';

$output367 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
$output370 = '';

$output370 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array371 = array (
);
$output370 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array371), ENT_QUOTES);

$output370 .= '" data-form-name="';
$array372 = array (
);
$output370 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array372), ENT_QUOTES);

$output370 .= '">';
$array373 = array (
);
$output370 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array373), ENT_QUOTES);

$output370 .= '</a>
											';
return $output370;
};
$arguments368 = array();

$output367 .= '';

$output367 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
$output376 = '';

$output376 .= '
												';
$array377 = array (
);
$output376 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array377), ENT_QUOTES);

$output376 .= '
											';
return $output376;
};
$arguments374 = array();
$arguments374['if'] = NULL;

$output367 .= '';

$output367 .= '
										';
return $output367;
};
$arguments356 = array();
$arguments356['then'] = NULL;
$arguments356['else'] = NULL;
$arguments356['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array364 = array();
$array365 = array (
);$array364['0'] = $renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array365);

$expression366 = function($context) {return ($context["node0"]);};
$arguments356['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression366(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array364)
					),
					$renderingContext
				);
$arguments356['__thenClosure'] = function() use ($renderingContext, $self) {
$output358 = '';

$output358 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array359 = array (
);
$output358 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array359), ENT_QUOTES);

$output358 .= '" data-form-name="';
$array360 = array (
);
$output358 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array360), ENT_QUOTES);

$output358 .= '">';
$array361 = array (
);
$output358 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array361), ENT_QUOTES);

$output358 .= '</a>
											';
return $output358;
};
$arguments356['__elseClosures'][] = function() use ($renderingContext, $self) {
$output362 = '';

$output362 .= '
												';
$array363 = array (
);
$output362 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array363), ENT_QUOTES);

$output362 .= '
											';
return $output362;
};

$output216 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output216 .= '
									</td>
								</tr>
							';
return $output216;
};
$arguments213 = array();
$arguments213['each'] = NULL;
$arguments213['as'] = NULL;
$arguments213['key'] = NULL;
$arguments213['reverse'] = false;
$arguments213['iteration'] = NULL;
$array215 = array (
);$arguments213['each'] = $renderingContext->getVariableProvider()->getByPath('forms', $array215);
$arguments213['as'] = 'form';

$output202 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output202 .= '
						</tbody>
					</table>
				</div>
			</div>
		</div>
	';
return $output202;
};
$arguments200 = array();

$output199 .= '';

$output199 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure379 = function() use ($renderingContext, $self) {
$output380 = '';

$output380 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure382 = function() use ($renderingContext, $self) {
$output385 = '';

$output385 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure387 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments386 = array();
$arguments386['key'] = NULL;
$arguments386['id'] = NULL;
$arguments386['default'] = NULL;
$arguments386['htmlEscape'] = NULL;
$arguments386['arguments'] = NULL;
$arguments386['extensionName'] = NULL;
$arguments386['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.no_forms';

$output385 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments386, $renderChildrenClosure387, $renderingContext), ENT_QUOTES);

$output385 .= '</p>
			<a class="btn btn-primary" data-identifier="newForm" href="#">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments388 = array();
$arguments388['key'] = NULL;
$arguments388['id'] = NULL;
$arguments388['default'] = NULL;
$arguments388['htmlEscape'] = NULL;
$arguments388['arguments'] = NULL;
$arguments388['extensionName'] = NULL;
$arguments388['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form';

$output385 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments388, $renderChildrenClosure389, $renderingContext), ENT_QUOTES);

$output385 .= '</a>
		';
return $output385;
};
$arguments381 = array();
$arguments381['message'] = NULL;
$arguments381['title'] = NULL;
$arguments381['state'] = -2;
$arguments381['iconName'] = NULL;
$arguments381['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments383 = array();
$arguments383['key'] = NULL;
$arguments383['id'] = NULL;
$arguments383['default'] = NULL;
$arguments383['htmlEscape'] = NULL;
$arguments383['arguments'] = NULL;
$arguments383['extensionName'] = NULL;
$arguments383['key'] = 'formManager.no_forms';
$arguments383['extensionName'] = 'form';
$arguments381['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext);
$arguments381['state'] = -1;
$renderChildrenClosure382 = $arguments381['message'] ? function() use ($arguments381) { return $arguments381['message']; } : $renderChildrenClosure382;
$output380 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments381, $renderChildrenClosure382, $renderingContext);

$output380 .= '
	';
return $output380;
};
$arguments378 = array();
$arguments378['if'] = NULL;

$output199 .= '';

$output199 .= '
';
return $output199;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array196 = array();
$array197 = array (
);$array196['0'] = $renderingContext->getVariableProvider()->getByPath('forms', $array197);

$expression198 = function($context) {return ($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression198(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array196)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
			<div class="panel panel-space panel-default recordlist">
				<div class="panel-heading">
					<span>';
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
$arguments11['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_existing_forms';

$output10 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext), ENT_QUOTES);

$output10 .= '</span>
				</div>
				<div class="collapse in">
					<div class="table-fit">
						<table id="forms" class="table table-striped table-hover">
							<thead>
								<tr>
									<th nowrap="nowrap" class="col-icon"><a class="btn btn-default" data-identifier="newForm" href="#">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['identifier'] = NULL;
$arguments13['size'] = 'small';
$arguments13['overlay'] = NULL;
$arguments13['state'] = 'default';
$arguments13['alternativeMarkupIdentifier'] = NULL;
$arguments13['identifier'] = 'actions-add';

$output10 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output10 .= '</a></th>
									<th nowrap="nowrap" class="col-title col-responsive">';
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
$arguments15['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.form_name';

$output10 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext), ENT_QUOTES);

$output10 .= '</th>
									<th nowrap="nowrap" class="col-control"></th>
									<th nowrap="nowrap">';
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
$arguments17['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.location';

$output10 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext), ENT_QUOTES);

$output10 .= '</th>
									<th nowrap="nowrap">';
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
$arguments19['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.references';

$output10 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext), ENT_QUOTES);

$output10 .= '</th>
								</tr>
							</thead>
							<tbody>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
								<tr>
									<td nowrap="nowrap" class="col-icon">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['key'] = NULL;
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['htmlEscape'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output43 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext), ENT_QUOTES);

$output43 .= ' ';
$array46 = array (
);
$output43 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.identifier', $array46), ENT_QUOTES);

$output43 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['identifier'] = NULL;
$arguments47['size'] = 'small';
$arguments47['overlay'] = NULL;
$arguments47['state'] = 'default';
$arguments47['alternativeMarkupIdentifier'] = NULL;
$arguments47['identifier'] = 'overlay-missing';

$output43 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output43 .= '
												</span>
											';
return $output43;
};
$arguments41 = array();

$output40 .= '';

$output40 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
												<span title="id=';
$array52 = array (
);
$output51 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.identifier', $array52), ENT_QUOTES);

$output51 .= '" data-toggle="tooltip" data-placement="right">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['identifier'] = NULL;
$arguments53['size'] = 'small';
$arguments53['overlay'] = NULL;
$arguments53['state'] = 'default';
$arguments53['alternativeMarkupIdentifier'] = NULL;
$arguments53['identifier'] = 'content-elements-mailform';

$output51 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output51 .= '
												</span>
											';
return $output51;
};
$arguments49 = array();
$arguments49['if'] = NULL;

$output40 .= '';

$output40 .= '
										';
return $output40;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array38);

$expression39 = function($context) {return ($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments25['__thenClosure'] = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['key'] = NULL;
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['htmlEscape'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output27 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext), ENT_QUOTES);

$output27 .= ' ';
$array30 = array (
);
$output27 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.identifier', $array30), ENT_QUOTES);

$output27 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['identifier'] = NULL;
$arguments31['size'] = 'small';
$arguments31['overlay'] = NULL;
$arguments31['state'] = 'default';
$arguments31['alternativeMarkupIdentifier'] = NULL;
$arguments31['identifier'] = 'overlay-missing';

$output27 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output27 .= '
												</span>
											';
return $output27;
};
$arguments25['__elseClosures'][] = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
												<span title="id=';
$array34 = array (
);
$output33 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.identifier', $array34), ENT_QUOTES);

$output33 .= '" data-toggle="tooltip" data-placement="right">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['identifier'] = NULL;
$arguments35['size'] = 'small';
$arguments35['overlay'] = NULL;
$arguments35['state'] = 'default';
$arguments35['alternativeMarkupIdentifier'] = NULL;
$arguments35['identifier'] = 'content-elements-mailform';

$output33 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output33 .= '
												</span>
											';
return $output33;
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
									</td>
									<td nowrap="nowrap" class="col-title col-responsive">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
													<div>';
$array75 = array (
);
$output74 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array75), ENT_QUOTES);

$output74 .= '</div>
												';
return $output74;
};
$arguments72 = array();

$output71 .= '';

$output71 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$array86 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array86), ENT_QUOTES);
};
$arguments79 = array();
$arguments79['action'] = NULL;
$arguments79['arguments'] = array (
);
$arguments79['controller'] = NULL;
$arguments79['extensionName'] = NULL;
$arguments79['pluginName'] = NULL;
$arguments79['pageUid'] = NULL;
$arguments79['pageType'] = 0;
$arguments79['noCache'] = false;
$arguments79['noCacheHash'] = false;
$arguments79['section'] = '';
$arguments79['format'] = '';
$arguments79['linkAccessRestrictedPages'] = false;
$arguments79['additionalParams'] = array (
);
$arguments79['absolute'] = false;
$arguments79['addQueryString'] = false;
$arguments79['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments79['addQueryStringMethod'] = NULL;
$arguments79['additionalAttributes'] = NULL;
$arguments79['data'] = NULL;
$arguments79['class'] = NULL;
$arguments79['dir'] = NULL;
$arguments79['id'] = NULL;
$arguments79['lang'] = NULL;
$arguments79['style'] = NULL;
$arguments79['title'] = NULL;
$arguments79['accesskey'] = NULL;
$arguments79['tabindex'] = NULL;
$arguments79['onclick'] = NULL;
$arguments79['name'] = NULL;
$arguments79['rel'] = NULL;
$arguments79['rev'] = NULL;
$arguments79['target'] = NULL;
$arguments79['controller'] = 'FormEditor';
$arguments79['action'] = 'index';
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array82);
$arguments79['arguments'] = $array81;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['key'] = NULL;
$arguments83['id'] = NULL;
$arguments83['default'] = NULL;
$arguments83['htmlEscape'] = NULL;
$arguments83['arguments'] = NULL;
$arguments83['extensionName'] = NULL;
$arguments83['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments79['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);
// Rendering Array
$array85 = array();
$array85['toggle'] = 'tooltip';
$array85['placement'] = 'right';
$arguments79['data'] = $array85;

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
												';
return $output78;
};
$arguments76 = array();
$arguments76['if'] = NULL;

$output71 .= '';

$output71 .= '
										';
return $output71;
};
$arguments55 = array();
$arguments55['then'] = NULL;
$arguments55['else'] = NULL;
$arguments55['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array68 = array();
$array69 = array (
);$array68['0'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array69);

$expression70 = function($context) {return ($context["node0"]);};
$arguments55['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression70(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)
					),
					$renderingContext
				);
$arguments55['__thenClosure'] = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
													<div>';
$array58 = array (
);
$output57 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array58), ENT_QUOTES);

$output57 .= '</div>
												';
return $output57;
};
$arguments55['__elseClosures'][] = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$array67 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array67), ENT_QUOTES);
};
$arguments60 = array();
$arguments60['action'] = NULL;
$arguments60['arguments'] = array (
);
$arguments60['controller'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['pluginName'] = NULL;
$arguments60['pageUid'] = NULL;
$arguments60['pageType'] = 0;
$arguments60['noCache'] = false;
$arguments60['noCacheHash'] = false;
$arguments60['section'] = '';
$arguments60['format'] = '';
$arguments60['linkAccessRestrictedPages'] = false;
$arguments60['additionalParams'] = array (
);
$arguments60['absolute'] = false;
$arguments60['addQueryString'] = false;
$arguments60['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments60['addQueryStringMethod'] = NULL;
$arguments60['additionalAttributes'] = NULL;
$arguments60['data'] = NULL;
$arguments60['class'] = NULL;
$arguments60['dir'] = NULL;
$arguments60['id'] = NULL;
$arguments60['lang'] = NULL;
$arguments60['style'] = NULL;
$arguments60['title'] = NULL;
$arguments60['accesskey'] = NULL;
$arguments60['tabindex'] = NULL;
$arguments60['onclick'] = NULL;
$arguments60['name'] = NULL;
$arguments60['rel'] = NULL;
$arguments60['rev'] = NULL;
$arguments60['target'] = NULL;
$arguments60['controller'] = 'FormEditor';
$arguments60['action'] = 'index';
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array63);
$arguments60['arguments'] = $array62;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['key'] = NULL;
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['htmlEscape'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$arguments64['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments60['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);
// Rendering Array
$array66 = array();
$array66['toggle'] = 'tooltip';
$array66['placement'] = 'right';
$arguments60['data'] = $array66;

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
												';
return $output59;
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output24 .= '
									</td>
									<td nowrap="nowrap" class="col-control">
										<div class="btn-group" role="group">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['key'] = NULL;
$arguments110['id'] = NULL;
$arguments110['default'] = NULL;
$arguments110['htmlEscape'] = NULL;
$arguments110['arguments'] = NULL;
$arguments110['extensionName'] = NULL;
$arguments110['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output109 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext), ENT_QUOTES);

$output109 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['identifier'] = NULL;
$arguments112['size'] = 'small';
$arguments112['overlay'] = NULL;
$arguments112['state'] = 'default';
$arguments112['alternativeMarkupIdentifier'] = NULL;
$arguments112['identifier'] = 'actions-open';

$output109 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output109 .= '</button>
												';
return $output109;
};
$arguments107 = array();

$output106 .= '';

$output106 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['identifier'] = NULL;
$arguments123['size'] = 'small';
$arguments123['overlay'] = NULL;
$arguments123['state'] = 'default';
$arguments123['alternativeMarkupIdentifier'] = NULL;
$arguments123['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);
};
$arguments117 = array();
$arguments117['action'] = NULL;
$arguments117['arguments'] = array (
);
$arguments117['controller'] = NULL;
$arguments117['extensionName'] = NULL;
$arguments117['pluginName'] = NULL;
$arguments117['pageUid'] = NULL;
$arguments117['pageType'] = 0;
$arguments117['noCache'] = false;
$arguments117['noCacheHash'] = false;
$arguments117['section'] = '';
$arguments117['format'] = '';
$arguments117['linkAccessRestrictedPages'] = false;
$arguments117['additionalParams'] = array (
);
$arguments117['absolute'] = false;
$arguments117['addQueryString'] = false;
$arguments117['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments117['addQueryStringMethod'] = NULL;
$arguments117['additionalAttributes'] = NULL;
$arguments117['data'] = NULL;
$arguments117['class'] = NULL;
$arguments117['dir'] = NULL;
$arguments117['id'] = NULL;
$arguments117['lang'] = NULL;
$arguments117['style'] = NULL;
$arguments117['title'] = NULL;
$arguments117['accesskey'] = NULL;
$arguments117['tabindex'] = NULL;
$arguments117['onclick'] = NULL;
$arguments117['name'] = NULL;
$arguments117['rel'] = NULL;
$arguments117['rev'] = NULL;
$arguments117['target'] = NULL;
$arguments117['controller'] = 'FormEditor';
$arguments117['action'] = 'index';
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array120);
$arguments117['arguments'] = $array119;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['key'] = NULL;
$arguments121['id'] = NULL;
$arguments121['default'] = NULL;
$arguments121['htmlEscape'] = NULL;
$arguments121['arguments'] = NULL;
$arguments121['extensionName'] = NULL;
$arguments121['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments117['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);
$arguments117['class'] = 'btn btn-default form-record-open';

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= '
												';
return $output116;
};
$arguments114 = array();
$arguments114['if'] = NULL;

$output106 .= '';

$output106 .= '
											';
return $output106;
};
$arguments87 = array();
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$arguments87['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array103 = array();
$array104 = array (
);$array103['0'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array104);

$expression105 = function($context) {return ($context["node0"]);};
$arguments87['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
$arguments87['__thenClosure'] = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['key'] = NULL;
$arguments90['id'] = NULL;
$arguments90['default'] = NULL;
$arguments90['htmlEscape'] = NULL;
$arguments90['arguments'] = NULL;
$arguments90['extensionName'] = NULL;
$arguments90['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output89 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext), ENT_QUOTES);

$output89 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['identifier'] = NULL;
$arguments92['size'] = 'small';
$arguments92['overlay'] = NULL;
$arguments92['state'] = 'default';
$arguments92['alternativeMarkupIdentifier'] = NULL;
$arguments92['identifier'] = 'actions-open';

$output89 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output89 .= '</button>
												';
return $output89;
};
$arguments87['__elseClosures'][] = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['identifier'] = NULL;
$arguments101['size'] = 'small';
$arguments101['overlay'] = NULL;
$arguments101['state'] = 'default';
$arguments101['alternativeMarkupIdentifier'] = NULL;
$arguments101['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);
};
$arguments95 = array();
$arguments95['action'] = NULL;
$arguments95['arguments'] = array (
);
$arguments95['controller'] = NULL;
$arguments95['extensionName'] = NULL;
$arguments95['pluginName'] = NULL;
$arguments95['pageUid'] = NULL;
$arguments95['pageType'] = 0;
$arguments95['noCache'] = false;
$arguments95['noCacheHash'] = false;
$arguments95['section'] = '';
$arguments95['format'] = '';
$arguments95['linkAccessRestrictedPages'] = false;
$arguments95['additionalParams'] = array (
);
$arguments95['absolute'] = false;
$arguments95['addQueryString'] = false;
$arguments95['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments95['addQueryStringMethod'] = NULL;
$arguments95['additionalAttributes'] = NULL;
$arguments95['data'] = NULL;
$arguments95['class'] = NULL;
$arguments95['dir'] = NULL;
$arguments95['id'] = NULL;
$arguments95['lang'] = NULL;
$arguments95['style'] = NULL;
$arguments95['title'] = NULL;
$arguments95['accesskey'] = NULL;
$arguments95['tabindex'] = NULL;
$arguments95['onclick'] = NULL;
$arguments95['name'] = NULL;
$arguments95['rel'] = NULL;
$arguments95['rev'] = NULL;
$arguments95['target'] = NULL;
$arguments95['controller'] = 'FormEditor';
$arguments95['action'] = 'index';
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array98);
$arguments95['arguments'] = $array97;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['key'] = NULL;
$arguments99['id'] = NULL;
$arguments99['default'] = NULL;
$arguments99['htmlEscape'] = NULL;
$arguments99['arguments'] = NULL;
$arguments99['extensionName'] = NULL;
$arguments99['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments95['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);
$arguments95['class'] = 'btn btn-default form-record-open';

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
												';
return $output94;
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output24 .= '
											<a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array125 = array (
);
$output24 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array125), ENT_QUOTES);

$output24 .= '" data-form-name="';
$array126 = array (
);
$output24 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array126), ENT_QUOTES);

$output24 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments127 = array();
$arguments127['key'] = NULL;
$arguments127['id'] = NULL;
$arguments127['default'] = NULL;
$arguments127['htmlEscape'] = NULL;
$arguments127['arguments'] = NULL;
$arguments127['extensionName'] = NULL;
$arguments127['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output24 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext), ENT_QUOTES);

$output24 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['identifier'] = NULL;
$arguments129['size'] = 'small';
$arguments129['overlay'] = NULL;
$arguments129['state'] = 'default';
$arguments129['alternativeMarkupIdentifier'] = NULL;
$arguments129['identifier'] = 't3-form-icon-duplicate';

$output24 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output24 .= '</a>
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output147 = '';

$output147 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
													<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array151 = array (
);
$output150 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array151), ENT_QUOTES);

$output150 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments152 = array();
$arguments152['key'] = NULL;
$arguments152['id'] = NULL;
$arguments152['default'] = NULL;
$arguments152['htmlEscape'] = NULL;
$arguments152['arguments'] = NULL;
$arguments152['extensionName'] = NULL;
$arguments152['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output150 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext), ENT_QUOTES);

$output150 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['identifier'] = NULL;
$arguments154['size'] = 'small';
$arguments154['overlay'] = NULL;
$arguments154['state'] = 'default';
$arguments154['alternativeMarkupIdentifier'] = NULL;
$arguments154['identifier'] = 'actions-edit-delete';

$output150 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output150 .= '</a>
												';
return $output150;
};
$arguments148 = array();

$output147 .= '';

$output147 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
													<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['key'] = NULL;
$arguments159['id'] = NULL;
$arguments159['default'] = NULL;
$arguments159['htmlEscape'] = NULL;
$arguments159['arguments'] = NULL;
$arguments159['extensionName'] = NULL;
$arguments159['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output158 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext), ENT_QUOTES);

$output158 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['identifier'] = NULL;
$arguments161['size'] = 'small';
$arguments161['overlay'] = NULL;
$arguments161['state'] = 'default';
$arguments161['alternativeMarkupIdentifier'] = NULL;
$arguments161['identifier'] = 'actions-edit-delete';

$output158 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output158 .= '</button>
												';
return $output158;
};
$arguments156 = array();
$arguments156['if'] = NULL;

$output147 .= '';

$output147 .= '
											';
return $output147;
};
$arguments131 = array();
$arguments131['then'] = NULL;
$arguments131['else'] = NULL;
$arguments131['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array144 = array();
$array145 = array (
);$array144['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array145);

$expression146 = function($context) {return ($context["node0"]);};
$arguments131['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression146(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array144)
					),
					$renderingContext
				);
$arguments131['__thenClosure'] = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
													<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array134 = array (
);
$output133 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array134), ENT_QUOTES);

$output133 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments135 = array();
$arguments135['key'] = NULL;
$arguments135['id'] = NULL;
$arguments135['default'] = NULL;
$arguments135['htmlEscape'] = NULL;
$arguments135['arguments'] = NULL;
$arguments135['extensionName'] = NULL;
$arguments135['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output133 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext), ENT_QUOTES);

$output133 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['identifier'] = NULL;
$arguments137['size'] = 'small';
$arguments137['overlay'] = NULL;
$arguments137['state'] = 'default';
$arguments137['alternativeMarkupIdentifier'] = NULL;
$arguments137['identifier'] = 'actions-edit-delete';

$output133 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output133 .= '</a>
												';
return $output133;
};
$arguments131['__elseClosures'][] = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
													<button class="btn btn-default form-record-delete" disabled="disabled" title="';
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
$arguments140['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output139 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext), ENT_QUOTES);

$output139 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['identifier'] = NULL;
$arguments142['size'] = 'small';
$arguments142['overlay'] = NULL;
$arguments142['state'] = 'default';
$arguments142['alternativeMarkupIdentifier'] = NULL;
$arguments142['identifier'] = 'actions-edit-delete';

$output139 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output139 .= '</button>
												';
return $output139;
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output24 .= '
										</div>
									</td>
									<td nowrap="nowrap">';
$array163 = array (
);
$output24 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array163), ENT_QUOTES);

$output24 .= '</td>
									<td nowrap="nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$output175 = '';

$output175 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array179 = array (
);
$output178 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array179), ENT_QUOTES);

$output178 .= '" data-form-name="';
$array180 = array (
);
$output178 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array180), ENT_QUOTES);

$output178 .= '">';
$array181 = array (
);
$output178 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array181), ENT_QUOTES);

$output178 .= '</a>
											';
return $output178;
};
$arguments176 = array();

$output175 .= '';

$output175 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '
												';
$array185 = array (
);
$output184 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array185), ENT_QUOTES);

$output184 .= '
											';
return $output184;
};
$arguments182 = array();
$arguments182['if'] = NULL;

$output175 .= '';

$output175 .= '
										';
return $output175;
};
$arguments164 = array();
$arguments164['then'] = NULL;
$arguments164['else'] = NULL;
$arguments164['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array172 = array();
$array173 = array (
);$array172['0'] = $renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array173);

$expression174 = function($context) {return ($context["node0"]);};
$arguments164['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression174(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array172)
					),
					$renderingContext
				);
$arguments164['__thenClosure'] = function() use ($renderingContext, $self) {
$output166 = '';

$output166 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array167 = array (
);
$output166 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array167), ENT_QUOTES);

$output166 .= '" data-form-name="';
$array168 = array (
);
$output166 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array168), ENT_QUOTES);

$output166 .= '">';
$array169 = array (
);
$output166 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array169), ENT_QUOTES);

$output166 .= '</a>
											';
return $output166;
};
$arguments164['__elseClosures'][] = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
												';
$array171 = array (
);
$output170 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array171), ENT_QUOTES);

$output170 .= '
											';
return $output170;
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output24 .= '
									</td>
								</tr>
							';
return $output24;
};
$arguments21 = array();
$arguments21['each'] = NULL;
$arguments21['as'] = NULL;
$arguments21['key'] = NULL;
$arguments21['reverse'] = false;
$arguments21['iteration'] = NULL;
$array23 = array (
);$arguments21['each'] = $renderingContext->getVariableProvider()->getByPath('forms', $array23);
$arguments21['as'] = 'form';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output10 .= '
						</tbody>
					</table>
				</div>
			</div>
		</div>
	';
return $output10;
};
$arguments8['__elseClosures'][] = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['key'] = NULL;
$arguments192['id'] = NULL;
$arguments192['default'] = NULL;
$arguments192['htmlEscape'] = NULL;
$arguments192['arguments'] = NULL;
$arguments192['extensionName'] = NULL;
$arguments192['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.no_forms';

$output191 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext), ENT_QUOTES);

$output191 .= '</p>
			<a class="btn btn-primary" data-identifier="newForm" href="#">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments194 = array();
$arguments194['key'] = NULL;
$arguments194['id'] = NULL;
$arguments194['default'] = NULL;
$arguments194['htmlEscape'] = NULL;
$arguments194['arguments'] = NULL;
$arguments194['extensionName'] = NULL;
$arguments194['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form';

$output191 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext), ENT_QUOTES);

$output191 .= '</a>
		';
return $output191;
};
$arguments187 = array();
$arguments187['message'] = NULL;
$arguments187['title'] = NULL;
$arguments187['state'] = -2;
$arguments187['iconName'] = NULL;
$arguments187['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['key'] = NULL;
$arguments189['id'] = NULL;
$arguments189['default'] = NULL;
$arguments189['htmlEscape'] = NULL;
$arguments189['arguments'] = NULL;
$arguments189['extensionName'] = NULL;
$arguments189['key'] = 'formManager.no_forms';
$arguments189['extensionName'] = 'form';
$arguments187['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);
$arguments187['state'] = -1;
$renderChildrenClosure188 = $arguments187['message'] ? function() use ($arguments187) { return $arguments187['message']; } : $renderChildrenClosure188;
$output186 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output186 .= '
	';
return $output186;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output390 = '';

$output390 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments391 = array();
$arguments391['name'] = NULL;
$arguments391['name'] = 'FormManager';

$output390 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments391, $renderChildrenClosure392, $renderingContext), ENT_QUOTES);

$output390 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '

	<script type="text/javascript">
		require([\'';
$array396 = array (
);
$output395 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('dynamicRequireJsModules.app', $array396), ENT_QUOTES);

$output395 .= '\', \'';
$array397 = array (
);
$output395 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('dynamicRequireJsModules.viewModel', $array397), ENT_QUOTES);

$output395 .= '\'], function (formManagerApp, viewModel) {
			var FORMMANAGER_APP = formManagerApp.getInstance(
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure399 = function() use ($renderingContext, $self) {
$array400 = array (
);return $renderingContext->getVariableProvider()->getByPath('formManagerAppInitialData', $array400);
};
$arguments398 = array();
$arguments398['value'] = NULL;
$arguments398['keepQuotes'] = false;
$arguments398['encoding'] = NULL;

$output395 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments398, $renderChildrenClosure399, $renderingContext);

$output395 .= ',
				viewModel
			).run();
		});
	</script>
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments401 = array();
$arguments401['key'] = NULL;
$arguments401['id'] = NULL;
$arguments401['default'] = NULL;
$arguments401['htmlEscape'] = NULL;
$arguments401['arguments'] = NULL;
$arguments401['extensionName'] = NULL;
$arguments401['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.headline';

$output395 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments401, $renderChildrenClosure402, $renderingContext), ENT_QUOTES);

$output395 .= '</h1>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
$output594 = '';

$output594 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure596 = function() use ($renderingContext, $self) {
$output597 = '';

$output597 .= '
			<div class="panel panel-space panel-default recordlist">
				<div class="panel-heading">
					<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure599 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments598 = array();
$arguments598['key'] = NULL;
$arguments598['id'] = NULL;
$arguments598['default'] = NULL;
$arguments598['htmlEscape'] = NULL;
$arguments598['arguments'] = NULL;
$arguments598['extensionName'] = NULL;
$arguments598['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_existing_forms';

$output597 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments598, $renderChildrenClosure599, $renderingContext), ENT_QUOTES);

$output597 .= '</span>
				</div>
				<div class="collapse in">
					<div class="table-fit">
						<table id="forms" class="table table-striped table-hover">
							<thead>
								<tr>
									<th nowrap="nowrap" class="col-icon"><a class="btn btn-default" data-identifier="newForm" href="#">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure601 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments600 = array();
$arguments600['identifier'] = NULL;
$arguments600['size'] = 'small';
$arguments600['overlay'] = NULL;
$arguments600['state'] = 'default';
$arguments600['alternativeMarkupIdentifier'] = NULL;
$arguments600['identifier'] = 'actions-add';

$output597 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments600, $renderChildrenClosure601, $renderingContext);

$output597 .= '</a></th>
									<th nowrap="nowrap" class="col-title col-responsive">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure603 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments602 = array();
$arguments602['key'] = NULL;
$arguments602['id'] = NULL;
$arguments602['default'] = NULL;
$arguments602['htmlEscape'] = NULL;
$arguments602['arguments'] = NULL;
$arguments602['extensionName'] = NULL;
$arguments602['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.form_name';

$output597 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments602, $renderChildrenClosure603, $renderingContext), ENT_QUOTES);

$output597 .= '</th>
									<th nowrap="nowrap" class="col-control"></th>
									<th nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure605 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments604 = array();
$arguments604['key'] = NULL;
$arguments604['id'] = NULL;
$arguments604['default'] = NULL;
$arguments604['htmlEscape'] = NULL;
$arguments604['arguments'] = NULL;
$arguments604['extensionName'] = NULL;
$arguments604['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.location';

$output597 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments604, $renderChildrenClosure605, $renderingContext), ENT_QUOTES);

$output597 .= '</th>
									<th nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure607 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments606 = array();
$arguments606['key'] = NULL;
$arguments606['id'] = NULL;
$arguments606['default'] = NULL;
$arguments606['htmlEscape'] = NULL;
$arguments606['arguments'] = NULL;
$arguments606['extensionName'] = NULL;
$arguments606['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.references';

$output597 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments606, $renderChildrenClosure607, $renderingContext), ENT_QUOTES);

$output597 .= '</th>
								</tr>
							</thead>
							<tbody>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure609 = function() use ($renderingContext, $self) {
$output611 = '';

$output611 .= '
								<tr>
									<td nowrap="nowrap" class="col-icon">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure613 = function() use ($renderingContext, $self) {
$output627 = '';

$output627 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure629 = function() use ($renderingContext, $self) {
$output630 = '';

$output630 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure632 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments631 = array();
$arguments631['key'] = NULL;
$arguments631['id'] = NULL;
$arguments631['default'] = NULL;
$arguments631['htmlEscape'] = NULL;
$arguments631['arguments'] = NULL;
$arguments631['extensionName'] = NULL;
$arguments631['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output630 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments631, $renderChildrenClosure632, $renderingContext), ENT_QUOTES);

$output630 .= ' ';
$array633 = array (
);
$output630 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.identifier', $array633), ENT_QUOTES);

$output630 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure635 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments634 = array();
$arguments634['identifier'] = NULL;
$arguments634['size'] = 'small';
$arguments634['overlay'] = NULL;
$arguments634['state'] = 'default';
$arguments634['alternativeMarkupIdentifier'] = NULL;
$arguments634['identifier'] = 'overlay-missing';

$output630 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments634, $renderChildrenClosure635, $renderingContext);

$output630 .= '
												</span>
											';
return $output630;
};
$arguments628 = array();

$output627 .= '';

$output627 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure637 = function() use ($renderingContext, $self) {
$output638 = '';

$output638 .= '
												<span title="id=';
$array639 = array (
);
$output638 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.identifier', $array639), ENT_QUOTES);

$output638 .= '" data-toggle="tooltip" data-placement="right">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure641 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments640 = array();
$arguments640['identifier'] = NULL;
$arguments640['size'] = 'small';
$arguments640['overlay'] = NULL;
$arguments640['state'] = 'default';
$arguments640['alternativeMarkupIdentifier'] = NULL;
$arguments640['identifier'] = 'content-elements-mailform';

$output638 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments640, $renderChildrenClosure641, $renderingContext);

$output638 .= '
												</span>
											';
return $output638;
};
$arguments636 = array();
$arguments636['if'] = NULL;

$output627 .= '';

$output627 .= '
										';
return $output627;
};
$arguments612 = array();
$arguments612['then'] = NULL;
$arguments612['else'] = NULL;
$arguments612['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array624 = array();
$array625 = array (
);$array624['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array625);

$expression626 = function($context) {return ($context["node0"]);};
$arguments612['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression626(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array624)
					),
					$renderingContext
				);
$arguments612['__thenClosure'] = function() use ($renderingContext, $self) {
$output614 = '';

$output614 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure616 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments615 = array();
$arguments615['key'] = NULL;
$arguments615['id'] = NULL;
$arguments615['default'] = NULL;
$arguments615['htmlEscape'] = NULL;
$arguments615['arguments'] = NULL;
$arguments615['extensionName'] = NULL;
$arguments615['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output614 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments615, $renderChildrenClosure616, $renderingContext), ENT_QUOTES);

$output614 .= ' ';
$array617 = array (
);
$output614 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.identifier', $array617), ENT_QUOTES);

$output614 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure619 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments618 = array();
$arguments618['identifier'] = NULL;
$arguments618['size'] = 'small';
$arguments618['overlay'] = NULL;
$arguments618['state'] = 'default';
$arguments618['alternativeMarkupIdentifier'] = NULL;
$arguments618['identifier'] = 'overlay-missing';

$output614 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments618, $renderChildrenClosure619, $renderingContext);

$output614 .= '
												</span>
											';
return $output614;
};
$arguments612['__elseClosures'][] = function() use ($renderingContext, $self) {
$output620 = '';

$output620 .= '
												<span title="id=';
$array621 = array (
);
$output620 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.identifier', $array621), ENT_QUOTES);

$output620 .= '" data-toggle="tooltip" data-placement="right">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure623 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments622 = array();
$arguments622['identifier'] = NULL;
$arguments622['size'] = 'small';
$arguments622['overlay'] = NULL;
$arguments622['state'] = 'default';
$arguments622['alternativeMarkupIdentifier'] = NULL;
$arguments622['identifier'] = 'content-elements-mailform';

$output620 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments622, $renderChildrenClosure623, $renderingContext);

$output620 .= '
												</span>
											';
return $output620;
};

$output611 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments612, $renderChildrenClosure613, $renderingContext);

$output611 .= '
									</td>
									<td nowrap="nowrap" class="col-title col-responsive">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure643 = function() use ($renderingContext, $self) {
$output658 = '';

$output658 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure660 = function() use ($renderingContext, $self) {
$output661 = '';

$output661 .= '
													<div>';
$array662 = array (
);
$output661 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array662), ENT_QUOTES);

$output661 .= '</div>
												';
return $output661;
};
$arguments659 = array();

$output658 .= '';

$output658 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure664 = function() use ($renderingContext, $self) {
$output665 = '';

$output665 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure667 = function() use ($renderingContext, $self) {
$array673 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array673), ENT_QUOTES);
};
$arguments666 = array();
$arguments666['action'] = NULL;
$arguments666['arguments'] = array (
);
$arguments666['controller'] = NULL;
$arguments666['extensionName'] = NULL;
$arguments666['pluginName'] = NULL;
$arguments666['pageUid'] = NULL;
$arguments666['pageType'] = 0;
$arguments666['noCache'] = false;
$arguments666['noCacheHash'] = false;
$arguments666['section'] = '';
$arguments666['format'] = '';
$arguments666['linkAccessRestrictedPages'] = false;
$arguments666['additionalParams'] = array (
);
$arguments666['absolute'] = false;
$arguments666['addQueryString'] = false;
$arguments666['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments666['addQueryStringMethod'] = NULL;
$arguments666['additionalAttributes'] = NULL;
$arguments666['data'] = NULL;
$arguments666['class'] = NULL;
$arguments666['dir'] = NULL;
$arguments666['id'] = NULL;
$arguments666['lang'] = NULL;
$arguments666['style'] = NULL;
$arguments666['title'] = NULL;
$arguments666['accesskey'] = NULL;
$arguments666['tabindex'] = NULL;
$arguments666['onclick'] = NULL;
$arguments666['name'] = NULL;
$arguments666['rel'] = NULL;
$arguments666['rev'] = NULL;
$arguments666['target'] = NULL;
$arguments666['controller'] = 'FormEditor';
$arguments666['action'] = 'index';
// Rendering Array
$array668 = array();
$array669 = array (
);$array668['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array669);
$arguments666['arguments'] = $array668;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure671 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments670 = array();
$arguments670['key'] = NULL;
$arguments670['id'] = NULL;
$arguments670['default'] = NULL;
$arguments670['htmlEscape'] = NULL;
$arguments670['arguments'] = NULL;
$arguments670['extensionName'] = NULL;
$arguments670['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments666['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments670, $renderChildrenClosure671, $renderingContext);
// Rendering Array
$array672 = array();
$array672['toggle'] = 'tooltip';
$array672['placement'] = 'right';
$arguments666['data'] = $array672;

$output665 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments666, $renderChildrenClosure667, $renderingContext);

$output665 .= '
												';
return $output665;
};
$arguments663 = array();
$arguments663['if'] = NULL;

$output658 .= '';

$output658 .= '
										';
return $output658;
};
$arguments642 = array();
$arguments642['then'] = NULL;
$arguments642['else'] = NULL;
$arguments642['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array655 = array();
$array656 = array (
);$array655['0'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array656);

$expression657 = function($context) {return ($context["node0"]);};
$arguments642['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression657(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array655)
					),
					$renderingContext
				);
$arguments642['__thenClosure'] = function() use ($renderingContext, $self) {
$output644 = '';

$output644 .= '
													<div>';
$array645 = array (
);
$output644 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array645), ENT_QUOTES);

$output644 .= '</div>
												';
return $output644;
};
$arguments642['__elseClosures'][] = function() use ($renderingContext, $self) {
$output646 = '';

$output646 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure648 = function() use ($renderingContext, $self) {
$array654 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array654), ENT_QUOTES);
};
$arguments647 = array();
$arguments647['action'] = NULL;
$arguments647['arguments'] = array (
);
$arguments647['controller'] = NULL;
$arguments647['extensionName'] = NULL;
$arguments647['pluginName'] = NULL;
$arguments647['pageUid'] = NULL;
$arguments647['pageType'] = 0;
$arguments647['noCache'] = false;
$arguments647['noCacheHash'] = false;
$arguments647['section'] = '';
$arguments647['format'] = '';
$arguments647['linkAccessRestrictedPages'] = false;
$arguments647['additionalParams'] = array (
);
$arguments647['absolute'] = false;
$arguments647['addQueryString'] = false;
$arguments647['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments647['addQueryStringMethod'] = NULL;
$arguments647['additionalAttributes'] = NULL;
$arguments647['data'] = NULL;
$arguments647['class'] = NULL;
$arguments647['dir'] = NULL;
$arguments647['id'] = NULL;
$arguments647['lang'] = NULL;
$arguments647['style'] = NULL;
$arguments647['title'] = NULL;
$arguments647['accesskey'] = NULL;
$arguments647['tabindex'] = NULL;
$arguments647['onclick'] = NULL;
$arguments647['name'] = NULL;
$arguments647['rel'] = NULL;
$arguments647['rev'] = NULL;
$arguments647['target'] = NULL;
$arguments647['controller'] = 'FormEditor';
$arguments647['action'] = 'index';
// Rendering Array
$array649 = array();
$array650 = array (
);$array649['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array650);
$arguments647['arguments'] = $array649;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure652 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments651 = array();
$arguments651['key'] = NULL;
$arguments651['id'] = NULL;
$arguments651['default'] = NULL;
$arguments651['htmlEscape'] = NULL;
$arguments651['arguments'] = NULL;
$arguments651['extensionName'] = NULL;
$arguments651['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments647['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments651, $renderChildrenClosure652, $renderingContext);
// Rendering Array
$array653 = array();
$array653['toggle'] = 'tooltip';
$array653['placement'] = 'right';
$arguments647['data'] = $array653;

$output646 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments647, $renderChildrenClosure648, $renderingContext);

$output646 .= '
												';
return $output646;
};

$output611 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments642, $renderChildrenClosure643, $renderingContext);

$output611 .= '
									</td>
									<td nowrap="nowrap" class="col-control">
										<div class="btn-group" role="group">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure675 = function() use ($renderingContext, $self) {
$output693 = '';

$output693 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure695 = function() use ($renderingContext, $self) {
$output696 = '';

$output696 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure698 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments697 = array();
$arguments697['key'] = NULL;
$arguments697['id'] = NULL;
$arguments697['default'] = NULL;
$arguments697['htmlEscape'] = NULL;
$arguments697['arguments'] = NULL;
$arguments697['extensionName'] = NULL;
$arguments697['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output696 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments697, $renderChildrenClosure698, $renderingContext), ENT_QUOTES);

$output696 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure700 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments699 = array();
$arguments699['identifier'] = NULL;
$arguments699['size'] = 'small';
$arguments699['overlay'] = NULL;
$arguments699['state'] = 'default';
$arguments699['alternativeMarkupIdentifier'] = NULL;
$arguments699['identifier'] = 'actions-open';

$output696 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments699, $renderChildrenClosure700, $renderingContext);

$output696 .= '</button>
												';
return $output696;
};
$arguments694 = array();

$output693 .= '';

$output693 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure702 = function() use ($renderingContext, $self) {
$output703 = '';

$output703 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure705 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure711 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments710 = array();
$arguments710['identifier'] = NULL;
$arguments710['size'] = 'small';
$arguments710['overlay'] = NULL;
$arguments710['state'] = 'default';
$arguments710['alternativeMarkupIdentifier'] = NULL;
$arguments710['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments710, $renderChildrenClosure711, $renderingContext);
};
$arguments704 = array();
$arguments704['action'] = NULL;
$arguments704['arguments'] = array (
);
$arguments704['controller'] = NULL;
$arguments704['extensionName'] = NULL;
$arguments704['pluginName'] = NULL;
$arguments704['pageUid'] = NULL;
$arguments704['pageType'] = 0;
$arguments704['noCache'] = false;
$arguments704['noCacheHash'] = false;
$arguments704['section'] = '';
$arguments704['format'] = '';
$arguments704['linkAccessRestrictedPages'] = false;
$arguments704['additionalParams'] = array (
);
$arguments704['absolute'] = false;
$arguments704['addQueryString'] = false;
$arguments704['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments704['addQueryStringMethod'] = NULL;
$arguments704['additionalAttributes'] = NULL;
$arguments704['data'] = NULL;
$arguments704['class'] = NULL;
$arguments704['dir'] = NULL;
$arguments704['id'] = NULL;
$arguments704['lang'] = NULL;
$arguments704['style'] = NULL;
$arguments704['title'] = NULL;
$arguments704['accesskey'] = NULL;
$arguments704['tabindex'] = NULL;
$arguments704['onclick'] = NULL;
$arguments704['name'] = NULL;
$arguments704['rel'] = NULL;
$arguments704['rev'] = NULL;
$arguments704['target'] = NULL;
$arguments704['controller'] = 'FormEditor';
$arguments704['action'] = 'index';
// Rendering Array
$array706 = array();
$array707 = array (
);$array706['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array707);
$arguments704['arguments'] = $array706;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure709 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments708 = array();
$arguments708['key'] = NULL;
$arguments708['id'] = NULL;
$arguments708['default'] = NULL;
$arguments708['htmlEscape'] = NULL;
$arguments708['arguments'] = NULL;
$arguments708['extensionName'] = NULL;
$arguments708['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments704['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments708, $renderChildrenClosure709, $renderingContext);
$arguments704['class'] = 'btn btn-default form-record-open';

$output703 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments704, $renderChildrenClosure705, $renderingContext);

$output703 .= '
												';
return $output703;
};
$arguments701 = array();
$arguments701['if'] = NULL;

$output693 .= '';

$output693 .= '
											';
return $output693;
};
$arguments674 = array();
$arguments674['then'] = NULL;
$arguments674['else'] = NULL;
$arguments674['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array690 = array();
$array691 = array (
);$array690['0'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array691);

$expression692 = function($context) {return ($context["node0"]);};
$arguments674['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression692(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array690)
					),
					$renderingContext
				);
$arguments674['__thenClosure'] = function() use ($renderingContext, $self) {
$output676 = '';

$output676 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure678 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments677 = array();
$arguments677['key'] = NULL;
$arguments677['id'] = NULL;
$arguments677['default'] = NULL;
$arguments677['htmlEscape'] = NULL;
$arguments677['arguments'] = NULL;
$arguments677['extensionName'] = NULL;
$arguments677['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output676 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments677, $renderChildrenClosure678, $renderingContext), ENT_QUOTES);

$output676 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure680 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments679 = array();
$arguments679['identifier'] = NULL;
$arguments679['size'] = 'small';
$arguments679['overlay'] = NULL;
$arguments679['state'] = 'default';
$arguments679['alternativeMarkupIdentifier'] = NULL;
$arguments679['identifier'] = 'actions-open';

$output676 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments679, $renderChildrenClosure680, $renderingContext);

$output676 .= '</button>
												';
return $output676;
};
$arguments674['__elseClosures'][] = function() use ($renderingContext, $self) {
$output681 = '';

$output681 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure683 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure689 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments688 = array();
$arguments688['identifier'] = NULL;
$arguments688['size'] = 'small';
$arguments688['overlay'] = NULL;
$arguments688['state'] = 'default';
$arguments688['alternativeMarkupIdentifier'] = NULL;
$arguments688['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments688, $renderChildrenClosure689, $renderingContext);
};
$arguments682 = array();
$arguments682['action'] = NULL;
$arguments682['arguments'] = array (
);
$arguments682['controller'] = NULL;
$arguments682['extensionName'] = NULL;
$arguments682['pluginName'] = NULL;
$arguments682['pageUid'] = NULL;
$arguments682['pageType'] = 0;
$arguments682['noCache'] = false;
$arguments682['noCacheHash'] = false;
$arguments682['section'] = '';
$arguments682['format'] = '';
$arguments682['linkAccessRestrictedPages'] = false;
$arguments682['additionalParams'] = array (
);
$arguments682['absolute'] = false;
$arguments682['addQueryString'] = false;
$arguments682['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments682['addQueryStringMethod'] = NULL;
$arguments682['additionalAttributes'] = NULL;
$arguments682['data'] = NULL;
$arguments682['class'] = NULL;
$arguments682['dir'] = NULL;
$arguments682['id'] = NULL;
$arguments682['lang'] = NULL;
$arguments682['style'] = NULL;
$arguments682['title'] = NULL;
$arguments682['accesskey'] = NULL;
$arguments682['tabindex'] = NULL;
$arguments682['onclick'] = NULL;
$arguments682['name'] = NULL;
$arguments682['rel'] = NULL;
$arguments682['rev'] = NULL;
$arguments682['target'] = NULL;
$arguments682['controller'] = 'FormEditor';
$arguments682['action'] = 'index';
// Rendering Array
$array684 = array();
$array685 = array (
);$array684['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array685);
$arguments682['arguments'] = $array684;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure687 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments686 = array();
$arguments686['key'] = NULL;
$arguments686['id'] = NULL;
$arguments686['default'] = NULL;
$arguments686['htmlEscape'] = NULL;
$arguments686['arguments'] = NULL;
$arguments686['extensionName'] = NULL;
$arguments686['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments682['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments686, $renderChildrenClosure687, $renderingContext);
$arguments682['class'] = 'btn btn-default form-record-open';

$output681 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments682, $renderChildrenClosure683, $renderingContext);

$output681 .= '
												';
return $output681;
};

$output611 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments674, $renderChildrenClosure675, $renderingContext);

$output611 .= '
											<a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array712 = array (
);
$output611 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array712), ENT_QUOTES);

$output611 .= '" data-form-name="';
$array713 = array (
);
$output611 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array713), ENT_QUOTES);

$output611 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure715 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments714 = array();
$arguments714['key'] = NULL;
$arguments714['id'] = NULL;
$arguments714['default'] = NULL;
$arguments714['htmlEscape'] = NULL;
$arguments714['arguments'] = NULL;
$arguments714['extensionName'] = NULL;
$arguments714['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output611 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments714, $renderChildrenClosure715, $renderingContext), ENT_QUOTES);

$output611 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure717 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments716 = array();
$arguments716['identifier'] = NULL;
$arguments716['size'] = 'small';
$arguments716['overlay'] = NULL;
$arguments716['state'] = 'default';
$arguments716['alternativeMarkupIdentifier'] = NULL;
$arguments716['identifier'] = 't3-form-icon-duplicate';

$output611 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments716, $renderChildrenClosure717, $renderingContext);

$output611 .= '</a>
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure719 = function() use ($renderingContext, $self) {
$output734 = '';

$output734 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure736 = function() use ($renderingContext, $self) {
$output737 = '';

$output737 .= '
													<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array738 = array (
);
$output737 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array738), ENT_QUOTES);

$output737 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure740 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments739 = array();
$arguments739['key'] = NULL;
$arguments739['id'] = NULL;
$arguments739['default'] = NULL;
$arguments739['htmlEscape'] = NULL;
$arguments739['arguments'] = NULL;
$arguments739['extensionName'] = NULL;
$arguments739['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output737 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments739, $renderChildrenClosure740, $renderingContext), ENT_QUOTES);

$output737 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure742 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments741 = array();
$arguments741['identifier'] = NULL;
$arguments741['size'] = 'small';
$arguments741['overlay'] = NULL;
$arguments741['state'] = 'default';
$arguments741['alternativeMarkupIdentifier'] = NULL;
$arguments741['identifier'] = 'actions-edit-delete';

$output737 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments741, $renderChildrenClosure742, $renderingContext);

$output737 .= '</a>
												';
return $output737;
};
$arguments735 = array();

$output734 .= '';

$output734 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure744 = function() use ($renderingContext, $self) {
$output745 = '';

$output745 .= '
													<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure747 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments746 = array();
$arguments746['key'] = NULL;
$arguments746['id'] = NULL;
$arguments746['default'] = NULL;
$arguments746['htmlEscape'] = NULL;
$arguments746['arguments'] = NULL;
$arguments746['extensionName'] = NULL;
$arguments746['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output745 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments746, $renderChildrenClosure747, $renderingContext), ENT_QUOTES);

$output745 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure749 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments748 = array();
$arguments748['identifier'] = NULL;
$arguments748['size'] = 'small';
$arguments748['overlay'] = NULL;
$arguments748['state'] = 'default';
$arguments748['alternativeMarkupIdentifier'] = NULL;
$arguments748['identifier'] = 'actions-edit-delete';

$output745 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments748, $renderChildrenClosure749, $renderingContext);

$output745 .= '</button>
												';
return $output745;
};
$arguments743 = array();
$arguments743['if'] = NULL;

$output734 .= '';

$output734 .= '
											';
return $output734;
};
$arguments718 = array();
$arguments718['then'] = NULL;
$arguments718['else'] = NULL;
$arguments718['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array731 = array();
$array732 = array (
);$array731['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array732);

$expression733 = function($context) {return ($context["node0"]);};
$arguments718['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression733(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array731)
					),
					$renderingContext
				);
$arguments718['__thenClosure'] = function() use ($renderingContext, $self) {
$output720 = '';

$output720 .= '
													<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array721 = array (
);
$output720 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array721), ENT_QUOTES);

$output720 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure723 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments722 = array();
$arguments722['key'] = NULL;
$arguments722['id'] = NULL;
$arguments722['default'] = NULL;
$arguments722['htmlEscape'] = NULL;
$arguments722['arguments'] = NULL;
$arguments722['extensionName'] = NULL;
$arguments722['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output720 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments722, $renderChildrenClosure723, $renderingContext), ENT_QUOTES);

$output720 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure725 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments724 = array();
$arguments724['identifier'] = NULL;
$arguments724['size'] = 'small';
$arguments724['overlay'] = NULL;
$arguments724['state'] = 'default';
$arguments724['alternativeMarkupIdentifier'] = NULL;
$arguments724['identifier'] = 'actions-edit-delete';

$output720 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments724, $renderChildrenClosure725, $renderingContext);

$output720 .= '</a>
												';
return $output720;
};
$arguments718['__elseClosures'][] = function() use ($renderingContext, $self) {
$output726 = '';

$output726 .= '
													<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure728 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments727 = array();
$arguments727['key'] = NULL;
$arguments727['id'] = NULL;
$arguments727['default'] = NULL;
$arguments727['htmlEscape'] = NULL;
$arguments727['arguments'] = NULL;
$arguments727['extensionName'] = NULL;
$arguments727['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output726 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments727, $renderChildrenClosure728, $renderingContext), ENT_QUOTES);

$output726 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure730 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments729 = array();
$arguments729['identifier'] = NULL;
$arguments729['size'] = 'small';
$arguments729['overlay'] = NULL;
$arguments729['state'] = 'default';
$arguments729['alternativeMarkupIdentifier'] = NULL;
$arguments729['identifier'] = 'actions-edit-delete';

$output726 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments729, $renderChildrenClosure730, $renderingContext);

$output726 .= '</button>
												';
return $output726;
};

$output611 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments718, $renderChildrenClosure719, $renderingContext);

$output611 .= '
										</div>
									</td>
									<td nowrap="nowrap">';
$array750 = array (
);
$output611 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array750), ENT_QUOTES);

$output611 .= '</td>
									<td nowrap="nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure752 = function() use ($renderingContext, $self) {
$output762 = '';

$output762 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure764 = function() use ($renderingContext, $self) {
$output765 = '';

$output765 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array766 = array (
);
$output765 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array766), ENT_QUOTES);

$output765 .= '" data-form-name="';
$array767 = array (
);
$output765 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array767), ENT_QUOTES);

$output765 .= '">';
$array768 = array (
);
$output765 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array768), ENT_QUOTES);

$output765 .= '</a>
											';
return $output765;
};
$arguments763 = array();

$output762 .= '';

$output762 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure770 = function() use ($renderingContext, $self) {
$output771 = '';

$output771 .= '
												';
$array772 = array (
);
$output771 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array772), ENT_QUOTES);

$output771 .= '
											';
return $output771;
};
$arguments769 = array();
$arguments769['if'] = NULL;

$output762 .= '';

$output762 .= '
										';
return $output762;
};
$arguments751 = array();
$arguments751['then'] = NULL;
$arguments751['else'] = NULL;
$arguments751['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array759 = array();
$array760 = array (
);$array759['0'] = $renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array760);

$expression761 = function($context) {return ($context["node0"]);};
$arguments751['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression761(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array759)
					),
					$renderingContext
				);
$arguments751['__thenClosure'] = function() use ($renderingContext, $self) {
$output753 = '';

$output753 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array754 = array (
);
$output753 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array754), ENT_QUOTES);

$output753 .= '" data-form-name="';
$array755 = array (
);
$output753 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array755), ENT_QUOTES);

$output753 .= '">';
$array756 = array (
);
$output753 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array756), ENT_QUOTES);

$output753 .= '</a>
											';
return $output753;
};
$arguments751['__elseClosures'][] = function() use ($renderingContext, $self) {
$output757 = '';

$output757 .= '
												';
$array758 = array (
);
$output757 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array758), ENT_QUOTES);

$output757 .= '
											';
return $output757;
};

$output611 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments751, $renderChildrenClosure752, $renderingContext);

$output611 .= '
									</td>
								</tr>
							';
return $output611;
};
$arguments608 = array();
$arguments608['each'] = NULL;
$arguments608['as'] = NULL;
$arguments608['key'] = NULL;
$arguments608['reverse'] = false;
$arguments608['iteration'] = NULL;
$array610 = array (
);$arguments608['each'] = $renderingContext->getVariableProvider()->getByPath('forms', $array610);
$arguments608['as'] = 'form';

$output597 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments608, $renderChildrenClosure609, $renderingContext);

$output597 .= '
						</tbody>
					</table>
				</div>
			</div>
		</div>
	';
return $output597;
};
$arguments595 = array();

$output594 .= '';

$output594 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure774 = function() use ($renderingContext, $self) {
$output775 = '';

$output775 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure777 = function() use ($renderingContext, $self) {
$output780 = '';

$output780 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure782 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments781 = array();
$arguments781['key'] = NULL;
$arguments781['id'] = NULL;
$arguments781['default'] = NULL;
$arguments781['htmlEscape'] = NULL;
$arguments781['arguments'] = NULL;
$arguments781['extensionName'] = NULL;
$arguments781['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.no_forms';

$output780 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments781, $renderChildrenClosure782, $renderingContext), ENT_QUOTES);

$output780 .= '</p>
			<a class="btn btn-primary" data-identifier="newForm" href="#">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure784 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments783 = array();
$arguments783['key'] = NULL;
$arguments783['id'] = NULL;
$arguments783['default'] = NULL;
$arguments783['htmlEscape'] = NULL;
$arguments783['arguments'] = NULL;
$arguments783['extensionName'] = NULL;
$arguments783['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form';

$output780 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments783, $renderChildrenClosure784, $renderingContext), ENT_QUOTES);

$output780 .= '</a>
		';
return $output780;
};
$arguments776 = array();
$arguments776['message'] = NULL;
$arguments776['title'] = NULL;
$arguments776['state'] = -2;
$arguments776['iconName'] = NULL;
$arguments776['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure779 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments778 = array();
$arguments778['key'] = NULL;
$arguments778['id'] = NULL;
$arguments778['default'] = NULL;
$arguments778['htmlEscape'] = NULL;
$arguments778['arguments'] = NULL;
$arguments778['extensionName'] = NULL;
$arguments778['key'] = 'formManager.no_forms';
$arguments778['extensionName'] = 'form';
$arguments776['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments778, $renderChildrenClosure779, $renderingContext);
$arguments776['state'] = -1;
$renderChildrenClosure777 = $arguments776['message'] ? function() use ($arguments776) { return $arguments776['message']; } : $renderChildrenClosure777;
$output775 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments776, $renderChildrenClosure777, $renderingContext);

$output775 .= '
	';
return $output775;
};
$arguments773 = array();
$arguments773['if'] = NULL;

$output594 .= '';

$output594 .= '
';
return $output594;
};
$arguments403 = array();
$arguments403['then'] = NULL;
$arguments403['else'] = NULL;
$arguments403['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array591 = array();
$array592 = array (
);$array591['0'] = $renderingContext->getVariableProvider()->getByPath('forms', $array592);

$expression593 = function($context) {return ($context["node0"]);};
$arguments403['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression593(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array591)
					),
					$renderingContext
				);
$arguments403['__thenClosure'] = function() use ($renderingContext, $self) {
$output405 = '';

$output405 .= '
			<div class="panel panel-space panel-default recordlist">
				<div class="panel-heading">
					<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments406 = array();
$arguments406['key'] = NULL;
$arguments406['id'] = NULL;
$arguments406['default'] = NULL;
$arguments406['htmlEscape'] = NULL;
$arguments406['arguments'] = NULL;
$arguments406['extensionName'] = NULL;
$arguments406['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_existing_forms';

$output405 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext), ENT_QUOTES);

$output405 .= '</span>
				</div>
				<div class="collapse in">
					<div class="table-fit">
						<table id="forms" class="table table-striped table-hover">
							<thead>
								<tr>
									<th nowrap="nowrap" class="col-icon"><a class="btn btn-default" data-identifier="newForm" href="#">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments408 = array();
$arguments408['identifier'] = NULL;
$arguments408['size'] = 'small';
$arguments408['overlay'] = NULL;
$arguments408['state'] = 'default';
$arguments408['alternativeMarkupIdentifier'] = NULL;
$arguments408['identifier'] = 'actions-add';

$output405 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);

$output405 .= '</a></th>
									<th nowrap="nowrap" class="col-title col-responsive">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments410 = array();
$arguments410['key'] = NULL;
$arguments410['id'] = NULL;
$arguments410['default'] = NULL;
$arguments410['htmlEscape'] = NULL;
$arguments410['arguments'] = NULL;
$arguments410['extensionName'] = NULL;
$arguments410['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.form_name';

$output405 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments410, $renderChildrenClosure411, $renderingContext), ENT_QUOTES);

$output405 .= '</th>
									<th nowrap="nowrap" class="col-control"></th>
									<th nowrap="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments412 = array();
$arguments412['key'] = NULL;
$arguments412['id'] = NULL;
$arguments412['default'] = NULL;
$arguments412['htmlEscape'] = NULL;
$arguments412['arguments'] = NULL;
$arguments412['extensionName'] = NULL;
$arguments412['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.location';

$output405 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext), ENT_QUOTES);

$output405 .= '</th>
									<th nowrap="nowrap">';
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
$arguments414['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.references';

$output405 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext), ENT_QUOTES);

$output405 .= '</th>
								</tr>
							</thead>
							<tbody>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure417 = function() use ($renderingContext, $self) {
$output419 = '';

$output419 .= '
								<tr>
									<td nowrap="nowrap" class="col-icon">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
$output435 = '';

$output435 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
$output438 = '';

$output438 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments439 = array();
$arguments439['key'] = NULL;
$arguments439['id'] = NULL;
$arguments439['default'] = NULL;
$arguments439['htmlEscape'] = NULL;
$arguments439['arguments'] = NULL;
$arguments439['extensionName'] = NULL;
$arguments439['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output438 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext), ENT_QUOTES);

$output438 .= ' ';
$array441 = array (
);
$output438 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.identifier', $array441), ENT_QUOTES);

$output438 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments442 = array();
$arguments442['identifier'] = NULL;
$arguments442['size'] = 'small';
$arguments442['overlay'] = NULL;
$arguments442['state'] = 'default';
$arguments442['alternativeMarkupIdentifier'] = NULL;
$arguments442['identifier'] = 'overlay-missing';

$output438 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext);

$output438 .= '
												</span>
											';
return $output438;
};
$arguments436 = array();

$output435 .= '';

$output435 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure445 = function() use ($renderingContext, $self) {
$output446 = '';

$output446 .= '
												<span title="id=';
$array447 = array (
);
$output446 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.identifier', $array447), ENT_QUOTES);

$output446 .= '" data-toggle="tooltip" data-placement="right">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments448 = array();
$arguments448['identifier'] = NULL;
$arguments448['size'] = 'small';
$arguments448['overlay'] = NULL;
$arguments448['state'] = 'default';
$arguments448['alternativeMarkupIdentifier'] = NULL;
$arguments448['identifier'] = 'content-elements-mailform';

$output446 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext);

$output446 .= '
												</span>
											';
return $output446;
};
$arguments444 = array();
$arguments444['if'] = NULL;

$output435 .= '';

$output435 .= '
										';
return $output435;
};
$arguments420 = array();
$arguments420['then'] = NULL;
$arguments420['else'] = NULL;
$arguments420['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array432 = array();
$array433 = array (
);$array432['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array433);

$expression434 = function($context) {return ($context["node0"]);};
$arguments420['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression434(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array432)
					),
					$renderingContext
				);
$arguments420['__thenClosure'] = function() use ($renderingContext, $self) {
$output422 = '';

$output422 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments423 = array();
$arguments423['key'] = NULL;
$arguments423['id'] = NULL;
$arguments423['default'] = NULL;
$arguments423['htmlEscape'] = NULL;
$arguments423['arguments'] = NULL;
$arguments423['extensionName'] = NULL;
$arguments423['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output422 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments423, $renderChildrenClosure424, $renderingContext), ENT_QUOTES);

$output422 .= ' ';
$array425 = array (
);
$output422 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.identifier', $array425), ENT_QUOTES);

$output422 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments426 = array();
$arguments426['identifier'] = NULL;
$arguments426['size'] = 'small';
$arguments426['overlay'] = NULL;
$arguments426['state'] = 'default';
$arguments426['alternativeMarkupIdentifier'] = NULL;
$arguments426['identifier'] = 'overlay-missing';

$output422 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);

$output422 .= '
												</span>
											';
return $output422;
};
$arguments420['__elseClosures'][] = function() use ($renderingContext, $self) {
$output428 = '';

$output428 .= '
												<span title="id=';
$array429 = array (
);
$output428 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.identifier', $array429), ENT_QUOTES);

$output428 .= '" data-toggle="tooltip" data-placement="right">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments430 = array();
$arguments430['identifier'] = NULL;
$arguments430['size'] = 'small';
$arguments430['overlay'] = NULL;
$arguments430['state'] = 'default';
$arguments430['alternativeMarkupIdentifier'] = NULL;
$arguments430['identifier'] = 'content-elements-mailform';

$output428 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext);

$output428 .= '
												</span>
											';
return $output428;
};

$output419 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);

$output419 .= '
									</td>
									<td nowrap="nowrap" class="col-title col-responsive">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
$output466 = '';

$output466 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure468 = function() use ($renderingContext, $self) {
$output469 = '';

$output469 .= '
													<div>';
$array470 = array (
);
$output469 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array470), ENT_QUOTES);

$output469 .= '</div>
												';
return $output469;
};
$arguments467 = array();

$output466 .= '';

$output466 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure472 = function() use ($renderingContext, $self) {
$output473 = '';

$output473 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure475 = function() use ($renderingContext, $self) {
$array481 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array481), ENT_QUOTES);
};
$arguments474 = array();
$arguments474['action'] = NULL;
$arguments474['arguments'] = array (
);
$arguments474['controller'] = NULL;
$arguments474['extensionName'] = NULL;
$arguments474['pluginName'] = NULL;
$arguments474['pageUid'] = NULL;
$arguments474['pageType'] = 0;
$arguments474['noCache'] = false;
$arguments474['noCacheHash'] = false;
$arguments474['section'] = '';
$arguments474['format'] = '';
$arguments474['linkAccessRestrictedPages'] = false;
$arguments474['additionalParams'] = array (
);
$arguments474['absolute'] = false;
$arguments474['addQueryString'] = false;
$arguments474['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments474['addQueryStringMethod'] = NULL;
$arguments474['additionalAttributes'] = NULL;
$arguments474['data'] = NULL;
$arguments474['class'] = NULL;
$arguments474['dir'] = NULL;
$arguments474['id'] = NULL;
$arguments474['lang'] = NULL;
$arguments474['style'] = NULL;
$arguments474['title'] = NULL;
$arguments474['accesskey'] = NULL;
$arguments474['tabindex'] = NULL;
$arguments474['onclick'] = NULL;
$arguments474['name'] = NULL;
$arguments474['rel'] = NULL;
$arguments474['rev'] = NULL;
$arguments474['target'] = NULL;
$arguments474['controller'] = 'FormEditor';
$arguments474['action'] = 'index';
// Rendering Array
$array476 = array();
$array477 = array (
);$array476['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array477);
$arguments474['arguments'] = $array476;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments478 = array();
$arguments478['key'] = NULL;
$arguments478['id'] = NULL;
$arguments478['default'] = NULL;
$arguments478['htmlEscape'] = NULL;
$arguments478['arguments'] = NULL;
$arguments478['extensionName'] = NULL;
$arguments478['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments474['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);
// Rendering Array
$array480 = array();
$array480['toggle'] = 'tooltip';
$array480['placement'] = 'right';
$arguments474['data'] = $array480;

$output473 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments474, $renderChildrenClosure475, $renderingContext);

$output473 .= '
												';
return $output473;
};
$arguments471 = array();
$arguments471['if'] = NULL;

$output466 .= '';

$output466 .= '
										';
return $output466;
};
$arguments450 = array();
$arguments450['then'] = NULL;
$arguments450['else'] = NULL;
$arguments450['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array463 = array();
$array464 = array (
);$array463['0'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array464);

$expression465 = function($context) {return ($context["node0"]);};
$arguments450['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression465(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array463)
					),
					$renderingContext
				);
$arguments450['__thenClosure'] = function() use ($renderingContext, $self) {
$output452 = '';

$output452 .= '
													<div>';
$array453 = array (
);
$output452 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array453), ENT_QUOTES);

$output452 .= '</div>
												';
return $output452;
};
$arguments450['__elseClosures'][] = function() use ($renderingContext, $self) {
$output454 = '';

$output454 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure456 = function() use ($renderingContext, $self) {
$array462 = array (
);return htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array462), ENT_QUOTES);
};
$arguments455 = array();
$arguments455['action'] = NULL;
$arguments455['arguments'] = array (
);
$arguments455['controller'] = NULL;
$arguments455['extensionName'] = NULL;
$arguments455['pluginName'] = NULL;
$arguments455['pageUid'] = NULL;
$arguments455['pageType'] = 0;
$arguments455['noCache'] = false;
$arguments455['noCacheHash'] = false;
$arguments455['section'] = '';
$arguments455['format'] = '';
$arguments455['linkAccessRestrictedPages'] = false;
$arguments455['additionalParams'] = array (
);
$arguments455['absolute'] = false;
$arguments455['addQueryString'] = false;
$arguments455['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments455['addQueryStringMethod'] = NULL;
$arguments455['additionalAttributes'] = NULL;
$arguments455['data'] = NULL;
$arguments455['class'] = NULL;
$arguments455['dir'] = NULL;
$arguments455['id'] = NULL;
$arguments455['lang'] = NULL;
$arguments455['style'] = NULL;
$arguments455['title'] = NULL;
$arguments455['accesskey'] = NULL;
$arguments455['tabindex'] = NULL;
$arguments455['onclick'] = NULL;
$arguments455['name'] = NULL;
$arguments455['rel'] = NULL;
$arguments455['rev'] = NULL;
$arguments455['target'] = NULL;
$arguments455['controller'] = 'FormEditor';
$arguments455['action'] = 'index';
// Rendering Array
$array457 = array();
$array458 = array (
);$array457['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array458);
$arguments455['arguments'] = $array457;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments459 = array();
$arguments459['key'] = NULL;
$arguments459['id'] = NULL;
$arguments459['default'] = NULL;
$arguments459['htmlEscape'] = NULL;
$arguments459['arguments'] = NULL;
$arguments459['extensionName'] = NULL;
$arguments459['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments455['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext);
// Rendering Array
$array461 = array();
$array461['toggle'] = 'tooltip';
$array461['placement'] = 'right';
$arguments455['data'] = $array461;

$output454 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments455, $renderChildrenClosure456, $renderingContext);

$output454 .= '
												';
return $output454;
};

$output419 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output419 .= '
									</td>
									<td nowrap="nowrap" class="col-control">
										<div class="btn-group" role="group">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure483 = function() use ($renderingContext, $self) {
$output501 = '';

$output501 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure503 = function() use ($renderingContext, $self) {
$output504 = '';

$output504 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments505 = array();
$arguments505['key'] = NULL;
$arguments505['id'] = NULL;
$arguments505['default'] = NULL;
$arguments505['htmlEscape'] = NULL;
$arguments505['arguments'] = NULL;
$arguments505['extensionName'] = NULL;
$arguments505['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output504 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext), ENT_QUOTES);

$output504 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure508 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments507 = array();
$arguments507['identifier'] = NULL;
$arguments507['size'] = 'small';
$arguments507['overlay'] = NULL;
$arguments507['state'] = 'default';
$arguments507['alternativeMarkupIdentifier'] = NULL;
$arguments507['identifier'] = 'actions-open';

$output504 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments507, $renderChildrenClosure508, $renderingContext);

$output504 .= '</button>
												';
return $output504;
};
$arguments502 = array();

$output501 .= '';

$output501 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
$output511 = '';

$output511 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure513 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure519 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments518 = array();
$arguments518['identifier'] = NULL;
$arguments518['size'] = 'small';
$arguments518['overlay'] = NULL;
$arguments518['state'] = 'default';
$arguments518['alternativeMarkupIdentifier'] = NULL;
$arguments518['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments518, $renderChildrenClosure519, $renderingContext);
};
$arguments512 = array();
$arguments512['action'] = NULL;
$arguments512['arguments'] = array (
);
$arguments512['controller'] = NULL;
$arguments512['extensionName'] = NULL;
$arguments512['pluginName'] = NULL;
$arguments512['pageUid'] = NULL;
$arguments512['pageType'] = 0;
$arguments512['noCache'] = false;
$arguments512['noCacheHash'] = false;
$arguments512['section'] = '';
$arguments512['format'] = '';
$arguments512['linkAccessRestrictedPages'] = false;
$arguments512['additionalParams'] = array (
);
$arguments512['absolute'] = false;
$arguments512['addQueryString'] = false;
$arguments512['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments512['addQueryStringMethod'] = NULL;
$arguments512['additionalAttributes'] = NULL;
$arguments512['data'] = NULL;
$arguments512['class'] = NULL;
$arguments512['dir'] = NULL;
$arguments512['id'] = NULL;
$arguments512['lang'] = NULL;
$arguments512['style'] = NULL;
$arguments512['title'] = NULL;
$arguments512['accesskey'] = NULL;
$arguments512['tabindex'] = NULL;
$arguments512['onclick'] = NULL;
$arguments512['name'] = NULL;
$arguments512['rel'] = NULL;
$arguments512['rev'] = NULL;
$arguments512['target'] = NULL;
$arguments512['controller'] = 'FormEditor';
$arguments512['action'] = 'index';
// Rendering Array
$array514 = array();
$array515 = array (
);$array514['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array515);
$arguments512['arguments'] = $array514;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure517 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments516 = array();
$arguments516['key'] = NULL;
$arguments516['id'] = NULL;
$arguments516['default'] = NULL;
$arguments516['htmlEscape'] = NULL;
$arguments516['arguments'] = NULL;
$arguments516['extensionName'] = NULL;
$arguments516['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments512['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments516, $renderChildrenClosure517, $renderingContext);
$arguments512['class'] = 'btn btn-default form-record-open';

$output511 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments512, $renderChildrenClosure513, $renderingContext);

$output511 .= '
												';
return $output511;
};
$arguments509 = array();
$arguments509['if'] = NULL;

$output501 .= '';

$output501 .= '
											';
return $output501;
};
$arguments482 = array();
$arguments482['then'] = NULL;
$arguments482['else'] = NULL;
$arguments482['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array498 = array();
$array499 = array (
);$array498['0'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array499);

$expression500 = function($context) {return ($context["node0"]);};
$arguments482['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression500(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array498)
					),
					$renderingContext
				);
$arguments482['__thenClosure'] = function() use ($renderingContext, $self) {
$output484 = '';

$output484 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure486 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments485 = array();
$arguments485['key'] = NULL;
$arguments485['id'] = NULL;
$arguments485['default'] = NULL;
$arguments485['htmlEscape'] = NULL;
$arguments485['arguments'] = NULL;
$arguments485['extensionName'] = NULL;
$arguments485['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output484 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments485, $renderChildrenClosure486, $renderingContext), ENT_QUOTES);

$output484 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure488 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments487 = array();
$arguments487['identifier'] = NULL;
$arguments487['size'] = 'small';
$arguments487['overlay'] = NULL;
$arguments487['state'] = 'default';
$arguments487['alternativeMarkupIdentifier'] = NULL;
$arguments487['identifier'] = 'actions-open';

$output484 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments487, $renderChildrenClosure488, $renderingContext);

$output484 .= '</button>
												';
return $output484;
};
$arguments482['__elseClosures'][] = function() use ($renderingContext, $self) {
$output489 = '';

$output489 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments496 = array();
$arguments496['identifier'] = NULL;
$arguments496['size'] = 'small';
$arguments496['overlay'] = NULL;
$arguments496['state'] = 'default';
$arguments496['alternativeMarkupIdentifier'] = NULL;
$arguments496['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext);
};
$arguments490 = array();
$arguments490['action'] = NULL;
$arguments490['arguments'] = array (
);
$arguments490['controller'] = NULL;
$arguments490['extensionName'] = NULL;
$arguments490['pluginName'] = NULL;
$arguments490['pageUid'] = NULL;
$arguments490['pageType'] = 0;
$arguments490['noCache'] = false;
$arguments490['noCacheHash'] = false;
$arguments490['section'] = '';
$arguments490['format'] = '';
$arguments490['linkAccessRestrictedPages'] = false;
$arguments490['additionalParams'] = array (
);
$arguments490['absolute'] = false;
$arguments490['addQueryString'] = false;
$arguments490['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments490['addQueryStringMethod'] = NULL;
$arguments490['additionalAttributes'] = NULL;
$arguments490['data'] = NULL;
$arguments490['class'] = NULL;
$arguments490['dir'] = NULL;
$arguments490['id'] = NULL;
$arguments490['lang'] = NULL;
$arguments490['style'] = NULL;
$arguments490['title'] = NULL;
$arguments490['accesskey'] = NULL;
$arguments490['tabindex'] = NULL;
$arguments490['onclick'] = NULL;
$arguments490['name'] = NULL;
$arguments490['rel'] = NULL;
$arguments490['rev'] = NULL;
$arguments490['target'] = NULL;
$arguments490['controller'] = 'FormEditor';
$arguments490['action'] = 'index';
// Rendering Array
$array492 = array();
$array493 = array (
);$array492['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array493);
$arguments490['arguments'] = $array492;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure495 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments494 = array();
$arguments494['key'] = NULL;
$arguments494['id'] = NULL;
$arguments494['default'] = NULL;
$arguments494['htmlEscape'] = NULL;
$arguments494['arguments'] = NULL;
$arguments494['extensionName'] = NULL;
$arguments494['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments490['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments494, $renderChildrenClosure495, $renderingContext);
$arguments490['class'] = 'btn btn-default form-record-open';

$output489 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext);

$output489 .= '
												';
return $output489;
};

$output419 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments482, $renderChildrenClosure483, $renderingContext);

$output419 .= '
											<a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array520 = array (
);
$output419 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array520), ENT_QUOTES);

$output419 .= '" data-form-name="';
$array521 = array (
);
$output419 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array521), ENT_QUOTES);

$output419 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure523 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments522 = array();
$arguments522['key'] = NULL;
$arguments522['id'] = NULL;
$arguments522['default'] = NULL;
$arguments522['htmlEscape'] = NULL;
$arguments522['arguments'] = NULL;
$arguments522['extensionName'] = NULL;
$arguments522['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output419 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments522, $renderChildrenClosure523, $renderingContext), ENT_QUOTES);

$output419 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments524 = array();
$arguments524['identifier'] = NULL;
$arguments524['size'] = 'small';
$arguments524['overlay'] = NULL;
$arguments524['state'] = 'default';
$arguments524['alternativeMarkupIdentifier'] = NULL;
$arguments524['identifier'] = 't3-form-icon-duplicate';

$output419 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments524, $renderChildrenClosure525, $renderingContext);

$output419 .= '</a>
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
$output542 = '';

$output542 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure544 = function() use ($renderingContext, $self) {
$output545 = '';

$output545 .= '
													<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array546 = array (
);
$output545 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array546), ENT_QUOTES);

$output545 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure548 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments547 = array();
$arguments547['key'] = NULL;
$arguments547['id'] = NULL;
$arguments547['default'] = NULL;
$arguments547['htmlEscape'] = NULL;
$arguments547['arguments'] = NULL;
$arguments547['extensionName'] = NULL;
$arguments547['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output545 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments547, $renderChildrenClosure548, $renderingContext), ENT_QUOTES);

$output545 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments549 = array();
$arguments549['identifier'] = NULL;
$arguments549['size'] = 'small';
$arguments549['overlay'] = NULL;
$arguments549['state'] = 'default';
$arguments549['alternativeMarkupIdentifier'] = NULL;
$arguments549['identifier'] = 'actions-edit-delete';

$output545 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments549, $renderChildrenClosure550, $renderingContext);

$output545 .= '</a>
												';
return $output545;
};
$arguments543 = array();

$output542 .= '';

$output542 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure552 = function() use ($renderingContext, $self) {
$output553 = '';

$output553 .= '
													<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure555 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments554 = array();
$arguments554['key'] = NULL;
$arguments554['id'] = NULL;
$arguments554['default'] = NULL;
$arguments554['htmlEscape'] = NULL;
$arguments554['arguments'] = NULL;
$arguments554['extensionName'] = NULL;
$arguments554['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output553 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments554, $renderChildrenClosure555, $renderingContext), ENT_QUOTES);

$output553 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments556 = array();
$arguments556['identifier'] = NULL;
$arguments556['size'] = 'small';
$arguments556['overlay'] = NULL;
$arguments556['state'] = 'default';
$arguments556['alternativeMarkupIdentifier'] = NULL;
$arguments556['identifier'] = 'actions-edit-delete';

$output553 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments556, $renderChildrenClosure557, $renderingContext);

$output553 .= '</button>
												';
return $output553;
};
$arguments551 = array();
$arguments551['if'] = NULL;

$output542 .= '';

$output542 .= '
											';
return $output542;
};
$arguments526 = array();
$arguments526['then'] = NULL;
$arguments526['else'] = NULL;
$arguments526['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array539 = array();
$array540 = array (
);$array539['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array540);

$expression541 = function($context) {return ($context["node0"]);};
$arguments526['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression541(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array539)
					),
					$renderingContext
				);
$arguments526['__thenClosure'] = function() use ($renderingContext, $self) {
$output528 = '';

$output528 .= '
													<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array529 = array (
);
$output528 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array529), ENT_QUOTES);

$output528 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure531 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments530 = array();
$arguments530['key'] = NULL;
$arguments530['id'] = NULL;
$arguments530['default'] = NULL;
$arguments530['htmlEscape'] = NULL;
$arguments530['arguments'] = NULL;
$arguments530['extensionName'] = NULL;
$arguments530['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output528 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments530, $renderChildrenClosure531, $renderingContext), ENT_QUOTES);

$output528 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure533 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments532 = array();
$arguments532['identifier'] = NULL;
$arguments532['size'] = 'small';
$arguments532['overlay'] = NULL;
$arguments532['state'] = 'default';
$arguments532['alternativeMarkupIdentifier'] = NULL;
$arguments532['identifier'] = 'actions-edit-delete';

$output528 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments532, $renderChildrenClosure533, $renderingContext);

$output528 .= '</a>
												';
return $output528;
};
$arguments526['__elseClosures'][] = function() use ($renderingContext, $self) {
$output534 = '';

$output534 .= '
													<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure536 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments535 = array();
$arguments535['key'] = NULL;
$arguments535['id'] = NULL;
$arguments535['default'] = NULL;
$arguments535['htmlEscape'] = NULL;
$arguments535['arguments'] = NULL;
$arguments535['extensionName'] = NULL;
$arguments535['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output534 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments535, $renderChildrenClosure536, $renderingContext), ENT_QUOTES);

$output534 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure538 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments537 = array();
$arguments537['identifier'] = NULL;
$arguments537['size'] = 'small';
$arguments537['overlay'] = NULL;
$arguments537['state'] = 'default';
$arguments537['alternativeMarkupIdentifier'] = NULL;
$arguments537['identifier'] = 'actions-edit-delete';

$output534 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments537, $renderChildrenClosure538, $renderingContext);

$output534 .= '</button>
												';
return $output534;
};

$output419 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments526, $renderChildrenClosure527, $renderingContext);

$output419 .= '
										</div>
									</td>
									<td nowrap="nowrap">';
$array558 = array (
);
$output419 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array558), ENT_QUOTES);

$output419 .= '</td>
									<td nowrap="nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure560 = function() use ($renderingContext, $self) {
$output570 = '';

$output570 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure572 = function() use ($renderingContext, $self) {
$output573 = '';

$output573 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array574 = array (
);
$output573 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array574), ENT_QUOTES);

$output573 .= '" data-form-name="';
$array575 = array (
);
$output573 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array575), ENT_QUOTES);

$output573 .= '">';
$array576 = array (
);
$output573 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array576), ENT_QUOTES);

$output573 .= '</a>
											';
return $output573;
};
$arguments571 = array();

$output570 .= '';

$output570 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure578 = function() use ($renderingContext, $self) {
$output579 = '';

$output579 .= '
												';
$array580 = array (
);
$output579 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array580), ENT_QUOTES);

$output579 .= '
											';
return $output579;
};
$arguments577 = array();
$arguments577['if'] = NULL;

$output570 .= '';

$output570 .= '
										';
return $output570;
};
$arguments559 = array();
$arguments559['then'] = NULL;
$arguments559['else'] = NULL;
$arguments559['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array567 = array();
$array568 = array (
);$array567['0'] = $renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array568);

$expression569 = function($context) {return ($context["node0"]);};
$arguments559['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression569(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array567)
					),
					$renderingContext
				);
$arguments559['__thenClosure'] = function() use ($renderingContext, $self) {
$output561 = '';

$output561 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array562 = array (
);
$output561 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array562), ENT_QUOTES);

$output561 .= '" data-form-name="';
$array563 = array (
);
$output561 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.name', $array563), ENT_QUOTES);

$output561 .= '">';
$array564 = array (
);
$output561 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array564), ENT_QUOTES);

$output561 .= '</a>
											';
return $output561;
};
$arguments559['__elseClosures'][] = function() use ($renderingContext, $self) {
$output565 = '';

$output565 .= '
												';
$array566 = array (
);
$output565 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array566), ENT_QUOTES);

$output565 .= '
											';
return $output565;
};

$output419 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments559, $renderChildrenClosure560, $renderingContext);

$output419 .= '
									</td>
								</tr>
							';
return $output419;
};
$arguments416 = array();
$arguments416['each'] = NULL;
$arguments416['as'] = NULL;
$arguments416['key'] = NULL;
$arguments416['reverse'] = false;
$arguments416['iteration'] = NULL;
$array418 = array (
);$arguments416['each'] = $renderingContext->getVariableProvider()->getByPath('forms', $array418);
$arguments416['as'] = 'form';

$output405 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments416, $renderChildrenClosure417, $renderingContext);

$output405 .= '
						</tbody>
					</table>
				</div>
			</div>
		</div>
	';
return $output405;
};
$arguments403['__elseClosures'][] = function() use ($renderingContext, $self) {
$output581 = '';

$output581 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure583 = function() use ($renderingContext, $self) {
$output586 = '';

$output586 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure588 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments587 = array();
$arguments587['key'] = NULL;
$arguments587['id'] = NULL;
$arguments587['default'] = NULL;
$arguments587['htmlEscape'] = NULL;
$arguments587['arguments'] = NULL;
$arguments587['extensionName'] = NULL;
$arguments587['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.no_forms';

$output586 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments587, $renderChildrenClosure588, $renderingContext), ENT_QUOTES);

$output586 .= '</p>
			<a class="btn btn-primary" data-identifier="newForm" href="#">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure590 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments589 = array();
$arguments589['key'] = NULL;
$arguments589['id'] = NULL;
$arguments589['default'] = NULL;
$arguments589['htmlEscape'] = NULL;
$arguments589['arguments'] = NULL;
$arguments589['extensionName'] = NULL;
$arguments589['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form';

$output586 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments589, $renderChildrenClosure590, $renderingContext), ENT_QUOTES);

$output586 .= '</a>
		';
return $output586;
};
$arguments582 = array();
$arguments582['message'] = NULL;
$arguments582['title'] = NULL;
$arguments582['state'] = -2;
$arguments582['iconName'] = NULL;
$arguments582['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments584 = array();
$arguments584['key'] = NULL;
$arguments584['id'] = NULL;
$arguments584['default'] = NULL;
$arguments584['htmlEscape'] = NULL;
$arguments584['arguments'] = NULL;
$arguments584['extensionName'] = NULL;
$arguments584['key'] = 'formManager.no_forms';
$arguments584['extensionName'] = 'form';
$arguments582['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments584, $renderChildrenClosure585, $renderingContext);
$arguments582['state'] = -1;
$renderChildrenClosure583 = $arguments582['message'] ? function() use ($arguments582) { return $arguments582['message']; } : $renderChildrenClosure583;
$output581 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments582, $renderChildrenClosure583, $renderingContext);

$output581 .= '
	';
return $output581;
};

$output395 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext);

$output395 .= '

';
return $output395;
};
$arguments393 = array();
$arguments393['name'] = NULL;
$arguments393['name'] = 'MainContent';

$output390 .= '';

$output390 .= '

';

return $output390;
}


}
#2994620551    193823    