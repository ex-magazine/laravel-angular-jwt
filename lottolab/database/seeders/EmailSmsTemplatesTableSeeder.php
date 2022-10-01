<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmailSmsTemplatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('email_sms_templates')->delete();
        
        \DB::table('email_sms_templates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'act' => 'PASS_RESET_CODE',
                'name' => 'Password Reset',
                'subj' => 'Password Reset',
                'email_body' => '<div>We have received a request to reset the password for your account on <b>{{time}} .<br></b></div><div>Requested From IP: <b>{{ip}}</b> using <b>{{browser}}</b> on <b>{{operating_system}} </b>.</div><div><br></div><br><div><div><div>Your account recovery code is:&nbsp;&nbsp; <font size="6"><b>{{code}}</b></font></div><div><br></div></div></div><div><br></div><div><font size="4" color="#CC0000">If you do not wish to reset your password, please disregard this message.&nbsp;</font><br></div><br>',
                'sms_body' => 'Your account recovery code is: {{code}}',
                'shortcodes' => ' {"code":"Password Reset Code","ip":"IP of User","browser":"Browser of User","operating_system":"Operating System of User","time":"Request Time"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2019-09-25 06:04:05',
                'updated_at' => '2021-01-06 07:49:06',
            ),
            1 => 
            array (
                'id' => 2,
                'act' => 'PASS_RESET_DONE',
                'name' => 'Password Reset Confirmation',
                'subj' => 'You have Reset your password',
                'email_body' => '<div><p>
You have successfully reset your password.</p><p>You changed from&nbsp; IP: <b>{{ip}}</b> using <b>{{browser}}</b> on <b>{{operating_system}}&nbsp;</b> on <b>{{time}}</b></p><p><b><br></b></p><p><font color="#FF0000"><b>If you did not changed that, Please contact with us as soon as possible.</b></font><br></p></div>',
                'sms_body' => 'Your password has been changed successfully',
                'shortcodes' => '{"ip":"IP of User","browser":"Browser of User","operating_system":"Operating System of User","time":"Request Time"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2019-09-25 06:04:05',
                'updated_at' => '2020-03-07 17:23:47',
            ),
            2 => 
            array (
                'id' => 3,
                'act' => 'EVER_CODE',
                'name' => 'Email Verification',
                'subj' => 'Please verify your email address',
                'email_body' => '<div><br></div><div>Thanks For join with us. <br></div><div>Please use below code to verify your email address.<br></div><div><br></div><div>Your email verification code is:<font size="6"><b> {{code}}</b></font></div>',
                'sms_body' => 'Your email verification code is: {{code}}',
                'shortcodes' => '{"code":"Verification code"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2019-09-25 06:04:05',
                'updated_at' => '2021-01-04 06:35:10',
            ),
            3 => 
            array (
                'id' => 4,
                'act' => 'SVER_CODE',
                'name' => 'SMS Verification ',
                'subj' => 'Please verify your phone',
                'email_body' => 'Your phone verification code is: {{code}}',
                'sms_body' => 'Your phone verification code is: {{code}}',
                'shortcodes' => '{"code":"Verification code"}',
                'email_status' => 0,
                'sms_status' => 1,
                'created_at' => '2019-09-25 06:04:05',
                'updated_at' => '2020-03-08 08:28:52',
            ),
            4 => 
            array (
                'id' => 5,
                'act' => '2FA_ENABLE',
                'name' => 'Google Two Factor - Enable',
                'subj' => 'Google Two Factor Authentication is now  Enabled for Your Account',
                'email_body' => '<div>You just enabled Google Two Factor Authentication for Your Account.</div><div><br></div><div>Enabled at <b>{{time}} </b>From IP: <b>{{ip}}</b> using <b>{{browser}}</b> on <b>{{operating_system}} </b>.</div>',
                'sms_body' => 'Your verification code is: {{code}}',
                'shortcodes' => '{"ip":"IP of User","browser":"Browser of User","operating_system":"Operating System of User","time":"Request Time"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2019-09-25 06:04:05',
                'updated_at' => '2020-03-08 08:42:59',
            ),
            5 => 
            array (
                'id' => 6,
                'act' => '2FA_DISABLE',
                'name' => 'Google Two Factor Disable',
                'subj' => 'Google Two Factor Authentication is now  Disabled for Your Account',
                'email_body' => '<div>You just Disabled Google Two Factor Authentication for Your Account.</div><div><br></div><div>Disabled at <b>{{time}} </b>From IP: <b>{{ip}}</b> using <b>{{browser}}</b> on <b>{{operating_system}} </b>.</div>',
                'sms_body' => 'Google two factor verification is disabled',
                'shortcodes' => '{"ip":"IP of User","browser":"Browser of User","operating_system":"Operating System of User","time":"Request Time"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2019-09-25 06:04:05',
                'updated_at' => '2020-03-08 08:43:46',
            ),
            6 => 
            array (
                'id' => 16,
                'act' => 'ADMIN_SUPPORT_REPLY',
                'name' => 'Support Ticket Reply ',
                'subj' => 'Reply Support Ticket',
                'email_body' => '<div><p><span style="font-size: 11pt;" data-mce-style="font-size: 11pt;"><strong>A member from our support team has replied to the following ticket:</strong></span></p><p><b><span style="font-size: 11pt;" data-mce-style="font-size: 11pt;"><strong><br></strong></span></b></p><p><b>[Ticket#{{ticket_id}}] {{ticket_subject}}<br><br>Click here to reply:&nbsp; {{link}}</b></p><p>----------------------------------------------</p><p>Here is the reply : <br></p><p> {{reply}}<br></p></div><div><br></div>',
                'sms_body' => '{{subject}}

{{reply}}


Click here to reply:  {{link}}',
                'shortcodes' => '{"ticket_id":"Support Ticket ID", "ticket_subject":"Subject Of Support Ticket", "reply":"Reply from Staff/Admin","link":"Ticket URL For relpy"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2020-06-09 01:00:00',
                'updated_at' => '2020-05-04 09:24:40',
            ),
            7 => 
            array (
                'id' => 206,
                'act' => 'DEPOSIT_COMPLETE',
                'name' => 'Automated Deposit - Successful',
                'subj' => 'Deposit Completed Successfully',
                'email_body' => '<div>Your deposit of <b>{{amount}} {{currency}}</b> is via&nbsp; <b>{{method_name}} </b>has been completed Successfully.<b><br></b></div><div><b><br></b></div><div><b>Details of your Deposit :<br></b></div><div><br></div><div>Amount : {{amount}} {{currency}}</div><div>Charge: <font color="#000000">{{charge}} {{currency}}</font></div><div><br></div><div>Conversion Rate : 1 {{currency}} = {{rate}} {{method_currency}}</div><div>Payable : {{method_amount}} {{method_currency}} <br></div><div>Paid via :&nbsp; {{method_name}}</div><div><br></div><div>Transaction Number : {{trx}}</div><div><font size="5"><b><br></b></font></div><div><font size="5">Your current Balance is <b>{{post_balance}} {{currency}}</b></font></div><div><br></div><div><br><br><br></div>',
                'sms_body' => '{{amount}} {{currrency}} Deposit successfully by {{gateway_name}}',
                'shortcodes' => '{"trx":"Transaction Number","amount":"Request Amount By user","charge":"Gateway Charge","currency":"Site Currency","rate":"Conversion Rate","method_name":"Deposit Method Name","method_currency":"Deposit Method Currency","method_amount":"Deposit Method Amount After Conversion", "post_balance":"Users Balance After this operation"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2020-06-25 01:00:00',
                'updated_at' => '2020-11-17 10:10:00',
            ),
            8 => 
            array (
                'id' => 207,
                'act' => 'DEPOSIT_REQUEST',
                'name' => 'Manual Deposit - User Requested',
                'subj' => 'Deposit Request Submitted Successfully',
                'email_body' => '<div>Your deposit request of <b>{{amount}} {{currency}}</b> is via&nbsp; <b>{{method_name}} </b>submitted successfully<b> .<br></b></div><div><b><br></b></div><div><b>Details of your Deposit :<br></b></div><div><br></div><div>Amount : {{amount}} {{currency}}</div><div>Charge: <font color="#FF0000">{{charge}} {{currency}}</font></div><div><br></div><div>Conversion Rate : 1 {{currency}} = {{rate}} {{method_currency}}</div><div>Payable : {{method_amount}} {{method_currency}} <br></div><div>Pay via :&nbsp; {{method_name}}</div><div><br></div><div>Transaction Number : {{trx}}</div><div><br></div><div><br></div>',
                'sms_body' => '{{amount}} Deposit requested by {{method}}. Charge: {{charge}} . Trx: {{trx}}
',
                'shortcodes' => '{"trx":"Transaction Number","amount":"Request Amount By user","charge":"Gateway Charge","currency":"Site Currency","rate":"Conversion Rate","method_name":"Deposit Method Name","method_currency":"Deposit Method Currency","method_amount":"Deposit Method Amount After Conversion"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2020-06-01 01:00:00',
                'updated_at' => '2020-06-02 01:00:00',
            ),
            9 => 
            array (
                'id' => 208,
                'act' => 'DEPOSIT_APPROVE',
                'name' => 'Manual Deposit - Admin Approved',
                'subj' => 'Your Deposit is Approved',
                'email_body' => '<div>Your deposit request of <b>{{amount}} {{currency}}</b> is via&nbsp; <b>{{method_name}} </b>is Approved .<b><br></b></div><div><b><br></b></div><div><b>Details of your Deposit :<br></b></div><div><br></div><div>Amount : {{amount}} {{currency}}</div><div>Charge: <font color="#FF0000">{{charge}} {{currency}}</font></div><div><br></div><div>Conversion Rate : 1 {{currency}} = {{rate}} {{method_currency}}</div><div>Payable : {{method_amount}} {{method_currency}} <br></div><div>Paid via :&nbsp; {{method_name}}</div><div><br></div><div>Transaction Number : {{trx}}</div><div><font size="5"><b><br></b></font></div><div><font size="5">Your current Balance is <b>{{post_balance}} {{currency}}</b></font></div><div><br></div><div><br><br></div>',
                'sms_body' => 'Admin Approve Your {{amount}} {{gateway_currency}} payment request by {{gateway_name}} transaction : {{transaction}}',
                'shortcodes' => '{"trx":"Transaction Number","amount":"Request Amount By user","charge":"Gateway Charge","currency":"Site Currency","rate":"Conversion Rate","method_name":"Deposit Method Name","method_currency":"Deposit Method Currency","method_amount":"Deposit Method Amount After Conversion", "post_balance":"Users Balance After this operation"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2020-06-17 01:00:00',
                'updated_at' => '2020-06-15 01:00:00',
            ),
            10 => 
            array (
                'id' => 209,
                'act' => 'DEPOSIT_REJECT',
                'name' => 'Manual Deposit - Admin Rejected',
                'subj' => 'Your Deposit Request is Rejected',
                'email_body' => '<div>Your deposit request of <b>{{amount}} {{currency}}</b> is via&nbsp; <b>{{method_name}} has been rejected</b>.<b><br></b></div><br><div>Transaction Number was : {{trx}}</div><div><br></div><div>if you have any query, feel free to contact us.<br></div><br><div><br><br></div>



{{rejection_message}}',
                'sms_body' => 'Admin Rejected Your {{amount}} {{gateway_currency}} payment request by {{gateway_name}}

{{rejection_message}}',
                'shortcodes' => '{"trx":"Transaction Number","amount":"Request Amount By user","charge":"Gateway Charge","currency":"Site Currency","rate":"Conversion Rate","method_name":"Deposit Method Name","method_currency":"Deposit Method Currency","method_amount":"Deposit Method Amount After Conversion","rejection_message":"Rejection message"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2020-06-10 01:00:00',
                'updated_at' => '2020-06-15 01:00:00',
            ),
            11 => 
            array (
                'id' => 210,
                'act' => 'WITHDRAW_REQUEST',
                'name' => 'Withdraw  - User Requested',
                'subj' => 'Withdraw Request Submitted Successfully',
                'email_body' => '<div>Your withdraw request of <b>{{amount}} {{currency}}</b>&nbsp; via&nbsp; <b>{{method_name}} </b>has been submitted Successfully.<b><br></b></div><div><b><br></b></div><div><b>Details of your withdraw:<br></b></div><div><br></div><div>Amount : {{amount}} {{currency}}</div><div>Charge: <font color="#FF0000">{{charge}} {{currency}}</font></div><div><br></div><div>Conversion Rate : 1 {{currency}} = {{rate}} {{method_currency}}</div><div>You will get: {{method_amount}} {{method_currency}} <br></div><div>Via :&nbsp; {{method_name}}</div><div><br></div><div>Transaction Number : {{trx}}</div><div><font size="4" color="#FF0000"><b><br></b></font></div><div><font size="4" color="#FF0000"><b>This may take {{delay}} to process the payment.</b></font><br></div><div><font size="5"><b><br></b></font></div><div><font size="5"><b><br></b></font></div><div><font size="5">Your current Balance is <b>{{post_balance}} {{currency}}</b></font></div><div><br></div><div><br><br><br><br></div>',
                'sms_body' => '{{amount}} {{currency}} withdraw requested by {{method_name}}. You will get {{method_amount}} {{method_currency}} in {{delay}}. Trx: {{trx}}',
                'shortcodes' => '{"trx":"Transaction Number","amount":"Request Amount By user","charge":"Gateway Charge","currency":"Site Currency","rate":"Conversion Rate","method_name":"Deposit Method Name","method_currency":"Deposit Method Currency","method_amount":"Deposit Method Amount After Conversion", "post_balance":"Users Balance After this operation", "delay":"Delay time for processing"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2020-06-08 01:00:00',
                'updated_at' => '2021-05-08 13:49:06',
            ),
            12 => 
            array (
                'id' => 211,
                'act' => 'WITHDRAW_REJECT',
                'name' => 'Withdraw - Admin Rejected',
                'subj' => 'Withdraw Request has been Rejected and your money is refunded to your account',
                'email_body' => '<div>Your withdraw request of <b>{{amount}} {{currency}}</b>&nbsp; via&nbsp; <b>{{method_name}} </b>has been Rejected.<b><br></b></div><div><b><br></b></div><div><b>Details of your withdraw:<br></b></div><div><br></div><div>Amount : {{amount}} {{currency}}</div><div>Charge: <font color="#FF0000">{{charge}} {{currency}}</font></div><div><br></div><div>Conversion Rate : 1 {{currency}} = {{rate}} {{method_currency}}</div><div>You should get: {{method_amount}} {{method_currency}} <br></div><div>Via :&nbsp; {{method_name}}</div><div><br></div><div>Transaction Number : {{trx}}</div><div><br></div><div><br></div><div>----</div><div><font size="3"><br></font></div><div><font size="3"> {{amount}} {{currency}} has been <b>refunded </b>to your account and your current Balance is <b>{{post_balance}}</b><b> {{currency}}</b></font></div><div><br></div><div>-----</div><div><br></div><div><font size="4">Details of Rejection :</font></div><div><font size="4"><b>{{admin_details}}</b></font></div><div><br></div><div><br><br><br><br><br><br></div>',
                'sms_body' => 'Admin Rejected Your {{amount}} {{currency}} withdraw request. Your Main Balance {{main_balance}}  {{method}} , Transaction {{transaction}}',
                'shortcodes' => '{"trx":"Transaction Number","amount":"Request Amount By user","charge":"Gateway Charge","currency":"Site Currency","rate":"Conversion Rate","method_name":"Deposit Method Name","method_currency":"Deposit Method Currency","method_amount":"Deposit Method Amount After Conversion", "post_balance":"Users Balance After this operation", "admin_details":"Details Provided By Admin"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2020-06-10 01:00:00',
                'updated_at' => '2020-06-15 01:00:00',
            ),
            13 => 
            array (
                'id' => 212,
                'act' => 'WITHDRAW_APPROVE',
                'name' => 'Withdraw - Admin  Approved',
                'subj' => 'Withdraw Request has been Processed and your money is sent',
                'email_body' => '<div>Your withdraw request of <b>{{amount}} {{currency}}</b>&nbsp; via&nbsp; <b>{{method_name}} </b>has been Processed Successfully.<b><br></b></div><div><b><br></b></div><div><b>Details of your withdraw:<br></b></div><div><br></div><div>Amount : {{amount}} {{currency}}</div><div>Charge: <font color="#FF0000">{{charge}} {{currency}}</font></div><div><br></div><div>Conversion Rate : 1 {{currency}} = {{rate}} {{method_currency}}</div><div>You will get: {{method_amount}} {{method_currency}} <br></div><div>Via :&nbsp; {{method_name}}</div><div><br></div><div>Transaction Number : {{trx}}</div><div><br></div><div>-----</div><div><br></div><div><font size="4">Details of Processed Payment :</font></div><div><font size="4"><b>{{admin_details}}</b></font></div><div><br></div><div><br><br><br><br><br></div>',
                'sms_body' => 'Admin Approve Your {{amount}} {{currency}} withdraw request by {{method}}. Transaction {{transaction}}',
                'shortcodes' => '{"trx":"Transaction Number","amount":"Request Amount By user","charge":"Gateway Charge","currency":"Site Currency","rate":"Conversion Rate","method_name":"Deposit Method Name","method_currency":"Deposit Method Currency","method_amount":"Deposit Method Amount After Conversion", "admin_details":"Details Provided By Admin"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2020-06-11 01:00:00',
                'updated_at' => '2020-06-07 01:00:00',
            ),
            14 => 
            array (
                'id' => 215,
                'act' => 'BAL_ADD',
                'name' => 'Balance Add by Admin',
                'subj' => 'Your Account has been Credited',
                'email_body' => '<div>{{amount}} {{currency}} has been added to your account .</div><div><br></div><div>Transaction Number : {{trx}}</div><div><br></div>Your Current Balance is : <font size="3"><b>{{post_balance}}&nbsp; {{currency}}&nbsp;</b></font>',
                'sms_body' => '{{amount}} {{currency}} credited in your account. Your Current Balance {{remaining_balance}} {{currency}} . Transaction: #{{trx}}',
                'shortcodes' => '{"trx":"Transaction Number","amount":"Request Amount By Admin","currency":"Site Currency", "post_balance":"Users Balance After this operation"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2019-09-15 02:14:22',
                'updated_at' => '2021-01-06 07:46:18',
            ),
            15 => 
            array (
                'id' => 216,
                'act' => 'BAL_SUB',
                'name' => 'Balance Subtracted by Admin',
                'subj' => 'Your Account has been Debited',
                'email_body' => '<div>{{amount}} {{currency}} has been subtracted from your account .</div><div><br></div><div>Transaction Number : {{trx}}</div><div><br></div>Your Current Balance is : <font size="3"><b>{{post_balance}}&nbsp; {{currency}}</b></font>',
                'sms_body' => '{{amount}} {{currency}} debited from your account. Your Current Balance {{remaining_balance}} {{currency}} . Transaction: #{{trx}}',
                'shortcodes' => '{"trx":"Transaction Number","amount":"Request Amount By Admin","currency":"Site Currency", "post_balance":"Users Balance After this operation"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => '2019-09-15 02:14:22',
                'updated_at' => '2019-11-10 16:07:12',
            ),
            16 => 
            array (
                'id' => 217,
                'act' => 'WIN_EMAIL',
                'name' => 'Win Email',
                'subj' => 'You won ticket',
            'email_body' => '<div style="text-align: center;"><font size="6"><b>Congratulations!</b></font><span style="color: rgb(33, 37, 41); font-size: 1rem;">&nbsp;</span></div><div><div style="text-align: center;"><font size="5">You Have Won {{lottery}}</font></div></div><div style="text-align: left;"><font size="5">Ticket Number: {{number}}</font></div><div style="text-align: left;"><font size="5">Winning Level: {{level}}</font></div><div style="text-align: left;"><font size="5">Winning Amount: {{amount}} {{currency}}</font></div><div style="text-align: center; "><font size="5"><br></font></div><div><br></div>',
                'sms_body' => 'Congratulations! You Have Won {{lottery}} for ticket number {{number}}. {{amount}} has been added to your account.',
                'shortcodes' => '{"lottery":"Lottery Name","number":"Lottery Number","amount":"Wining jackpot","amount":"Win Amount","level":"Winning Level","currency":"Site Currency"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 218,
                'act' => 'BUY_LOTTERY',
                'name' => 'Buy Lottery',
                'subj' => 'Buy Lottery',
                'email_body' => '<font size="5">Lottery Name: <b>{{lottery_name}}</b></font><div><font size="5">Quantity: <b>{{quantity}}</b></font></div><div><font size="5">Lottery Price: <b>{{price}} {{site_currency}}</b></font></div><div><font size="5">Total Price: <b>{{total_price}} {{site_currency}}</b></font></div><div><font size="5">Draw Date: <b>{{draw_date}}</b></font></div>',
                'sms_body' => NULL,
                'shortcodes' => '{"lottery_name":"Lottery Name","quantity":"User Bought Quantity","price":"Lottery Price","total_price":"Total Price","draw_date":"Draw Date","site_currency":"Site Currency"}',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 219,
                'act' => 'REFERRAL_COMMISSION',
                'name' => 'REFERRAL COMMISSION',
                'subj' => 'User Referral Commission',
                'email_body' => '<div><font size="5">Commission Amount: <b><font color="#ff0000">{{amount}} {{currency}}</font></b></font></div><div><font size="5">Transaction ID: <b><font color="#0000cc">{{trx}}</font></b></font></div><div><font size="5">Referral Level: <b><font color="#ff66ff">{{level}}</font></b></font></div><div><font size="5">Your Current Balance: <b><font color="#00ff33">{{post_balance}} {{currency}}</font></b></font></div><div></div>',
                'sms_body' => NULL,
                'shortcodes' => '{"amount":"Amount", "post_balance":"Post Balance", "trx":"Transaction","level":"Level", 	"currency":"currency" }',
                'email_status' => 1,
                'sms_status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}