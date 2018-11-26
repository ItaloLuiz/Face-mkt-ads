<?php 
echo '<pre>';
require_once 'vendor/autoload.php'; // change path as needed
require 'config.php';

use FacebookAds\Object\AdAccount;
use FacebookAds\Object\AdsInsights;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;

/*
$app_id = "{your-app-id}";
$app_secret = "{your-appsecret}";
$access_token = "{your-access-token}";
$account_id = "act_{your-adaccout-id}";
*/

$api = Api::init($app_id, $app_secret, $access_token);
$api->setLogger(new CurlLogger());

$fields = array(
  'cost_per_result',
  'cost_per_total_action',
  'cpm',
  'cpp',
  'frequency',
  'impressions',
  'impressions_auto_refresh',
  'impressions_gross',
  'reach',
  'relevance_score:score',
  'relevance_score:positive_feedback',
  'relevance_score:negative_feedback',
  'result_rate',
  'results',
  'social_impressions',
  'social_reach',
  'spend',
  'today_spend',
  'total_actions',
  'total_unique_actions',
  'actions:video_view',
  'video_10_sec_watched_actions:video_view',
  'delivery',
);

$params = array(
  'level'      => 'campaign',
  'filtering'  => array(array('field' => 'delivery_info','operator' => 'IN','value' => array('active','limited'))),
  'breakdowns' => array(),
  //'time_range' => array('since' => '2018-10-28','until' => '2018-11-26'),
);

$resultado = json_encode((new AdAccount($account_id))->getInsights(
  $fields,
  $params
)->getResponse()->getContent(), JSON_PRETTY_PRINT);

echo $resultado;

