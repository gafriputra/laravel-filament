<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderDetailResource\Pages;
use App\Filament\Resources\OrderDetailResource\RelationManagers;
use App\Models\OrderDetail;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderDetailResource extends Resource
{
    protected static ?string $model = OrderDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function canCreate(): bool
    {
        return false;
    }

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
                TextColumn::make('order.id'),
                TextColumn::make('order.reference_number')->label('Reference Number'),
                TextColumn::make('room_type'),
                TextColumn::make('bed_type'),
                TextColumn::make('meal_type'),
                TextColumn::make('guest_details_count')->counts('guestDetails'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\GuestDetailsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrderDetails::route('/'),
            'create' => Pages\CreateOrderDetail::route('/create'),
            'edit' => Pages\EditOrderDetail::route('/{record}/edit'),
        ];
    }
}
