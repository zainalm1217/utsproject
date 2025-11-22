<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KunjunganResource\Pages;
use App\Models\Kunjungan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class KunjunganResource extends Resource
{
    protected static ?string $model = Kunjungan::class;
    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $navigationLabel = 'Kunjungan';
    protected static ?string $modelLabel = 'Kunjungan';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('pasien_id')
                ->relationship('pasien', 'nama')
                ->label('Pasien')
                ->required(),

            Forms\Components\Select::make('dokter_id')
                ->relationship('dokter', 'nama')
                ->label('Dokter')
                ->required(),

            Forms\Components\DatePicker::make('tanggal_kunjungan')
                ->label('Tanggal Kunjungan')
                ->required(),

            Forms\Components\Textarea::make('keluhan')
                ->required(),

            Forms\Components\Textarea::make('diagnosa')
                ->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('pasien.nama')
                ->label('Pasien')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('dokter.nama')
                ->label('Dokter')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('tanggal_kunjungan')
                ->date()
                ->label('Tanggal'),

            Tables\Columns\TextColumn::make('keluhan')
                ->limit(30),

            Tables\Columns\TextColumn::make('diagnosa')
                ->limit(30),

            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->label('Dibuat'),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKunjungans::route('/'),
            'create' => Pages\CreateKunjungan::route('/create'),
            'edit' => Pages\EditKunjungan::route('/{record}/edit'),
        ];
    }
}
