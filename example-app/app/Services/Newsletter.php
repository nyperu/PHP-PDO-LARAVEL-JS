<?php
namespace App\Services;

use MailchimpMarketing\ApiClient;

class Newsletter{
    public function subscribe($email,string $list=null){

        $list ??=config('services.mailchimp.lists.subscribers');

        return  $this->lists->addListMember(config('services.mailchimp.lists.subscribers'), [
            "email_address" => $email,
            "status" => "subscribed"
        ]);
    }
    protected function client(){
        $mailchimp = new ApiClient();

        return $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us17'
        ]);

    }
}
