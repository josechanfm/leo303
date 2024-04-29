<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Inertia\Inertia;
use App\Models\Config;
use App\Models\Feature;

class DashboardController extends Controller
{
    public function index()
    {
        $member = Auth()->user()->member;
        if (!$member) {
            return Inertia::render('Error', [
                'message' => "You are not a register member."
            ]);
        }
        $member->organizations;
        return Inertia::render('Member/Dashboard', [
            'member' => $member,
            'features'=>Article::whereBelongsTo(session('organization'))->where('category_code','FEATURE')->get(),
            'articles' => Article::whereBelongsTo(session('organization'))->where('category_code','NEWS')->get(),
            'card_style' => Config::item('card_styles')[session('organization')->card_style],
        ]);
    }
    public function getQrcode()
    {
        $userId = auth()->user()->id;
        $memberId = auth()->user()->id;
        $organizationId = session('organization')->id;
        $time = time();
        $text = $organizationId . ',' . $memberId . ',' . $time;
        return $text . ',' . hash('crc32', $text);

        // $options = 0;
        // $ciphering = "AES-128-CTR";
        // $security_iv = '1234567891011121';
        // $security_key = "Linuxhint";

        // $plain_text = time().'0201'.'11234';
        // echo "Original String: " . $plain_text;
        // $iv_length = openssl_cipher_iv_length($ciphering);
        // $cipher_text = openssl_encrypt($plain_text, $ciphering,
        //             $security_key, $options, $security_iv);
        // echo '<br>';
        // echo "Encrypted String: " . $cipher_text . "\n";
        // $decryption=openssl_decrypt ($cipher_text, $ciphering,
        //         $security_key, $options, $security_iv);
        // echo '<br>';
        // echo "Decrypted String: " . $decryption;

    }
}
