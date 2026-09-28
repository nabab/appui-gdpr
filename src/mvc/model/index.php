<?php
use bbn\Str;
/** @var bbn\Mvc\Model $model */
return [
  'version' => '20170118',
  'site_url' => $model->getRootUrl(),
  'site_title' => constant('BBN_SITE_TITLE'),
  'is_dev' => (bool)constant('BBN_IS_DEV'),
  'is_prod' => (bool)constant('BBN_IS_PROD'),
  'is_test' => (bool)constant('BBN_IS_TEST'),
  'shared_path' => constant('BBN_SHARED_PATH'),
  'static_path' => constant('BBN_STATIC_PATH'),
  'test' => constant('BBN_IS_DEV') ? 1 : 0,
  'year' => date('Y'),
  'lang' => constant('BBN_LANG'),
  'client_name' => constant('BBN_CLIENT_NAME'),
  'privacy_email' => defined('BBN_PRIVACY_EMAIL') ? constant('BBN_PRIVACY_EMAIL') : 'privacy@'.gethostname()
];
