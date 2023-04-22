<?php

namespace App\Filament\Resources\OrderResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderDetailsRelationManager extends RelationManager
{
    protected static string $relationship = 'orderDetails';

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('room_type')
                    ->datalist([
                        'BWM',
                        'Ford',
                        'Mercedes-Benz',
                        'Porsche',
                        'Toyota',
                        'Tesla',
                        'Volkswagen',
                    ])
                    ->disableAutocomplete(),
                TextInput::make('bed_type')
                    ->datalist([
                        'BWM',
                        'Ford',
                        'Mercedes-Benz',
                        'Porsche',
                        'Toyota',
                        'Tesla',
                        'Volkswagen',
                    ])
                    ->disableAutocomplete(),
                TextInput::make('meal_type')
                    ->datalist([
                        'BWM',
                        'Ford',
                        'Mercedes-Benz',
                        'Porsche',
                        'Toyota',
                        'Tesla',
                        'Volkswagen',
                    ])
                    ->disableAutocomplete(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('room_type'),
                TextColumn::make('bed_type'),
                TextColumn::make('meal_type'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
