<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeeResource\Pages;
use App\Filament\Resources\FeeResource\RelationManagers;
use App\Models\Fee;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeeResource extends Resource
{
    protected static ?string $model = Fee::class;

    protected static ?string $navigationIcon = 'solar--wallet-money-linear';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                    Forms\Components\TextInput::make('consultation_type')->required(),
                    Forms\Components\TextInput::make('fee')->numeric(),
                    Forms\Components\TextInput::make('medical_rebate')->numeric(),
                    Forms\Components\TextInput::make('out_of_pocket')->numeric(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('consultation_type')->searchable(),
                Tables\Columns\TextColumn::make('fee')->searchable(),
                Tables\Columns\TextColumn::make('medical_rebate')->searchable(),
                Tables\Columns\TextColumn::make('out_of_pocket')->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->button(),
                Tables\Actions\DeleteAction::make()->button(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListFees::route('/'),
            'create' => Pages\CreateFee::route('/create'),
            'edit' => Pages\EditFee::route('/{record}/edit'),
        ];
    }
}
