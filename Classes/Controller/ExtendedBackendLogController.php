<?php

namespace Derhansen\XclassDi\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Belog\Controller\BackendLogController;
use TYPO3\CMS\Belog\Domain\Model\Constraint;
use TYPO3\CMS\Belog\Domain\Repository\LogEntryRepository;
use TYPO3\CMS\Belog\Domain\Repository\WorkspaceRepository;
use TYPO3\CMS\Core\Mail\Mailer;

class ExtendedBackendLogController extends BackendLogController
{
    protected Mailer $mailer;

    public function __construct(
        ModuleTemplateFactory $moduleTemplateFactory,
        LogEntryRepository $logEntryRepository,
        WorkspaceRepository $workspaceRepository,
        Mailer $mailer
    ) {
        $this->mailer = $mailer;
        parent::__construct($moduleTemplateFactory, $logEntryRepository, $workspaceRepository);
    }

    public function listAction(Constraint $constraint = null, int $pageId = null, string $layout = 'Default', string $operation = ''): ResponseInterface
    {
        return parent::listAction($constraint, $pageId, $layout, $operation);
    }
}
