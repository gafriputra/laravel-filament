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
                        'Double Room',
                        'Triple Room',
                    ])
                    ->disableAutocomplete(),
                TextInput::make('bed_type')
                    ->datalist([
                        '1 Double 1 Single',
                        '1 Double 2 Single',
                        '2 Double 1 Single',
                        '2 Double 2 Single',
                    ])
                    ->disableAutocomplete(),
                TextInput::make('meal_type')
                    ->datalist([
                        'Room Only',
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
                TextColumn::make('guest_details_count')->counts('guestDetails'),
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
