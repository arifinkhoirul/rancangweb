<?php

namespace App\Filament\Resources\MainCardResource\Pages;

use App\Filament\Resources\MainCardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMainCards extends ListRecords
{
    protected static string $resource = MainCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
