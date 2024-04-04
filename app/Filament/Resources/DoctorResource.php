<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DoctorResource\Pages;
use App\Filament\Resources\DoctorResource\RelationManagers;
use App\Models\Doctor;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class DoctorResource extends Resource
{
    protected static ?string $model = Doctor::class;

    protected static ?string $navigationIcon = 'fa6-solid--user-doctor';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([


                Forms\Components\Section::make('Doctor Details')->schema([

                    Forms\Components\FileUpload::make('doctor_image')
                        ->columnSpan(2),


                    Forms\Components\TextInput::make('doctor_name')
                        ->columnSpan(2)
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                        ->required(),

                    TextInput::make('slug')->columnSpan(2),

                    Forms\Components\TextInput::make('qualifications')
                        ->columnSpan(2)
                        ->required(),

                    Forms\Components\TextInput::make('facebook_handle')
                        ->columnSpan(2)
                        ->url(),

                    Forms\Components\TextInput::make('twitter_handle')
                        ->columnSpan(2)
                        ->url(),

                    Forms\Components\TextInput::make('linkedin_handle')
                        ->columnSpan(2)
                        ->url(),

                ])->columns(6)->columnSpan(12),

                Forms\Components\RichEditor::make('description')->columnSpan(6),
                Forms\Components\RichEditor::make('interests')->columnSpan(6)
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('doctor_image'),
                Tables\Columns\TextColumn::make('qualifications')
                    ->limit(50)
                    ->searchable(),
                Tables\Columns\TextColumn::make('doctor_name')->searchable(),
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
            'index' => Pages\ListDoctors::route('/'),
            'create' => Pages\CreateDoctor::route('/create'),
            'edit' => Pages\EditDoctor::route('/{record}/edit'),
        ];
    }
}
