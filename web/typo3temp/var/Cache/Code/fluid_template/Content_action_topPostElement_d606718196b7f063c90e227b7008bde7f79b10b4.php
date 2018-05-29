<?php

class Content_action_topPostElement_d606718196b7f063c90e227b7008bde7f79b10b4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Content';
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
    2 => 'TYPO3\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'flux' => 
  array (
    0 => 'FluidTYPO3\\Flux\\ViewHelpers',
  ),
  'v' => 
  array (
    0 => 'FluidTYPO3\\Vhs\\ViewHelpers',
  ),
));
}

/**
 * section Configuration
 */
public function section_754164850f38c1ecdaf6b8ed894cb192bc36c5f4(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['value'] = NULL;
$arguments5['value'] = 'fluxContentElements';
$renderChildrenClosure6 = ($arguments5['value'] !== null) ? function() use ($arguments5) { return $arguments5['value']; } : $renderChildrenClosure6;
$output4 .= FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '

            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['name'] = NULL;
$arguments7['label'] = NULL;
$arguments7['default'] = NULL;
$arguments7['required'] = false;
$arguments7['exclude'] = true;
$arguments7['transform'] = NULL;
$arguments7['enabled'] = true;
$arguments7['requestUpdate'] = false;
$arguments7['displayCond'] = NULL;
$arguments7['inherit'] = true;
$arguments7['inheritEmpty'] = true;
$arguments7['clear'] = false;
$arguments7['variables'] = array (
);
$arguments7['extensionName'] = NULL;
$arguments7['eval'] = 'trim';
$arguments7['size'] = 32;
$arguments7['maxCharacters'] = NULL;
$arguments7['minimum'] = NULL;
$arguments7['maximum'] = NULL;
$arguments7['placeholder'] = NULL;
$arguments7['name'] = 'title';

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output4 .= '
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['name'] = NULL;
$arguments9['label'] = NULL;
$arguments9['default'] = NULL;
$arguments9['required'] = false;
$arguments9['exclude'] = true;
$arguments9['transform'] = NULL;
$arguments9['enabled'] = true;
$arguments9['requestUpdate'] = false;
$arguments9['displayCond'] = NULL;
$arguments9['inherit'] = true;
$arguments9['inheritEmpty'] = true;
$arguments9['clear'] = false;
$arguments9['variables'] = array (
);
$arguments9['extensionName'] = NULL;
$arguments9['validate'] = 'trim';
$arguments9['cols'] = 85;
$arguments9['rows'] = 10;
$arguments9['defaultExtras'] = '';
$arguments9['enableRichText'] = false;
$arguments9['renderType'] = '';
$arguments9['format'] = '';
$arguments9['richtextConfiguration'] = NULL;
$arguments9['placeholder'] = NULL;
$arguments9['name'] = 'description';

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output4 .= '
		';
return $output4;
};
$arguments1 = array();
$arguments1['id'] = NULL;
$arguments1['label'] = NULL;
$arguments1['description'] = NULL;
$arguments1['enabled'] = true;
$arguments1['compact'] = false;
$arguments1['variables'] = array (
);
$arguments1['options'] = NULL;
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments1['extensionName'] = NULL;
$arguments1['id'] = 'topPostElement';
$arguments1['label'] = 'Top post Container';
// Rendering Array
$array3 = array();
$array3['group'] = 'FCE';
$arguments1['options'] = $array3;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
	';

return $output0;
}
/**
 * section Preview
 */
public function section_f1fbb2b43dca281d0138f4fcc92543ad143ef0b1(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output11 = '';

$output11 .= '
		<b>Title:</b> ';
$array12 = array (
);
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array12)]);

$output11 .= ' <br>
		<b>Description:</b> ';
$array13 = array (
);
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('description', $array13)]);

$output11 .= ' <br>
	';

return $output11;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output14 = '';

$output14 .= '
		<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
			<div class="col-md-6 px-0">
				<h1 class="display-4 font-italic">';
$array15 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array15)]);

$output14 .= '</h1>
				<p class="lead my-3">';
$array16 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('description', $array16)]);

$output14 .= '</p>
				<p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
			</div>
		</div>
	';

return $output14;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output17 = '';

$output17 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en"
	xmlns:f="http://typo3.org/ns/TYPO3/Fluid/ViewHelpers"
	xmlns:flux="http://typo3.org/ns/FluidTYPO3/Flux/ViewHelpers"
	xmlns:v="http://typo3.org/ns/FluidTYPO3/Vhs/ViewHelpers">

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['name'] = NULL;
$arguments18['name'] = 'Content';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output17 .= '
    
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['value'] = NULL;
$arguments27['value'] = 'fluxContentElements';
$renderChildrenClosure28 = ($arguments27['value'] !== null) ? function() use ($arguments27) { return $arguments27['value']; } : $renderChildrenClosure28;
$output26 .= FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '

            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['name'] = NULL;
$arguments29['label'] = NULL;
$arguments29['default'] = NULL;
$arguments29['required'] = false;
$arguments29['exclude'] = true;
$arguments29['transform'] = NULL;
$arguments29['enabled'] = true;
$arguments29['requestUpdate'] = false;
$arguments29['displayCond'] = NULL;
$arguments29['inherit'] = true;
$arguments29['inheritEmpty'] = true;
$arguments29['clear'] = false;
$arguments29['variables'] = array (
);
$arguments29['extensionName'] = NULL;
$arguments29['eval'] = 'trim';
$arguments29['size'] = 32;
$arguments29['maxCharacters'] = NULL;
$arguments29['minimum'] = NULL;
$arguments29['maximum'] = NULL;
$arguments29['placeholder'] = NULL;
$arguments29['name'] = 'title';

$output26 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output26 .= '
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['name'] = NULL;
$arguments31['label'] = NULL;
$arguments31['default'] = NULL;
$arguments31['required'] = false;
$arguments31['exclude'] = true;
$arguments31['transform'] = NULL;
$arguments31['enabled'] = true;
$arguments31['requestUpdate'] = false;
$arguments31['displayCond'] = NULL;
$arguments31['inherit'] = true;
$arguments31['inheritEmpty'] = true;
$arguments31['clear'] = false;
$arguments31['variables'] = array (
);
$arguments31['extensionName'] = NULL;
$arguments31['validate'] = 'trim';
$arguments31['cols'] = 85;
$arguments31['rows'] = 10;
$arguments31['defaultExtras'] = '';
$arguments31['enableRichText'] = false;
$arguments31['renderType'] = '';
$arguments31['format'] = '';
$arguments31['richtextConfiguration'] = NULL;
$arguments31['placeholder'] = NULL;
$arguments31['name'] = 'description';

$output26 .= FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output26 .= '
		';
return $output26;
};
$arguments23 = array();
$arguments23['id'] = NULL;
$arguments23['label'] = NULL;
$arguments23['description'] = NULL;
$arguments23['enabled'] = true;
$arguments23['compact'] = false;
$arguments23['variables'] = array (
);
$arguments23['options'] = NULL;
$arguments23['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments23['extensionName'] = NULL;
$arguments23['id'] = 'topPostElement';
$arguments23['label'] = 'Top post Container';
// Rendering Array
$array25 = array();
$array25['group'] = 'FCE';
$arguments23['options'] = $array25;

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output22 .= '
	';
return $output22;
};
$arguments20 = array();
$arguments20['name'] = NULL;
$arguments20['name'] = 'Configuration';

$output17 .= NULL;

$output17 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
		<b>Title:</b> ';
$array36 = array (
);
$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array36)]);

$output35 .= ' <br>
		<b>Description:</b> ';
$array37 = array (
);
$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('description', $array37)]);

$output35 .= ' <br>
	';
return $output35;
};
$arguments33 = array();
$arguments33['name'] = NULL;
$arguments33['name'] = 'Preview';

$output17 .= NULL;

$output17 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
		<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
			<div class="col-md-6 px-0">
				<h1 class="display-4 font-italic">';
$array41 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array41)]);

$output40 .= '</h1>
				<p class="lead my-3">';
$array42 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('description', $array42)]);

$output40 .= '</p>
				<p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
			</div>
		</div>
	';
return $output40;
};
$arguments38 = array();
$arguments38['name'] = NULL;
$arguments38['name'] = 'Main';

$output17 .= NULL;

$output17 .= '
</div>
';

return $output17;
}


}
#