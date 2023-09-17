<?php
declare(strict_types=1);

namespace Atomicplan\PlateBootstrap\FrontendEditing\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\FrontendEditing\Service\ContentEditableWrapperService;
use TYPO3\CMS\FrontendEditing\Utility\FrontendEditingUtility;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;

class ContainerDropZoneViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

    protected $escapeChildren = false;

    protected $escapeOutput = false;

    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('colPos', 'int', 'colpos', true);
        $this->registerArgument('parent', 'int', 'tx_container_parent', true);
    }

    public static function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext): string
    {
        $content = $renderChildrenClosure() ?? "";
        if (FrontendEditingUtility::isEnabled()) {
            $wrapperService = GeneralUtility::makeInstance(ContentEditableWrapperService::class);
            /* @var $wrapperService ContentEditableWrapperService */
            $content = $wrapperService->wrapContentWithDropzone(
                "tt_content",
                0,
                $content,
                $arguments["colPos"],
                [
                    'tx_container_parent' => $arguments["parent"],
                ]
            );
        }
        return $content;
    }
}
