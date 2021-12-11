<?php

namespace App\Helpers;

abstract class Toast
{

    public const TYPE_ERROR = 'error';
    public const TYPE_SUCCESS = 'success';
    public const TYPE_INFO = 'info';
    public const TYPE_WARNING = 'warn';

    public const KEY_TYPE = 'toastr.type';
    public const KEY_MESSAGE = 'toastr.message';

    public static function showError(string $message): array
    {
        return self::getToastrSessionArray(self::TYPE_ERROR, $message);
    }

    public static function showSuccess(string $message): array
    {
        return self::getToastrSessionArray(self::TYPE_SUCCESS, $message);
    }

    public static function showInfo(string $message): array
    {
        return self::getToastrSessionArray(self::TYPE_INFO, $message);
    }

    public static function showWarning(string $message): array
    {
        return self::getToastrSessionArray(self::TYPE_WARNING, $message);
    }

    public static function getMessageTitle(string $messageType): string
    {
        return match ($messageType) {
            self::TYPE_ERROR => 'Erro!',
            self::TYPE_SUCCESS => 'Sucesso!',
            self::TYPE_INFO => 'Info!',
            self::TYPE_WARNING => 'Atenção!',
            default => throw new \Exception('Invalid toast message type'),
        };
    }

    private static function getToastrSessionArray(string $messageType, string $message): array
    {
        return [
            self::KEY_TYPE => $messageType,
            self::KEY_MESSAGE => $message
        ];
    }
}
