<?php

class Content_action_aboutElement_e91a87f12e515076aacb688a1c59c48b4eee8e3c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments7['label'] = 'Title';

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
$arguments9['label'] = 'Description';
// Rendering Boolean node
// Rendering Array
$array11 = array();
$array11['0'] = 1;

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments9['enableRichText'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression12(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)
					),
					$renderingContext
				);

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
$arguments1['id'] = 'aboutElement';
$arguments1['label'] = 'About Sitebar container';
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
$output13 = '';

$output13 .= '
		<b>Title:</b> ';
$array14 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array14)]);

$output13 .= '<br>
		<b>Description:</b> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$array17 = array (
);return $renderingContext->getVariableProvider()->getByPath('description', $array17);
};
$arguments15 = array();
$arguments15['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output13 .= '<br>
	';

return $output13;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output18 = '';

$output18 .= '
		<div class="p-3 mb-3 bg-light rounded">
			<h4 class="font-italic">';
$array19 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array19)]);

$output18 .= '</h4>
			<p class="mb-0">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$array22 = array (
);return $renderingContext->getVariableProvider()->getByPath('description', $array22);
};
$arguments20 = array();
$arguments20['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output18 .= '</p>
		</div>
	';

return $output18;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output23 = '';

$output23 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en"
	xmlns:f="http://typo3.org/ns/TYPO3/Fluid/ViewHelpers"
	xmlns:flux="http://typo3.org/ns/FluidTYPO3/Flux/ViewHelpers"
	xmlns:v="http://typo3.org/ns/FluidTYPO3/Vhs/ViewHelpers">

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['name'] = NULL;
$arguments24['name'] = 'Content';

$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output23 .= '
    
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['value'] = NULL;
$arguments33['value'] = 'fluxContentElements';
$renderChildrenClosure34 = ($arguments33['value'] !== null) ? function() use ($arguments33) { return $arguments33['value']; } : $renderChildrenClosure34;
$output32 .= FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '

			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['name'] = NULL;
$arguments35['label'] = NULL;
$arguments35['default'] = NULL;
$arguments35['required'] = false;
$arguments35['exclude'] = true;
$arguments35['transform'] = NULL;
$arguments35['enabled'] = true;
$arguments35['requestUpdate'] = false;
$arguments35['displayCond'] = NULL;
$arguments35['inherit'] = true;
$arguments35['inheritEmpty'] = true;
$arguments35['clear'] = false;
$arguments35['variables'] = array (
);
$arguments35['extensionName'] = NULL;
$arguments35['eval'] = 'trim';
$arguments35['size'] = 32;
$arguments35['maxCharacters'] = NULL;
$arguments35['minimum'] = NULL;
$arguments35['maximum'] = NULL;
$arguments35['placeholder'] = NULL;
$arguments35['name'] = 'title';
$arguments35['label'] = 'Title';

$output32 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output32 .= '
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['name'] = NULL;
$arguments37['label'] = NULL;
$arguments37['default'] = NULL;
$arguments37['required'] = false;
$arguments37['exclude'] = true;
$arguments37['transform'] = NULL;
$arguments37['enabled'] = true;
$arguments37['requestUpdate'] = false;
$arguments37['displayCond'] = NULL;
$arguments37['inherit'] = true;
$arguments37['inheritEmpty'] = true;
$arguments37['clear'] = false;
$arguments37['variables'] = array (
);
$arguments37['extensionName'] = NULL;
$arguments37['validate'] = 'trim';
$arguments37['cols'] = 85;
$arguments37['rows'] = 10;
$arguments37['defaultExtras'] = '';
$arguments37['enableRichText'] = false;
$arguments37['renderType'] = '';
$arguments37['format'] = '';
$arguments37['richtextConfiguration'] = NULL;
$arguments37['placeholder'] = NULL;
$arguments37['name'] = 'description';
$arguments37['label'] = 'Description';
// Rendering Boolean node
// Rendering Array
$array39 = array();
$array39['0'] = 1;

$expression40 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments37['enableRichText'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression40(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);

$output32 .= FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output32 .= '
		';
return $output32;
};
$arguments29 = array();
$arguments29['id'] = NULL;
$arguments29['label'] = NULL;
$arguments29['description'] = NULL;
$arguments29['enabled'] = true;
$arguments29['compact'] = false;
$arguments29['variables'] = array (
);
$arguments29['options'] = NULL;
$arguments29['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments29['extensionName'] = NULL;
$arguments29['id'] = 'aboutElement';
$arguments29['label'] = 'About Sitebar container';
// Rendering Array
$array31 = array();
$array31['group'] = 'FCE';
$arguments29['options'] = $array31;

$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output28 .= '
	';
return $output28;
};
$arguments26 = array();
$arguments26['name'] = NULL;
$arguments26['name'] = 'Configuration';

$output23 .= NULL;

$output23 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
		<b>Title:</b> ';
$array44 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array44)]);

$output43 .= '<br>
		<b>Description:</b> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$array47 = array (
);return $renderingContext->getVariableProvider()->getByPath('description', $array47);
};
$arguments45 = array();
$arguments45['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output43 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output43 .= '<br>
	';
return $output43;
};
$arguments41 = array();
$arguments41['name'] = NULL;
$arguments41['name'] = 'Preview';

$output23 .= NULL;

$output23 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
		<div class="p-3 mb-3 bg-light rounded">
			<h4 class="font-italic">';
$array51 = array (
);
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array51)]);

$output50 .= '</h4>
			<p class="mb-0">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$array54 = array (
);return $renderingContext->getVariableProvider()->getByPath('description', $array54);
};
$arguments52 = array();
$arguments52['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output50 .= '</p>
		</div>
	';
return $output50;
};
$arguments48 = array();
$arguments48['name'] = NULL;
$arguments48['name'] = 'Main';

$output23 .= NULL;

$output23 .= '
</div>
';

return $output23;
}


}
#