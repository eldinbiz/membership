<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemberResource\Pages;
use App\Filament\Resources\MemberResource\RelationManagers;
use App\Models\Member;
use App\Models\Package;
use App\Models\User;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->label('User Name')
                    ->searchable()
                    ->required()
                    ->options(User::all()->pluck('name', 'id')),
                Forms\Components\Select::make('package_id')
                    ->label('Package')
                    ->searchable()
                    ->required()
                    ->options(Package::all()->pluck('name', 'id')),
                Forms\Components\DatePicker::make('membership_start')
                    ->after('today')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->sortable()->label('Nama User'),
                Tables\Columns\TextColumn::make('package.name')->sortable()->label('Paket Langganan')
                    ->description(fn (Member $record): string => $record->package->month_duration ." bulan", position: 'below'),
                Tables\Columns\TextColumn::make('is_active')->label('Status Keaktifan')->sortable()->enum([
                    true => 'Aktif',
                    false => 'Non Aktif'
                ]),
                Tables\Columns\TextColumn::make('is_expired')->label('Status Kadaluwarsa')->sortable()->enum([
                    true => 'Expired',
                    false => 'Berlaku'
                ]),
                Tables\Columns\TextColumn::make('membership_end')->sortable()->label('Membership ends in')
                    ->description(fn (Member $record): string => Carbon::parse($record->membership_end)->diffForHumans())
                    ->formatStateUsing(fn (string $state): string => Carbon::parse($state)->toFormattedDateString()),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }
}
