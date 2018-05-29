<?php

class Content_action_sidebarLinksElement_2a6ec27c47a74f64584f6d7fdf6aa71bf2c5a3d0 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
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
$arguments9['eval'] = 'trim';
$arguments9['size'] = 32;
$arguments9['maxCharacters'] = NULL;
$arguments9['minimum'] = NULL;
$arguments9['maximum'] = NULL;
$arguments9['placeholder'] = NULL;
$arguments9['name'] = 'githublink';
$arguments9['label'] = 'GitHub link';

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output4 .= '
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['name'] = NULL;
$arguments11['label'] = NULL;
$arguments11['default'] = NULL;
$arguments11['required'] = false;
$arguments11['exclude'] = true;
$arguments11['transform'] = NULL;
$arguments11['enabled'] = true;
$arguments11['requestUpdate'] = false;
$arguments11['displayCond'] = NULL;
$arguments11['inherit'] = true;
$arguments11['inheritEmpty'] = true;
$arguments11['clear'] = false;
$arguments11['variables'] = array (
);
$arguments11['extensionName'] = NULL;
$arguments11['eval'] = 'trim';
$arguments11['size'] = 32;
$arguments11['maxCharacters'] = NULL;
$arguments11['minimum'] = NULL;
$arguments11['maximum'] = NULL;
$arguments11['placeholder'] = NULL;
$arguments11['name'] = 'twitterlink';
$arguments11['label'] = 'Twitter link';

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output4 .= '
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['name'] = NULL;
$arguments13['label'] = NULL;
$arguments13['default'] = NULL;
$arguments13['required'] = false;
$arguments13['exclude'] = true;
$arguments13['transform'] = NULL;
$arguments13['enabled'] = true;
$arguments13['requestUpdate'] = false;
$arguments13['displayCond'] = NULL;
$arguments13['inherit'] = true;
$arguments13['inheritEmpty'] = true;
$arguments13['clear'] = false;
$arguments13['variables'] = array (
);
$arguments13['extensionName'] = NULL;
$arguments13['eval'] = 'trim';
$arguments13['size'] = 32;
$arguments13['maxCharacters'] = NULL;
$arguments13['minimum'] = NULL;
$arguments13['maximum'] = NULL;
$arguments13['placeholder'] = NULL;
$arguments13['name'] = 'facebooklink';
$arguments13['label'] = 'Facebook link';

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

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
$arguments1['id'] = 'linksElement';
$arguments1['label'] = 'Links sidebar';
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
$output15 = '';

$output15 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
			<b>Title:</b> ';
$array22 = array (
);
$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array22)]);

$output21 .= '<br>
		';
return $output21;
};
$arguments16 = array();
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$arguments16['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['0'] = $renderingContext->getVariableProvider()->getByPath('title', $array19);

$expression20 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments16['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);
$arguments16['__thenClosure'] = $renderChildrenClosure17;

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
			<b>Github:</b> ';
$array29 = array (
);
$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('githublink', $array29)]);

$output28 .= '<br>
		';
return $output28;
};
$arguments23 = array();
$arguments23['then'] = NULL;
$arguments23['else'] = NULL;
$arguments23['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array25 = array();
$array26 = array (
);$array25['0'] = $renderingContext->getVariableProvider()->getByPath('githublink', $array26);

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments23['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression27(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)
					),
					$renderingContext
				);
$arguments23['__thenClosure'] = $renderChildrenClosure24;

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output15 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
			<b>Twitter:</b> ';
$array36 = array (
);
$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('twitterlink', $array36)]);

$output35 .= '<br>
		';
return $output35;
};
$arguments30 = array();
$arguments30['then'] = NULL;
$arguments30['else'] = NULL;
$arguments30['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array32 = array();
$array33 = array (
);$array32['0'] = $renderingContext->getVariableProvider()->getByPath('twitterlink', $array33);

$expression34 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments30['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)
					),
					$renderingContext
				);
$arguments30['__thenClosure'] = $renderChildrenClosure31;

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output15 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
			<b>Facebook:</b> ';
$array43 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('facebooklink', $array43)]);

$output42 .= '<br>
		';
return $output42;
};
$arguments37 = array();
$arguments37['then'] = NULL;
$arguments37['else'] = NULL;
$arguments37['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['0'] = $renderingContext->getVariableProvider()->getByPath('facebooklink', $array40);

$expression41 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments37['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression41(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);
$arguments37['__thenClosure'] = $renderChildrenClosure38;

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output15 .= '
	';

return $output15;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output44 = '';

$output44 .= '
		<div class="p-3">
			<h4 class="font-italic">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$array50 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array50)]);
};
$arguments45 = array();
$arguments45['then'] = NULL;
$arguments45['else'] = NULL;
$arguments45['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array47 = array();
$array48 = array (
);$array47['0'] = $renderingContext->getVariableProvider()->getByPath('title', $array48);

$expression49 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments45['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression49(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)
					),
					$renderingContext
				);
$arguments45['__thenClosure'] = $renderChildrenClosure46;

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '</h4>
			<ol class="list-unstyled">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
					<li><a href="';
$array57 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('githublink', $array57)]);

$output56 .= '">GitHub</a></li>
				';
return $output56;
};
$arguments51 = array();
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$arguments51['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array53 = array();
$array54 = array (
);$array53['0'] = $renderingContext->getVariableProvider()->getByPath('githublink', $array54);

$expression55 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression55(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)
					),
					$renderingContext
				);
$arguments51['__thenClosure'] = $renderChildrenClosure52;

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output44 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
					<li><a href="';
$array64 = array (
);
$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('twitterlink', $array64)]);

$output63 .= '">Twitter</a></li>
				';
return $output63;
};
$arguments58 = array();
$arguments58['then'] = NULL;
$arguments58['else'] = NULL;
$arguments58['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['0'] = $renderingContext->getVariableProvider()->getByPath('twitterlink', $array61);

$expression62 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments58['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)
					),
					$renderingContext
				);
$arguments58['__thenClosure'] = $renderChildrenClosure59;

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output44 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
					<li><a href="';
$array71 = array (
);
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('facebooklink', $array71)]);

$output70 .= '">Facebook</a></li>
				';
return $output70;
};
$arguments65 = array();
$arguments65['then'] = NULL;
$arguments65['else'] = NULL;
$arguments65['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['0'] = $renderingContext->getVariableProvider()->getByPath('facebooklink', $array68);

$expression69 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments65['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array67)
					),
					$renderingContext
				);
$arguments65['__thenClosure'] = $renderChildrenClosure66;

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output44 .= '
			</ol>
		</div>
	';

return $output44;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output72 = '';

$output72 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en"
	xmlns:f="http://typo3.org/ns/TYPO3/Fluid/ViewHelpers"
	xmlns:flux="http://typo3.org/ns/FluidTYPO3/Flux/ViewHelpers"
	xmlns:v="http://typo3.org/ns/FluidTYPO3/Vhs/ViewHelpers">

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['name'] = NULL;
$arguments73['name'] = 'Content';

$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output72 .= '
    
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['value'] = NULL;
$arguments82['value'] = 'fluxContentElements';
$renderChildrenClosure83 = ($arguments82['value'] !== null) ? function() use ($arguments82) { return $arguments82['value']; } : $renderChildrenClosure83;
$output81 .= FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '

			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['name'] = NULL;
$arguments84['label'] = NULL;
$arguments84['default'] = NULL;
$arguments84['required'] = false;
$arguments84['exclude'] = true;
$arguments84['transform'] = NULL;
$arguments84['enabled'] = true;
$arguments84['requestUpdate'] = false;
$arguments84['displayCond'] = NULL;
$arguments84['inherit'] = true;
$arguments84['inheritEmpty'] = true;
$arguments84['clear'] = false;
$arguments84['variables'] = array (
);
$arguments84['extensionName'] = NULL;
$arguments84['eval'] = 'trim';
$arguments84['size'] = 32;
$arguments84['maxCharacters'] = NULL;
$arguments84['minimum'] = NULL;
$arguments84['maximum'] = NULL;
$arguments84['placeholder'] = NULL;
$arguments84['name'] = 'title';
$arguments84['label'] = 'Title';

$output81 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output81 .= '
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['name'] = NULL;
$arguments86['label'] = NULL;
$arguments86['default'] = NULL;
$arguments86['required'] = false;
$arguments86['exclude'] = true;
$arguments86['transform'] = NULL;
$arguments86['enabled'] = true;
$arguments86['requestUpdate'] = false;
$arguments86['displayCond'] = NULL;
$arguments86['inherit'] = true;
$arguments86['inheritEmpty'] = true;
$arguments86['clear'] = false;
$arguments86['variables'] = array (
);
$arguments86['extensionName'] = NULL;
$arguments86['eval'] = 'trim';
$arguments86['size'] = 32;
$arguments86['maxCharacters'] = NULL;
$arguments86['minimum'] = NULL;
$arguments86['maximum'] = NULL;
$arguments86['placeholder'] = NULL;
$arguments86['name'] = 'githublink';
$arguments86['label'] = 'GitHub link';

$output81 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output81 .= '
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['name'] = NULL;
$arguments88['label'] = NULL;
$arguments88['default'] = NULL;
$arguments88['required'] = false;
$arguments88['exclude'] = true;
$arguments88['transform'] = NULL;
$arguments88['enabled'] = true;
$arguments88['requestUpdate'] = false;
$arguments88['displayCond'] = NULL;
$arguments88['inherit'] = true;
$arguments88['inheritEmpty'] = true;
$arguments88['clear'] = false;
$arguments88['variables'] = array (
);
$arguments88['extensionName'] = NULL;
$arguments88['eval'] = 'trim';
$arguments88['size'] = 32;
$arguments88['maxCharacters'] = NULL;
$arguments88['minimum'] = NULL;
$arguments88['maximum'] = NULL;
$arguments88['placeholder'] = NULL;
$arguments88['name'] = 'twitterlink';
$arguments88['label'] = 'Twitter link';

$output81 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output81 .= '
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['name'] = NULL;
$arguments90['label'] = NULL;
$arguments90['default'] = NULL;
$arguments90['required'] = false;
$arguments90['exclude'] = true;
$arguments90['transform'] = NULL;
$arguments90['enabled'] = true;
$arguments90['requestUpdate'] = false;
$arguments90['displayCond'] = NULL;
$arguments90['inherit'] = true;
$arguments90['inheritEmpty'] = true;
$arguments90['clear'] = false;
$arguments90['variables'] = array (
);
$arguments90['extensionName'] = NULL;
$arguments90['eval'] = 'trim';
$arguments90['size'] = 32;
$arguments90['maxCharacters'] = NULL;
$arguments90['minimum'] = NULL;
$arguments90['maximum'] = NULL;
$arguments90['placeholder'] = NULL;
$arguments90['name'] = 'facebooklink';
$arguments90['label'] = 'Facebook link';

$output81 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output81 .= '
		';
return $output81;
};
$arguments78 = array();
$arguments78['id'] = NULL;
$arguments78['label'] = NULL;
$arguments78['description'] = NULL;
$arguments78['enabled'] = true;
$arguments78['compact'] = false;
$arguments78['variables'] = array (
);
$arguments78['options'] = NULL;
$arguments78['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments78['extensionName'] = NULL;
$arguments78['id'] = 'linksElement';
$arguments78['label'] = 'Links sidebar';
// Rendering Array
$array80 = array();
$array80['group'] = 'FCE';
$arguments78['options'] = $array80;

$output77 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext)]);

$output77 .= '
	';
return $output77;
};
$arguments75 = array();
$arguments75['name'] = NULL;
$arguments75['name'] = 'Configuration';

$output72 .= NULL;

$output72 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
			<b>Title:</b> ';
$array101 = array (
);
$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array101)]);

$output100 .= '<br>
		';
return $output100;
};
$arguments95 = array();
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$arguments95['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['0'] = $renderingContext->getVariableProvider()->getByPath('title', $array98);

$expression99 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments95['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression99(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);
$arguments95['__thenClosure'] = $renderChildrenClosure96;

$output94 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
			<b>Github:</b> ';
$array108 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('githublink', $array108)]);

$output107 .= '<br>
		';
return $output107;
};
$arguments102 = array();
$arguments102['then'] = NULL;
$arguments102['else'] = NULL;
$arguments102['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array104 = array();
$array105 = array (
);$array104['0'] = $renderingContext->getVariableProvider()->getByPath('githublink', $array105);

$expression106 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments102['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression106(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array104)
					),
					$renderingContext
				);
$arguments102['__thenClosure'] = $renderChildrenClosure103;

$output94 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output94 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
			<b>Twitter:</b> ';
$array115 = array (
);
$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('twitterlink', $array115)]);

$output114 .= '<br>
		';
return $output114;
};
$arguments109 = array();
$arguments109['then'] = NULL;
$arguments109['else'] = NULL;
$arguments109['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array111 = array();
$array112 = array (
);$array111['0'] = $renderingContext->getVariableProvider()->getByPath('twitterlink', $array112);

$expression113 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments109['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression113(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array111)
					),
					$renderingContext
				);
$arguments109['__thenClosure'] = $renderChildrenClosure110;

$output94 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output94 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
			<b>Facebook:</b> ';
$array122 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('facebooklink', $array122)]);

$output121 .= '<br>
		';
return $output121;
};
$arguments116 = array();
$arguments116['then'] = NULL;
$arguments116['else'] = NULL;
$arguments116['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('facebooklink', $array119);

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments116['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$arguments116['__thenClosure'] = $renderChildrenClosure117;

$output94 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output94 .= '
	';
return $output94;
};
$arguments92 = array();
$arguments92['name'] = NULL;
$arguments92['name'] = 'Preview';

$output72 .= NULL;

$output72 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
		<div class="p-3">
			<h4 class="font-italic">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$array131 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array131)]);
};
$arguments126 = array();
$arguments126['then'] = NULL;
$arguments126['else'] = NULL;
$arguments126['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array128 = array();
$array129 = array (
);$array128['0'] = $renderingContext->getVariableProvider()->getByPath('title', $array129);

$expression130 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments126['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression130(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array128)
					),
					$renderingContext
				);
$arguments126['__thenClosure'] = $renderChildrenClosure127;

$output125 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '</h4>
			<ol class="list-unstyled">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
					<li><a href="';
$array138 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('githublink', $array138)]);

$output137 .= '">GitHub</a></li>
				';
return $output137;
};
$arguments132 = array();
$arguments132['then'] = NULL;
$arguments132['else'] = NULL;
$arguments132['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array134 = array();
$array135 = array (
);$array134['0'] = $renderingContext->getVariableProvider()->getByPath('githublink', $array135);

$expression136 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments132['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression136(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array134)
					),
					$renderingContext
				);
$arguments132['__thenClosure'] = $renderChildrenClosure133;

$output125 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output125 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
					<li><a href="';
$array145 = array (
);
$output144 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('twitterlink', $array145)]);

$output144 .= '">Twitter</a></li>
				';
return $output144;
};
$arguments139 = array();
$arguments139['then'] = NULL;
$arguments139['else'] = NULL;
$arguments139['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array141 = array();
$array142 = array (
);$array141['0'] = $renderingContext->getVariableProvider()->getByPath('twitterlink', $array142);

$expression143 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments139['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression143(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array141)
					),
					$renderingContext
				);
$arguments139['__thenClosure'] = $renderChildrenClosure140;

$output125 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output125 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output151 = '';

$output151 .= '
					<li><a href="';
$array152 = array (
);
$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('facebooklink', $array152)]);

$output151 .= '">Facebook</a></li>
				';
return $output151;
};
$arguments146 = array();
$arguments146['then'] = NULL;
$arguments146['else'] = NULL;
$arguments146['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array148 = array();
$array149 = array (
);$array148['0'] = $renderingContext->getVariableProvider()->getByPath('facebooklink', $array149);

$expression150 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments146['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression150(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array148)
					),
					$renderingContext
				);
$arguments146['__thenClosure'] = $renderChildrenClosure147;

$output125 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output125 .= '
			</ol>
		</div>
	';
return $output125;
};
$arguments123 = array();
$arguments123['name'] = NULL;
$arguments123['name'] = 'Main';

$output72 .= NULL;

$output72 .= '
</div>
';

return $output72;
}


}
#