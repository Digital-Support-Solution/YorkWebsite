<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Models\Booking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Select::make('doctor_id')
                    ->relationship('doctor','doctor_name')
                    ->required(),


                Forms\Components\TextInput::make('patient_name'),

                Forms\Components\TextInput::make('patient_phone'),

                Forms\Components\TextInput::make('preferred_date'),

                Forms\Components\TextInput::make('preferred_time'),

                Forms\Components\Textarea::make('reason_for_visit'),

                Forms\Components\Textarea::make('doctor_remarks'),

                Forms\Components\Select::make('status')
                ->options([
                    'Attended',
                    'Pending',
                    'Unattended'
                ])
                ->default('Unattended'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('doctor.doctor_name'),
                Tables\Columns\TextColumn::make('patient_name'),
                Tables\Columns\TextColumn::make('patient_phone'),
                Tables\Columns\TextColumn::make('status'),
//
            ])

            ->actions([
                Tables\Actions\ViewAction::make()->button(),
                Tables\Actions\EditAction::make()->button(),
                Tables\Actions\DeleteAction::make()->button(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
