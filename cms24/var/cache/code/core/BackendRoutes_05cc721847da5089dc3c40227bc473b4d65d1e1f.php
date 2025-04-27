<?php
return array (
  'ajax_core_requirejs' => 
  array (
    'path' => '/ajax/core/requirejs',
    'access' => 'public',
    'target' => 'TYPO3\\CMS\\Core\\Controller\\RequireJsController::retrieveConfiguration',
    'packageName' => 'typo3/cms-core',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-core/Classes/../',
    'ajax' => true,
  ),
  'file_edit' => 
  array (
    'path' => '/file/editcontent',
    'target' => 'TYPO3\\CMS\\Filelist\\Controller\\File\\EditFileController::mainAction',
    'packageName' => 'typo3/cms-filelist',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-filelist/',
  ),
  'file_create' => 
  array (
    'path' => '/file/create-file',
    'target' => 'TYPO3\\CMS\\Filelist\\Controller\\File\\CreateFileController::mainAction',
    'packageName' => 'typo3/cms-filelist',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-filelist/',
  ),
  'file_replace' => 
  array (
    'path' => '/file/replace',
    'target' => 'TYPO3\\CMS\\Filelist\\Controller\\File\\ReplaceFileController::mainAction',
    'packageName' => 'typo3/cms-filelist',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-filelist/',
  ),
  'file_upload' => 
  array (
    'path' => '/file/upload',
    'target' => 'TYPO3\\CMS\\Filelist\\Controller\\File\\FileUploadController::mainAction',
    'packageName' => 'typo3/cms-filelist',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-filelist/',
  ),
  'file_download' => 
  array (
    'path' => '/file/download',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Filelist\\Controller\\FileDownloadController::handleRequest',
    'packageName' => 'typo3/cms-filelist',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-filelist/',
  ),
  'tx_impexp_export' => 
  array (
    'path' => '/record/importexport/export',
    'target' => 'TYPO3\\CMS\\Impexp\\Controller\\ExportController::handleRequest',
    'packageName' => 'typo3/cms-impexp',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-impexp/',
  ),
  'tx_impexp_import' => 
  array (
    'path' => '/record/importexport/import',
    'target' => 'TYPO3\\CMS\\Impexp\\Controller\\ImportController::handleRequest',
    'packageName' => 'typo3/cms-impexp',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-impexp/',
  ),
  'install.server-response-check.host' => 
  array (
    'access' => 'public',
    'path' => '/install/server-response-check/host',
    'target' => 'TYPO3\\CMS\\Install\\Controller\\ServerResponseCheckController::checkHostAction',
    'packageName' => 'typo3/cms-install',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-install/Classes/../',
  ),
  'login' => 
  array (
    'path' => '/login',
    'access' => 'public',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LoginController::formAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'main' => 
  array (
    'path' => '/main',
    'referrer' => 'required,refresh-always',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\BackendController::mainAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'state-tracker' => 
  array (
    'path' => '/state-tracker',
    'access' => 'public',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\StateTrackerController::mainAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'logout' => 
  array (
    'path' => '/logout',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LogoutController::logoutAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'password_forget' => 
  array (
    'path' => '/login/password-reset/forget',
    'access' => 'public',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ResetPasswordController::forgetPasswordFormAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'password_forget_initiate_reset' => 
  array (
    'path' => '/login/password-reset/initiate-reset',
    'access' => 'public',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ResetPasswordController::initiatePasswordResetAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'password_reset_validate' => 
  array (
    'path' => '/login/password-reset/validate',
    'access' => 'public',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ResetPasswordController::passwordResetAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'password_reset_finish' => 
  array (
    'path' => '/login/password-reset/finish',
    'access' => 'public',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ResetPasswordController::passwordResetFinishAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'sudo_mode_module' => 
  array (
    'path' => '/sudo-mode/module',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Security\\SudoModeController::moduleAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'sudo_mode_apply' => 
  array (
    'path' => '/sudo-mode/apply',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Security\\SudoModeController::applyAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'sudo_mode_error' => 
  array (
    'path' => '/sudo-mode/error',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Security\\SudoModeController::errorAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'login_frameset' => 
  array (
    'path' => '/login/frame',
    'access' => 'public',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LoginController::refreshAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'login_request_token' => 
  array (
    'path' => '/login/request-token',
    'access' => 'public',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LoginController::requestTokenAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'auth_mfa' => 
  array (
    'path' => '/auth/mfa',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\MfaController::handleRequest',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'setup_mfa' => 
  array (
    'path' => '/setup/mfa',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\MfaSetupController::handleRequest',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'mfa' => 
  array (
    'path' => '/mfa',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\MfaConfigurationController::handleRequest',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'wizard_add' => 
  array (
    'path' => '/wizard/add',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\AddController::mainAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'wizard_list' => 
  array (
    'path' => '/wizard/list',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\ListController::mainAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'wizard_edit' => 
  array (
    'path' => '/wizard/edit',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\EditController::mainAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'wizard_element_browser' => 
  array (
    'path' => '/wizard/record/browse',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ElementBrowserController::mainAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'wizard_link' => 
  array (
    'path' => '/wizard/link/browse',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LinkBrowserController::mainAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'online_media' => 
  array (
    'path' => '/online-media',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\OnlineMediaController::mainAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'record_download' => 
  array (
    'path' => '/record/download',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\RecordListDownloadController::handleDownloadRequest',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'record_history' => 
  array (
    'path' => '/record/history',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\ElementHistoryController::mainAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'db_new' => 
  array (
    'path' => '/record/new',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\NewRecordController::mainAction',
    'redirect' => 
    array (
      'enable' => true,
      'parameters' => 
      array (
        'id' => true,
      ),
    ),
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'db_new_pages' => 
  array (
    'path' => '/record/new-page',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\NewRecordController::newPageAction',
    'redirect' => 
    array (
      'enable' => true,
      'parameters' => 
      array (
        'id' => true,
      ),
    ),
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'pages_sort' => 
  array (
    'path' => '/pages/sort',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\SortSubPagesController::mainAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'pages_new' => 
  array (
    'path' => '/pages/new',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\NewMultiplePagesController::mainAction',
    'redirect' => 
    array (
      'enable' => true,
      'parameters' => 
      array (
        'id' => true,
      ),
    ),
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'new_content_element_wizard' => 
  array (
    'path' => '/record/content/wizard/new',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\NewContentElementController::handleRequest',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'move_page' => 
  array (
    'path' => '/page/move',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\MovePageController::mainAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'move_element' => 
  array (
    'path' => '/record/move',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\MoveElementController::mainAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'show_item' => 
  array (
    'path' => '/record/info',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\ElementInformationController::mainAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'dummy' => 
  array (
    'path' => '/empty',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\DummyController::mainAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'tce_db' => 
  array (
    'path' => '/record/commit',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\SimpleDataHandlerController::mainAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'tce_file' => 
  array (
    'path' => '/file/commit',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\File\\FileController::mainAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'record_edit' => 
  array (
    'path' => '/record/edit',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\EditDocumentController::mainAction',
    'redirect' => 
    array (
      'enable' => true,
      'parameters' => 
      array (
        'edit' => true,
      ),
    ),
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'thumbnails' => 
  array (
    'path' => '/thumbnails',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\File\\ThumbnailController::render',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'image_processing' => 
  array (
    'path' => '/image/process',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\File\\ImageProcessController::process',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'clipboard_process' => 
  array (
    'path' => '/clipboard/process',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ClipboardController::processRequest',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
  ),
  'ajax_resource_rename' => 
  array (
    'path' => '/ajax/resource/rename',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Resource\\ResourceController::renameResourceAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_link_resource' => 
  array (
    'path' => '/ajax/link/resource',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LinkController::resourceAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_file_process' => 
  array (
    'path' => '/ajax/file/process',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\File\\FileController::processAjaxRequest',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_file_exists' => 
  array (
    'path' => '/ajax/file/exists',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\File\\FileController::fileExistsInFolderAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_file_reference_details' => 
  array (
    'path' => '/ajax/file/reference/details',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormFilesAjaxController::detailsAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_file_reference_create' => 
  array (
    'path' => '/ajax/file/reference/create',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormFilesAjaxController::createAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_file_reference_synchronizelocalize' => 
  array (
    'path' => '/ajax/file/reference/synchronizelocalize',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormFilesAjaxController::synchronizeLocalizeAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_file_reference_expandcollapse' => 
  array (
    'path' => '/ajax/file/reference/expandcollapse',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormFilesAjaxController::expandOrCollapseAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_record_inline_details' => 
  array (
    'path' => '/ajax/record/inline/details',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormInlineAjaxController::detailsAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_record_inline_create' => 
  array (
    'path' => '/ajax/record/inline/create',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormInlineAjaxController::createAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_record_inline_synchronizelocalize' => 
  array (
    'path' => '/ajax/record/inline/synchronizelocalize',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormInlineAjaxController::synchronizeLocalizeAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_record_inline_expandcollapse' => 
  array (
    'path' => '/ajax/record/inline/expandcollapse',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormInlineAjaxController::expandOrCollapseAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_site_configuration_inline_create' => 
  array (
    'path' => '/ajax/siteconfiguration/inline/create',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\SiteInlineAjaxController::newInlineChildAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_record_slug_suggest' => 
  array (
    'path' => '/ajax/record/slug/suggest',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormSlugAjaxController::suggestAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_site_configuration_inline_details' => 
  array (
    'path' => '/ajax/siteconfiguration/inline/details',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\SiteInlineAjaxController::openInlineChildAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_record_flex_container_add' => 
  array (
    'path' => '/ajax/record/flex/containeradd',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormFlexAjaxController::containerAdd',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_record_suggest' => 
  array (
    'path' => '/ajax/wizard/suggest/search',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\SuggestWizardController::searchAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_record_tree_data' => 
  array (
    'path' => '/ajax/record/tree/fetchData',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FormSelectTreeAjaxController::fetchDataAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_page_tree_data' => 
  array (
    'path' => '/ajax/page/tree/fetchData',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\TreeController::fetchDataAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_page_tree_filter' => 
  array (
    'path' => '/ajax/page/tree/filterData',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\TreeController::filterDataAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_page_tree_configuration' => 
  array (
    'path' => '/ajax/page/tree/fetchConfiguration',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\TreeController::fetchConfigurationAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_page_tree_browser_configuration' => 
  array (
    'path' => '/ajax/browser/page/tree/fetchConfiguration',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\TreeController::fetchReadOnlyConfigurationAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_page_tree_set_temporary_mount_point' => 
  array (
    'path' => '/ajax/page/tree/setTemporaryMountPoint',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\TreeController::setTemporaryMountPointAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_filestorage_tree_data' => 
  array (
    'path' => '/ajax/filestorage/tree/fetchData',
    'methods' => 
    array (
      0 => 'GET',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FileStorage\\TreeController::fetchDataAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_filestorage_tree_filter' => 
  array (
    'path' => '/ajax/filestorage/tree/filterData',
    'methods' => 
    array (
      0 => 'GET',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FileStorage\\TreeController::filterDataAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_shortcut_editform' => 
  array (
    'path' => '/ajax/shortcut/editform',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ShortcutController::showEditFormAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_shortcut_saveform' => 
  array (
    'path' => '/ajax/shortcut/saveform',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ShortcutController::updateAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_shortcut_list' => 
  array (
    'path' => '/ajax/shortcut/list',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ShortcutController::menuAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_shortcut_remove' => 
  array (
    'path' => '/ajax/shortcut/remove',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ShortcutController::removeAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_shortcut_create' => 
  array (
    'path' => '/ajax/shortcut/create',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ShortcutController::addAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_systeminformation_render' => 
  array (
    'path' => '/ajax/system-information/render',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\SystemInformationController::renderMenuAction',
    'parameters' => 
    array (
      'skipSessionUpdate' => 1,
    ),
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_modulemenu' => 
  array (
    'path' => '/ajax/module-menu',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\BackendController::getModuleMenu',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_topbar' => 
  array (
    'path' => '/ajax/topbar',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\BackendController::getTopbar',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_login' => 
  array (
    'path' => '/ajax/login',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\AjaxLoginController::loginAction',
    'access' => 'public',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_logout' => 
  array (
    'path' => '/ajax/logout',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\AjaxLoginController::logoutAction',
    'access' => 'public',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_login_preflight' => 
  array (
    'path' => '/ajax/login/preflight',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\AjaxLoginController::preflightAction',
    'access' => 'public',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_login_refresh' => 
  array (
    'path' => '/ajax/login/refresh',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\AjaxLoginController::refreshAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_login_timedout' => 
  array (
    'path' => '/ajax/login/timedout',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\AjaxLoginController::isTimedOutAction',
    'access' => 'public',
    'parameters' => 
    array (
      'skipSessionUpdate' => 1,
    ),
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_switch_user' => 
  array (
    'path' => '/ajax/switch/user',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\SwitchUserController::switchUserAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_switch_user_exit' => 
  array (
    'path' => '/ajax/switch/user/exit',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\SwitchUserController::exitSwitchUserAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_mfa' => 
  array (
    'path' => '/ajax/mfa',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\MfaAjaxController::handleRequest',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_flashmessages_render' => 
  array (
    'path' => '/ajax/flashmessages/render',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\FlashMessageController::getQueuedFlashMessagesAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_contextmenu' => 
  array (
    'path' => '/ajax/context-menu',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContextMenuController::getContextMenuAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_contextmenu_clipboard' => 
  array (
    'path' => '/ajax/context-menu/clipboard',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ContextMenuController::clipboardAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_record_process' => 
  array (
    'path' => '/ajax/record/process',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\SimpleDataHandlerController::processAjaxRequest',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_usersettings_process' => 
  array (
    'path' => '/ajax/usersettings/process',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\UserSettingsController::processAjaxRequest',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_wizard_image_manipulation' => 
  array (
    'path' => '/ajax/wizard/image-manipulation',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\ImageManipulationController::getWizardContent',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_livesearch' => 
  array (
    'path' => '/ajax/livesearch/search',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LiveSearchController::searchAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_livesearch_form' => 
  array (
    'path' => '/ajax/livesearch/form',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LiveSearchController::formAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_online_media_create' => 
  array (
    'path' => '/ajax/online-media/create',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\OnlineMediaController::createAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_icons' => 
  array (
    'path' => '/ajax/icons',
    'target' => 'TYPO3\\CMS\\Core\\Controller\\IconController::getIcon',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_icons_cache' => 
  array (
    'path' => '/ajax/icons/cache',
    'target' => 'TYPO3\\CMS\\Core\\Controller\\IconController::getCacheIdentifier',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_link_browser_encodetypolink' => 
  array (
    'path' => '/ajax/link-browser/encode-typolink',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\LinkBrowserController::encodeTypoLink',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_page_languages' => 
  array (
    'path' => '/ajax/records/localize/get-languages',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\LocalizationController::getUsedLanguagesInPage',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_records_localize_summary' => 
  array (
    'path' => '/ajax/records/localize/summary',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\LocalizationController::getRecordLocalizeSummary',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_records_localize' => 
  array (
    'path' => '/ajax/records/localize',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Page\\LocalizationController::localizeRecords',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_show_columns' => 
  array (
    'path' => '/ajax/show/columns',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ColumnSelectorController::updateVisibleColumnsAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_show_columns_selector' => 
  array (
    'path' => '/ajax/show/columns/selector',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ColumnSelectorController::showColumnsSelectorAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_web_list_clearpagecache' => 
  array (
    'path' => '/ajax/web/list/clearpagecache',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\ClearPageCacheController::mainAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_record_download_settings' => 
  array (
    'path' => '/ajax/record/download/settings',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\RecordListDownloadController::downloadSettingsAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_password_generate' => 
  array (
    'path' => '/ajax/password/generate',
    'target' => 'TYPO3\\CMS\\Core\\Controller\\PasswordGeneratorController::generate',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_security_csp_control' => 
  array (
    'access' => 'systemMaintainer',
    'path' => '/ajax/security/csp/control',
    'target' => 'TYPO3\\CMS\\Backend\\Security\\ContentSecurityPolicy\\CspAjaxController::handleRequest',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'ajax_sudo_mode_control' => 
  array (
    'path' => '/ajax/sudo-mode/verify',
    'target' => 'TYPO3\\CMS\\Backend\\Controller\\Security\\SudoModeController::verifyAction',
    'packageName' => 'typo3/cms-backend',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-backend/Classes/../',
    'ajax' => true,
  ),
  'rteckeditor_wizard_browse_links' => 
  array (
    'path' => '/rte/wizard/browselinks',
    'target' => 'TYPO3\\CMS\\RteCKEditor\\Controller\\BrowseLinksController::mainAction',
    'packageName' => 'typo3/cms-rte-ckeditor',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-rte-ckeditor/',
  ),
  'ajax_user_access_permissions' => 
  array (
    'path' => '/ajax/users/access/permissions',
    'target' => 'TYPO3\\CMS\\Beuser\\Controller\\PermissionController::handleAjaxRequest',
    'packageName' => 'typo3/cms-beuser',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-beuser/',
    'ajax' => true,
  ),
  'reaction' => 
  array (
    'path' => '/reaction/{reactionIdentifier?}',
    'access' => 'public',
    'methods' => 
    array (
      0 => 'POST',
    ),
    'target' => 'TYPO3\\CMS\\Reactions\\Http\\ReactionHandler::handleReaction',
    'packageName' => 'typo3/cms-reactions',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-reactions/',
  ),
  'ajax_t3editor_tsref' => 
  array (
    'path' => '/ajax/t3editor/tsref',
    'target' => 'TYPO3\\CMS\\T3editor\\Controller\\TypoScriptReferenceController::loadReference',
    'packageName' => 'typo3/cms-t3editor',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-t3editor/',
    'ajax' => true,
  ),
  'ajax_t3editor_codecompletion_loadtemplates' => 
  array (
    'path' => '/ajax/t3editor/codecompletion/load-templates',
    'target' => 'TYPO3\\CMS\\T3editor\\Controller\\CodeCompletionController::loadCompletions',
    'packageName' => 'typo3/cms-t3editor',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/typo3/cms-t3editor/',
    'ajax' => true,
  ),
  'ajax_mask_check_field_key' => 
  array (
    'path' => '/ajax/mask/checkFieldKey',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::checkFieldKey',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_check_element_key' => 
  array (
    'path' => '/ajax/mask/checkElementKey',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::checkElementKey',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_fieldtypes' => 
  array (
    'path' => '/ajax/mask/fieldTypes',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::fieldTypes',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_icons' => 
  array (
    'path' => '/ajax/mask/icons',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::icons',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_existing_tca' => 
  array (
    'path' => '/ajax/mask/existingTca',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::existingTca',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_tca_fields' => 
  array (
    'path' => '/ajax/mask/tcaFields',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::tcaFields',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_tabs' => 
  array (
    'path' => '/ajax/mask/tabs',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::tabs',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_language' => 
  array (
    'path' => '/ajax/mask/language',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::language',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_features' => 
  array (
    'path' => '/ajax/mask/features',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::features',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_non_overrideable_options' => 
  array (
    'path' => '/ajax/mask/nonOverrideableOptions',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::nonOverrideableOptions',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_richtext_configuration' => 
  array (
    'path' => '/ajax/mask/richtextConfiguration',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::richtextConfiguration',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_link_handler' => 
  array (
    'path' => '/ajax/mask/linkHandler',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::linkHandler',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_online_media' => 
  array (
    'path' => '/ajax/mask/onlineMedia',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::availableOnlineMedia',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_ctypes' => 
  array (
    'path' => '/ajax/mask/ctypes',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::cTypes',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_elements' => 
  array (
    'path' => '/ajax/mask/elements',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::elements',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_load_element' => 
  array (
    'path' => '/ajax/mask/loadElement',
    'target' => 'MASK\\Mask\\Controller\\FieldsController::loadElement',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_load_field' => 
  array (
    'path' => '/ajax/mask/loadField',
    'target' => 'MASK\\Mask\\Controller\\FieldsController::loadField',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_save' => 
  array (
    'path' => '/ajax/mask/save',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::save',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_multiuse' => 
  array (
    'path' => '/ajax/mask/multiuse',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::multiuse',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_all_multiuse' => 
  array (
    'path' => '/ajax/mask/allMultiuse',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::loadAllMultiUse',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_missing' => 
  array (
    'path' => '/ajax/mask/missing',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::missingFilesOrFolders',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_fix_missing' => 
  array (
    'path' => '/ajax/mask/fixmissing',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::fixMissingFilesOrFolders',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_delete' => 
  array (
    'path' => '/ajax/mask/delete',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::delete',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_toggle_visibility' => 
  array (
    'path' => '/ajax/mask/toggle',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::toggleVisibility',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_html' => 
  array (
    'path' => '/ajax/mask/html',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::showHtmlAction',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_backend_layouts' => 
  array (
    'path' => '/ajax/mask/backendlayouts',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::backendLayouts',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_field_groups' => 
  array (
    'path' => '/ajax/mask/fieldGroups',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::fieldGroups',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_versions' => 
  array (
    'path' => '/ajax/mask/versions',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::versions',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_optional_extension_status' => 
  array (
    'path' => '/ajax/mask/extensions',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::optionalExtensionStatus',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_setup_complete' => 
  array (
    'path' => '/ajax/mask/setupComplete',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::setupComplete',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_setup_autoconfigure' => 
  array (
    'path' => '/ajax/mask/autoConfigure',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::autoConfigureSetup',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_tables' => 
  array (
    'path' => '/ajax/mask/tables',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::tables',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_migrations_done' => 
  array (
    'path' => '/ajax/mask/migrationsDone',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::migrationsDone',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_persist_definition' => 
  array (
    'path' => '/ajax/mask/persistDefinition',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::persistMaskDefinition',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_restructuring_needed' => 
  array (
    'path' => '/ajax/mask/reuseFieldsRestructuringNeeded',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::restructuringNeeded',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
  'ajax_mask_execute_restructuring' => 
  array (
    'path' => '/ajax/mask/executeRestructureForReusingFields',
    'target' => 'MASK\\Mask\\Controller\\AjaxController::executeRestructuring',
    'packageName' => 'mask/mask',
    'absolutePackagePath' => '/usr/www/users/yldhts/cms24/vendor/mask/mask/',
    'ajax' => true,
  ),
);
#