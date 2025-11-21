<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DokterResource\Pages;
use App\Models\Dokter;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Filament\Forms;

class DokterResource extends Resource
{
    protected static ?string $model = Dokter::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'Dokter';
    protected static ?string $modelLabel = 'Dokter';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('poliklinik_id')
                    ->label('Poliklinik')
                    ->relationship('poliklinik', 'nama')
                    ->required(),

                TextInput::make('nama')
                    ->label('Nama Dokter')
                    ->required()
                    ->maxLength(255),

                TextInput::make('spesialis')
                    ->label('Spesialis')
                    ->required(),

                TextInput::make('telepon')
                    ->label('No. Telepon')
                    ->tel()
                    ->maxLength(20)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Dokter')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('poliklinik.nama')
                    ->label('Poliklinik')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('spesialis')
                    ->label('Spesialis')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('telepon')
                    ->label('Telepon'),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDokters::route('/'),
            'create' => Pages\CreateDokter::route('/create'),
            'edit' => Pages\EditDokter::route('/{record}/edit'),
        ];
    }
}
