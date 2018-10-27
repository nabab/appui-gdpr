<?php
/** @var \bbn\mvc\model $model */
return [
  'version' => '20170118',
  'site_url' => substr(BBN_URL, 0, -1),
  'site_title' => _('Intranet APST'),
  'is_dev' => (bool)BBN_IS_DEV,
  'is_prod' => (bool)BBN_IS_PROD,
  'is_test' => (bool)BBN_IS_TEST,
  'shared_path' => BBN_SHARED_PATH,
  'static_path' => BBN_STATIC_PATH,
  'test' => BBN_IS_DEV ? 1 : 0,
  'year' => date('Y'),
  'client_name' => BBN_CLIENT_NAME,
  'privacy_email' => defined('BBN_PRIVACY_EMAIL') ? BBN_PRIVACY_EMAIL : 'privacy@'.gethostname()
];
