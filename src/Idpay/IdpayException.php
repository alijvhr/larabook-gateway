<?php

namespace Larabookir\Gateway\Idpay;

use Larabookir\Gateway\Exceptions\BankException;

class IdpayException extends BankException {
    public static $errors = array (
        1 => 'پرداخت انجام نشده است',
        2 => 'پرداخت ناموفق بوده است',
        3 => 'خطا رخ داده است',
        4 => 'بلوکه شده',
        5 => 'برگشت به پرداخت کننده',
        6 => 'برگشت خورده سیستمی',
        10 => 'در انتظار تایید پرداخت',
        100 => 'پرداخت تایید شده است',
        101 => 'پرداخت قبلا تایید شده است',
        200 => 'به دریافت کننده واریز شد',

        11 => 'کاربر مسدود شده است.' ,
        12 => 'API Key یافت نشد.' ,
        13 => 'درخواست شما از {ip} ارسال شده است. این IP با IP های ثبت شده در وب سرویس همخوانی ندارد.' ,
        14 => 'وب سرویس تایید نشده است.' ,
        21 => 'حساب بانکی متصل به وب سرویس تایید نشده است.' ,
        31 => 'کد تراکنش id نباید خالی باشد.' ,
        32 => 'شماره سفارش order_id نباید خالی باشد.' ,
        33 => 'مبلغ amount نباید خالی باشد' ,
        34 => 'مبلغ amount باید بیشتر از {min-amount} ریال باشد.' ,
        35 => 'مبلغ amount باید کمتر از {max-amount} ریال باشد.' ,
        36 => 'مبلغ amount بیشتر از حد مجاز است.' ,
        37 => 'آدرس بازگشت callback نباید خالی باشد.' ,
        38 => 'درخواست شما از آدرس {domain} ارسال شده است. دامنه آدرس بازگشت callback با آدرس ثبت شده در وب سرویس همخوانی ندارد.' ,
        51 => 'تراکنش ایجاد نشد.' ,
        52 => 'استعلام نتیجه ای نداشت.' ,
        53 => 'تایید پرداخت امکان پذیر نیست.' ,
        54 => 'مدت زمان تایید پرداخت سپری شده است.' ,
        4444 => 'کارتی که شما با آن خرید انجام داده اید معتبر نیست' ,
    );

    public function __construct( $errorId ) {
        $this->errorId = intval( $errorId );

        parent::__construct( @self::$errors[ $this->errorId ] . ' #' . $this->errorId , $this->errorId );
    }
}
