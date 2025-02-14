<?php

namespace App\Filament\Resources\PotraitCarouselResource\Pages;

use App\Filament\Resources\PotraitCarouselResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPotraitCarousels extends ListRecords
{
    protected static string $resource = PotraitCarouselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
