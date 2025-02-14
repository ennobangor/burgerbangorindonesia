<?php

namespace App\Filament\Resources\MagzResource\Pages;

use App\Filament\Resources\MagzResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMagz extends EditRecord
{
    protected static string $resource = MagzResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
