<?php
$CONFIG = array (
  'mail_domain' => getenv('MAIL_DOMAIN'),
  'mail_from_address' => getenv('MAIL_FROM'),
  'mail_smtpmode' => 'smtp',
  'mail_smtphost' => getenv('MAIL_HOST'),
  'mail_smtpport' => getenv('MAIL_PORT'),
  'mail_smtpauth' => 1,
  'mail_smtpauthtype' => 'LOGIN',
  'mail_smtpname' => getenv('MAIL_DOMAIN'),
  'mail_smtppassword' => getenv('MAIL_PASS'),
  'mail_smtpsecure' => 'tls',
);

