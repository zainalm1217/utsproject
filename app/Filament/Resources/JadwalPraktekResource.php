<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalPraktekResource\Pages;
use App\Models\JadwalPraktek;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class JadwalPraktekResource extends Resource
{
    protected static ?string $model = JadwalPraktek::class;
    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    protected static ?string $navigationLabel = 'Jadwal Praktek';
    protected static ?string $modelLabel = 'Jadwal Praktek';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('dokter_id')
                ->label('Dokter')
                ->relationship('dokter', 'nama')
                ->required(),

            Forms\Components\Select::make('hari')
                ->label('Hari')
                ->options([
                    'Senin' => 'Senin',
                    'Selasa' => 'Selasa',
                    'Rabu' => 'Rabu',
                    'Kamis' => 'Kamis',
                    'Jumat' => 'Jumat',
                    'Sabtu' => 'Sabtu',
                    'Minggu' => 'Minggu',
                ])
                ->required(),

            Forms\Components\TimePicker::make('jam_mulai')
                ->label('Jam Mulai')
                ->required(),

            Forms\Components\TimePicker::make('jam_selesai')
                ->label('Jam Selesai')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('dokter.nama')
                ->label('Dokter')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('hari')
                ->sortable(),

            Tables\Columns\TextColumn::make('jam_mulai'),

            Tables\Columns\TextColumn::make('jam_selesai'),

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
            'index' => Pages\ListJadwalPrakteks::route('/'),
            'create' => Pages\CreateJadwalPraktek::route('/create'),
            'edit' => Pages\EditJadwalPraktek::route('/{record}/edit'),
        ];
    }
}
