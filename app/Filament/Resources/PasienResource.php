<?php

namespace App\Filament\Resources;


use App\Models\Pasien;
use App\Models\Dokter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\PasienResource\Pages;


class PasienResource extends Resource
{
    protected static ?string $model = Pasien::class;
    protected static ?string $navigationLabel = 'Pasien';
    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form->schema([

            TextInput::make('nama')
                ->required()
                ->maxLength(255),

            DatePicker::make('tanggal_lahir')
                ->required(),

            Select::make('jenis_kelamin')
                ->label('Jenis Kelamin')
                ->options([
                    'L' => 'Laki-Laki',
                    'P' => 'Perempuan',
                ])
                ->required(),

            TextInput::make('alamat')
                ->required()
                ->maxLength(255),

            TextInput::make('telepon')
                ->maxLength(20)
                ->tel()
                ->required(),

            Select::make('dokter_id')
                ->label('Dokter Penanggung')
                ->relationship('dokter', 'nama')
                ->searchable()
                ->preload()
                ->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([

            TextColumn::make('nama')
                ->label('Nama Pasien')
                ->searchable()
                ->sortable(),

            TextColumn::make('dokter.nama')
                ->label('Dokter Penanggung')
                ->sortable()
                ->searchable(),

            TextColumn::make('jenis_kelamin')
                ->label('JK'),

            TextColumn::make('telepon'),

            TextColumn::make('created_at')
                ->label('Terdaftar')
                ->dateTime('d M Y'),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPasiens::route('/'),
            'create' => Pages\CreatePasien::route('/create'),
            'edit' => Pages\EditPasien::route('/{record}/edit'),
        ];
    }
}
