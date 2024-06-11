<?php
// Not confirmed 100%
use FluentCrm\App\Models\Campaign;
use FluentCrm\Framework\Database\Orm;
use FluentCrm\App\Models\Lists;

$email = Campaign::create(
  [
    'email_subject'=>'Test Subject ' . date('Y-m-d H:i:s'),
    'email_body'=>'This is the body of the email.',
    'type'=>'campaign',
    'status' => 'scheduled',
    //'scheduled_at' => date('Y-m-d H:i:s'),
    'title' => 'Test Title ' . date('Y-m-d H:i:s'),
    'template_id' => 0,
  ]
);

$subscriberIds = $email->getSubscribeIdsByList([['list'=>'1','tag'=>'all']]);
//$subscriberIds = $email->getSubscriberIdsBySegmentSettings(['subscribers'=>[0=>['list'=>'1','tag'=>'all']]])['subscriber_ids'];
$email->subscribe($subscriberIds);
//$email->update();

//var_export($email->subscribeBySegment(['subscribers'=>[0=>['list'=>'1','tag'=>'all']]]));
//$email->update();
