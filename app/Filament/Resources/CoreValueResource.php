<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CoreValueResource\Pages;
use App\Filament\Resources\CoreValueResource\RelationManagers;
use App\Models\CoreValue;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CoreValueResource extends Resource
{
    protected static ?string $model = CoreValue::class;

    protected static ?string $navigationIcon = 'solar--lightbulb-bold-duotone';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\FileUpload::make('icon'),
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpan(2),


            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('icon')->circular()->width(80)->height(80),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('description')->html()->searchable()
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
            'index' => Pages\ListCoreValues::route('/'),
            'create' => Pages\CreateCoreValue::route('/create'),
            'edit' => Pages\EditCoreValue::route('/{record}/edit'),
        ];
    }
}
