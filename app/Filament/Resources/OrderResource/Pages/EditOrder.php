<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrder extends EditRecord
{
    protected static string $resource = OrderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\Action::make('download')
                ->label('Download')
                ->action('download')
                ->icon('heroicon-s-download')
                ->keyBindings(['mod+p'])
        ];
    }

    public function download()
    {
        $resources = static::getResource();
        $resources::download();
    }
}
