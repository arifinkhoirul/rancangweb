<?php

namespace App\Filament\Resources\MainCardResource\Pages;

use App\Filament\Resources\MainCardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMainCard extends EditRecord
{
    protected static string $resource = MainCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
