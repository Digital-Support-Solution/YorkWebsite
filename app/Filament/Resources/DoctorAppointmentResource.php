<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DoctorAppointmentResource\Pages;
use App\Filament\Resources\DoctorAppointmentResource\RelationManagers;
use App\Models\DoctorAppointment;
use Filament\Forms;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DoctorAppointmentResource extends Resource
{
    protected static ?string $model = DoctorAppointment::class;

    protected static ?string $navigationIcon = 'solar--calendar-broken';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

               Forms\Components\Section::make()->schema([

                   Forms\Components\Select::make('doctor_id')
                       ->label('Please Select Doctor Name')
                       ->required()
                       ->relationship('doctor','doctor_name')
                       ->preload()
                       ->searchable()
                       ->columnSpan(6),


                   Forms\Components\Select::make('day')
                       ->label('Please Select Week Day doctor is available')
                       ->options([
                           'Monday'    => 'Monday',
                           'Tuesday'   => 'Tuesday',
                           'Wednesday' => 'Wednesday',
                           'Thursday'  => 'Thursday',
                           'Friday'    => 'Friday',
                           'Saturday'  => 'Saturday',
                           'Sunday'    => 'Sunday',
                       ])
                       ->required()
                       ->preload()
                       ->searchable()
                       ->columnSpan(2),

                   TimePicker::make('start_time')
                       ->seconds(false)
                       ->datalist([
                           '08:00',
                           '08:30',
                           '09:00',
                           '09:30',
                           '10:00',
                           '10:30',
                           '11:00',
                           '11:30',
                           '12:00',
                       ])->columnSpan(2),

                   TimePicker::make('end_time')
                       ->seconds(false)
                       ->datalist([
                           '08:00',
                           '08:30',
                           '09:00',
                           '09:30',
                           '10:00',
                           '10:30',
                           '11:00',
                           '11:30',
                           '12:00',
                       ])
                       ->columnSpan(2),

               ])->columns(6)

            ])->columns(6);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('doctor.doctor_name'),
                Tables\Columns\TextColumn::make('day')->searchable(),
                Tables\Columns\TextColumn::make('start_time')->searchable(),
                Tables\Columns\TextColumn::make('end_time')->searchable(),
            ])

            ->actions([
                Tables\Actions\ViewAction::make()->button(),
                Tables\Actions\EditAction::make()->button(),
                Tables\Actions\DeleteAction::make()->button(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDoctorAppointments::route('/'),
            'create' => Pages\CreateDoctorAppointment::route('/create'),
            'edit' => Pages\EditDoctorAppointment::route('/{record}/edit'),
        ];
    }
}
