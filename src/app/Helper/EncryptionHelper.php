<?php

namespace App\Helper;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class EncryptionHelper
{
    /**
     * Enkripsi data menggunakan APP_KEY default dari Laravel.
     */
    public static function encrypt($data): string
    {
        return Crypt::encryptString($data);
    }

    /**
     * Dekripsi data menggunakan APP_KEY default dari Laravel.
     */
    public static function decrypt($encryptedData): string
    {
        try {
            return Crypt::decryptString($encryptedData);
        } catch (\Exception $e) {
            return 'Decryption Failed: ' . $e->getMessage();
        }
    }

    /**
     * Enkripsi data dengan kunci kustom dari .env (KEY_ENCRYPT).
     * Menggunakan AES-256-CBC + base64 encode.
     */
    public static function encryptWithCustomKey($data): string
    {
        $key = env('KEY_ENCRYPT', 'defaultkey');
        $key = substr(hash('sha256', $key), 0, 32); // pastikan 32-byte key
        $iv = random_bytes(16);

        $encrypted = openssl_encrypt($data, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);

        return base64_encode($iv . $encrypted); // gabungkan IV dan ciphertext
    }

    /**
     * Dekripsi data yang dienkripsi dengan kunci kustom.
     */
    public static function decryptWithCustomKey($encryptedData): string
    {
        try {
            $key = env('KEY_ENCRYPT', 'defaultkey');
            $key = substr(hash('sha256', $key), 0, 32);
            $data = base64_decode($encryptedData);

            $iv = substr($data, 0, 16);
            $ciphertext = substr($data, 16);

            $decrypted = openssl_decrypt($ciphertext, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);

            return $decrypted ?: 'Decryption failed';
        } catch (\Exception $e) {
            return 'Decryption Failed: ' . $e->getMessage();
        }
    }
}
