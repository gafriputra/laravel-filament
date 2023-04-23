<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Pages\Actions\Action;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('reference_number')
                            ->disableAutocomplete()
                            ->required()
                            ->label('Reference Number'),
                        DatePicker::make('arrival_date')
                            ->required()
                            ->label('Arrival Date'),
                        DatePicker::make('departure_date')
                            ->required()
                            ->label('Departure Date'),
                        TextInput::make('hotel_information.name')
                            ->required()
                            ->label('Hotel Name'),
                        TextInput::make('hotel_information.telephone')
                            ->required()
                            ->label('Hotel Telp'),
                        TextInput::make('hotel_information.address')
                            ->required()
                            ->label('Hotel Address'),
                        TagsInput::make('customer_requests')
                            ->hint('Tekan enter jika lebih dari satu')
                            ->placeholder('')
                            ->suggestions([
                                'Non smoking room',
                                'Internet access',
                                'Air Condition',
                                'Late check out',
                            ])
                            ->label('Customer Requests'),
                    ])
                    ->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('reference_number')
                    ->sortable(true),
                TextColumn::make('arrival_date')
                    ->sortable(true)
                    ->date(),
                TextColumn::make('departure_date')
                    ->sortable(true)
                    ->date(),
                TextColumn::make('hotel_information.name')
                    ->sortable(true)
                    ->label('Hotel Name'),
                TextColumn::make('order_details_count')
                    ->label('Order Details')
                    ->counts('orderDetails'),
                TextColumn::make('created_at')
                    ->sortable(true)
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('download')
                    ->action('download')
                    ->icon('heroicon-s-download'),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\OrderDetailsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }

    public static function download()
    {
        dd(123);
    }
}
