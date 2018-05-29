<?php

class Content_action_featuredPostElement_86fb38c53d2a5cbdb13b648c8892b0053138a5d8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\DateTimeViewHelper
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
$arguments9['name'] = 'date';
$arguments9['label'] = 'Date';

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\DateTimeViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output4 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper
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
$arguments11['validate'] = 'trim';
$arguments11['cols'] = 85;
$arguments11['rows'] = 10;
$arguments11['defaultExtras'] = '';
$arguments11['enableRichText'] = false;
$arguments11['renderType'] = '';
$arguments11['format'] = '';
$arguments11['richtextConfiguration'] = NULL;
$arguments11['placeholder'] = NULL;
$arguments11['name'] = 'description';
$arguments11['label'] = 'Description';

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output4 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper
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
$arguments13['validate'] = 'trim';
$arguments13['size'] = 1;
$arguments13['multiple'] = false;
$arguments13['minItems'] = 0;
$arguments13['maxItems'] = 1;
$arguments13['itemListStyle'] = NULL;
$arguments13['selectedListStyle'] = NULL;
$arguments13['items'] = NULL;
$arguments13['emptyOption'] = false;
$arguments13['translateCsvItems'] = NULL;
$arguments13['itemsProcFunc'] = NULL;
$arguments13['table'] = 'sys_file_reference';
$arguments13['condition'] = NULL;
$arguments13['mm'] = NULL;
$arguments13['foreignField'] = 'uid_foreign';
$arguments13['foreignLabel'] = 'uid_local';
$arguments13['foreignSelector'] = 'uid_local';
$arguments13['foreignSortby'] = 'sorting_foreign';
$arguments13['foreignDefaultSortby'] = '';
$arguments13['foreignTableField'] = 'tablenames';
$arguments13['foreignUnique'] = NULL;
$arguments13['symmetricField'] = '';
$arguments13['symmetricLabel'] = '';
$arguments13['symmetricSortby'] = '';
$arguments13['localizationMode'] = 'select';
$arguments13['localizeChildrenAtParentLocalization'] = true;
$arguments13['disableMovingChildrenWithParent'] = false;
$arguments13['showThumbs'] = true;
$arguments13['matchFields'] = array (
);
$arguments13['oppositeField'] = '';
$arguments13['collapseAll'] = false;
$arguments13['expandSingle'] = false;
$arguments13['newRecordLinkAddTitle'] = true;
$arguments13['newRecordLinkPosition'] = 'top';
$arguments13['useCombination'] = false;
$arguments13['useSortable'] = true;
$arguments13['showPossibleLocalizationRecords'] = false;
$arguments13['showRemovedLocalizationRecords'] = false;
$arguments13['showAllLocalizationLink'] = false;
$arguments13['showSynchronizationLink'] = false;
$arguments13['enabledControls'] = false;
$arguments13['headerThumbnail'] = false;
$arguments13['foreignMatchFields'] = false;
$arguments13['foreignTypes'] = NULL;
$arguments13['levelLinksPosition'] = 'both';
$arguments13['allowedExtensions'] = 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg';
$arguments13['disallowedExtensions'] = '';
$arguments13['createNewRelationLinkTitle'] = 'LLL:EXT:lang/locallang_core.xlf:cm.createNewRelation';
$arguments13['name'] = 'images';
$arguments13['maxItems'] = 3;
$arguments13['minItems'] = 1;

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

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
$arguments1['id'] = 'featuredContentElement';
$arguments1['label'] = 'Featured Content Element';
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
        <b>Title:</b> ';
$array16 = array (
);
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array16)]);

$output15 .= '<br>
        <b>Date:</b> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$array19 = array (
);return $renderingContext->getVariableProvider()->getByPath('date', $array19);
};
$arguments17 = array();
$arguments17['date'] = NULL;
$arguments17['format'] = '';
$arguments17['base'] = NULL;
$arguments17['format'] = 'M Y';
$renderChildrenClosure18 = ($arguments17['date'] !== null) ? function() use ($arguments17) { return $arguments17['date']; } : $renderChildrenClosure18;
$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output15 .= '<br>
        <b>Description:</b> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$array22 = array (
);return $renderingContext->getVariableProvider()->getByPath('description', $array22);
};
$arguments20 = array();
$arguments20['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output15 .= '<br>
        <div class="row">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
                <div class="col-xs-2">
                    <p>';
$array28 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.title', $array28)]);

$output27 .= '</p>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['alt'] = NULL;
$arguments29['ismap'] = NULL;
$arguments29['longdesc'] = NULL;
$arguments29['usemap'] = NULL;
$arguments29['src'] = NULL;
$arguments29['treatIdAsReference'] = NULL;
$arguments29['image'] = NULL;
$arguments29['crop'] = NULL;
$arguments29['cropVariant'] = 'default';
$arguments29['width'] = NULL;
$arguments29['height'] = NULL;
$arguments29['minWidth'] = NULL;
$arguments29['minHeight'] = NULL;
$arguments29['maxWidth'] = NULL;
$arguments29['maxHeight'] = NULL;
$arguments29['absolute'] = false;
// Rendering Boolean node
// Rendering Array
$array31 = array();
$array31['0'] = 1;

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments29['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);
$array33 = array (
);$arguments29['src'] = $renderingContext->getVariableProvider()->getByPath('image.id', $array33);
$array34 = array (
);$arguments29['title'] = $renderingContext->getVariableProvider()->getByPath('image.title', $array34);
$array35 = array (
);$arguments29['alt'] = $renderingContext->getVariableProvider()->getByPath('image.alternative', $array35);
$arguments29['class'] = 'img-responsive';

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output27 .= '
                </div>
            ';
return $output27;
};
$arguments23 = array();
$arguments23['each'] = NULL;
$arguments23['as'] = NULL;
$arguments23['key'] = NULL;
$arguments23['reverse'] = false;
$arguments23['iteration'] = NULL;
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['table'] = 'tt_content';
$arguments25['field'] = 'image';
$arguments25['record'] = NULL;
$arguments25['uid'] = NULL;
$arguments25['as'] = NULL;
$arguments25['field'] = 'images';
$arguments23['each'] = FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);
$arguments23['as'] = 'image';

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output15 .= '
        </div>
    ';

return $output15;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output36 = '';

$output36 .= '
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">World</strong>
                <h3 class="mb-0">
                    <a class="text-dark" href="#">';
$array37 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array37)]);

$output36 .= '</a>
                </h3>
                <div class="mb-1 text-muted">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$array40 = array (
);return $renderingContext->getVariableProvider()->getByPath('date', $array40);
};
$arguments38 = array();
$arguments38['date'] = NULL;
$arguments38['format'] = '';
$arguments38['base'] = NULL;
$arguments38['format'] = 'M Y';
$renderChildrenClosure39 = ($arguments38['date'] !== null) ? function() use ($arguments38) { return $arguments38['date']; } : $renderChildrenClosure39;
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output36 .= '</div>
                <p class="card-text mb-auto">';
$array41 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('description', $array41)]);

$output36 .= '</p>
                <a href="#">Continue reading</a>
            </div>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['additionalAttributes'] = NULL;
$arguments47['data'] = NULL;
$arguments47['class'] = NULL;
$arguments47['dir'] = NULL;
$arguments47['id'] = NULL;
$arguments47['lang'] = NULL;
$arguments47['style'] = NULL;
$arguments47['title'] = NULL;
$arguments47['accesskey'] = NULL;
$arguments47['tabindex'] = NULL;
$arguments47['onclick'] = NULL;
$arguments47['alt'] = NULL;
$arguments47['ismap'] = NULL;
$arguments47['longdesc'] = NULL;
$arguments47['usemap'] = NULL;
$arguments47['src'] = NULL;
$arguments47['treatIdAsReference'] = NULL;
$arguments47['image'] = NULL;
$arguments47['crop'] = NULL;
$arguments47['cropVariant'] = 'default';
$arguments47['width'] = NULL;
$arguments47['height'] = NULL;
$arguments47['minWidth'] = NULL;
$arguments47['minHeight'] = NULL;
$arguments47['maxWidth'] = NULL;
$arguments47['maxHeight'] = NULL;
$arguments47['absolute'] = false;
$arguments47['class'] = 'card-img-right flex-auto d-none d-lg-block';
// Rendering Boolean node
// Rendering Array
$array49 = array();
$array49['0'] = 1;

$expression50 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments47['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression50(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);
$array51 = array (
);$arguments47['src'] = $renderingContext->getVariableProvider()->getByPath('image.id', $array51);
$array52 = array (
);$arguments47['title'] = $renderingContext->getVariableProvider()->getByPath('image.title', $array52);
$array53 = array (
);$arguments47['alt'] = $renderingContext->getVariableProvider()->getByPath('image.alternative', $array53);

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
            ';
return $output46;
};
$arguments42 = array();
$arguments42['each'] = NULL;
$arguments42['as'] = NULL;
$arguments42['key'] = NULL;
$arguments42['reverse'] = false;
$arguments42['iteration'] = NULL;
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['table'] = 'tt_content';
$arguments44['field'] = 'image';
$arguments44['record'] = NULL;
$arguments44['uid'] = NULL;
$arguments44['as'] = NULL;
$arguments44['field'] = 'images';
$arguments42['each'] = FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);
$arguments42['as'] = 'image';

$output36 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output36 .= '
        </div>
    ';

return $output36;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output54 = '';

$output54 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en"
     xmlns:f="http://typo3.org/ns/TYPO3/Fluid/ViewHelpers"
     xmlns:flux="http://typo3.org/ns/FluidTYPO3/Flux/ViewHelpers"
     xmlns:v="http://typo3.org/ns/FluidTYPO3/Vhs/ViewHelpers">

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['name'] = NULL;
$arguments55['name'] = 'Content';

$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output54 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['value'] = NULL;
$arguments64['value'] = 'fluxContentElements';
$renderChildrenClosure65 = ($arguments64['value'] !== null) ? function() use ($arguments64) { return $arguments64['value']; } : $renderChildrenClosure65;
$output63 .= FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '

            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['name'] = NULL;
$arguments66['label'] = NULL;
$arguments66['default'] = NULL;
$arguments66['required'] = false;
$arguments66['exclude'] = true;
$arguments66['transform'] = NULL;
$arguments66['enabled'] = true;
$arguments66['requestUpdate'] = false;
$arguments66['displayCond'] = NULL;
$arguments66['inherit'] = true;
$arguments66['inheritEmpty'] = true;
$arguments66['clear'] = false;
$arguments66['variables'] = array (
);
$arguments66['extensionName'] = NULL;
$arguments66['eval'] = 'trim';
$arguments66['size'] = 32;
$arguments66['maxCharacters'] = NULL;
$arguments66['minimum'] = NULL;
$arguments66['maximum'] = NULL;
$arguments66['placeholder'] = NULL;
$arguments66['name'] = 'title';
$arguments66['label'] = 'Title';

$output63 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output63 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\DateTimeViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['name'] = NULL;
$arguments68['label'] = NULL;
$arguments68['default'] = NULL;
$arguments68['required'] = false;
$arguments68['exclude'] = true;
$arguments68['transform'] = NULL;
$arguments68['enabled'] = true;
$arguments68['requestUpdate'] = false;
$arguments68['displayCond'] = NULL;
$arguments68['inherit'] = true;
$arguments68['inheritEmpty'] = true;
$arguments68['clear'] = false;
$arguments68['variables'] = array (
);
$arguments68['extensionName'] = NULL;
$arguments68['name'] = 'date';
$arguments68['label'] = 'Date';

$output63 .= FluidTYPO3\Flux\ViewHelpers\Field\DateTimeViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output63 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['name'] = NULL;
$arguments70['label'] = NULL;
$arguments70['default'] = NULL;
$arguments70['required'] = false;
$arguments70['exclude'] = true;
$arguments70['transform'] = NULL;
$arguments70['enabled'] = true;
$arguments70['requestUpdate'] = false;
$arguments70['displayCond'] = NULL;
$arguments70['inherit'] = true;
$arguments70['inheritEmpty'] = true;
$arguments70['clear'] = false;
$arguments70['variables'] = array (
);
$arguments70['extensionName'] = NULL;
$arguments70['validate'] = 'trim';
$arguments70['cols'] = 85;
$arguments70['rows'] = 10;
$arguments70['defaultExtras'] = '';
$arguments70['enableRichText'] = false;
$arguments70['renderType'] = '';
$arguments70['format'] = '';
$arguments70['richtextConfiguration'] = NULL;
$arguments70['placeholder'] = NULL;
$arguments70['name'] = 'description';
$arguments70['label'] = 'Description';

$output63 .= FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output63 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['name'] = NULL;
$arguments72['label'] = NULL;
$arguments72['default'] = NULL;
$arguments72['required'] = false;
$arguments72['exclude'] = true;
$arguments72['transform'] = NULL;
$arguments72['enabled'] = true;
$arguments72['requestUpdate'] = false;
$arguments72['displayCond'] = NULL;
$arguments72['inherit'] = true;
$arguments72['inheritEmpty'] = true;
$arguments72['clear'] = false;
$arguments72['variables'] = array (
);
$arguments72['extensionName'] = NULL;
$arguments72['validate'] = 'trim';
$arguments72['size'] = 1;
$arguments72['multiple'] = false;
$arguments72['minItems'] = 0;
$arguments72['maxItems'] = 1;
$arguments72['itemListStyle'] = NULL;
$arguments72['selectedListStyle'] = NULL;
$arguments72['items'] = NULL;
$arguments72['emptyOption'] = false;
$arguments72['translateCsvItems'] = NULL;
$arguments72['itemsProcFunc'] = NULL;
$arguments72['table'] = 'sys_file_reference';
$arguments72['condition'] = NULL;
$arguments72['mm'] = NULL;
$arguments72['foreignField'] = 'uid_foreign';
$arguments72['foreignLabel'] = 'uid_local';
$arguments72['foreignSelector'] = 'uid_local';
$arguments72['foreignSortby'] = 'sorting_foreign';
$arguments72['foreignDefaultSortby'] = '';
$arguments72['foreignTableField'] = 'tablenames';
$arguments72['foreignUnique'] = NULL;
$arguments72['symmetricField'] = '';
$arguments72['symmetricLabel'] = '';
$arguments72['symmetricSortby'] = '';
$arguments72['localizationMode'] = 'select';
$arguments72['localizeChildrenAtParentLocalization'] = true;
$arguments72['disableMovingChildrenWithParent'] = false;
$arguments72['showThumbs'] = true;
$arguments72['matchFields'] = array (
);
$arguments72['oppositeField'] = '';
$arguments72['collapseAll'] = false;
$arguments72['expandSingle'] = false;
$arguments72['newRecordLinkAddTitle'] = true;
$arguments72['newRecordLinkPosition'] = 'top';
$arguments72['useCombination'] = false;
$arguments72['useSortable'] = true;
$arguments72['showPossibleLocalizationRecords'] = false;
$arguments72['showRemovedLocalizationRecords'] = false;
$arguments72['showAllLocalizationLink'] = false;
$arguments72['showSynchronizationLink'] = false;
$arguments72['enabledControls'] = false;
$arguments72['headerThumbnail'] = false;
$arguments72['foreignMatchFields'] = false;
$arguments72['foreignTypes'] = NULL;
$arguments72['levelLinksPosition'] = 'both';
$arguments72['allowedExtensions'] = 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg';
$arguments72['disallowedExtensions'] = '';
$arguments72['createNewRelationLinkTitle'] = 'LLL:EXT:lang/locallang_core.xlf:cm.createNewRelation';
$arguments72['name'] = 'images';
$arguments72['maxItems'] = 3;
$arguments72['minItems'] = 1;

$output63 .= FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output63 .= '
        ';
return $output63;
};
$arguments60 = array();
$arguments60['id'] = NULL;
$arguments60['label'] = NULL;
$arguments60['description'] = NULL;
$arguments60['enabled'] = true;
$arguments60['compact'] = false;
$arguments60['variables'] = array (
);
$arguments60['options'] = NULL;
$arguments60['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments60['extensionName'] = NULL;
$arguments60['id'] = 'featuredContentElement';
$arguments60['label'] = 'Featured Content Element';
// Rendering Array
$array62 = array();
$array62['group'] = 'FCE';
$arguments60['options'] = $array62;

$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output59 .= '
    ';
return $output59;
};
$arguments57 = array();
$arguments57['name'] = NULL;
$arguments57['name'] = 'Configuration';

$output54 .= NULL;

$output54 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
        <b>Title:</b> ';
$array77 = array (
);
$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array77)]);

$output76 .= '<br>
        <b>Date:</b> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$array80 = array (
);return $renderingContext->getVariableProvider()->getByPath('date', $array80);
};
$arguments78 = array();
$arguments78['date'] = NULL;
$arguments78['format'] = '';
$arguments78['base'] = NULL;
$arguments78['format'] = 'M Y';
$renderChildrenClosure79 = ($arguments78['date'] !== null) ? function() use ($arguments78) { return $arguments78['date']; } : $renderChildrenClosure79;
$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext)]);

$output76 .= '<br>
        <b>Description:</b> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$array83 = array (
);return $renderingContext->getVariableProvider()->getByPath('description', $array83);
};
$arguments81 = array();
$arguments81['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output76 .= '<br>
        <div class="row">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
                <div class="col-xs-2">
                    <p>';
$array89 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.title', $array89)]);

$output88 .= '</p>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['class'] = NULL;
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['title'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$arguments90['alt'] = NULL;
$arguments90['ismap'] = NULL;
$arguments90['longdesc'] = NULL;
$arguments90['usemap'] = NULL;
$arguments90['src'] = NULL;
$arguments90['treatIdAsReference'] = NULL;
$arguments90['image'] = NULL;
$arguments90['crop'] = NULL;
$arguments90['cropVariant'] = 'default';
$arguments90['width'] = NULL;
$arguments90['height'] = NULL;
$arguments90['minWidth'] = NULL;
$arguments90['minHeight'] = NULL;
$arguments90['maxWidth'] = NULL;
$arguments90['maxHeight'] = NULL;
$arguments90['absolute'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = array();
$array92['0'] = 1;

$expression93 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments90['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression93(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$array94 = array (
);$arguments90['src'] = $renderingContext->getVariableProvider()->getByPath('image.id', $array94);
$array95 = array (
);$arguments90['title'] = $renderingContext->getVariableProvider()->getByPath('image.title', $array95);
$array96 = array (
);$arguments90['alt'] = $renderingContext->getVariableProvider()->getByPath('image.alternative', $array96);
$arguments90['class'] = 'img-responsive';

$output88 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output88 .= '
                </div>
            ';
return $output88;
};
$arguments84 = array();
$arguments84['each'] = NULL;
$arguments84['as'] = NULL;
$arguments84['key'] = NULL;
$arguments84['reverse'] = false;
$arguments84['iteration'] = NULL;
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['table'] = 'tt_content';
$arguments86['field'] = 'image';
$arguments86['record'] = NULL;
$arguments86['uid'] = NULL;
$arguments86['as'] = NULL;
$arguments86['field'] = 'images';
$arguments84['each'] = FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);
$arguments84['as'] = 'image';

$output76 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output76 .= '
        </div>
    ';
return $output76;
};
$arguments74 = array();
$arguments74['name'] = NULL;
$arguments74['name'] = 'Preview';

$output54 .= NULL;

$output54 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">World</strong>
                <h3 class="mb-0">
                    <a class="text-dark" href="#">';
$array100 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array100)]);

$output99 .= '</a>
                </h3>
                <div class="mb-1 text-muted">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$array103 = array (
);return $renderingContext->getVariableProvider()->getByPath('date', $array103);
};
$arguments101 = array();
$arguments101['date'] = NULL;
$arguments101['format'] = '';
$arguments101['base'] = NULL;
$arguments101['format'] = 'M Y';
$renderChildrenClosure102 = ($arguments101['date'] !== null) ? function() use ($arguments101) { return $arguments101['date']; } : $renderChildrenClosure102;
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext)]);

$output99 .= '</div>
                <p class="card-text mb-auto">';
$array104 = array (
);
$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('description', $array104)]);

$output99 .= '</p>
                <a href="#">Continue reading</a>
            </div>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['additionalAttributes'] = NULL;
$arguments110['data'] = NULL;
$arguments110['class'] = NULL;
$arguments110['dir'] = NULL;
$arguments110['id'] = NULL;
$arguments110['lang'] = NULL;
$arguments110['style'] = NULL;
$arguments110['title'] = NULL;
$arguments110['accesskey'] = NULL;
$arguments110['tabindex'] = NULL;
$arguments110['onclick'] = NULL;
$arguments110['alt'] = NULL;
$arguments110['ismap'] = NULL;
$arguments110['longdesc'] = NULL;
$arguments110['usemap'] = NULL;
$arguments110['src'] = NULL;
$arguments110['treatIdAsReference'] = NULL;
$arguments110['image'] = NULL;
$arguments110['crop'] = NULL;
$arguments110['cropVariant'] = 'default';
$arguments110['width'] = NULL;
$arguments110['height'] = NULL;
$arguments110['minWidth'] = NULL;
$arguments110['minHeight'] = NULL;
$arguments110['maxWidth'] = NULL;
$arguments110['maxHeight'] = NULL;
$arguments110['absolute'] = false;
$arguments110['class'] = 'card-img-right flex-auto d-none d-lg-block';
// Rendering Boolean node
// Rendering Array
$array112 = array();
$array112['0'] = 1;

$expression113 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments110['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression113(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array112)
					),
					$renderingContext
				);
$array114 = array (
);$arguments110['src'] = $renderingContext->getVariableProvider()->getByPath('image.id', $array114);
$array115 = array (
);$arguments110['title'] = $renderingContext->getVariableProvider()->getByPath('image.title', $array115);
$array116 = array (
);$arguments110['alt'] = $renderingContext->getVariableProvider()->getByPath('image.alternative', $array116);

$output109 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output109 .= '
            ';
return $output109;
};
$arguments105 = array();
$arguments105['each'] = NULL;
$arguments105['as'] = NULL;
$arguments105['key'] = NULL;
$arguments105['reverse'] = false;
$arguments105['iteration'] = NULL;
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['table'] = 'tt_content';
$arguments107['field'] = 'image';
$arguments107['record'] = NULL;
$arguments107['uid'] = NULL;
$arguments107['as'] = NULL;
$arguments107['field'] = 'images';
$arguments105['each'] = FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);
$arguments105['as'] = 'image';

$output99 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output99 .= '
        </div>
    ';
return $output99;
};
$arguments97 = array();
$arguments97['name'] = NULL;
$arguments97['name'] = 'Main';

$output54 .= NULL;

$output54 .= '
</div>
';

return $output54;
}


}
#