<?php

namespace App\Filament\Resources\DisabilityCategoryResource\Pages;

use App\Filament\Resources\DisabilityCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDisabilityCategory extends EditRecord
{
    protected static string $resource = DisabilityCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
