<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PracticeResource\Pages;
use App\Filament\Resources\PracticeResource\RelationManagers;
use App\Models\Practice;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PracticeResource extends Resource
{
    protected static ?string $model = Practice::class;

    protected static ?string $navigationIcon = 'medical-icon--i-family-practice';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\FileUpload::make('image'),
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
                Tables\Columns\ImageColumn::make('image')->circular()->width(80)->height(80),
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
            'index' => Pages\ListPractices::route('/'),
            'create' => Pages\CreatePractice::route('/create'),
            'edit' => Pages\EditPractice::route('/{record}/edit'),
        ];
    }
}
