<?php

namespace App\Filament\Resources\DisabilityCategoryResource\Pages;

use App\Filament\Resources\DisabilityCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDisabilityCategories extends ListRecords
{
    protected static string $resource = DisabilityCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
