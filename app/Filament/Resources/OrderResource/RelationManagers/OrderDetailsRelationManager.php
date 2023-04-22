<?php

namespace App\Filament\Resources\OrderResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Repeater;
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
                Card::make()
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
                    ]),
                Card::make()
                    ->schema([
                        Repeater::make('guestDetails')
                            ->relationship()
                            ->schema([
                                TextInput::make('first_name')
                                    ->disableAutocomplete(),
                                TextInput::make('last_name')
                                    ->disableAutocomplete(),
                                TextInput::make('type')
                                    ->datalist([
                                        'Adult',
                                        'Child',
                                    ])
                                    ->disableAutocomplete(),
                            ])
                            ->columns(3)
                            ->createItemButtonLabel('Add Guest')
                            ->collapsible()
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('room_type')
                    ->sortable(true),
                TextColumn::make('bed_type')
                    ->sortable(true),
                TextColumn::make('meal_type')
                    ->sortable(true),
                TextColumn::make('guest_details_count')
                    ->sortable(true)
                    ->label('Guests')
                    ->counts('guestDetails'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
